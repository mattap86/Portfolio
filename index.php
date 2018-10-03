<?php
require_once 'php/edit.php';
require_once 'php/functions.php';
require_once 'php/dbFunction.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Matt Tapley</title>
    <link rel="stylesheet" type="text/css" href="css/normalise.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
</head>
<body>
<a class="anchor" id="home"></a>
    <nav>
        <div class="menu">
            <ul id="navLinks">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#portfolio">PROJECT VAULT</a></li>
            </ul>
            <div class="hamburgerMenu">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>
    <section class="hero heroImage">
        <div class="homeText">
            <h1>MATT TAPLEY.csm</h1>
            <p>TRAINEE FULL-STACK DEVELOPER</p>
        </div>
        <div class="contactIcons">
            <ul class="contactLinks">
                <li>
                    <a href="https://github.com/mattap86"><img class="gitHub" src="Images/github-57px.png" alt="GitHub"></a>
                </li>
                <li>
                    <a href="https://twitter.com/mattap86"><img class="twitter" src="Images/twitter-64px.png" alt="Twitter"></a>
                </li>
                <li>
                    <a href="mailto:matthew.tapley@hotmail.co.uk"><img class="email" src="Images/envelope-64px.png" alt="Email"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/matthew-tapley-5b5a0ba0/"><img class="linkedIn" src="Images/linkedin-64px.png" alt="LinkedIn"></a>
                </li>
            </ul>
        </div>
    </section>
    <div class="aboutMe" id="about">
        <section class="container">
            <h1>ABOUT ME</h1>
            <p><?php echo $bio; ?></p>
                <button>INTERESTS</button>
                <p class="buttonContent"><?php echo $interests; ?></p>
                <button>QUALIFICATIONS & ACCOLADES</button>
                <p class="buttonContent"><?php echo $qualifications; ?></p>
                <button>SOMETHING ELSE ABOUT ME</button>
                <p class="buttonContent">If I think of anything I'll let you know...</p>
        </section>
    </div>
    <a class="anchor" id="portfolio"></a>
    <div class="portfolio">
        <div class="portfolioText">
            <h1>PROJECT VAULT</h1>
            <p>A Peek At My Projects</p>
            <div class="spacer"></div>
        </div>
        <div class="projectBlocks">
            <?php
                $db = dbconn();
                $var = getDbProject($db);
                var_dump($var);
                echo displayProjects($var);
            ?>
        </div>
    </div>
</body>
<footer>
    <div>
        <div class="footNote">
            <p>ABSOLUTELY NOTHING &copy; 2018 MATTHEW PHILIP TRISTRAM TAPLEY</p>
        </div>
        <div>
            <a href="#home"><img class="rocket" src="Images/rocket.png" alt="Rocket"></a>
        </div>
    </div>
</footer>
</html>

