<?php
$nombreArchivo= strtolower( $_FILES['miArchivo']['name'] ); 

//Busco en el nombre si aparece pdf o doc

$mystring = $nombreArchivo;
$encontrar   = '.txt';
$pos = strpos($mystring, $encontrar);

 //controlar formatos
 if($pos=== false ) {
   $mensaje="Lo siento solo se permiten archivos txt. \n";
 }else{
  if (move_uploaded_file($_FILES['miArchivo']['tmp_name'],'../archivos/'.$nombreArchivo)){

    //convertir el contenido en un text area
 $archivo=file_get_contents('../archivos/'.$nombreArchivo);
 $mensaje= "<h3>Este es el contenido de su archivo de texto cargado:<h3> <br/>
 <textarea  rows='30' cols='70'> $archivo </textarea>";
 
}
echo $mensaje;
}

?>