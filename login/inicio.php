<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="64x64" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="18x18" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="32x32" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="128x128" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="64x64" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="18x18" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="32x32" rel="icon">
    <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="128x128" rel="icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-md-2 logop">
                <a href="../index.html"><img src="../img/logo.svg" alt="Logo-ppal" class="logo-header"></a>
            </div>
            <div class="col-md-3">    
                <h1>Seleccione la tabla que desea modificar:</h1>
            </div>
            <div class="col-md-7">
                <select id="tablaSelector" class="btnselect">
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="outlet">Outlet</option>
                </select>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-md-4 f">
            <form method="post" action="../php/crear.php" enctype="multipart/form-data" id="formularioHombre">
                <h3>Hombre</h3>
            
                <input type="int" name="id" hidden>

                <label for="nombre">Nombre del producto: </label>    
                <input type="text" name="nombre">
                
                <label for="image">Carga tu archivo: </label>
                <input type="file" name="image" class="cargar-img">
                <img id="previewImage" src="" alt="Vista previa de la imagen" style="max-width: 200px; max-height: 200px; margin-top: 10px;">


                <label for="descripcion">Descripcion: </label>
                <input type="text" name="descripcion">

                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria">
                
                <label for="precio">Precio: </label>    
                <input type="text" name="precio">
                
                <div>
                    <input type="submit" name="enviar" value="enviar">
                    <a href="../php/actualizar.php" class="actualizar">Actualizar</a>
                    <a href="../php/eliminar.php" class="eliminar">Eliminar</a>
                </div>
            </form>
        
            <form method="Post" action="../php/crear_mujer.php" enctype="multipart/form-data" id="formularioMujer" style="display: none;">
                <h3>Mujer</h3>

                <input type="int" name="id" hidden>

                <label for="nombre">Nombre del producto: </label>    
                <input type="text" name="nombre">

                <label for="image">Carga tu archivo: </label>
                <input type="file" name="image" class="cargar-img">
                <img id="previewImage" src="" alt="Vista previa de la imagen" style="max-width: 200px; max-height: 200px; margin-top: 10px;">


                <label for="descripcion">Descripcion: </label>
                <input type="text" name="descripcion">

                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria">

                <label for="precio">Precio: </label>    
                <input type="text" name="precio">

                <div>
                    <input type="submit" name="enviar" value="enviar">
                    <a class="actualizar">Actualizar</a>
                    <a class="eliminar">Eliminar</a>
                </div>
            </form>
        
            <form method="Post" action="../php/crear_outlet.php" enctype="multipart/form-data" id="formularioOutlet" style="display: none;">
                <h3>Outlet</h3>

                <input type="int" name="id" hidden>

                <label for="nombre">Nombre del producto: </label>    
                <input type="text" name="nombre">

                <label for="image">Carga tu archivo: </label>
                <input type="file" name="image" class="cargar-img">
                <img id="previewImage" src="" alt="Vista previa de la imagen" style="max-width: 200px; max-height: 200px; margin-top: 10px;">


                <label for="descripcion">Descripcion: </label>
                <input type="text" name="descripcion">

                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria">

                <label for="precio">Precio: </label>    
                <input type="text" name="precio">

                <div>
                    <input type="submit" name="enviar" value="enviar">
                    <a class="actualizar">Actualizar</a>
                    <a class="eliminar">Eliminar</a>
                </div>
            </form>
        </div>

        <section class="col-md-6 tabla">
            <table class="table table-sm listar" id="tablaHombre">
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>imagen</td>
                    <td>descripcion</td>
                    <td>categoria</td>
                    <td>precio</td>
                </tr>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $basedatos = "velez";
                $conn = mysqli_connect($host, $user, $pass, $basedatos);

                $sql = "SELECT * FROM hombre";

                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="tbb fila-tabla" data-id="<?php echo $row['id']; ?>" data-image="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><img class="pr" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>"></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                    </tr>
                    <?php
                }
                ?>    
            </table>
            
            <table class="table table-sm listar" id="tablaMujer" style="display: none;">
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>imagen</td>
                    <td>descripcion</td>
                    <td>categoria</td>
                    <td>precio</td>
                </tr>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $basedatos = "velez";
                $conn = mysqli_connect($host, $user, $pass, $basedatos);

                $sql = "SELECT * FROM mujer";

                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="tbb fila-tabla" data-id="<?php echo $row['id']; ?>" data-image="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><img class="pr" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>"></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                    </tr>
                    <?php
                }
                ?>    
            </table>

            <table class="table table-sm listar" id="tablaOutlet" style="display: none;">
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>imagen</td>
                    <td>descripcion</td>
                    <td>categoria</td>
                    <td>precio</td>
                </tr>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $basedatos = "velez";
                $conn = mysqli_connect($host, $user, $pass, $basedatos);

                $sql = "SELECT * FROM outlet";

                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="tbb fila-tabla" data-id="<?php echo $row['id']; ?>" data-image="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><img class="pr" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>"></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                    </tr>
                    <?php
                }
                ?>    
            </table>
        </section>
    </div>            
    <script>
        jQuery(document).ready(function ($) {
            $(".eliminar").click(function () {
                let id = $("form input[name='id']").val();

                $.ajax({
                    data: {"id": id},
                    url: "../php/eliminar.php",
                    type: "POST",
                    success: function (response) {
                        console.log(response);
                        location.reload();
                    }
                });
            });

            $(".actualizar").click(function () {
                let id = $("form input[name='id']").val();
                let nombre = $("form input[name='nombre']").val();
                let descripcion = $("form input[name='descripcion']").val();
                let categoria = $("form input[name='categoria']").val();
                let precio = $("form input[name='precio']").val();

                $.ajax({
                    data: {"id": id, "nombre": nombre, "descripcion": descripcion, "categoria": categoria, "precio": precio},
                    url: "../php/actualizar.php",
                    type: "POST",
                    success: function (response) {
                        console.log(response);
                    },
                    complete: function (response) {
                        location.reload();
                    }
                });
            });

            $("input[name='image']").on("change", function () {
                let fileInput = this;
                if (fileInput.files && fileInput.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(fileInput).closest("form").find("#previewImage").attr("src", e.target.result);
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                }
            });

            $("#tablaSelector").change(function () {
                let selectedTable = $(this).val();
                $("form[id^='formulario']").hide();
                $("#formulario" + selectedTable.capitalize()).show();

                // Oculta todas las tablas
                $("table[id^='tabla']").hide();
                // Muestra la tabla seleccionada
                $("#tabla" + selectedTable.capitalize()).show();
            });

        });
    </script>
</body>
</html>