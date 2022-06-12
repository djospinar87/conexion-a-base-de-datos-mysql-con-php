<?php
include "conexion.php";
$user=new ApptivaDB();

$u = $user->buscar("usuarios", "1");
foreach ($u as $key) 
    foreach ($key as $k => $v) 
       echo $k ." = ".$v

?>