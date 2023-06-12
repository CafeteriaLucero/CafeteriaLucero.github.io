<?php

// echo "dddd";
$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$fecha = $_REQUEST['fecha'];
$hora = $_REQUEST['hora'];
$numper = $_REQUEST['numper'];


        if (isset($_REQUEST['guardar'])) {
            
                
                include_once "conexion.php";
                $conexion = new mysqli($server, $user, $pass, $db);
                
                $query = "INSERT INTO reservacion (nombre, email, fecha, horario, numpersonas ) values 
                                                 ('" . $nombre . "','" . $email . "','" . $fecha . "','" . $hora . "','" . $numper . "');
                    ";
                
                $res = mysqli_query($conexion, $query);
                if ($res) {
        ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Registro insertado exitosamente
                    </div>
                    
                    
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Error <?php echo mysqli_error($con); ?>
                    </div>
        <?php
                }
            }
        
        ?>