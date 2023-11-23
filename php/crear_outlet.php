<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];

$host="localhost";
$user="root";
$pass="";
$basedatos="velez";

$conn = mysqli_connect($host,$user,$pass,$basedatos);

$fileinfo = PATHINFO($_FILES['image']['name']);
$newfilename = $fileinfo['filename']."_".time().".".$fileinfo['extension'];
move_uploaded_file($_FILES['image']['tmp_name'],"../upload/".$newfilename);
$location = "upload/".$newfilename;

$insertar = "INSERT INTO outlet (nombre, image, descripcion, categoria, precio) values ('$nombre','$location','$descripcion', '$categoria', '$precio')";

if(mysqli_query($conn,$insertar)){
    echo "Guardó";
}else{
    echo "Error" . $insertar;
}
?>