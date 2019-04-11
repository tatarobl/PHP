<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Bienvenido'; ?></h1>
    <h2>Ingrese su Usuario y Contraseña</h2>

    <br>

    <form action="respuesta.php" method="get">
        <input type="text" name="user" id="user" placeholder="Usuario">
        <input type="password" name="password" id="password" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
