<?php

namespace Monetify\Service\Application\Components;


use Intervention\Image\Image;
use Monetify\Entities\Application\Components\Picture;

class PictureService {

    private $picture;
    public function __construct(Picture $picture) {
        $this->picture = $picture;
    }

    public function marge(Image $image){

    }
}