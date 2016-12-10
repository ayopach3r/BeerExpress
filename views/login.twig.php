{% extends 'layout/plantilla.twig.php '%}

{% block body %}
<form action="" method="post" class="form-horizontal">
    
    <h1>Login</h1>
    <div class="form-group">
        <label class="col-xs-2 control-label">Nick:</label>
        <div class="col-xs-10">
            <input class="form-control" type="text" name="nick" id="nick" placeholder="nick">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label">Password:</label>
        <div class="col-xs-10">
            <input class="form-control" type="password" name="password" id="password" placeholder="password">
        </div>
    </div>
    <p><input type="submit" name="iniciar" id="iniciar"  class="btn btn-info"></p>
</form>
{% endblock %}
