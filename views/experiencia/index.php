<?php include_once __DIR__ . '/../templates/seccion_container.php';?>

    <?php foreach ($experiencias as $key => $experiencia) : ?>
        <div class="seccion__subtitulo">
            <div class="seccion__row">
                <h3><?php echo sanitizar( $experiencia->nombre) ?? ''; ?>  </h3>|
                <p class="seccion__row-subdata"><?php echo sanitizar( $experiencia->fechaInicio) ?? ''; ?> - <?php echo $experiencia->fechaFin ?? "Actualmente"; ?></p>
            </div>
            <div class="seccion__texto">
                <?php
                    $parrafos = partirParrafo(sanitizar($experiencia->descripcion));
                    //Hace un SPLIT cuando detecta dos espacios. Divide en parrafos
                   
                ?>
                <div class="seccion__parrafo">
                        <?php foreach ($parrafos as $key => $parrafo) : ?>
                            <p><?php echo $parrafos[$key] ?></p>
                        <?php endforeach; ?>
                    </div>

            </div>

        </div>
    <?php endforeach; ?>
</section>

<?php $script = "<script src='/build/js/expandir.js'></script>" ?>
