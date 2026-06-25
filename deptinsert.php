<?php
include_once 'connection.php';
if (isset ($_POST ['Submit'])){
$Dep_no =$_POST['Dep_no'];
$Dep_name=$_POST['Dep_name'];
$location=$_POST['Location'];
$sql="INSERT INTO department (Dep_no,Dep_name,location)
VALUES('$Dep_no','$Dep_name','$location')";
if (mysqli_query ($conn ,$sql)){
echo"<div style='color:blue;'>New recod entered</div>";
}else{
echo"Error:" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>