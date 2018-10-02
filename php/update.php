<?php

require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$dbResult = getAboutMe($db);

$bio = selectBioFromResults($dbResult);
$interests = selectInterestsFromResults($dbResult);
$qualifications = selectQualificationsFromResults($dbResult);
