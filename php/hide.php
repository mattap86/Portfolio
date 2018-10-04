<?php

require_once 'dbFunction.php';
require_once 'functions.php';

$db = dbconn();

if($_POST['projectId']) {
    $projectId = $_POST['projectId'];
    hideProject($projectId, $db);
}

header('Location:admin.php');