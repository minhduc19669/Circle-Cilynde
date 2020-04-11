<?php
namespace Cylinder;
include_once 'Circle.php';
use Circle\circle;
class Cylinder extends Circle
{
    private $height;
    public function __construct($name, $radius,$color,$height)
    {
        parent::__construct($name, $radius,$color);
        $this->height=$height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    public function getVolume()
    {
        return parent::getArea()*$this->height;
    }
    public function getArea()
    {
        return parent::getArea()*2+parent::getPerimeter()*$this->height;
    }
    public function toString(){
        return parent::toString()."Chiều cao là :".$this->getHeight();
    }
}
