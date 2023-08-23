<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos4.css">
<title>TP1 Ejercicio 8</title>
</head>

<body>
<h3>Cine Cinem@s- Calcular tarifas</h3>
<form id="form8" name="form8" method="post" action="../control/calculaValorEntrada.php">
<label>Ingrese su edad:</label>
<input type="text" name="edad" id="edad" value=""  required=""/>
<br/>
<label>Estudiante?:</label>
<br/>
<div>
  <input type="radio" id="opcion" name="opcion" value="1" required/>
  <label>Si</label>
</div>
<div>
<input type="radio" id="opcion" name="opcion" value="2"/>
  <label>No</label>
</div>
<br/>
<div>
<input type="submit" name="enviar" value="Consultar valor" />
<input type="reset" value="Restaurar formulario">
</div>
</form>

</body>

</html>