<?php

include ("conexion.php");
 $categoria = $_POST['categoria'];
 $marca = $_POST['marca'];
 $precio=$_POST['precio'];
 $descripcion=$_POST['descripcion'];
 $nombre=$_POST['nombre'];




 $sql ="INSERT INTO productos(CategoriaId,MarcaId,Precio,DescripcionProducto,Nombre) VALUES
        ('$categoria','$marca','$precio','$descripcion','$nombre')";

 //echo("categoria".$categoria.$marca.$precio.$marca.$descripcion.$nombre);
$resultado=mysqli_query($conexion,$sql);
if($resultado === TRUE){
    header("Location:index.php");
}else{
    echo("Datos no insertados");

}

?>