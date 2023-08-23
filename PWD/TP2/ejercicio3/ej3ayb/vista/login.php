<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilosLog.css">
    <title>TP2 Ejercicio 3 a</title>
    <script type="text/javascript" src="validacion.js">  </script>
</head>
<body>
<div class="login">
<div id="texto">Bievenido</div>
<form id="formL" name="formL" method="post" action="../control/verificaPass.php" onsubmit=" return validar();">
    <input type="text" name="nombre" id="nombre" maxlength="30" placeholder="usuario"/>
    <input type="password"  name="clave" id="clave" maxlength="20"  placeholder="contraseña"/>
    <input type="submit" name="enviar" value="Login" />
</div>
<div id="divError"></div>
</body>
</html>