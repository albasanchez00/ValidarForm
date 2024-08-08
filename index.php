<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="InicioSesion.php" method="post">
        <p>
            <input type="text" name="usuario" id="nombre" placeholder="Usuario">
        </p>
        <p>
            <input type="password" name="password" id="password" placeholder="Contraseña">
        </p>

        <input type="submit" value="Registrar">
        <input type="reset" value="Borrar">
    </form>



</body>
</html>