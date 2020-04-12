<?php
include_once ('Point2D.php');
include_once ('Point3D.php');

$point2=new Point2D(3.3,4.2);
foreach ($point2->getXY() as $value){
    echo $value."_";
}
echo "<br>".$point2."<br>";
$point2->setXY(1.5,7.8);
echo $point2."<br><br>";


$point3= new Point3D(4.6,2.7,5.9);
foreach ($point3->getXYZ() as $value){
    echo $value."_";
}
echo "<br>".$point3."<br>";
$point3->setXYZ(7.9,5.8,9.1);
echo $point3;