<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../vista/estilo.css">
<title>TP1 Ejercicio 1</title>
</head>
<body>
<?php
if ($_POST){
$numero = $_POST['numero'] ;

if($numero > 0){
    $mensaje= "El numero es:<strong> POSITIVO </strong> "; 
}
else if ($numero == 0){
  $mensaje= "El numero es: <strong> 0 </strong> "; 
}
else{
    $mensaje = "El numero es:<strong> NEGATIVO </strong>"; 
}
echo " <div class='divFor1'>
<h2>$mensaje</h2>

<a href='../vista/formulario1.php'>Volver</a>

</div>";
}
?>




</body>

</html>