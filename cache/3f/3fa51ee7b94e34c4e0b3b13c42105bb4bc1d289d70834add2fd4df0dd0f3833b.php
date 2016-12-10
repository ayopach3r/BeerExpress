<?php

/* login.twig.php */
class __TwigTemplate_fb59e3cd8696f8d014b17118385692978a8316ef005e513e29303da57ea264c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantilla.twig.php ", "login.twig.php", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<form action=\"\" method=\"post\" class=\"form-horizontal\">
    
    <h1>Login</h1>
    <div class=\"form-group\">
        <label class=\"col-xs-2 control-label\">Nick:</label>
        <div class=\"col-xs-10\">
            <input class=\"form-control\" type=\"text\" name=\"nick\" id=\"nick\" placeholder=\"nick\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-xs-2 control-label\">Password:</label>
        <div class=\"col-xs-10\">
            <input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"password\">
        </div>
    </div>
    <p><input type=\"submit\" name=\"iniciar\" id=\"iniciar\"  class=\"btn btn-info\"></p>
</form>
";
    }

    public function getTemplateName()
    {
        return "login.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
<form action=\"\" method=\"post\" class=\"form-horizontal\">
    
    <h1>Login</h1>
    <div class=\"form-group\">
        <label class=\"col-xs-2 control-label\">Nick:</label>
        <div class=\"col-xs-10\">
            <input class=\"form-control\" type=\"text\" name=\"nick\" id=\"nick\" placeholder=\"nick\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-xs-2 control-label\">Password:</label>
        <div class=\"col-xs-10\">
            <input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"password\">
        </div>
    </div>
    <p><input type=\"submit\" name=\"iniciar\" id=\"iniciar\"  class=\"btn btn-info\"></p>
</form>
{% endblock %}
", "login.twig.php", "C:\\wamp64\\www\\BeerExpress\\views\\login.twig.php");
    }
}
