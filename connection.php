<?php
$servername="localhost";
$username="root";
$password="";
$database="office";
$conn = mysqli_connect ($servername, $username, $password,$database);
if(!$conn){
die("Connection not established:" .mysqli_connect_error());
}
echo"SUCCESSFULLY CONNECTED";
?>