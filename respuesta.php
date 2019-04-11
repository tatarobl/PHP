<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php

    $pass = [
    "tatiana" => "robles",
    "vanessa" => "rodriguez",
    ];

    if (isset($pass[$_GET['usser']])){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo 'Sesion iniciada';
        }else{
            echo 'Contraseña incorrecta';
        }
    }else{
        echo 'Datos incorrectos';
    }

    ?>
</body>
</html>
