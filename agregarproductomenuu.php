<?php

        
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $descripcion= $_REQUEST['descripcion'];
                if (isset($_REQUEST['guardar'])) {
                    if (isset($_FILES['foto']['name'])) {
                        $tipoArchivo = $_FILES['foto']['type'];
                        $permitido=array("image/png","image/jpeg");
                        $imagen ='';
                        if( in_array($tipoArchivo,$permitido) ==false ){
                            die("Archivo no permitido");
                        }
                        $nombreArchivo = $_FILES['foto']['name'];
                        $tamanoArchivo = $_FILES['foto']['size'];
                        $ruta_provisional =$_FILES['foto']["tmp_name"];
                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                        $carpeta = "fotos/";
                        
                        include_once "conexion.php";
                        $conexion = new mysqli($server, $user, $pass, $db);
                        
                        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);
                        $src = $carpeta.$nombreArchivo;
                        move_uploaded_file($ruta_provisional, $src);
                        $imagen = "fotos/".$nombreArchivo;
                        $query = "INSERT INTO productos (precio, imagen, nombre, descripcion) values 
                                                         ('" . $precio . "','" . $binariosImagen . "','" . $nombre . "','" . $descripcion . "');
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
                }
                ?>