<?php
echo "h1array asociativo</h1>";
$idade = array("adriana"=>18, "Danda"=>17,"Veri"=>23, "Cris"=>25);

echo "<hr>";
foreach ($idade as $x => $x_value) {
   echo "key = ".$x. ",value" .$x_value;
   echo "<br>";

}
