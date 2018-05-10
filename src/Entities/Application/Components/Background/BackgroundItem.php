<?php

namespace Monetify\Entities\Application\Components\Background;


use Monetify\Entities\Application\Components\Buildable;
use Monetify\Entities\Application\Components\Filter\Filter;
use Monetify\Entities\Application\Components\Filter\TraitAcceptFilter;

class BackgroundItem {

    use TraitAcceptFilter;

    private $id;

    public function __construct($image, Filter $filter = null) {
        $this->image = $image;
        if($filter) {
            $this->setFilter($filter);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

}