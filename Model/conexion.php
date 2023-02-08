<?php
require("datos_conexion.php");
 class conexion
 {
     protected $conexiondb;

     public function __construct() //constructor
     {
        try{
            $this->conexiondb=new PDO("mysql:host=localhost;dbname=pokemons","root","");

            $this->conexiondb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $this->conexiondb->exec("SET CHARACTER SET UTF8");
            return $this->conexiondb;
            
        }catch(Exception $e){
        }
    }
}