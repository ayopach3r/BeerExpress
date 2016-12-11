{% extends 'layout/plantilla.twig.php '%}


{% block body %}
	<h2>Inicio</h2>
	<hr>
	<table class="table table-hover">
		<tr>
			<th style="text-align:left;">Id</th>
			<th style="text-align:left;">Nombre</th>
			<th style="text-align:left;">Fabricante</th>
			<th style="text-align:left;">Origen</th>
			<th style="text-align:left;">Cantidad</th>
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
			<td><a href="">EDITAR</a></td>  <!-- pathFor es igual a path_for -->
		</tr>
		{% endfor %}
	</table>
{% endblock %}