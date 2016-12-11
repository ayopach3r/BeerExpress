{% extends 'layout/plantilla.twig.php '%}


{% block body %}
	<form action="{% if elegida.__GET('id') > 0 %} {{ path_for('actualizar') }} {% else %} {{ path_for('nuevo') }} {% endif %}" method="post">

		<input type="hidden" name="id" value="{{ elegida.__GET('id') }}">

		<label for="nombre" class="col-xs-2 col-form-label">Nombre: </label>
		<input type="text" name="nombre" value="{{ elegida.__GET('nombre') }}" class="form-control">

		<label for="fabricante" class="col-xs-2 col-form-label">Fabricante: </label>
		<input type="text" name="fabricante" value="{{ elegida.__GET('fabricante') }}" class="form-control">

		<label for="origen" class="col-xs-2 col-form-label">Origen: </label>
		<input type="text" name="origen" value="{{ elegida.__GET('origen') }}" class="form-control">

		<label for="cantidad" class="col-xs-2 col-form-label">Cantidad: </label>
		<input type="text" name="cantidad" value="{{ elegida.__GET('cantidad') }}" class="form-control">

		<button type="submit" class="btn btn-info">Guardar</button>
	</form>
{% endblock %}