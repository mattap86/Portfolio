<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="loggedIn.php">
    <input type="text" name="name" placeholder="enter your username here" />
    <input type="text" name="password" placeholder="enter password"/>
    <input type="submit" />
</form>
</body>
</html>

<?php

if($_SESSION['loggedIn'] == TRUE) {
    header('loggedIn.php');
}

?>