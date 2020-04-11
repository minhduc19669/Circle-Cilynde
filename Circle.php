<?php
namespace circle;
class Circle
{
    private $name;
    private $radius;
    private $color;
    public function __construct($name,$radius,$color)
    {
        $this->name=$name;
        $this->radius=$radius;
        $this->color=$color;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
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
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
    public function getArea(){
        return pi()*pow($this->radius,2);
    }
    public function getPerimeter(){
        return 2*pi()*$this->radius;
    }
    public function toString()
    {
        return '<h3>Tên: ' . $this->getName() . '</h3>Bán kính: ' . $this->getRadius() . '<br>Màu sắc: ' . $this->getColor() . "<br>Diện tích: " . $this->getArea() . '<br>Chu vi: ' . $this->getPerimeter();
    }
}
$x=new Circle('Hình tròn',15,'Blue');
