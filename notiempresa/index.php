<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>NotiEmpresa - Inicio</title>
</head>
<body>

<?php
  include('bd/cn.php'); //conexión con base de datos notiempresa
?>

<!--Cabecera-->
<?php 
    require('include/header.php');
?>
<!--Fin cabecera-->

<div class="container-fluid" style="background-color: #042397; padding: 25px; margin-bottom: 2%; color: #fff; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <h2>NotiEmpresa</h2>
        </div>
    </div>
</div>

<!--Pie de pagina-->
<?php    
    require('include/footer.php');
?>
<!--Fin pie de pagina-->

<script src="js/bootstrap.bundle.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
</body>
</html>