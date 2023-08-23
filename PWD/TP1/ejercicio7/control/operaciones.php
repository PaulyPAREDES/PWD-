<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TP1 Ejercicio 7</title>
</head>
<body>
<?php
if ($_POST){
   $num1= $_POST['numero1'];
   $num2= $_POST['numero2']; 
   $operacion= $_POST['operacion']; 

   if($operacion == "SUMA"){
    $resultado= $num1 +  $num2;
   }
   else if ($operacion == "RESTA"){
    $resultado= $num1 - $num2;
   }
   else if ($operacion == "MULTIPLICACION"){
    $resultado= $num1 * $num2;
   }
   else if ($operacion == "DIVISION"){
    $resultado= $num1 / $num2;
   }

   echo " La ".  $operacion. " entre los valores ". $num1." y ".$num2." es: ".$resultado;
  }
  
?>

</body>

</html>