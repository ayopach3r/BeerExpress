<?php

/* acercade.php */
class __TwigTemplate_5fc65ea38f12802e44b3cdfc0e98bacd73cffcdf245a50f79dc289ff78d26f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantilla.twig.php ", "acercade.php", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "  <center>
    <h1>Beer Express</h1>
    <h3>La mejor base de datos de la cerveza</h3>
    <p><span>Proximamente nuevas mejoras<span></p>
  </center>
";
    }

    public function getTemplateName()
    {
        return "acercade.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
  <center>
    <h1>Beer Express</h1>
    <h3>La mejor base de datos de la cerveza</h3>
    <p><span>Proximamente nuevas mejoras<span></p>
  </center>
{% endblock %}
", "acercade.php", "C:\\wamp64\\www\\BeerExpress\\views\\acercade.php");
    }
}
