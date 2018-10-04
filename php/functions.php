<?php

/*
 * This function updates the fields in the table `about_me` defined after the SET function of the query
 *
 * @param string $updatedBio is the new string pulled from the admin.php 'bio' textarea
 * @param string $updatedInterests is the new string pulled from the admin.php 'interests' textarea
 * @param string $updatedQualifications is the new string pulled from the admin.php 'qualifications' textarea
 * @param object $db is the database being updated by the function
 *
 */
function updateAboutMe(string $validatedBio, string $validatedInterests, string $validatedQualifications, PDO $db) : array {
    $updateAboutMe = $db->prepare("UPDATE `about_me` SET `bio` = ?, `interests` = ?, `qualifications` = ? WHERE id='1'");
    $updateAboutMe->execute([$validatedBio, $validatedInterests, $validatedQualifications]);
}

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

/*
 * This function inserts new fields into the table `projects` defined in the brackets () after `projects`
 *
 * @param string $validatedProjectName is the new string pulled from the admin.php 'project name' text input
 * @param string $validatedImageUrl is the new string pulled from the admin.php 'upload project image' text input
 * @param string $validatedProjectUrl is the new string pulled from the admin.php 'upload project' text input
 * @param string $validatedProjectSummary is the new string pulled from the admin.php 'project summary' text input
 * @param object $db is the database being updated by the function
 *
 */
function uploadProject(string $validatedProjectName, string $validatedImageUrl, string $validatedProjectUrl, string $validatedProjectSummary, PDO $db) : array {
    $uploadProjectQuery = $db->prepare("INSERT INTO `projects`(`name`, `image_url`, `url`, `summary`) VALUES (?,?,?,?);");
    $uploadProjectQuery->execute([$validatedProjectName, $validatedImageUrl, $validatedProjectUrl, $validatedProjectSummary]);
}

/*
 * This function hides the selected project in the table `projects` defined in the drop down menu of the admin.php page
 *
 * @param string $projectName is the new string pulled from the admin.php 'project name' text input
 * @param object $db is the database being updated by the function
 *
 */
function hideProject(string $projectId, PDO $db) {
    $hideProjectQuery = $db->prepare("UPDATE `projects` SET `deleted` = 1 WHERE `id`= ?;");
    $hideProjectQuery->execute([$projectId]);
}

/*
 * This function retrieves the data defined in the inset query from the 'projects' table of the 'portfolio' database
 *
 * @param PDO $db is the database the data is being pulled from
 *
 * @return array $projectResults is an associative array of the data fetched by $projectQuery
 */
function getDbProject(PDO $db) : array {
    $projectQuery = $db->prepare("SELECT `name`, `image_url`, `url`, `summary` FROM `projects` WHERE `deleted` = 0;");
    $projectQuery->execute();
    $projectResults = $projectQuery->fetchAll();
    return $projectResults;
}

/*
 * This function uploads all data from the 'projects' table of the 'portfolio' database to index.php in the
 * projects section of the page
 *
 * @param array $projectResults represents all 'projects' held in the 'project' table of the 'portfolio' database
 *
 * @return array $result represents an individual project that is displayed dynamically through the foreach command
 */
function displayProjects(array $projectResults) : string {
    $result = '';
    foreach ($projectResults as $projectResult) {
        if (array_key_exists('url', $projectResult) && array_key_exists('image_url', $projectResult) && array_key_exists('summary', $projectResult)) {
            $result .= '<div class="projectOne">
            <div class="projectBox">
                <a href=' . $projectResult['url'] . '><img class="projectPics" src=' . $projectResult['image_url'] . '></a>
            </div>
            <div class="projectSummary projectBox">
                <h5>' . $projectResult['summary'] . '</h5>
            </div>
        </div>';
        } else {
            return 'error';
        }
    }
    return $result;
}


