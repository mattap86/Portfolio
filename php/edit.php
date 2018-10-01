<?php
require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$dbResult = getAboutMe($db);

$bio = selectBioFromResults($dbResult);
$interests = selectInterestsFromResults($dbResult);
$qualifications = selectQualificationsFromResults($dbResult);


//$project_name_query->execute();
//$project_image_query->execute();
//$project_url_query->execute();
//$project_summary_query->execute();

//$project_name_query = $db->prepare("SELECT `projects`(`name`) FROM `name`;");
//$project_image_query = $db->prepare("SELECT `projects`(`image_url`) FROM `image_url`;");
//$project_url_query = $db->prepare("SELECT `projects`(`url`) FROM (:url);");
//$project_summary_query = $db->prepare("SELECT `projects`(`summary`) FROM `summary`;");

