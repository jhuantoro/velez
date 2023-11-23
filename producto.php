
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <script src="./js/index.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/custom.css">

</head>
<body>
    <header>
        <div class="row">
            <div class="col-md-3">
                <img src="./img/logo-ishine.svg" class="logo img-fluid">
            </div>
            <div class="col-md-9 list">
                <ul>
                    <li>
                        <a>About us</a>
                    </li>
                    <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Shop</a>
                    </li>
                    <li>
                        <a>Book appoinment</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
<?php

    $host="localhost";
    $user="root";
    $pass="";
    $basedatos="ishine";
    $conn = mysqli_connect($host,$user,$pass,$basedatos);
    
    $producto = $_GET['id'];

    $sql = "SELECT * FROM pedidos WHERE id=".$producto;
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($query)){
?>        

    <section class="producto">
        <div class="row">
            <div class="col-md-6">
                <div class="imagenes">
                    <img class="lkj" src="<?php echo $row['image'] ?>">
                    <span>SALE</span>
                </div>
            </div>
            <div class="col-md-6 textos">
                <span><?php echo $row['precio'];?></span>
                <p><?php echo $row['descripcion'];?></p>
                <h4><?php echo $row['stock'];?> in stock</h4>
                <input type="number" value="1">
                <button class="enviar">Add to cart</button>
                <h5>SKU: SES133 Category: <?php echo $row['categoria'];?></h5>
            </div>
        </div>
    </section>
    <section class="info-adicional">
        <ul class="menu">
            <li data-tab="tab1">
                Description
            </li>
            <li data-tab="tab2">
                Aditional infomation
            </li>
        </ul>
        <div class="tabgen tab1">
            <h2>Description</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequatur tempora sequi cumque enim error perspiciatis itaque laboriosam nemo doloribus a dolores, natus in recusandae distinctio reprehenderit? Exercitationem, voluptate dolorem!
            </p>
        </div>
        <div class="tabgen tab2">
            <h2>Aditional information</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequatur tempora sequi cumque enim error perspiciatis itaque laboriosam nemo doloribus a dolores, natus in recusandae distinctio reprehenderit? Exercitationem, voluptate dolorem!
            </p>
        </div>
    </section>
    <?php
    }    
?>
    <footer class="foter">
        <div class="row">
            <div class="col-md-4 locations">
                <h2>Locations</h2>
                <ul>
                    <li>
                        Hollywood
                    </li>
                    <li>
                        2205b Hollywood Blv,Hollywood
                    </li>
                    <li>
                        FL 33020
                    </li>
                    <li>
                        Call us: 320 213 2255
                    </li>
                </ul>
            </div>
            <div class="col-md-4 services">
                <ul>
                <i class="bi bi-x-diamond-fill"></i>
                    <li>
                        <a>About us</a>
                    </li>
                    <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Shop</a>
                    </li>
                    <li>
                        <a>Book appoinment</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 insta">
                <ul>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>


