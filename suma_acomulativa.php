<?php
$num =$_GET['num'];
$suma = $_GET['1'];

for ($i=0; $i <= $num; $i++) { 
    $suma=$suma+$i;
}

echo "El resultado da: ".$suma;
?>