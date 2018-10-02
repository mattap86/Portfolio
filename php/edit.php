<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$update_bio = $_POST['update_bio'];
$update_interests = $_POST['update_interests'];
$update_qualifications = $_POST['update_qualifications'];

//this needs putting into a function
$update_about_me = $db->prepare("UPDATE `about_me` SET (`bio`=:bio, `interests`=:interests, `qualifications`=:qualifications) WHERE id=1");

$bio = filter_var($bio, FILTER_SANITIZE_STRING);
$interests = filter_var($interests, FILTER_SANITIZE_STRING);
$qualifications = filter_var($qualifications, FILTER_SANITIZE_STRING);

$update_about_me->bindParam(':bio',$bio);
$update_about_me->bindParam(':interests',$interests);
$update_about_me->bindParam(':qualifications',$qualifications);

$update_about_me->execute();

if (isset($bio)) {
    echo "Your Biography Has Been Updated";
} else if (isset($interests)) {
    echo "Your Interests Have Been Updated";
} else if (isset($qualifications)) {
    echo "Your Qualifications Have Been Updated";
} else if(!isset($bio, $interests, $qualifications)) {
    echo "Nothing Was Updated";
}

//$project_name_query->execute();
//$project_image_query->execute();
//$project_url_query->execute();
//$project_summary_query->execute();

//$project_name_query = $db->prepare("SELECT `projects`(`name`) FROM `name`;");
//$project_image_query = $db->prepare("SELECT `projects`(`image_url`) FROM `image_url`;");
//$project_url_query = $db->prepare("SELECT `projects`(`url`) FROM (:url);");
//$project_summary_query = $db->prepare("SELECT `projects`(`summary`) FROM `summary`;");

