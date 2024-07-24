<?php include_once __DIR__ . '/../templates/seccion_container.php';?>

    <div class="seccion__grid grid grid-cols-3 gap-5 ">
        <?php foreach ($proyectos as $key => $proyecto) : ?>
            <div class="seccion__card seccion__card--proyectos">
                <div class="seccion__card-img seccion__card-img--proyectos">
                    <!-- Aquí puedes añadir la imagen si es necesario -->
                    <a href="<?php echo sanitizar($proyecto->urlWeb ?? '');?>">

                        <picture>
                            <source srcset="build/img/<?php echo $proyecto->imagen ?? ''; ?>.webp" type="image/webp">
                            <img src="build/img/<?php echo sanitizar($proyecto->imagen) ?? ''; ?>.png" loading="lazy" alt="Imagen del proyecto">
                        </picture>

                    </a>
                </div>

                <div class="seccion__texto seccion__texto--proyectos">
                    <h3><?php echo sanitizar($proyecto->nombreProyecto) ?? ''; ?></h3>

                    <?php
                    $parrafos = partirParrafo(sanitizar($proyecto->descripcion));
                    ?>

                    <div class="seccion__parrafo seccion__parrafo--proyectos">
                        <?php foreach ($parrafos as $key => $parrafo) : ?>
                            <p><?php echo $parrafos[$key] ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php if (count($parrafos) > 0) { ?>
                        <p class="seccion__guia">Seguir Leyendo</p>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php $script = "<script src='build/js/expandir.js'></script>" ?>