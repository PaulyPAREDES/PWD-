<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 5</title>
</head>
<body>
<?php
if ($_POST){
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $edad = $_POST['edad'];
   $direccion = $_POST['direccion'];
   $estudios= $_POST['opcion'];
   $sexo = $_POST['sexo'];

   echo "Hola, yo soy " .$nombre." , ".$apellido. " tengo ".$edad." años y vivo en ".$direccion."\n";

   if($sexo == "M"){
    echo "\n soy hombre,";
   }
   else if($sexo == "F"){
    echo "\n soy mujer,";
   }else{
    echo "\n soy No binario,";
   }

   /*Evalua estudios */
   if($estudios == 1){
    echo " No poseo estudios.";
   }
   else if($estudios == 2){
    echo " Poseo estudios primarios.";
   }else{
    echo " Poseo estudios secundarios.";
   }

  }
  
?>

</body>

</html>