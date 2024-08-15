<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Hola! Mi nombre es Gonzalo Iván Hernández y te invito a ver mi porfolio donde podes ver mi trayecto como Tecnico en Computacion, docente y desarrollador de software, estudiante de Ingenieria en computacion en la Universidad Nacional de Tres de Febrero. Tambien podes ver las opiniones de mis alumnos y contactarme en caso de ser necesario. Te espero! ">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    
    <title>gonzahzdev | <?php echo $titulo ?? '';?> </title>
</head>
<body>
<div class="contenido">
<?php include __DIR__ . '/templates/header.php';?>
<?php include __DIR__ . '/templates/secciones_enlaces.php'?>
<?php include __DIR__ . '/templates/pattern.php'?>
<?php echo $contenido;?>
</div>

<?php
    if(!isset($script)){
        $script = "";
    }
?>
<?php $script .= "<script src='/build/js/app.js'></script>"?>
<?php $script .= "<script src='/build/js/switch.js'></script>"?>
<!-- <?php $script .= "<script src='/build/js/secciones.js'></script>"?> -->

<?php $script .= "<script src = '/build/js/aclaracion.js'></script>";?>
<?php $script .= "<script src='/build/js/expandir.js'></script>" ?>
<?php $script .= "<script src='/build/js/modal.js'></script>" ?>
<?php $script .= "<script src='/build/js/navegacion.js'></script>" ?>
<?php echo $script ?? '';?>


    
</body>
</html>