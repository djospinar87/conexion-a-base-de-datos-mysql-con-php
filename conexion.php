<?php

//print "hola mundo";

$con = mysqli_connect("localhost", "root", "", "ascensores", "3306");

if($con){
  echo "conexion exitosa (^.^)";
} else{
     echo "error en la conexion"; 
}

?>