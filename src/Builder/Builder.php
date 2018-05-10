<?php

namespace Monetify\Builder;


use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Monetify\Entities\Application\Components\Buildable;
use Monetify\Entities\User\User;

abstract class Builder {

    protected $user;
    protected $component;
    protected $image;
    /**
     * @var ImageManager
     */
    protected static $manager = null;

    public function __construct(Image $image, User $user,  Buildable $component){
        $this->component = $component;
        $this->image = $image;
        $this->user = $user;
        if(self::$manager == null){
            self::$manager = new ImageManager(array('driver' => 'gd'));
        }
    }

    protected function getUser() : User {
        return $this->user;
    }

    protected function getComponent() : Buildable {
        return $this->component;
    }

    protected function getImage() : Image {
        return $this->image;
    }

    protected function setImage(Image $image) {
        $this->image = $image;
    }

    abstract public function build() : Image;
}