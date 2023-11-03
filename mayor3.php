<?php
$num1 =$_GET['num1'];
$num2 =$_GET['num2'];
$num3 =$_GET['num3'];

$mayor=max($num1,$num2,$num3);

echo "El número mayor es: " . $mayor;
?>