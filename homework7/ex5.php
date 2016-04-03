<?php
$numbers = range(11, 22);
srand((float)microtime() * 1000000);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
    echo "<br>";
}
?>