<!DOCTYPE html PUBLIC >
<html  lang="es" xml:lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<title>TP3 Ejercicio 4</title>
<style> 
    .col-md-6{    
        background-color: #DDF7C4;
    }
    p{
        color:#39882F;
    }
    h3{
        color:#558FDE;  
    }
   </style>
</head>
<body>
<?php
if ($_POST){
$titulo= $_POST["titulo"] ;
$actores= $_POST["actores"] ;
$director= $_POST["director"] ;
$guion= $_POST["guion"] ;
$produccion= $_POST["produccion"] ;
$anio= $_POST["anio"] ;
$nacionalidad= $_POST["nacionalidad"] ;
$genero= $_POST["genero"] ;
$duracion= $_POST["duracion"] ;
$opcionEdad= $_POST["opcionEdad"] ;

 //Evalua generos 
 if($genero == 1){
    $valorGenero= "Terror";
   }
   else if($genero == 2){
    $valorGenero= "Comedia";
   }
   else if($genero == 3){
    $valorGenero= "Ciencia Ficcion";
   }
  else if($genero == 4){
  $valorGenero= "Animada";
   }
 else if($genero == 5){
    $valorGenero= "Triller";
     }
 else {
        $valorGenero= "Accion";
         }

//  Evalua edad
if($opcionEdad== 1){
    $edad= " Todo Público.";
   }
   else if($opcionEdad == 2){
    $edad= " Mayores de 7 años";
   }else{
    $edad= "Mayores de 18 años";
   }


/* archivo*/  

$nombreArchivo= strtolower( $_FILES['imagenPeli']['name'] ); 
$subirOk = true;
//controlo que sea imagen

$mystring = $nombreArchivo;
$encontrar   = '.png';
$encontrar2   = '.jpg';
$pos1 = strpos($mystring, $encontrar);
$pos2 = strpos($mystring, $encontrar2);

 //controar formatos
 if($pos1=== false || $pos1=== false) {
    $mensaje= "Lo siento solo se permiten archivos png o jpg. \n";
   $subirOk = false;
 }



if ($subirOk == false) {

 $mensaje= "ERROR: no se pudo cargar el archivo";
}else{
  if (move_uploaded_file($_FILES['imagenPeli']['tmp_name'],'archivos/'.$nombreArchivo)){
    $mensaje =" ";
   
  }else{
    $mensaje= "Lo siento, hubo un error al cargar su archivo.";
  }
}
/*descripcion Pantalla*/
echo"
<div class='container'>
  <div class='row'>
    <div class='col-md-6'>
    <h3>La pelìcula introducida es</h3>
    <p><strong>$mensaje</strong></<p>
    <img src='archivos/$nombreArchivo' height='70px' width='70px' border='2px' alt='Pelicula'/>
    <br/>
    <p><strong>Titulo:</strong> $titulo <br/>
       <strong>Actores:</strong>$actores <br/>
       <strong>Director:</strong> $director <br/>
       <strong>Guiòn:</strong> $guion<br/>
       <strong>Producion:</strong> $produccion<br/>
       <strong>Año:</strong> $anio <br/>
       <strong>Nacionalidad:</strong> $nacionalidad <br/>
       <strong>Gènero:</strong>  $valorGenero<br/>
       <strong>Duraciòn:</strong>$duracion<br/>
       <strong>Restrincciones de edad:</strong> $edad <br/>
    </p>
   </div>
  </div>

</div>";

}
?>
</body>

</html>