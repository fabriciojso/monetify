<?php

namespace Monetify\Entities\Application\Components\Picture;


class PictureItem {

    private $x;
    private $y;
    private $w;
    private $h;

    private $opacity;
    private $isBackground;
    private $isGrayscale;
    private $isRounded;

    /**
     * PictureItem constructor.
     * @param $x
     * @param $y
     * @param $w
     * @param $h
     * @param $opacity
     * @param $isBackground
     * @param $isGrayscale
     * @param $isRounded
     */
    public function __construct($x, $y, $w, $h, $opacity, $isBackground, $isGrayscale, $isRounded) {
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
        $this->opacity = $opacity;
        $this->isBackground = $isBackground;
        $this->isGrayscale = $isGrayscale;
        $this->isRounded = $isRounded;
    }


    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getW() {
        return $this->w;
    }

    public function getH() {
        return $this->h;
    }

    public function getOpacity() {
        return $this->opacity;
    }

    public function getisBackground() {
        return $this->isBackground;
    }

    public function getisGrayscale() {
        return $this->isGrayscale;
    }

    public function getisRounded() {
        return $this->isRounded;
    }

}