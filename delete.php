<?php
include_once 'connection.php';

if (isset($_GET['Dep_no'])) {
    $Dep_no = $_GET['Dep_no'];
    $sql = "DELETE FROM department WHERE Dep_no='$Dep_no'";

    if (mysqli_query($conn, $sql)) {
        echo "<div style='color:red;'>Record deleted successfully!</div>";
        echo "<br><a href='fetch_department.php'>← Back to all records</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>