<?php

require 'functions.php';

$db = dbconn();

//set of if statements to sanitise update about me inputs
if (isset($_POST['newBio'])) {
    $validatedBio = filter_var($_POST['newBio'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newInterests'])) {
    $validatedInterests = filter_var($_POST['newInterests'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newQualifications'])) {
    $validatedQualifications = filter_var($_POST['newQualifications'], FILTER_SANITIZE_STRING);
}

if (isset($validatedBio, $validatedInterests, $validatedQualifications, $db)) {
    updateAboutMe($validatedBio, $validatedInterests, $validatedQualifications, $db);
}


//set of if statements to sanitise upload new project inputs
if (isset($_POST['newProjectName'])) {
    $validatedProjectName = filter_var($_POST['newProjectName'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newImageUrl'])) {
    $validatedImageUrl = filter_var($_POST['newImageUrl'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newProjectUrl'])) {
    $validatedProjectUrl = filter_var($_POST['newProjectUrl'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newProjectSummary'])) {
    $validatedProjectSummary = filter_var($_POST['newProjectSummary'], FILTER_SANITIZE_STRING);
}

if (isset($validatedProjectName, $validatedImageUrl, $validatedProjectUrl, $validatedProjectSummary, $db)) {
    uploadProject($validatedProjectName, $validatedImageUrl, $validatedProjectUrl, $validatedProjectSummary, $db);
}

$dbResult = getDbAboutMe($db);

$bio = selectBioFromResults($dbResult);
$interests = selectInterestsFromResults($dbResult);
$qualifications = selectQualificationsFromResults($dbResult);

//if (isset($_POST['newProjectName']) && ($_POST['newImageUrl']) && ($_POST['newProjectUrl']) &&
//    ($_POST['newProjectSummary']) && is_string($_POST['newProjectName']) && is_string($_POST['newImageUrl']) &&
//    is_string($_POST['newProjectUrl']) && is_string($_POST['newProjectSummary'])) {
//
//    $newProjectName = $_POST['newProjectName'];
//    $newImageUrl = $_POST['newImageUrl'];
//    $newProjectUrl = $_POST['newProjectUrl'];
//    $newProjectSummary = $_POST['newProjectSummary'];
//    for ($i = 0; $i < count($newProjectName); $i++) {
//
//        $projectName = PDO::quote($newProjectName[$i]);
//        $imageUrl = PDO::quote($newImageUrl[$i]);
//        $projectUrl = PDO::quote($newProjectUrl[$i]);
//        $projectSummary = PDO::quote($newProjectSummary[$i]);
//
//        $createProjectQuery=$db->prepare("INSERT INTO `projects` (`name`, `image_url`, `url`, `summary`) VALUES ($projectName, $imageUrl, $projectUrl, $projectSummary);");
//    }
//}
//var_dump($createProjectQuery);


    //create insert query function to add new projects to db
    //create function to upload project db entries to index.php
