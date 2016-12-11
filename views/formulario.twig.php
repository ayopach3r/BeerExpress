{% extends 'layout/plantilla.twig.php '%}


{% block body %}
	<form action="" method="post" role="form">
		<input type="hidden" name="id" value="">
		<label for="nombre" class="col-xs-2 col-form-label">Nombre: </label>
		<input type="text" name="nombre" value="" class="form-control">
		<label for="fabricante" class="col-xs-2 col-form-label">Fabricante: </label>
		<input type="text" name="fabricante" value="" class="form-control">
		<label for="origen" class="col-xs-2 col-form-label">Origen: </label>
		<input type="text" name="origen" value="" class="form-control">
		<label for="cantidad" class="col-xs-2 col-form-label">Cantidad: </label>
		<input type="text" name="cantidad" value="" class="form-control">
		<button type="submit" class="btn btn-info">Guardar</button>
	</form>
{% endblock %}