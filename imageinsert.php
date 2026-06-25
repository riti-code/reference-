<?php include_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<body>
<h2>Upload Department Image</h2>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <fieldset>
        <legend>Department with Image</legend>
        Dept No:<br>
        <input type="text" name="dept_no"><br><br>
        Dept Name:<br>
        <input type="text" name="dept_name"><br><br>
        Location:<br>
        <input type="text" name="location"><br><br>
        Image Upload:<br>
        <input type="file" name="uploadfile"><br><br>
        <button type="submit" name="upload">Upload</button>
    </fieldset>
</form>
</body>
</html>