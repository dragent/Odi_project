<?php

/* base.html.twig */
class __TwigTemplate_418ea324331f4a168e26425d7adbfffe6e6ab7ae2e00626394fa74871bcc74b4 extends Twig_Template
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
        $__internal_bb81a8a02365c71d1d5505d32db9f47741548a1137e18595e40d1e20d908cf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb81a8a02365c71d1d5505d32db9f47741548a1137e18595e40d1e20d908cf6b->enter($__internal_bb81a8a02365c71d1d5505d32db9f47741548a1137e18595e40d1e20d908cf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <header>
          ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        </header>

        <section>
            ";
        // line 30
        $this->displayBlock('section', $context, $blocks);
        // line 32
        echo "        </section>

        <footer>
            ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "        </footer>


        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
    </body>
</html>
";
        
        $__internal_bb81a8a02365c71d1d5505d32db9f47741548a1137e18595e40d1e20d908cf6b->leave($__internal_bb81a8a02365c71d1d5505d32db9f47741548a1137e18595e40d1e20d908cf6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_492560b96cfe56f9d7d7c1588f772dff4c4767d574183e60e809f7ca35c70775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492560b96cfe56f9d7d7c1588f772dff4c4767d574183e60e809f7ca35c70775->enter($__internal_492560b96cfe56f9d7d7c1588f772dff4c4767d574183e60e809f7ca35c70775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Welcome!
            ";
        
        $__internal_492560b96cfe56f9d7d7c1588f772dff4c4767d574183e60e809f7ca35c70775->leave($__internal_492560b96cfe56f9d7d7c1588f772dff4c4767d574183e60e809f7ca35c70775_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc1e42543adf51527a3c515a509efabbf7cfdb2510f99e2e917090c087b59432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1e42543adf51527a3c515a509efabbf7cfdb2510f99e2e917090c087b59432->enter($__internal_cc1e42543adf51527a3c515a509efabbf7cfdb2510f99e2e917090c087b59432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/DataTables/datatables.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
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
        
        $__internal_cc1e42543adf51527a3c515a509efabbf7cfdb2510f99e2e917090c087b59432->leave($__internal_cc1e42543adf51527a3c515a509efabbf7cfdb2510f99e2e917090c087b59432_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b07c99f53471d183a891df2a21bccce8b530231d8fe4ce2313df904be466d275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07c99f53471d183a891df2a21bccce8b530231d8fe4ce2313df904be466d275->enter($__internal_b07c99f53471d183a891df2a21bccce8b530231d8fe4ce2313df904be466d275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "          ";
        
        $__internal_b07c99f53471d183a891df2a21bccce8b530231d8fe4ce2313df904be466d275->leave($__internal_b07c99f53471d183a891df2a21bccce8b530231d8fe4ce2313df904be466d275_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_fc9843486efaeba4fd6efc358b852ac9a3ecfb7bba2812f44b7c17c44c3b9463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9843486efaeba4fd6efc358b852ac9a3ecfb7bba2812f44b7c17c44c3b9463->enter($__internal_fc9843486efaeba4fd6efc358b852ac9a3ecfb7bba2812f44b7c17c44c3b9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "            ";
        
        $__internal_fc9843486efaeba4fd6efc358b852ac9a3ecfb7bba2812f44b7c17c44c3b9463->leave($__internal_fc9843486efaeba4fd6efc358b852ac9a3ecfb7bba2812f44b7c17c44c3b9463_prof);

    }

    // line 30
    public function block_section($context, array $blocks = array())
    {
        $__internal_6eddbcc3e2e05b9d53b7f7b0af8120178a4ac71d421756db50ad0171d018f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eddbcc3e2e05b9d53b7f7b0af8120178a4ac71d421756db50ad0171d018f147->enter($__internal_6eddbcc3e2e05b9d53b7f7b0af8120178a4ac71d421756db50ad0171d018f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 31
        echo "            ";
        
        $__internal_6eddbcc3e2e05b9d53b7f7b0af8120178a4ac71d421756db50ad0171d018f147->leave($__internal_6eddbcc3e2e05b9d53b7f7b0af8120178a4ac71d421756db50ad0171d018f147_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_403574a5e89cf2e4ac6f2996370b7af7586f0501c41984c51eed5dd8463752d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403574a5e89cf2e4ac6f2996370b7af7586f0501c41984c51eed5dd8463752d1->enter($__internal_403574a5e89cf2e4ac6f2996370b7af7586f0501c41984c51eed5dd8463752d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "            ";
        
        $__internal_403574a5e89cf2e4ac6f2996370b7af7586f0501c41984c51eed5dd8463752d1->leave($__internal_403574a5e89cf2e4ac6f2996370b7af7586f0501c41984c51eed5dd8463752d1_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7b748918ba3771ca17e0a6847f376e00d2ea4ebea0f5cb63d9f0b9db45b2935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b748918ba3771ca17e0a6847f376e00d2ea4ebea0f5cb63d9f0b9db45b2935->enter($__internal_e7b748918ba3771ca17e0a6847f376e00d2ea4ebea0f5cb63d9f0b9db45b2935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jQuery-2.2.3/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jquery-sizzle/src/sizzle.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/highlight.pack.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/Momentjs/moment.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetime.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/DataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e7b748918ba3771ca17e0a6847f376e00d2ea4ebea0f5cb63d9f0b9db45b2935->leave($__internal_e7b748918ba3771ca17e0a6847f376e00d2ea4ebea0f5cb63d9f0b9db45b2935_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 46,  205 => 45,  201 => 44,  197 => 43,  193 => 42,  188 => 41,  182 => 40,  175 => 36,  169 => 35,  162 => 31,  156 => 30,  149 => 26,  143 => 25,  136 => 24,  130 => 23,  121 => 16,  117 => 15,  113 => 14,  108 => 13,  102 => 12,  94 => 8,  88 => 7,  78 => 48,  76 => 40,  71 => 37,  69 => 35,  64 => 32,  62 => 30,  57 => 27,  54 => 25,  52 => 23,  45 => 18,  43 => 12,  39 => 10,  37 => 7,  29 => 1,);
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
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <title>
            {% block title %}
                Welcome!
            {% endblock %}
        </title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/DataTables/datatables.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
        {% endblock %}

    </head>
    <body>

        <header>
          {% block menu %}
          {% endblock menu %}
            {% block header %}
            {% endblock %}
        </header>

        <section>
            {% block section %}
            {% endblock %}
        </section>

        <footer>
            {% block footer %}
            {% endblock %}
        </footer>


        {% block javascripts %}
          <script src=\"{{ asset('bundles/jQuery-2.2.3/jquery-2.2.3.min.js') }}\"></script>
          <script src=\"{{ asset('bundles/jquery-sizzle/src/sizzle.js') }}\"></script>
          <script src=\"{{ asset('bundles/highlight.pack.js') }}\"></script>
          <script src=\"{{ asset('bundles/Momentjs/moment.min.js') }}\"></script>
          <script src=\"{{ asset('js/bootstrap-datetime.js') }}\"></script>
          <script src=\"{{ asset('bundles/DataTables/datatables.min.js') }}\"></script>
        {% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\base.html.twig");
    }
}
