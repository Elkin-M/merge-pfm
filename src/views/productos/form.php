<h2><?php echo $respuesta['form']['title'];?></h2>
    <form action="editar_producto.html" method="post" enctype="multipart/form-data">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" autocomplete="off" value="pizza de muzzarela">
        </div>

        <div>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" accept="imagen/image,jpge/png">
        </div>

        <div>
            <label><input type="checkbox" name="categoria" value="pizza">pizza</label>
            <label><input type="checkbox" name="categoria" value="bebidas">bebidas</label>
        </div>

        <div>
            <label for="estado">estado</label>
            <select name="estado" id="estado">
                <option value="" selected>Activo</option>
                <option value="">Inactivo</option>
            </select>
        </div>

        <div class="buttons">
            <button type="submit" value=""><?php echo $respuesta['form']['button'];?></button>
            <button type="button" onclick="location.href='http://localhost/CRUD/productos'">Cancelar</button>
            <!-- <button type="button" onclick="location.href='../productos'">Cancelar</button> -->

        </div>

    </form>