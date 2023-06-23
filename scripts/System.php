<?php

namespace App;

trait System{
    public function __get($name){
        return $this->{$name};
    }
}