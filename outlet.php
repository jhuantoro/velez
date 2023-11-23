<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vélez | Outlet</title>

        <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="64x64" rel="icon">
        <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="18x18" rel="icon">
        <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="32x32" rel="icon">
        <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="128x128" rel="icon">
        <link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="64x64" rel="icon"><link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="18x18" rel="icon"><link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="32x32" rel="icon"><link data-react-helmet="true" href="https://cuerosvelezco.vteximg.com.br/arquivos/favicon_velez.png" sizes="128x128" rel="icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/custom.css">

    <script src="./js/index.js"></script>
</head>

<body>
    <header>
        <div class="row">
            <!-- Logo principal -->
            <div class="col-md-2 logop">
                <a href="index.html"><img src="./img/logo.svg" alt="Logo-ppal" class="logo-header"></a>
            </div>
            <!-- Subpaginas de productos -->
            <div class="col-md-6">
                <ul>
                    <li><a href="hombre.php">Hombre</a></li>
                    <li><a href="mujer.php">Mujer</a></li>
                    <li><a href="outlet.php">Outlet</a></li>
                </ul>
            </div>
            <!-- boton de suscribirse a notificaciones -->
            <div class="col-md-1">
                <input class="boton_suscribete" type="button" value="Suscribete">
            </div>
            <!-- panel de buscar elementos -->
            <div class="col-md-2">
                <input class="campo_buscar" type="text" name="buscar" placeholder="Buscar">
            </div>
            <div class="col-md-1">
                <a href="./login/index.html">
                    <img  class="boton-admin" src="./img/person-square.svg" alt="---">
                </a>
            </div>
        </div>
    </header>
    <section class="vbannrint">
        <img src="./img/fdsgfdhg.webp" alt="">
    </section>
    <section class="bodyp">
        <div class="row">
            <?php
                $host="localhost";
                $user="root";
                $pass="";
                $basedatos="velez";

                $conn = mysqli_connect($host,$user,$pass,$basedatos);
                
                if(ISSET($_POST['filtrar'])){
                    $termino=$_POST['termino'];
                    if($_POST['filtro']=="id"){
                        $sql = "SELECT * FROM hombre WHERE id=".$termino;
                    }elseif($_POST['filtro']=="nombre"){
                        $sql = "SELECT * FROM hombre WHERE nombre like'".$termino."%'";
                    }elseif($_POST['filtro']=="descripcion"){
                        $sql = "SELECT * FROM hombre WHERE descripcion like'".$termino."%'";
                    }elseif($_POST['filtro']=="precio"){
                        $sql = "SELECT * FROM hombre WHERE precio like'".$termino."%'";
                    }elseif($_POST['filtro']=="categoria"){
                        $sql = "SELECT * FROM hombre WHERE categoria like'".$termino."%'";
                    }
                }else{
                    $sql="SELECT * FROM outlet";
                }
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query)){
            ?>
            <div class="producto col-md-4 shadow mb-1 rounded">
                <img src="<?php echo $row['image'] ?>" alt="" class="img-fluid img-producto">
                <h4><?php echo $row['nombre'];?></h3>
                <span><?php echo $row['precio'];?></span>
                <p><?php echo $row['descripcion'];?></p>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
</body>
<footer class="foter">
    <div class="row">
        <div class="col-md-3 flogo">
            <img src="./img/logo.svg" alt="LOGO">
        </div>
        <div class="col-md-3 f1">
            <h2>Locations</h2>
            <ul>
               <li>lorem</li>
               <li>lorem</li>
               <li>lorem</li>
            </ul>
        </div>
        <div class="col-md-3 f2">
            <ul>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
            </ul>
        </div>
        <div class="col-md-3 fcontacto">
            <ul>
                <li>
                <a><i class="bi bi-geo-alt"></i>   lorem</a>
                </li>
                <li>
                <i class="bi bi-phone"></i><a>   lorem</a>
                </li>
                <li>
                <i class="bi bi-envelope"></i><a>   lorem</a>
            </ul>
        </div>
    </div>
</footer>
</html>