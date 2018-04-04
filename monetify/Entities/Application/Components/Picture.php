<?php

namespace Monetify\Entities\Application\Components;


class Picture extends Component {

    private $x;
    private $y;
    private $w;
    private $h;

    private $opacity;
    private $isBackground;
    private $isGrayscale;
    private $isRounded;

    /**
     * Picture constructor.
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

    /**
     * @return mixed
     */
    public function getX() {
        return $this->x;
    }

    /**
     * @param mixed $x
     * @return Picture
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getY() {
        return $this->y;
    }

    /**
     * @param mixed $y
     * @return Picture
     */
    public function setY($y) {
        $this->y = $y;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getW() {
        return $this->w;
    }

    /**
     * @param mixed $w
     * @return Picture
     */
    public function setW($w) {
        $this->w = $w;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getH() {
        return $this->h;
    }

    /**
     * @param mixed $h
     * @return Picture
     */
    public function setH($h) {
        $this->h = $h;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpacity() {
        return $this->opacity;
    }

    /**
     * @param mixed $opacity
     * @return Picture
     */
    public function setOpacity($opacity) {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getisBackground() {
        return $this->isBackground;
    }

    /**
     * @param mixed $isBackground
     * @return Picture
     */
    public function setIsBackground($isBackground) {
        $this->isBackground = $isBackground;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getisGrayscale() {
        return $this->isGrayscale;
    }

    /**
     * @param mixed $isGrayscale
     * @return Picture
     */
    public function setIsGrayscale($isGrayscale) {
        $this->isGrayscale = $isGrayscale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getisRounded() {
        return $this->isRounded;
    }

    /**
     * @param mixed $isRounded
     * @return Picture
     */
    public function setIsRounded($isRounded) {
        $this->isRounded = $isRounded;
        return $this;
    }


}