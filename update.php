<?php
include_once 'connection.php';

// When Update button is clicked — save changes
if (isset($_POST['Update'])) {
    $Dep_no   = $_POST['Dep_no'];
    $Dep_name = $_POST['Dep_name'];
    $location = $_POST['location'];

    $sql = "UPDATE department SET Dep_name='$Dep_name', location='$location'
            WHERE Dep_no='$Dep_no'";

    if (mysqli_query($conn, $sql)) {
        echo "<div style='color:green;'>Record updated successfully!</div>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch the existing record to pre-fill the form
$result = mysqli_query($conn, "SELECT * FROM department WHERE Dep_no='" . $_GET['Dep_no'] . "'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<body>
<h2>Update Department</h2>
<form method="POST" action="">
    <fieldset>
        <legend>Edit Department</legend>
        Dep_no:<br>
        <input type="text" name="Dep_no"
               value="<?php echo $row['Dep_no']; ?>" readonly><br><br>
        Dep_name:<br>
        <input type="text" name="Dep_name"
               value="<?php echo $row['Dep_name']; ?>"><br><br>
        Location:<br>
        <input type="text" name="location"
               value="<?php echo $row['location']; ?>"><br><br>
        <input type="submit" name="Update" value="Update">
    </fieldset>
</form>
<br>
<a href="fetch_department.php">← Back to all records</a>
</body>
</html>