<?php

require 'functions.php';

$db = dbconn();

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

$dbResult = getDbAboutMe($db);

$bio = selectBioFromResults($dbResult);
$interests = selectInterestsFromResults($dbResult);
$qualifications = selectQualificationsFromResults($dbResult);
