<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 6</title>
</head>
<body>
<?php
if ($_POST){
   $edad = $_POST['edad'];
   $estudiante= $_POST['opcion'];
 
   /*Evalua estudios */
   if($estudiante == 1 || $edad < 12 ){
    $precioEntrada=160;
   }
   else if($estudiante == 1 && $edad >= 12 ){
    $precioEntrada=180;
   }else{
    $precioEntrada=300;
   }

   echo "Su valor de entrada es: $".$precioEntrada;
  }
?>
  <br/>
  <br/>
  <a href="../vista/formulario8.php"><input type="submit" name="enviar" value="Nueva consulta" /></a>

</body>

</html>