<?php

  $servidor="localhost";
  $usuario ="root";
  $bd="smart4you";
  $clave="";

  $conexion= mysqli_connect($servidor, $usuario, $clave , $bd) or die("Error en la conexion");
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $correo = $_POST["correo"];
  $pais = $_POST["pais"];
  $mensaje = $_POST["mensaje"];

  guardarDatos($conexion, $nombre, $apellido, $correo, $pais, $mensaje);

  function guardarDatos($conexion, $nombre, $apellido, $correo, $pais, $mensaje){
    $informacion = [];
    $update=mysqli_query($conexion,"INSERT INTO datosusuario VALUES(NULL , '".$nombre."', '".$apellido."', '".$pais."', '".$correo."', '".$mensaje."') ") or die("Error al consultar");
    if($update){
      $informacion["respuesta"] = "BIEN";
    }else{
      $informacion["respuesta"] = "ERROR";
    }
    echo json_encode($informacion);
  }


?>
