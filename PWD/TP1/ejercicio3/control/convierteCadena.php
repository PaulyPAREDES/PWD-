<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 3</title>
</head>
<body>
<?php
if ($_POST){
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $edad = $_POST['edad'];
   $direccion = $_POST['direccion'];

   echo "Hola, yo soy " .$nombre." , ".$apellido. " tengo ".$edad." años y vivo en ".$direccion;
 }
else if ($_GET){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    
   
  echo "Hola, yo soy " .$nombre." , ".$apellido. " tengo ".$edad." años y vivo en ".$direccion;
 }
?>

</body>

</html>