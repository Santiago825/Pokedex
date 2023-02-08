<?php 
require("../Model/conexion_user.php");

class Controller{

    public function valideUser($user_form,$pass_form){

        $pas=new user();
        $result= $pas->comprobarUser($user_form,$pass_form);
        if($result){
            session_start();
            $_SESSION["usuario"]=$user_form;
            
             header("location:../VIEW/pagePokemos.php");
        }else{
            // echo "mal";
            // header("location:../VIEW/login.php");
            return "<p>* wrong Email or Password</p>";
        }
    }
    public function createUser($name,$lastname,$user,$email,$pass){

        $pas=new user();
        $result= $pas->addUser($name,$lastname,$user,$email,$pass);
        if($result){
            echo'<script type="text/javascript">
                alert("Successful registration");
                window.location.href="../VIEW/login.php";
                </script>';

        }else{
            return "<p>Registration failed, please try again.</p>";
        }
    }


    
}
?>