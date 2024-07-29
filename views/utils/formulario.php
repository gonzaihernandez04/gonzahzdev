<div class="formulario__input">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="" placeholder="Nombre">
</div>

<div class="formulario__input">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="" placeholder="Apellido">
</div>

<div class="formulario__busqueda">


    <div class="formulario__aclaracion-container">


        <p class="formulario__aclaracion" aria-hidden="Si sos de la UBA, busca UBA y tu facultad, ejemplo (Ingenieria)">?</p>
        <div class="formulario__modal px-2">
            <p class="btn-cerrar text-right w-100">X</p>
        </div>
    </div>

    <label for="universidad">Universidad(Si no formas parte de una universidad, dejalo vacio.)</label>
    <input type="text" name="universidad" id="universidad" placeholder="Universidad">
    <button class="formulario__button formulario__button--buscar">
        Buscar
    </button>
    <div class="formulario__opciones">

    </div>

</div>

<div class="formulario__email">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Email">
</div>

<div class="formulario__recomendacion">
    <label for="recomendacion">¿Recomendas a Gonzalo Hernandez tanto como profesor como programador?</label>
    <input type="radio" name="recomendacion" id="">Si
    <input type="radio" name="recomendacion" id="">No
</div>