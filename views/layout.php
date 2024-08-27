<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/build/img/ico/ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Hola! Mi nombre es Gonzalo Iván Hernández y te invito a ver mi porfolio donde podes ver mi trayecto como Tecnico en Computacion, docente y desarrollador de software, estudiante de Ingenieria en computacion en la Universidad Nacional de Tres de Febrero. Tambien podes ver las opiniones de mis alumnos y contactarme en caso de ser necesario. Te espero! ">
    <link rel="stylesheet" href="/build/css/app.css">
 

    <title>gonzahzdev | <?php echo $titulo ?? '';?> </title>
</head>
<body>

<div class="contenido">


<div class="menu">

<svg class="menu__svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M441.13,166.52h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/><path d="M441.13,279.72h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/><path d="M441.13,392.92h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/></g></svg>

</div>

    <?php if($isHeaderVisible){?>
         <?php include __DIR__ . '/templates/header.php';?>
    <?php }?>



        <?php include_once __DIR__ . '/templates/navegacion.php'; ?>


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
<?php $script .= "<script src='/build/js/modal.js'></script>" ?>
<?php $script .= "<script src='/build/js/navegacion.js'></script>" ?>
<?php echo $script ?? '';?>


    
</body>
</html>