<section class="seccion container">
    <div class="seccion__titulo">
        <h2>Estudios 📚</h2>
    </div>
    <?php foreach ($estudios as $key => $estudio) : ?>
        <div class="seccion__subtitulo">
            <div class="seccion__row">
                <h3><?php echo $estudio->nombreInstitucion; ?>  </h3>|
                <p class="seccion__row-subdata"><?php echo $estudio->fecha ?? "No finalizado" ?></p>
            </div>
            <div class="seccion__texto">
                <?php
                    $texto = $estudio->descripcion;
                    //Hace un SPLIT cuando detecta dos espacios. Divide en parrafos
                    $parrafos = preg_split('/\n{2,}/', $texto);
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