<?php

namespace Monetify\Entities\Application;


use Monetify\Entities\Application\Components\Component;

class Application {

    private $id;
    private $title;
    private $text;
    private $imageLarge;
    private $imageSmall;
    private $created_at;
    private $update_at;


    private $components = [];

    public function getId() {
        return $this->id;
    }



    public function getTitle() {
        return $this->title;
    }


    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }


    public function getText() {
        return $this->text;
    }


    public function setText($text) {
        $this->text = $text;
        return $this;
    }


    public function getImageLarge() {
        return $this->imageLarge;
    }


    public function setImageLarge($imageLarge) {
        $this->imageLarge = $imageLarge;
        return $this;
    }


    public function getImageSmall() {
        return $this->imageSmall;
    }


    public function setImageSmall($imageSmall) {
        $this->imageSmall = $imageSmall;
        return $this;
    }


    public function getCreatedAt() {
        return $this->created_at;
    }


    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }


    public function getUpdateAt() {
        return $this->update_at;
    }


    public function setUpdateAt($update_at) {
        $this->update_at = $update_at;
        return $this;
    }

    public function addComponent(Component $component){
        $this->components[] = $component;
    }

    public function listComponents(){
        return $this->components;
    }

}