<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 6</title>
</head>
<body>
<?php
if ($_POST){
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido']; 
   $deportes= $_POST['deporte'];
 


   echo "Hola, yo soy " .$nombre." , ".$apellido;

   /*Evalua deportes */
   $totalDeportes=count($deportes);
 
  echo "Practico la cantidad de :".$totalDeportes." deportes";
  }
  
?>

</body>

</html>