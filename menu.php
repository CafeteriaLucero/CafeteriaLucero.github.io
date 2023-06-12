<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAFETERIA LUCERO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/about.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">CAFETERIA LUCERO</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.html" class="nav-item nav-link">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Hacerca de</a>
                    <a href="service.html" class="nav-item nav-link">Servicios</a>
                    <a href="menu.php" class="nav-item nav-link active">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="reservation.html" class="dropdown-item">Reservation</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.html">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Precios</h4>
                <h1 class="display-4">Precios Comparativos</h1>
            </div>
           
            
    </div>
    </html>
    <!-- Menu End -->
    
    <html>
    <div class="container-fluid my-5"></div>
        <div class="container">
            <?php 
             include_once "conexion.php";
             $conexion = new mysqli($server, $user, $pass, $db);
             if($conexion->connect_error){
                die("CONEXION FALLIDA, INTENTE DENUEVO".$conexion->connect_error);
            }else {

                echo "<table>";
                echo "<tr>";
                echo "<th><h1>$</th></h1>";
               
                echo "<th><h1>cafe</th></h1>";
     
                echo "<th><h1>detalle</th></h1>";
           
                
             
                echo "</tr>";
            $instruccion_SQL=mysqli_query($conexion,"SELECT * FROM productos");
            while ($row=mysqli_fetch_array($instruccion_SQL)){
             ?>
             <tr>
               <td><html><h1>$<?php echo $row ['precio'];?></h1></html></td>
            
            
               <td>
                <img  href= "index.html" width="300" src="data:image/png;base64, 
               <?php echo base64_encode ($row ['imagen']);?>">
               </td>
            
            
               <td><html><h1><?php echo $row ['descripcion'];?></h1></html></td>

               
               

            
               
             </tr>
            <?php
            
            }
            }
            
            ?>
            </div>
        </div>
</html>



   
   


   