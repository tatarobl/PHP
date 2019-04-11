<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if ((($user == "tatiana") AND ($password == "12345")) ||(($user == "vanessa") AND ($password == "67890"))) {
      echo "Bienvenido ".$user;
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
    
   if (isset($user[$_POST['user']])){
       if ($user[$_POST['user']]== $_POST['password']){
           session_star();
           
           echo "<h2><center> Listado de Usuarios </center></h2>";
           echo "<h3><center> Listado por defecto </center></h3>";
           
           print_r($user);
   
           
?>
</body>
</html>
