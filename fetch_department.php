<?php include_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Fetch Data</title>
<style>
table,td, th{
border:1px solid black;
border-collapse: collapse;
padding:8px;
}
th{background-color: powderblue;}
</style>
</head>
<body>
<h2>Department Records</h2>
<table>
<tr>
<th> Dep_no</th>
<th>Dep_name</th>
<th>Location</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$result=mysqli_query($conn, "SELECT* FROM department");
if (mysqli_num_rows($result) >0){
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['Dep_no']; ?></td>
<td><?php echo $row['Dep_name']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><a href="update.php?Dep_no=<?php echo $row['Dep_no'];?>">Edit</a></td>
<td><a href="delete.php?Dep_no=<?php echo $row['Dep_no'];?>Delete</a></td>
</tr>
<?php
}
}else{
echo"<tr><td colspan='5'>No records found</td></tr>";
}
?>
</table>
<br>
<a href="forminsert.php">+Add New Record</a>
</body>
</html>