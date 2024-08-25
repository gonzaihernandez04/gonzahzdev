<?php 
$validado = false;
$isHeaderVisible = false;
if(!$validado){?>
<?php /* W9swl.!ikpola8923^zk200 inicio HACER QUE ESCRIBA EN .ENV EN ALGUNA FUNCION PARA GENERAR .ENV RANDOM Y QUE EL ADMIN LO PUEDA VER*/?>
<?php include_once __DIR__ . '/../templates/seccion_container.php';?>

<div class="admin">
    <div class="admin__form">
        <form method="post" class=" formulario--admin">
            <?php if(!$esconder){?>
            <input type="text" name="token" id="token">
            <input type="submit" value="Validar">
            <?php }else{ ?>

                <p>Has alcanzado el limite de intentos. Espera 30 minutos</p>
                
                <?php }?>
        </form>
    </div>
</div>

<?php } ?>