<?php

namespace Monetify\Builder\Components;

use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as ImageFacade;
use Monetify\Builder\Builder;
use Monetify\Entities\Application\Components\Picture\PictureItem;
use Monetify\Entities\Application\Components\Picture\Pictures;

class PicturesBuilder extends Builder{

    public function build() : Image {
        /**
         * @var $item PictureItem
         * @var $pictures Pictures
         */
        $pictures = $this->getComponent();

        foreach($pictures->listPictures() as $item){
            $this->insert($item, $this->getPicture($item));

        }
        return $this->getImage();
    }

    private function insert(PictureItem $item, Image $pictureImage){

        if($item->isBackground()){
            $fundo = self::$manager->canvas(1200, 630, '#FFF');

            $fundo->insert($pictureImage, 'top-left', $item->getX(), $item->getY())
                  ->insert($this->getImage());
            $this->setImage($fundo);
        }else{
            $this->getImage()->insert($pictureImage,'top-left', $item->getX(), $item->getY());
        }
    }

    private function getPicture(PictureItem $item){

        $image = self::$manager->make($this->getFile($this->getUser()->getPicture()));

        $image->fit($item->getW(), $item->getH());
        $image->encode('png');

        if($item->isGrayscale()){
            $image->greyscale();
        }

        if($item->isRounded()){
           $this->setRoundedImage($image);
        }

        if($item->getOpacity() < 100){
            $image->opacity($item->getOpacity());
        }


        return $image;
    }

    private function getFile($url){
        return file_get_contents($url);
    }

    private function setRoundedImage(Image $image) {

        $width =  $image->getWidth();
        $height = $image->getHeight();
        $mask = self::$manager->canvas($width, $height);

        $mask->circle($width, $width/2, $height/2, function ($draw) {
            $draw->background('#fff');
        });
        $image->mask($mask, false);
    }
}