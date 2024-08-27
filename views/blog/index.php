<?php include_once __DIR__ . '/../templates/seccion_container.php'; ?>

<?php
$rand = rand(0, count($publicaciones) - 1 ?? 0);
$randPublication = [];
$randPublication = $publicaciones[$rand] ?? [];

?>
<div class="blog">
    <?php if (empty($randPublication)) { ?>
        <?php include_once __DIR__ . '/../templates/aviso.php' ?>
    <?php } ?>
    <a href="/blog/publicacion?id=<?php echo hashData($randPublication->id) ?? '';?>" class="decoration-none text-transparent all-unset">

    <div class="blog__heading">

        <div class="blog__heading-img blog__heading--grange">
            <picture>
                <img src="build/img/publicaciones/<?php echo $randPublication->imagen ?? '' ?>" alt="Imagen publicacion <?php echo $randPublication->imagen ?? '' ?>" loading="lazy">
            </picture>
        </div>
        <div class="blog__heading-text blog__heading-text--grande">
            <div class="blog__heading-title blog__heading-title--grande">
                <h3><?php echo $randPublication->titulo ?? '' ?></h3>
            </div>
            <div class="blog__heading-descripcion">
                <p><?php echo $randPublication->descripcion ?? ''; ?></p>
            </div>

            <div class="blog__heading-fecha">
                <p>📅 <?php echo fechaNumericaATexto($randPublication->fecha ?? ''); ?></p>
            </div>
        </div>
    
    </div>
    </a>
    <span class="separador my-2 w-100 mx-auto"></span>
    <div class="blog__publicaciones">
        <?php foreach ($publicaciones as $publicacion) { ?>
            <a href="/blog/publicacion?id=<?php echo hashData($publicacion->id) ?? '';?>" class="decoration-none text-transparent all-unset">
            <div class="publicacion">
                <div class="blog__heading-text">
                    <div class="blog__heading-title">
                        <h3><?php echo $publicacion->titulo ?? '' ?></h3>
                    </div>
                    <div class="blog__heading-descripcion">
                        <p><?php echo $publicacion->descripcion ?? ''; ?></p>
                    </div>

                    <div class="blog__heading-fecha">
                        <p>📅 <?php echo fechaNumericaATexto($publicacion->fecha ?? ''); ?></p>
                    </div>
                </div>
                <div class="blog__heading-img blog__heading-img--chico">
                    <picture>
                        <img src="build/img/publicaciones/<?php echo $publicacion->imagen ?? '' ?>" alt="Imagen publicacion <?php echo $randPublication->imagen ?? '' ?>" loading="lazy">
                    </picture>
                </div>
            </div>
            </a>
            <span class="separador my-2 w-100 mx-auto"></span>

        <?php } ?>
    </div>
</div>