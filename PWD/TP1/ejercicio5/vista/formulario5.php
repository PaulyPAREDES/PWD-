<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos3.css">
<title>TP1 Ejercicio 5</title>
</head>

<body>

<form id="form5" name="form5" method="post" action="../control/verificaEstudios.php">
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
<label>Nivel de Estudios:</label>
<br/>
<div>
  <input type="radio" id="opcion" name="opcion" value="1" required/>
  <label>No tiene estudios</label>
</div>
<div>
<input type="radio" id="opcion" name="opcion" value="2"/>
  <label>Estudios primarios</label>
</div>
<div>
<input type="radio" id="opcion" name="opcion" value="3"/>
  <label>Estudios secundarios</label>
</div>
<br/>
<label>Sexo</label>
   <select name="sexo" required="">
      <option>M
      <option>F
      <option>X
   </select>
<br/>
<br/>
<input type="submit" name="enviar" value="Enviar" />
</form>

</body>

</html>