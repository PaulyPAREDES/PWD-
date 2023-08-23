<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos.css">
<title>TP1 Ejercicio 3</title>
</head>

<body>


<div class="div3">

<form id="form3" name="form3" method="get" action="../control/convierteCadena.php">
<label>Nombre:</label>
<input type="text" name="nombre" id="nombre" value=""  required=""/>
<br>
<label>Apellido:</label>
<input type="text" name="apellido" id="apellido" value=""  required=""/>
<br>
<label>Edad:</label>
<input type="text" name="edad"id="edad" value=""  required="" pattern="[0-9]+"/>
<br>
<label>Direccion:</label>
<input type="text" name="direccion" id="direccion" value=""  required=""/>
<br>
<input type="submit" name="enviar" value="Enviar" />
<br><br>
</form>
</div>

</body>

</html>