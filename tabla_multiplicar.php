<?php
$num =$_GET['num'];
$mult = $_GET['1'];

for ($i=1; $i <=10; $i++) { 
    
    $mult=$i*$num;
    echo "$i*$num=$mult"; 
    echo "<br>";
}

?>