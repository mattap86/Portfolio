<?php

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
    $about_me_result = $about_me_query->fetch();
    return $about_me_result;
}


function selectBioFromResults(array $result) : string
{
    if (array_key_exists('bio', $result)) {
        return $result['bio'];
    } else {
        return 'error';
    }
}


function selectInterestsFromResults(array $result) : string
{
    if (array_key_exists('interests', $result)) {
        return $result['interests'];
    } else {
        return 'error';
    }
}

function selectQualificationsFromResults(array $result) : string
{
    if (array_key_exists('interests', $result)) {
        return $result['qualifications'];
    } else {
        return 'error';
    }
}