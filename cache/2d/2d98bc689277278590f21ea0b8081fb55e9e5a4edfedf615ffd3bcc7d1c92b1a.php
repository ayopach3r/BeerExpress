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
        echo "\t<form action=\"\" method=\"post\" role=\"form\">
\t\t<input type=\"hidden\" name=\"id\" value=\"\">
\t\t<label for=\"nombre\" class=\"col-xs-2 col-form-label\">Nombre: </label>
\t\t<input type=\"text\" name=\"nombre\" value=\"\" class=\"form-control\">
\t\t<label for=\"fabricante\" class=\"col-xs-2 col-form-label\">Fabricante: </label>
\t\t<input type=\"text\" name=\"fabricante\" value=\"\" class=\"form-control\">
\t\t<label for=\"origen\" class=\"col-xs-2 col-form-label\">Origen: </label>
\t\t<input type=\"text\" name=\"origen\" value=\"\" class=\"form-control\">
\t\t<label for=\"cantidad\" class=\"col-xs-2 col-form-label\">Cantidad: </label>
\t\t<input type=\"text\" name=\"cantidad\" value=\"\" class=\"form-control\">
\t\t<button type=\"submit\" class=\"btn btn-info\">Guardar</button>
\t</form>
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
        return array (  31 => 5,  28 => 4,  11 => 1,);
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
\t<form action=\"\" method=\"post\" role=\"form\">
\t\t<input type=\"hidden\" name=\"id\" value=\"\">
\t\t<label for=\"nombre\" class=\"col-xs-2 col-form-label\">Nombre: </label>
\t\t<input type=\"text\" name=\"nombre\" value=\"\" class=\"form-control\">
\t\t<label for=\"fabricante\" class=\"col-xs-2 col-form-label\">Fabricante: </label>
\t\t<input type=\"text\" name=\"fabricante\" value=\"\" class=\"form-control\">
\t\t<label for=\"origen\" class=\"col-xs-2 col-form-label\">Origen: </label>
\t\t<input type=\"text\" name=\"origen\" value=\"\" class=\"form-control\">
\t\t<label for=\"cantidad\" class=\"col-xs-2 col-form-label\">Cantidad: </label>
\t\t<input type=\"text\" name=\"cantidad\" value=\"\" class=\"form-control\">
\t\t<button type=\"submit\" class=\"btn btn-info\">Guardar</button>
\t</form>
{% endblock %}", "formulario.twig.php", "C:\\wamp64\\www\\BeerExpress\\views\\formulario.twig.php");
    }
}
