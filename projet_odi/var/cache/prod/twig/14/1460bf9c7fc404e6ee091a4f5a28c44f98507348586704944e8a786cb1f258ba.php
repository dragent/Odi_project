<?php

/* base.html.twig */
class __TwigTemplate_f9dd84d9e0637a66d5235bad08fea4c2433434acad838f456a90f63dff0a2e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

    </head>
    <body>

        <nav class=\"navbar navbar-default\">
            ";
        // line 21
        $this->displayBlock('menu', $context, $blocks);
        // line 23
        echo "        </nav>

        <header>
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "        </header>

        <section>
            ";
        // line 31
        $this->displayBlock('section', $context, $blocks);
        // line 33
        echo "        </section>

        <footer>
            ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "        </footer>


        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "                Welcome!
            ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        // line 22
        echo "            ";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "            ";
    }

    // line 31
    public function block_section($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  129 => 37,  126 => 36,  122 => 32,  119 => 31,  115 => 27,  112 => 26,  108 => 22,  105 => 21,  98 => 13,  95 => 12,  90 => 8,  87 => 7,  80 => 43,  78 => 41,  73 => 38,  71 => 36,  66 => 33,  64 => 31,  59 => 28,  57 => 26,  52 => 23,  50 => 21,  42 => 15,  40 => 12,  36 => 10,  34 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\base.html.twig");
    }
}
