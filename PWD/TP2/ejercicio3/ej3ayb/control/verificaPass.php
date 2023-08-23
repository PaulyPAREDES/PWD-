<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilosLog.css">
<title>TP3 Ejercicio 3 a</title>
</head>
<body>
<?php
if ($_POST){
$usuarioIngresado = $_POST['nombre'] ;
$claveIngresado = $_POST['clave'] ;
$encontrado= false;

$arrayUsuario= [
    "messi" => "ad123456", 
    "admin" => "ad1478567",
    "alumno" => "1234qwer",
    "master" => "asdfgh2023",
    "superMan" => "111111uno",
    "batman" => "abc123456",
  ];

  foreach($arrayUsuario as $usuario => $clave){
    if($usuario == $usuarioIngresado && $clave == $claveIngresado){
        $encontrado= true;
    } 
}
if( $encontrado == true){
    echo"<div><h2> Bienvenido: $usuarioIngresado </h2></div>";
}else{
    echo"<strong>ERROR...</strong> NO existe el usuario ingresado"; 
}
}
?>

</body>

</html>