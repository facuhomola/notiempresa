<?php
/*
session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];
if (!isset($user)) {
    header("location:login.php");
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./../css/style.css" type="text/css">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>NotiEmpresa - Registro</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('./../include/header.php');
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" enctype="multipart/form-data" autocomplete="on" action="validarRegistro.php" method="post" name="form" id="form">
  <h4>Formulario Registro - Complete los campos solicitados</h4>
  <input class="controls" type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario">
    <input type="password" name="pass" placeholder="Contraseña" class="controls">
    Seleccione el tipo de usuario <br>
    <select class="controls" name="tipouser" id="tipouser">
        <option value="1">Publicador</option>
        <option value="2">Validador</option>
        <option value="3">Ambas</option>
    </select> 
    <input class="botons" type="submit" value="Registrar">
  </form>  
</section>
    

<!--Pie de pagina-->
<?php    
    require('./../include/footer.php');
?>
<!--Fin pie de pagina-->

<script src="./../js/bootstrap.bundle.min.js"></script>
</body>
</html>