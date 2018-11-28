<?
$code = $_POST["user_code"];
$name =  $_POST["user_name"];
$surname =  $_POST["user_surname"];
$email =  $_POST["user_email"];
$pass =  $_POST["user_password"];
$job =  $_POST["user_job"];
$account =  $_POST["account"];
require("connection.php");
$sql = "INSERT INTO users (id,code,name,surnames,email,pass,career,user) VALUES (' ','$code', '$name', '$surname', '$email', '$pass', '$job', '$account')";
mysqli_query($connection,$sql);
echo 1;
?>
