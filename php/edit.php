<?php

require 'functions.php';

$db = dbconn();

//set of if statements to sanitise about me inputs from admin.php
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


//set of if statements to sanitise new project inputs from admin.php
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
