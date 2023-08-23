<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 4</title>
</head>
<body>
<?php
if ($_POST){
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $edad = $_POST['edad'];
   $direccion = $_POST['direccion'];
   
   if($edad >= 18){
    echo "Hola, yo soy " .$nombre." , ".$apellido. " vivo en ".$direccion." y soy MAYOR de edad ";
   }else{
    echo "Hola, yo soy " .$nombre." , ".$apellido. " vivo en ".$direccion." y soy MENOR  de edad";
   }
  }
  
else if ($_GET){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    
   
    if($edad >= 18){
      echo "Hola, yo soy " .$nombre." , ".$apellido. " vivo en ".$direccion." y soy MAYOR de edad";
     }else{
      echo "Hola, yo soy " .$nombre." , ".$apellido. " vivo en ".$direccion." y soy MENOR  de edad";
     }
 }
?>

</body>

</html>