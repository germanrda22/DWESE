<h1>Crear Categoria</h1>

<form action="<?=base_url?>categoria/save" method="post">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" require>
	<input type="submit" value="Guardar">
</form>