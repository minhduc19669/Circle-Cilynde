<?php
use circle\Circle;
use Cylinder\Cylinder;
include_once 'Cylinder.php';
$x=new Circle('Hình tròn',15,'Blue');
echo $x->toString();
$cylinder=new Cylinder('Hình trụ',10,'red',5);
echo $cylinder->toString();
?>

