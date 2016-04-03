<?php
$colors = array("white", "green", "blue");
sort($colors);

$clength = count($colors);
for($x = 0; $x <  $clength; $x++) {
    echo $colors[$x];
    echo "<br>";
}



?>