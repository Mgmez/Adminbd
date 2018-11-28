<?php

 try{
     $conn = new PDO('mysql:host=localhost;dbname=foranerp_MAE','foranerp_user','m?L$GPQ5!r[Y');
     echo 'Conexion realizada';
    }
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }

/* @var $_POST type */
$nombre= $_POST["Email"];
$pass= $_POST["Password"];


 $query=("SELECT username,pass FROM `Login` "
         . "WHERE `username`='".mysql_real_escape_string($nombre)."' and "
         . "`pass`='".mysql_real_escape_string($pass)."'");

$rs= mysql_query($query);
$row=mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);


if($nr == 1){

echo 'No ingreso';
}

else if($nr == 0) {

     header("Location:segundo.html");
}

?>
