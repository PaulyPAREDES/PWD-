<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../vista/estilo.css">
<title>T1 Ejercicio 2</title>
</head>
<body>
<?php
if ($_GET){
$hora1= $_GET['num1'] ;
$hora2= $_GET['num2'] ;
$hora3= $_GET['num3'] ;
$hora4= $_GET['num4'] ;
$hora5= $_GET['num5'] ;

$horas= array($hora1,$hora2,$hora3,$hora4,$hora5);

$totalHoras=0;

for($i=0; $i < count($horas); $i++){
    $totalHoras= $totalHoras + $horas[$i]; 
}
$mensaje= "El total de horas semanal es:".$totalHoras;
}

echo "<div class='resForm'>
<h2>$mensaje</h2>
<a href='../vista/formulario2.php'>Volver</a>
</div>";
?>

</body>

</html>