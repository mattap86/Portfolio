
<?php

require '../php/edit.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS Admin</title>
</head>
<body>
    <form action="admin.php" method="post">
        <h1>UPDATE ABOUT ME</h1>
        <div>
            <label>Bio :</label>
            <textarea name="newBio" rows="10" cols="100" maxlength="600"><?php echo $bio ?></textarea>
            <input type="submit" value="Update Biography" />
        </div>
        <div>
            <label>Update Interests :</label>
            <textarea name="newInterests" rows="10" cols="100" maxlength="600"><?php echo $interests ?></textarea>
            <input type="submit" value="Update Interests" />
        </div>
        <div>
            <label>Update Qualifications :</label>
            <textarea name="newQualifications" rows="10" cols="100" maxlength="600"><?php echo $qualifications ?></textarea>
            <input type="submit" value="Update Qualifications" />
        </div>
        <div>
            <h1>CREATE / REMOVE PROJECT</h1>
            <label>New Project</label>
            <input type="radio" name="addDeleteProject" checked />
            <label>Delete Project</label>
            <input type="radio" name="addDeleteProject" />
        </div>
        <div>
            <label>Project Name :</label>
            <input type="text" name="newProjectName" placeholder="Enter Name Of New Project..." />
        </div>
        <div>
            <label>Upload Project Image :</label>
            <input type="text" name="newImageUrl" placeholder="Enter Image Url..." />
        </div>
        <div>
            <label>Upload Project :</label>
            <input type="text" name="newProjectUrl" placeholder="Enter Project Url" />
        </div>
        <div>
            <label>Project Summary :</label>
            <textarea name="newProjectSummary" rows="10" cols="100" maxlength="600" placeholder="Max 600 characters..."></textarea>
        </div>
    </form>
</body>
</html>