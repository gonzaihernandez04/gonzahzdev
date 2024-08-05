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

                    <p><?php echo $opinion->persona["email"] ?? ''; ?></p>
                </div>

                <div class="card__stars">
                <div class="stars">
                <?php for ($i = 5; $i >= 1; $i--) : ?>
                    <input id="radio<?php echo $i; ?>" type="radio" name="estrellas" value="<?php echo $i; ?>">
                    <label for="radio<?php echo $i; ?>">★</label>
                <?php endfor; ?>
            </div>
                </div>
            </div>


            <div class="card__mensaje">
                <p><?php echo $opinion->comentario ?? ''; ?></p>
            </div>



        </div>

    <?php endforeach; ?>

</div>


</section>