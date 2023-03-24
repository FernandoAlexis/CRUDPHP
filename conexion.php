<?php


    $host="loalhost";
    $user="root";
    $password="";
    $db="ecommerce";


    $conexion=new mysqli($host,$user,$password,$db);


    if(!$conexion){
        echo 'Conexion fallida';
    }


?>