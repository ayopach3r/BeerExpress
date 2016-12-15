<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>beerExpress</title>
	<link rel="stylesheet" href="{{base_url()}}/assets/css/bootstrap.min.css">
	<style type="text/css">
		span{
			font-weight: bold;
		}

		tr th{
			background-color: grey;
			text-align: center;
			color: white;
		}

		hr{
			border: 1px solid black;
		}
	</style>
</head>
<body>
    <div class="container">
			<div class="row">
				<center>
        <h1>Beer Express</h1>
				{% if user %}
	        <a href="{{ path_for ('logout') }}" class="btn btn-danger" role="button">Logout</a>
	        <a href="{{ path_for ('nuevo') }}" class="btn btn-warning" role="button">Nuevo</a>
					<a href="{{ path_for ('acerca') }}" class="btn btn-primary" role="button">Acerca De</a>
				{% else %}
					<a href="{{ path_for ('login') }}" class="btn btn-success" role="button">Login</a>
					<a href="{{ path_for ('acerca') }}" class="btn btn-primary" role="button">Acerca De</a>
				{% endif %}
			</center>
				<hr>
			</div>
			<div class="row">
				<center>
		    	{% block body %}
		    	{% endblock %}
				</center>
			</div>
			<div class="row">
					<hr>
					<center><p><span>Desarrollado por:</span> ayopach3r</p></center>
			</div>
		</div>
</body>
</html>
</html>
