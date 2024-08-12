<?php include_once __DIR__ . '/../templates/alertas.php' ?>
<div class="formulario__container">
    <div class="formulario__input">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    </div>

    <div class="formulario__input">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
    </div>

    <div class="formulario__busqueda">

        <div class="formulario__modal px-2">
            <p class="btn-cerrar text-right w-100">X</p>
        </div>

        <label for="universidad">Universidad(Si no formas parte de una universidad, dejalo vacio.)</label>
        <div class="formulario__input">
            <input type="text" name="universidad" id="universidad" placeholder="Universidad">

            <p class="formulario__aclaracion" aria-hidden="Si sos de la UBA, busca UBA y tu facultad, ejemplo (Ingenieria)">?</p>
        </div>
        <!-- <button class="formulario__button formulario__button--buscar formulario__boton" type="button">
            Buscar
        </button>
        <div class="formulario__opciones">

        </div> -->

    </div>

    <div class="formulario__email">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
    </div>

    <div class="formulario__textarea">
        <label for="comentario">Mensaje</label>
        <textarea name="comentario" id="comentario" placeholder="Deja tu comentario para mi aca :D"></textarea>
    </div>

    <div class="formulario__recomendacion">
        <h3 class="formulario__recomendacion-title">¿Recomendas a Gonzalo Hernández tanto como profesor como programador?</h3>
        <div class="formulario__recomendacion-container flex row align-center gap-2 m-0">
            <label for="estrellas">Puntuación</label>
            <div class="stars">
                <?php for ($i = 5; $i >= 1; $i--) : ?>
                    <input id="radio<?php echo $i; ?>" type="radio" name="estrellas" value="<?php echo $i; ?>">
                    <label for="radio<?php echo $i; ?>">★</label>
                <?php endfor; ?>
            </div>
        </div>
    </div>



</div>

