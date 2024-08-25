
<?php include_once __DIR__ . '/../templates/seccion_container.php';?>


    <form method="POST" enctype="multipart/form-data" class="formulario--blog">

        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" placeholder="Ingrese el titulo">


        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" placeholder="Escribir descripcion para la publicacion"></textarea>

        <label for="imagen">Subir imagen</label>
        <input type="file" name="imagen" id="imagen">
        

        <input type="submit" value="Crear publicacion">

    </form>


