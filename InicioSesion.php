<?php
/*   1. Verificamos que los datos introducidos no estén en blanco  */
if (empty($_POST["usuario"])||empty($_POST["password"])){
    // Verificamos que no estén vacíos
    echo "Debes indicar usuario y password";
}else{
    // Se envía a la funcion validarUsuario con los valores leídos, que comprobará si son correctos y  devuelverá true o false.
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        echo "Bienvenido " . $_POST["usuario"];
    }else{
        echo "<br>";
        echo "Datos incorrectos";
    }
}


function validarUsuario ($usuario, $password){
    // Array Asociativo -> $listaUsuarios
    $listaUsuarios=["Daniel"=>"CEAT1234@", "Marina"=>"CEAT1234@", "Ana"=>"CEAT1234@"];
    if ($listaUsuarios[$usuario]==$password){
        return true;
    }else{
        return false;
    }
}
