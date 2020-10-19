<?php

include_once ('Circle.php');
class Cylinder extends Circle
{
public $height;
public function __construct($radius, $color,$height)
{
    $this->height=$height;
    parent::__construct($radius, $color);
}
public function volume(){
    return parent::square()*$this->height;
}
public function toString()
{
    echo 'Height :'. $this->height;

}
}