<?php
   include("conexion.php");
   error_reporting (E_ALL);

   $id = $_POST['id'];
   $categoria =$_POST['categoria'];
   $marca = $_POST['marca'];
   $precio=$_POST['precio'];
   $descripcion=$_POST['descripcion'];
   $nombre=$_POST['nombre'];

   //echo ("".$id."".$categoria."".$precio."".$descripcion."".$nombre."".$marca);


                   
    $sql = "UPDATE productos SET CategoriaId='".$categoria."', MarcaId='".$marca."', precio='".$precio."', DescripcionProducto='".$descripcion."', nombre='".$nombre."' WHERE idProducto='".$id."'";

    $result=mysqli_query($conexion,$sql);
        
    $error_message = mysqli_error($conexion);
    if($error_message == ""){
        header( 'Location: index.php' ) ;
    }else{
        echo "Query Failed: ".$error_message;
    }

  



?>