<?php
$servername="localhost";
$username="root";
$password="";
$dbname="facebook";
$mysqli= new mysqli($servername, $username, $password,$dbname);
//require_once 'database-script.sql';

if ( $mysqli->connect_error) {
    echo "Error: Unable to connect to Database.". PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;

}
echo "" . PHP_EOL;
//echo "" .mysqli_get_host_info($mysqli) . PHP_EOL;

//mysqli_close($mysqli);


?>