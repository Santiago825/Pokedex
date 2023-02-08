<?php
require("../Model/conexion_user.php");

$user=$_POST["email_Login"];
$pass=$_POST["password_login"];
$pas=new user();

$result= $pas->comprobarUser($user,$pass);
if($result){
    session_start();
    $_SESSION["usuario"]=$user;
    
     header("location:../VIEW/pagePokemos.php");
}else{
    header("location:../VIEW/login.php");
}

?>