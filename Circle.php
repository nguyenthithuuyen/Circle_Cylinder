<?php


class Circle
{
public $radius;
public $color;
public function __construct($radius,$color)
{
    $this->radius=$radius;
    $this->color=$color;
}

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function square(){
        return pi()*$this->radius*$this->radius;
    }
public function toString(){
        return 'Color circle :'.$this->color."<br>".'Radius :'.$this->radius;
}
}