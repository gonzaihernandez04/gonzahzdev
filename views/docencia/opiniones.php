<?php include_once __DIR__ . '/../templates/seccion_container.php'; ?>

<div class="cards__grid">

    <?php foreach ($opiniones as $opinion) : ?>


        <div class="card">

            <div class="card__head">
                <div class="card__persona">
                    <div class="card__persona-nombre">
                        <p><?php echo $opinion->persona["nombre"] ?? ''; ?></p>
                        <p><?php echo $opinion->persona["apellido"] ?? ''; ?></p>
                    </div>

                </div>



                <?// Parto para que en caso de que haya mas de un parrafo, deje espacios entre bloques?>
                <?php $parrafos = partirParrafo($opinion->comentario); ?>


                <div class="seccion__parrafo seccion__parrafo--extender">

                    <?php if(count($parrafos)>0){

                        foreach ($parrafos as $key => $parrafo) { ?>
                        <p class="card__mensaje lh-2"><?php echo $parrafos[$key] ?></p>

                    <?php } 
                
                        }else{?>
                        <p class="card__mensaje lh-2">No un mensaje para esta opinion</p>

                        <?php }; ?>

                </div>
             
                <?php if (count($parrafos) > 1) { ?>
                    <p class="seccion__guia">Seguir Leyendo</p>
                <?php } ?>


                <div class="card__stars">
                    <div class="stars">
                        <?php for ($i = (int) $opinion->puntuacion; $i >= 1; $i--) : ?>
                            <label for="radio<?php echo $i; ?>" class="activado">★</label>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>





        </div>

    <?php endforeach; ?>

</div>


</section>