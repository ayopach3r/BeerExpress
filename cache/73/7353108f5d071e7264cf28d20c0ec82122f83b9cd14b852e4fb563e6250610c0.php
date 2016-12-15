<?php

/* layout/plantilla.twig.php  */
class __TwigTemplate_c2d280c2817d7685544f15e062db8167c432b2dacb398a70ecc6b0077b0375a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>beerExpress</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assets/css/bootstrap.min.css\">
\t<style type=\"text/css\">
\t\tspan{
\t\t\tfont-weight: bold;
\t\t}

\t\ttr th{
\t\t\tbackground-color: grey;
\t\t\ttext-align: center;
\t\t\tcolor: white;
\t\t}

\t\thr{
\t\t\tborder: 1px solid black;
\t\t}
\t</style>
</head>
<body>
    <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<center>
        <h1>Beer Express</h1>
\t\t\t\t";
        // line 28
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 29
            echo "\t        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Logout</a>
\t        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("nuevo"), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Nuevo</a>
\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acerca"), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Acerca De</a>
\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
            echo "\" class=\"btn btn-success\" role=\"button\">Login</a>
\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acerca"), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Acerca De</a>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</center>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<center>
\t\t    \t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "\t\t\t\t</center>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t\t<hr>
\t\t\t\t\t<center><p><span>Desarrollado por:</span> ayopach3r</p></center>
\t\t\t</div>
\t\t</div>
</body>
</html>
</html>
";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "\t\t    \t";
    }

    public function getTemplateName()
    {
        return "layout/plantilla.twig.php ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  101 => 41,  87 => 43,  85 => 41,  78 => 36,  73 => 34,  68 => 33,  63 => 31,  59 => 30,  54 => 29,  52 => 28,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>beerExpress</title>
\t<link rel=\"stylesheet\" href=\"{{base_url()}}/assets/css/bootstrap.min.css\">
\t<style type=\"text/css\">
\t\tspan{
\t\t\tfont-weight: bold;
\t\t}

\t\ttr th{
\t\t\tbackground-color: grey;
\t\t\ttext-align: center;
\t\t\tcolor: white;
\t\t}

\t\thr{
\t\t\tborder: 1px solid black;
\t\t}
\t</style>
</head>
<body>
    <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<center>
        <h1>Beer Express</h1>
\t\t\t\t{% if user %}
\t        <a href=\"{{ path_for ('logout') }}\" class=\"btn btn-danger\" role=\"button\">Logout</a>
\t        <a href=\"{{ path_for ('nuevo') }}\" class=\"btn btn-warning\" role=\"button\">Nuevo</a>
\t\t\t\t\t<a href=\"{{ path_for ('acerca') }}\" class=\"btn btn-primary\" role=\"button\">Acerca De</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ path_for ('login') }}\" class=\"btn btn-success\" role=\"button\">Login</a>
\t\t\t\t\t<a href=\"{{ path_for ('acerca') }}\" class=\"btn btn-primary\" role=\"button\">Acerca De</a>
\t\t\t\t{% endif %}
\t\t\t</center>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<center>
\t\t    \t{% block body %}
\t\t    \t{% endblock %}
\t\t\t\t</center>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t\t<hr>
\t\t\t\t\t<center><p><span>Desarrollado por:</span> ayopach3r</p></center>
\t\t\t</div>
\t\t</div>
</body>
</html>
</html>
", "layout/plantilla.twig.php ", "C:\\wamp64\\www\\BeerExpress\\views\\layout\\plantilla.twig.php");
    }
}
