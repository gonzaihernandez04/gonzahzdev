<?php include_once __DIR__ . '/../templates/seccion_container.php'; ?>
<span class="separador opacity-lighten"></span>
<div class="publicacion--single">
    <div class="publicacion__img">
        <picture>
            <img loading="lazy" src="/build/img/publicaciones/<?php echo $publicacion->imagen; ?>" alt="Imagen: <?php echo $publicacion->imagen ?>">
        </picture>
    </div>
    <div class="publicacion__informacion">

        <div class="publicacion__fecha">
            <p>📅 <?php echo fechaNumericaATexto($publicacion->fecha) . " ● " . $publicacion->hora ?? ''; ?></p>
        </div>

        <span class="separador opacity-lighten w-100"></span>

        <div class="publicacion__descripcion">
            <?php $parrafos = partirParrafo($publicacion->descripcion)?>
            
            <?php foreach($parrafos as $parrafo){?>
                <p><?php echo  $parrafo ?? ''; ?></p>
            <?php } ?>
        </div>
    </div>

<div class="publicacion__volver">
    <a href="/blog">Volver</a>
</div>
</div>