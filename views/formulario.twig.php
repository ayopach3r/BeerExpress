{% extends 'layout/plantilla.twig.php '%}


{% block body %}
	<h2>Formulario de edición</h2><br>
	<div class="col-xs-6 col-xs-offset-3">
	<form action="{% if elegida.__GET('id') > 0 %} {{ path_for('actualizar') }} {% else %} {{ path_for('nuevo') }} {% endif %}" method="post">

		<input type="hidden" name="id" value="{{ elegida.__GET('id') }}">

		<label for="nombre" class="col-xs-2 col-form-label">Nombre: </label>
		<div class="col-xs-10">
			<input type="text" name="nombre" value="{{ elegida.__GET('nombre') }}" class="form-control"><br>
		</div>

		<label for="fabricante" class="col-xs-2 col-form-label">Fabricante: </label>
		<div class="col-xs-10">
			<input type="text" name="fabricante" value="{{ elegida.__GET('fabricante') }}" class="form-control"><br>
		</div>

		<label for="origen" class="col-xs-2 col-form-label">Origen: </label>
		<div class="col-xs-10">
			<input type="text" name="origen" value="{{ elegida.__GET('origen') }}" class="form-control"><br>
		</div>

		<label for="cantidad" class="col-xs-2 col-form-label">Cantidad: </label>
		<div class="col-xs-10">
			<input type="text" name="cantidad" value="{{ elegida.__GET('cantidad') }}" class="form-control"><br>
		</div>

		<center><button type="submit" class="btn btn-info">Guardar</button></center>
	</form>
</div>
{% endblock %}
