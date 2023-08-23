<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos4.css">
<title>TP1 Ejercicio 7</title>
</head>

<body>

<form id="form7" name="form7" method="post" action="../control/operaciones.php">
<h2>Operaciones matematicas</h2>
<input type="text" name="numero1" id="numero1" value="" PLACEHOLDER="1er numero" required=""/>
<br/>
<br/>
<input type="text" name="numero2" id="numero2" value="" PLACEHOLDER="2do numero" required=""/>
<br/>
<br/>

   <select name="operacion">
      <option>SUMA</option>
      <option>RESTA</option>
      <option>MULTIPLICACION</option>
      <option>DIVISION</option>
   </select>
<br/>
<br/>
<input type="submit" name="enviar" value="Enviar" />
</form>

</body>

</html>