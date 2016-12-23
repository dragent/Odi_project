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
        // line 17
        echo "
    </head>
    <body>

        <header>
          ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "        </header>

        <section>
            ";
        // line 29
        $this->displayBlock('section', $context, $blocks);
        // line 31
        echo "        </section>

        <footer>
            ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "        </footer>


        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
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
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "          ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "            ";
    }

    // line 29
    public function block_section($context, array $blocks = array())
    {
        // line 30
        echo "            ";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "            ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jQuery-2.2.3/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jquery-sizzle/src/sizzle.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/highlight.pack.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Momentjs/moment.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetime.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/DataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  139 => 40,  136 => 39,  132 => 35,  129 => 34,  125 => 30,  122 => 29,  118 => 25,  115 => 24,  111 => 23,  108 => 22,  102 => 15,  98 => 14,  93 => 13,  90 => 12,  85 => 8,  82 => 7,  75 => 47,  73 => 39,  68 => 36,  66 => 34,  61 => 31,  59 => 29,  54 => 26,  51 => 24,  49 => 22,  42 => 17,  40 => 12,  36 => 10,  34 => 7,  26 => 1,);
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
