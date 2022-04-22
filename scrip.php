<?php

$destino = "******************";
$nombre = $_POST["Nombre"];
$telefono = $_POST["Telefono"];
$correo = $_POSTO["Correo"];
$mensaje = $_POST["Consulta"];
$mensaje = $_POST["Descripcion"];

$contenido = "Nombre: ".$nombre. "\nTelefono: " .$telefono. "\nCorreo: " .$correo. "\nDescripcion: " .$mensaje. "\nconsulta:";
$resultado = mail($destino, "Cotizacion", $contenido);

if($resultado == true){
  echo '<script language="javascript">alert("Su mensaje ha sido enviado")<script>';
}else {
  echo echo '<script language="javascript">alert("Error al mandar mensaje")<script>';
}

 ?>

