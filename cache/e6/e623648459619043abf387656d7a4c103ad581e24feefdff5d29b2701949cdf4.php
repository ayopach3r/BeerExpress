<?php

/* inicio.twig.php */
class __TwigTemplate_b3bd7e29c77cb9065cf9061718520b1bec4b1c16a41012882cffc3d7a822897b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantilla.twig.php ", "inicio.twig.php", 1);
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
        echo "\t<h2>Inicio</h2>
\t<hr>
\t<table class=\"table table-hover\">
\t\t<tr>
\t\t\t<th style=\"text-align:left;\">Nombre</th>
\t\t\t<th style=\"text-align:left;\">Fabricante</th>
\t\t\t<th style=\"text-align:left;\">Origen</th>
\t\t\t<th style=\"text-align:left;\">Cantidad</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) ? $context["beers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 17
            echo "\t\t<tr>
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "__GET", array(0 => "nombre"), "method"), "html", null, true);
            echo "</td> <!-- '.' es igual a la '->' -->
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "__GET", array(0 => "fabricante"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "__GET", array(0 => "origen"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "__GET", array(0 => "cantidad"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"\">BORRAR</a></td> <!-- el : es igual a =>, y el [] a {} -->
\t\t\t<td><a href=\"\">EDITAR</a></td>  <!-- pathFor es igual a path_for -->
\t\t\t
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "inicio.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  48 => 17,  44 => 16,  31 => 5,  28 => 4,  11 => 1,);
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
\t<h2>Inicio</h2>
\t<hr>
\t<table class=\"table table-hover\">
\t\t<tr>
\t\t\t<th style=\"text-align:left;\">Nombre</th>
\t\t\t<th style=\"text-align:left;\">Fabricante</th>
\t\t\t<th style=\"text-align:left;\">Origen</th>
\t\t\t<th style=\"text-align:left;\">Cantidad</th>
\t\t\t<th></th>
\t\t\t<th></th>
\t\t</tr>
\t\t{% for r in beers %}
\t\t<tr>
\t\t\t<td>{{ r.__GET('nombre') }}</td> <!-- '.' es igual a la '->' -->
\t\t\t<td>{{ r.__GET('fabricante') }}</td>
\t\t\t<td>{{ r.__GET('origen') }}</td>
\t\t\t<td>{{ r.__GET('cantidad') }}</td>
\t\t\t<td><a href=\"\">BORRAR</a></td> <!-- el : es igual a =>, y el [] a {} -->
\t\t\t<td><a href=\"\">EDITAR</a></td>  <!-- pathFor es igual a path_for -->
\t\t\t
\t\t</tr>
\t\t{% endfor %}
\t</table>
{% endblock %}", "inicio.twig.php", "C:\\wamp64\\www\\BeerExpress\\views\\inicio.twig.php");
    }
}
