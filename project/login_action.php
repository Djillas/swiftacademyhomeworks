<?php
session_start();

require_once 'db.php';

$username = $_POST['username'];
$password =md5($_POST['password']);
$sql = "SELECT* FROM users WHERE (username = '$username') && (password = '$password');";
$result=mysqli_query($mysqli,$sql);

mysqli_free_result($result);

if ($num_rows === 0) {
    echo '<a href="login.php">Error: cannot execute query</a>';
    exit;
}


if ($num_rows >= 1) {
    $_SESSION['login'] = "OK";
    $_SESSION['username'] = $username;
    header('Location: private.php');
    //close($mysqli);
    die();
}
require_once"src/footer.php";
mysqli_close($mysqli);

header('Location: private.php');
?>


