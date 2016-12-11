<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>beerExpress</title>
	<link rel="stylesheet" href="{{base_url()}}/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Beer Express</h1>
        <a href="{{ path_for ('logout') }}" class="btn btn-primary" role="button">Logout</a>
        <a href="{{ path_for ('nuevo') }}" class="btn btn-primary" role="button">Nuevo</a>
    </div>
    {% block body %}
    {% endblock %}
</body>
</html>
</html>