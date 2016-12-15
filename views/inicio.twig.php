{% extends 'layout/plantilla.twig.php '%}


{% block body %}
	<h2>Listado de cervezas</h2><br>
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Fabricante</th>
			<th>Origen</th>
			<th>Cantidad</th>
			<th></th>
			<th></th>
		</tr>
		{% for r in beers %}
		<tr>
			<td>{{ r.__GET('id') }}</td>
			<td>{{ r.__GET('nombre') }}</td> <!-- '.' es igual a la '->' -->
			<td>{{ r.__GET('fabricante') }}</td>
			<td>{{ r.__GET('origen') }}</td>
			<td>{{ r.__GET('cantidad') }}</td>
			<td><a href="{{ path_for('borrar',{'id': r.__GET('id') }) }}">BORRAR</a></td> <!-- el : es igual a =>, y el [] a {} -->
			<td><a href="{{ path_for('editar',{'id': r.__GET('id') }) }}">EDITAR</a></td>  <!-- pathFor es igual a path_for -->
		</tr>
		{% endfor %}
	</table>
{% endblock %}
