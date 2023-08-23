<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos.css">
<title>TP1 Ejercicio 4</title>
</head>

<body>



<form id="form4" name="form4" method="get" action="../control/verificaMayor18.php">
<label>Nombre:</label>
<input type="text" name="nombre" id="nombre" value=""  required=""/>
<br/>
<label>Apellido:</label>
<input type="text" name="apellido" id="apellido" value=""  required=""/>
<br/>
<label>Edad:</label>
<input type="text" name="edad"id="edad" value=""  required="" pattern="[0-9]+"/>
<br/>
<label>Direccion:</label>
<input type="text" name="direccion" id="direccion" value=""  required=""/>
<br/>
<br/>
<input type="submit" name="enviar" value="Enviar" />

</form>

</body>

</html>