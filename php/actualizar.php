<?php
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];

$host="localhost";
$user="root";
$pass="";
$basedatos="velez";
$conn = mysqli_connect($host,$user,$pass,$basedatos);

$actualizar="UPDATE hombre SET id='".$id."',nombre='".$nombre."', descripcion='".$descripcion."', categoria='".$categoria."', precio='".$precio."' WHERE id=".$id;

mysqli_query($conn,$actualizar);
?>