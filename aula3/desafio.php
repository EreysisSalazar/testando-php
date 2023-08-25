<?php
echo "h1array asociativo</h1>";
$idade = array("adriana"=>matematica, "Danda"=>quimica,"Veri"=>portugues, "Cris"=>25);

echo "<hr>";
foreach ($idade as $x => $x_value) {
   echo "key = ".$x. ",value" .$x_value;
   echo "<br>";

}
