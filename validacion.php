<?php
if (empty($_POST["nombre"])|| empty($_POST["contrasena"])){
    echo "No se pudo realizar el registro";
}else{
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];
}

$registro=array("nombre"=>$nombre,"contrasena"=>$contrasena);
array_key_exists($nombre,$_POST);
