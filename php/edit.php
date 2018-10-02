<?php

require 'functions.php';

$db = dbconn();

$updatedBio = $_POST['newBio'];
$updatedInterests = $_POST['newInterests'];
$updatedQualifications = $_POST['newQualifications'];

var_dump($updatedBio);
//$validatedBio = validateString($updatedBio);
//$validatedInterests = validateString($updatedInterests);
//$validatedQualifications = validateString($updatedQualifications);
//
//updateAboutMe($updatedBio, $updatedInterests, $updatedQualifications, $db);


$dbResult = getDbAboutMe($db);

$bio = selectBioFromResults($dbResult);
$interests = selectInterestsFromResults($dbResult);
$qualifications = selectQualificationsFromResults($dbResult);


