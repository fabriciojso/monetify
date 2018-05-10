<?php
namespace Monetify\Entities\Application\Components\Picture;


use Monetify\Entities\Application\Components\Buildable;

class Pictures extends Buildable {

    /**
     * @var PictureItem[]
     */
    private $itens = [];

    /**
     * Pictures constructor.
     * @param PictureItem[] $picures
     */
    public function __construct(array $picures = []) {
        $this->itens = $picures;
    }

    public function addPicture(PictureItem $picture){
        $this->itens[] = $picture;
        return $this;
    }

    public function listPictures(){
        return $this->itens;
    }
}