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
</head>
<body>
    <div class=\"container\">
        <h1>Beer Express</h1>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
        echo "\" class=\"btn btn-primary\" role=\"button\">Logout</a>
    </div>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "</body>
</html>
</html>";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
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
        return array (  51 => 14,  48 => 13,  42 => 15,  40 => 13,  35 => 11,  27 => 6,  20 => 1,);
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
</head>
<body>
    <div class=\"container\">
        <h1>Beer Express</h1>
        <a href=\"{{ path_for ('logout') }}\" class=\"btn btn-primary\" role=\"button\">Logout</a>
    </div>
    {% block body %}
    {% endblock %}
</body>
</html>
</html>", "layout/plantilla.twig.php ", "C:\\wamp64\\www\\BeerExpress\\views\\layout\\plantilla.twig.php");
    }
}
