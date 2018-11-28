<?
$user = $_POST["uname"];
$pass =  $_POST["pass"];
require("connection.php");
$sql = "INSERT INTO users ('',username, pass) VALUES ('$user', '$pass')";
mysqli_query($connection,$sql);
echo 1;
?>
