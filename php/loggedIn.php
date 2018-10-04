<?php

session_start();

$expectedPassword = 'pass';
$expectedUser = 'user';

$user = $_GET['name'];
$pass = $_GET['password'];

echo "Hi " . $user . ".<br>";

if($pass === $expectedPassword && $user === $expectedUser || $_SESSION['loggedIn'] == True) {

    header('admin.php');
} else {
    echo "Your password was incorrect. Armed officers are on their way to your location. <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged In</title>
</head>
<body>
<form action="admin.php">
    <input type="submit" value="Continue to CMS Site" />
</form>
</body>
</html>
