<?php
$id=$_POST['id'];

$host="localhost";
$user="root";
$pass="";
$basedatos="velez";
$conn = mysqli_connect($host,$user,$pass,$basedatos);

$eliminar="DELETE FROM hombre WHERE id=".$id;

mysqli_query($conn,$eliminar);

?>