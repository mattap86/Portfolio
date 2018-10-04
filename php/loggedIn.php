<?php

session_start();

$expectedPassword = 'pass';
$expectedUser = 'user';

$user = $_POST['name'];
$pass = $_POST['password'];

echo "Hi " . $user . ".<br>";

if ($pass === $expectedPassword && $user === $expectedUser || $_SESSION['loggedIn'] == True) {

    header('admin.php');
} else {
    echo "Your password was incorrect. Armed officers are on their way to your location.";
}
