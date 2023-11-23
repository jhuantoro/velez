<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];

$host = "localhost";
$user = "root";
$pass = "";
$basedatos = "velez";

$conn = mysqli_connect($host, $user, $pass, $basedatos);

if (isset($_FILES['image']['name']) && $_FILES['image']['name'] !== "") {
    $fileinfo = pathinfo($_FILES['image']['name']);

    if (isset($fileinfo['filename']) && isset($fileinfo['extension'])) {
        $newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
        $uploadPath = "../upload/" . $newfilename;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
            $location = "upload/" . $newfilename;

            $stmt = $conn->prepare("INSERT INTO hombre (nombre, image, descripcion, categoria, precio) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nombre, $location, $descripcion, $categoria, $precio);
            $stmt->execute();
            $stmt->close();
            
            echo "Guardó";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Error al obtener información del archivo.";
    }
} else {
    echo "No se ha seleccionado ningún archivo.";
}
?>
