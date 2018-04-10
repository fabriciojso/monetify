<?php

namespace Monetify\Entities\Application\Components\Background;


use Monetify\Entities\Application\Components\Filter\TraitAcceptFilter;

class BackgroundItem {

    use TraitAcceptFilter;

    private $id;

    public function __construct($image) {
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

}