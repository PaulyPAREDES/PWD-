<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>TP1 Ejercicio 2</title>
</head>

<body>
<div class="form2">
<h2>Ingrese las horas de cursada de PDW :</h2>

<form id="form2" name="form2" method="get" action="../control/cuentaHoras.php">

<div class="divImput">
<label>Lunes:</label>
<input type="Text" name="num1" id="num1" value="" size="5" required="" pattern="[0-9]+"/>
</div>

<div  class="divImput">
<label>Martes:</label>
<input type="Text" name="num2" id="num2" value="" size="5" required="" pattern="[0-9]+"/>
</div>
<div class="divImput">
<label>Miercoles:</label>
<input type="Text" name="num3" id="num3" value="" size="5" required="" pattern="[0-9]+"/>
</div>
<div class="divImput">
<label>Jueves:</label>
<input type="Text" name="num4"id="num4" value="" size="5" required="" pattern="[0-9]+"/>
</div>
<div class="divImput">
<label>Viernes:</label>
<input type="Text" name="num5" id="num5" value="" size="5"  required="" pattern="[0-9]+"/>
</div>

<input type="submit" name="enviar" value="Enviar Datos" />

</form>
</div>
</body>


</html>