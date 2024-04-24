<?php


class Phone {
    public $brand;
    public $model;

    public function makeCall(){
        return $this->model." can make a call";
    }

    public function usingInternet(){
        return $this->model." can use internet";
    }

}