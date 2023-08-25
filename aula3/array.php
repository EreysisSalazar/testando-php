<?php
echo "<h1>array indexado</h1>";
$carros =array("Palio","Marea","Fusca","Kombi");

//echo $carros[2];
$i=0;
while ($i<4){
    echo $carros[$i]."<br>";
    $i++;

}

echo "<hr>";
for($x =0;$x<4;$x++){
    echo $carros[$x]."<br>";

}

echo "<hr>";
foreach ($carros as $carros) {
   echo $carros."<br>";

}