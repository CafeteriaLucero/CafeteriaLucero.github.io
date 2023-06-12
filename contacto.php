<?php

// echo "dddd";
$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$asunto = $_REQUEST['asunto'];
$mensaje = $_REQUEST['mensaje'];



        if (isset($_REQUEST['guardar'])) {
            
                
                include_once "conexion.php";
                $conexion = new mysqli($server, $user, $pass, $db);
                
                $query = "INSERT INTO mensaje (nombre, email, asunto, mensaje ) values 
                                                 ('" . $nombre . "','" . $email . "','" . $asunto . "','" . $mensaje . "');
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