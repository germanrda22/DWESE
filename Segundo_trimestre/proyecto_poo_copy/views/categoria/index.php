<h1>Gestionar Categorias</h1>
<a href="<?=base_url?>categoria/crear" class="button button-small">Crear Categoria</a>
<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>	
<?php while($cat = $categorias->fetchObject()): ?>
	<tr>
		<td>
			<?=$cat->id;?>
		</td>
		<td>
			<?=$cat->nombre;?>
		</td>
	</tr>
<?php endwhile;?>	
</table>