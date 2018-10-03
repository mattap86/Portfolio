<?php

/*
 * This function creates the connection from the database 'portfolio' and sets the default fetch mode to
 * associative array
 *
 * @return array returns the database
 */
function dbconn() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/*
 * This function updates the fields in the table `about_me` defined after the SET function of the query
 *
 * @param string $updatedBio is the new string pulled from the admin.php bio textarea
 *
 * @param string $updatedInterests is the new string pulled from the admin.php interests textarea
 *
 * @param string $updatedQualifications is the new string pulled from the admin.php qualifications textarea
 *
 * @param object $db is the database being updated by the function
 *
 * @return boolean $updateAboutMe returns true if the query is executed
 */
function updateAboutMe(string $validatedBio, string $validatedInterests, string $validatedQualifications, PDO $db) {
    $updateAboutMe = $db->prepare("UPDATE `about_me` SET `bio` = ?, `interests` = ?, `qualifications` = ? WHERE id='1'");
    $updateAboutMe->execute([$validatedBio, $validatedInterests, $validatedQualifications]);
}

function uploadProject(string $validatedProjectName, string $validatedImageUrl, string $validatedProjectUrl, string $validatedProjectSummary, PDO $db) {
    $uploadProjectQuery = $db->prepare("INSERT INTO `projects`(`name`, `image_url`, `url`, `summary`) VALUES (?,?,?,?);");
    $uploadProjectQuery->execute([$validatedProjectName, $validatedImageUrl, $validatedProjectUrl, $validatedProjectSummary]);
}

function getDbProject(PDO $db) {
    $projectQuery = $db->prepare("SELECT `name`, `image_url`, `url`, `summary` FROM `projects`;");
    $projectQuery->execute();
    $projectResult = $projectQuery->fetchAll();
    return $projectResult;
}

//function displayProjects($projectResult) {
//    $result = '';
//    foreach ($projectResult as $row) {
//        if ($projectResult['deleted'] === 1) {
//            $result .=
//        }
//    }
//}

/*
 * This function retrieves the data from the selected fields in the about_me table of the portfolio database
 *
 * @param array $db represents the database the data is pulled from
 *
 * @return array $about_me_result returns the first row of the executed query
 */
function getDbAboutMe(PDO $db) : array {
    $aboutMeQuery = $db->prepare("SELECT `bio`, `interests`, `qualifications` FROM `about_me`;");
    $aboutMeQuery->execute();
    $aboutMeResult = $aboutMeQuery->fetch();
    return $aboutMeResult;
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
function selectBioFromResults(array $result) : string {
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
function selectInterestsFromResults(array $result) : string {
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
function selectQualificationsFromResults(array $result) : string {
    if (array_key_exists('qualifications', $result)) {
        return $result['qualifications'];
    } else {
        return 'error';
    }
}