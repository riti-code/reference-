File 5: upload.php — Save Image to DB
⚠️ First add an image_name column to your table in phpMyAdmin:

sql
ALTER TABLE department ADD image_name VARCHAR(255);

<?php
include_once 'connection.php';

if (isset($_POST['upload'])) {
    $dept_no   = $_POST['dept_no'];
    $dept_name = $_POST['dept_name'];
    $location  = $_POST['location'];
    $image_name = $_FILES['uploadfile']['name'];
    $tempname   = $_FILES['uploadfile']['tmp_name'];
    $folder     = "uploads/" . $image_name;

    // Create uploads folder if it doesn't exist
    if (!file_exists("uploads")) {
        mkdir("uploads", 0777, true);
    }

    $sql = "INSERT INTO department (Dep_no, Dep_name, location, image_name)
            VALUES ('$dept_no', '$dept_name', '$location', '$image_name')";

    if (mysqli_query($conn, $sql) && move_uploaded_file($tempname, $folder)) {
        echo "<div style='color:green;'>Image Uploaded Successfully!</div>";
    } else {
        echo "Upload failed: " . mysqli_error($conn);
    }
}
?>