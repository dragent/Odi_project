<?php

/* base.html.twig */
class __TwigTemplate_a30548d5d9815b5ff6ccb26687ab0da2b0256b9aa03b624c7842766874a51738 extends Twig_Template
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
        // line 18
        echo "
    </head>
    <body>

        <nav class=\"navbar navbar-default navbar-fixed-top\">
            ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "        </nav>

        <div class=\"container\">
            <header>
                ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "            </header>

            <section>
                ";
        // line 34
        $this->displayBlock('section', $context, $blocks);
        // line 36
        echo "            </section>
        </div>
        <div class=\"clear\"></div>
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Projet ODI | ©2016</p>
            </div>
        </footer>


        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "                Bienvenue
            ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "            ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "                ";
    }

    // line 34
    public function block_section($context, array $blocks = array())
    {
        // line 35
        echo "                ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jQuery-2.2.3/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jquery-sizzle/src/sizzle.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Momentjs/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetime.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  153 => 50,  149 => 49,  145 => 48,  140 => 47,  137 => 46,  133 => 35,  130 => 34,  126 => 30,  123 => 29,  119 => 24,  116 => 23,  110 => 16,  106 => 15,  102 => 14,  97 => 13,  94 => 12,  89 => 8,  86 => 7,  79 => 53,  77 => 46,  65 => 36,  63 => 34,  58 => 31,  56 => 29,  50 => 25,  48 => 23,  41 => 18,  39 => 12,  35 => 10,  33 => 7,  25 => 1,);
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
