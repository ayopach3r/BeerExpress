<?php

/* formulario.twig.php */
class __TwigTemplate_07eb8ee7695b6285eefeb43b3ca5748a31369e5b06e064eeb1a3a4c8f72b1ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantilla.twig.php ", "formulario.twig.php", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/plantilla.twig.php ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>Formulario de edición</h2><br>
\t<div class=\"col-xs-6 col-xs-offset-3\">
\t<form action=\"";
        // line 7
        if (($this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "id"), "method") > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("actualizar"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("nuevo"), "html", null, true);
            echo " ";
        }
        echo "\" method=\"post\">

\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "id"), "method"), "html", null, true);
        echo "\">

\t\t<label for=\"nombre\" class=\"col-xs-2 col-form-label\">Nombre: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"nombre\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "nombre"), "method"), "html", null, true);
        echo "\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"fabricante\" class=\"col-xs-2 col-form-label\">Fabricante: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"fabricante\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "fabricante"), "method"), "html", null, true);
        echo "\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"origen\" class=\"col-xs-2 col-form-label\">Origen: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"origen\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "origen"), "method"), "html", null, true);
        echo "\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"cantidad\" class=\"col-xs-2 col-form-label\">Cantidad: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"cantidad\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elegida"]) ? $context["elegida"] : null), "__GET", array(0 => "cantidad"), "method"), "html", null, true);
        echo "\" class=\"form-control\"><br>
\t\t</div>

\t\t<center><button type=\"submit\" class=\"btn btn-info\">Guardar</button></center>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "formulario.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  71 => 23,  63 => 18,  55 => 13,  48 => 9,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/plantilla.twig.php '%}


{% block body %}
\t<h2>Formulario de edición</h2><br>
\t<div class=\"col-xs-6 col-xs-offset-3\">
\t<form action=\"{% if elegida.__GET('id') > 0 %} {{ path_for('actualizar') }} {% else %} {{ path_for('nuevo') }} {% endif %}\" method=\"post\">

\t\t<input type=\"hidden\" name=\"id\" value=\"{{ elegida.__GET('id') }}\">

\t\t<label for=\"nombre\" class=\"col-xs-2 col-form-label\">Nombre: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"nombre\" value=\"{{ elegida.__GET('nombre') }}\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"fabricante\" class=\"col-xs-2 col-form-label\">Fabricante: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"fabricante\" value=\"{{ elegida.__GET('fabricante') }}\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"origen\" class=\"col-xs-2 col-form-label\">Origen: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"origen\" value=\"{{ elegida.__GET('origen') }}\" class=\"form-control\"><br>
\t\t</div>

\t\t<label for=\"cantidad\" class=\"col-xs-2 col-form-label\">Cantidad: </label>
\t\t<div class=\"col-xs-10\">
\t\t\t<input type=\"text\" name=\"cantidad\" value=\"{{ elegida.__GET('cantidad') }}\" class=\"form-control\"><br>
\t\t</div>

\t\t<center><button type=\"submit\" class=\"btn btn-info\">Guardar</button></center>
\t</form>
</div>
{% endblock %}
", "formulario.twig.php", "C:\\wamp64\\www\\BeerExpress\\views\\formulario.twig.php");
    }
}
