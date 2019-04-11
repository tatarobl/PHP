<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
       $pass = [
    "jose" => "cordoba",
    "manuel" => "castillo",
    "krusty" => "ean",
    ];
    if (isset($pass[$_GET['usser']])){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo 'Bienvenido';
        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Usuario no encontrado';
    }
    
    if (isset($usser[$_POST['usser']])){
       if ($usser[$_POST['usser']]== $_POST['pass']){
           session_star();
           
           echo "<h2><center> Listado de Usuarios.user </center></h2>";
           echo "<h3><center> Listado por defecto </center></h3>";
           
           print_r($usser);

    
           
?>
</body>
</html>
