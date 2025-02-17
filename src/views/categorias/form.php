<h2>Alta de categorias</h2>
<form action="alta_categoria.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del categoria" autocomplete="off">
    </div>

    <div class="buttons">
        <button type="submit" value=""> Agregar Categoria </button>
        <button type="button" onclick="location.href='http://localhost/CRUD/categorias'">Cancelar</button>
        <!-- <button type="button" onclick="location.href='../categorias'">Cancelar</button> -->
    </div>

</form>