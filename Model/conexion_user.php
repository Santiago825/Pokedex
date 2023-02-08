<?php


require('conexion.php');
class user extends conexion{
    private $userData;
    public function __construct() //constructor versión moderna php 7.0 en adelante
    {
        parent::__construct(); //este es el constructor del archivo conexion.php
        $this->userData=array();
    }

    public function comprobarUser($user_form,$pass_form){
        $sql="SELECT * FROM usuarios WHERE U_EMAIL=:_email and U_PASSWORD=:_pass ";
        $sentencia=$this->conexiondb->prepare($sql);
        $login=htmlentities(addslashes($user_form));
        $pass=htmlentities(addslashes($pass_form));
        $sentencia->execute(array("_email"=>$login,"_pass"=>$pass));
        $numeroRegistro=$sentencia->rowCount();
        if($numeroRegistro!=0){
            return true;

        }else{
            return false;
             
        }
        $sentencia->closeCursor();
        $this->conexiondb=null;

    }
    public function addUser($name,$lastname,$user,$email,$pass){
        $sql="INSERT INTO usuarios (U_NAME,	U_LASTNAME,U_NAMEUSER,U_EMAIL,U_PASSWORD) VALUES(:_name,:_lastname,:_user,:_email,:_pass) ";
        $sentencia=$this->conexiondb->prepare($sql);
        $name=htmlentities(addslashes($name));
        $lastname=htmlentities(addslashes($lastname));
        $user=htmlentities(addslashes($user));
        $email=htmlentities(addslashes($email));
        $pass=htmlentities(addslashes($pass));
        $sentencia->bindParam(":_name",$name);
        $sentencia->bindParam(":_lastname",$lastname);
        $sentencia->bindParam(":_user",$user);
        $sentencia->bindParam(":_email",$email);
        $sentencia->bindParam(":_pass",$pass);
        $sentencia->execute();

        if($sentencia==false){
            return false;
        }
        else{
            return true;
        }        
    }
    


}