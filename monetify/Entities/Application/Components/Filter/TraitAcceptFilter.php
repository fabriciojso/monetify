<?php

namespace Monetify\Entities\Application\Components\Filter;


trait TraitAcceptFilter {

    protected $filter;

    public function setFilter(Filter $filter){
        $this->filter = $filter;
    }

    public function getFilter(){
        return $this->filter;
    }
}