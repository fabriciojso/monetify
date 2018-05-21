<?php

namespace Monetify\Entities\Application\Components\Picture;


class PictureItem {


    private $w;
    private $h;
    private $x;
    private $y;

    private $opacity;
    private $isBackground;
    private $isGrayscale;
    private $isRounded;

    /**
     * PictureItem constructor.
     * @param $w
     * @param $h
     * @param $x
     * @param $y
     * @param $opacity
     * @param $isBackground
     * @param $isGrayscale
     * @param $isRounded
     */
    public function __construct($w, $h, $x, $y, $opacity = 100, $isBackground = false, $isGrayscale = false, $isRounded = false) {
        $this->w = $w;
        $this->h = $h;
        $this->x = $x;
        $this->y = $y;
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

    public function isBackground() {
        return $this->isBackground;
    }

    public function isGrayscale() {
        return $this->isGrayscale;
    }

    public function isRounded() {
        return $this->isRounded;
    }

}