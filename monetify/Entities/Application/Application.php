<?php

namespace Monetify\Entities\Aplicativo;


use Monetify\Entities\Application\Components\Component;

class Application {

    private $id;
    private $title;
    private $text;
    private $imageLarge;
    private $imageSmall;
    private $created_at;
    private $update_at;

    /**
     * @var Component[]
     */
    private $components = [];

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Application
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Application
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Application
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageLarge() {
        return $this->imageLarge;
    }

    /**
     * @param mixed $imageLarge
     * @return Application
     */
    public function setImageLarge($imageLarge) {
        $this->imageLarge = $imageLarge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageSmall() {
        return $this->imageSmall;
    }

    /**
     * @param mixed $imageSmall
     * @return Application
     */
    public function setImageSmall($imageSmall) {
        $this->imageSmall = $imageSmall;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return Application
     */
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt() {
        return $this->update_at;
    }

    /**
     * @param mixed $update_at
     * @return Application
     */
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