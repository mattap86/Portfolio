<?php

/*
 * This function retrieves the data from the selected fields in the about_me table of the portfolio database
 *
 * @param array $db represents the database the data is pulled from
 *
 * @return array $about_me_result returns the first row of the executed query
 */
function getAboutMe(PDO $db) : array
{
    $about_me_query = $db->prepare("SELECT `bio`, `interests`, `qualifications` FROM `about_me`;");
    $about_me_query->execute();
    $about_me_result = $about_me_query->fetch();
    return $about_me_result;
}

/*
 * This function selects the 'bio' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: bio
 *
 * @return string $result returns the string assigned the key: 'bio'
 *
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'bio'
 */
function selectBioFromResults(array $result) : string
{
    if (array_key_exists('bio', $result)) {
        return $result['bio'];
    } else {
        return 'error';
    }
}

/*
 * This function selects the 'interests' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'interests'
 *
 * @return string $result returns the string assigned the key: 'interests'
 *
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'interests'
 */
function selectInterestsFromResults(array $result) : string
{
    if (array_key_exists('interests', $result)) {
        return $result['interests'];
    } else {
        return 'error';
    }
}

/*
 * This function selects the 'qualifications' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'qualifications'
 *
 * @return string $result returns the string assigned the key: 'qualifications'
 *
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'qualifications'
 */
function selectQualificationsFromResults(array $result) : string
{
    if (array_key_exists('qualifications', $result)) {
        return $result['qualifications'];
    } else {
        return 'error';
    }
}