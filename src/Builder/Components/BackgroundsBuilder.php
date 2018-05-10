<?php

namespace Monetify\Builder\Components;


use Intervention\Image\Image;
use Monetify\Builder\Builder;

class BackgroundsBuilder extends Builder {

    public function build(): Image {
        /**
         * @var $backgrounds \Monetify\Entities\Application\Components\Background\Backgrounds
         */
        $backgrounds = $this->getComponent();
        $backgrounds = $backgrounds->listBackgrounds();
        $bg = reset($backgrounds);
        return $this->getImage()->insert($bg->getImage());
    }
}