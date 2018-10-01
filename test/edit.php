<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/*
 * This function retrieves the data from the fields in the about_me table of the portfolio database
 *
 * @param array $db represents the database the data is pulled from
 *
 * @return array returns an assoc array of the fields highlighted in the query
 */
function getAboutMe(PDO $db) : array
{
    $about_me_query = $db->prepare("SELECT `bio`, `interests`, `qualifications` FROM `about_me`;");
    $about_me_query->execute();
    $about_me_result = $about_me_query->fetchAll();
    return $about_me_result;
}


function selectBioFromResults(array $result) : string {
    return $result[0]['bio'];
}

function selectInterestsFromResults(array $result) : string {
    return $result[0]['interests'];
}

function selectQualificationsFromResults(array $result) : string {
    return $result[0]['qualifications'];
}


$dbResult = getAboutMe($db);

var_dump($dbResult);

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

