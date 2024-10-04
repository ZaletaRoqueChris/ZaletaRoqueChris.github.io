<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

if(empty($nombre)|| empty($correo)){
    echo"por favor, rellene todos los campos.";
}else{
    echo "Gracias por tu registro! Su nombre es $nombre y su correo electronico es $correo.";
}

?>