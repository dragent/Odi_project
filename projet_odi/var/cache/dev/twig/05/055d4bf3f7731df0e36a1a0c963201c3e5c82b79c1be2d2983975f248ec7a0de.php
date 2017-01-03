<?php

/* base.html.twig */
class __TwigTemplate_b41461cb889f7b1b00646c296530f1653b26907ba0002f615e0650d84acaa8b4 extends Twig_Template
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
        $__internal_8a919f5bea4ec5d53e86781cc559db7bc5b4fd3bd586567697d677d7f195043e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a919f5bea4ec5d53e86781cc559db7bc5b4fd3bd586567697d677d7f195043e->enter($__internal_8a919f5bea4ec5d53e86781cc559db7bc5b4fd3bd586567697d677d7f195043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8a919f5bea4ec5d53e86781cc559db7bc5b4fd3bd586567697d677d7f195043e->leave($__internal_8a919f5bea4ec5d53e86781cc559db7bc5b4fd3bd586567697d677d7f195043e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da5d64411c9f501671be2a4efb7c4b46625100318eebcbe1585583a15d779d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da5d64411c9f501671be2a4efb7c4b46625100318eebcbe1585583a15d779d3->enter($__internal_2da5d64411c9f501671be2a4efb7c4b46625100318eebcbe1585583a15d779d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 8
        echo "                Bienvenue
            ";
        
        $__internal_2da5d64411c9f501671be2a4efb7c4b46625100318eebcbe1585583a15d779d3->leave($__internal_2da5d64411c9f501671be2a4efb7c4b46625100318eebcbe1585583a15d779d3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5ed65a9611b9eec455d492a26ad04b8a31d2845bbfd0918d1cd4e06a3482c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ed65a9611b9eec455d492a26ad04b8a31d2845bbfd0918d1cd4e06a3482c41->enter($__internal_b5ed65a9611b9eec455d492a26ad04b8a31d2845bbfd0918d1cd4e06a3482c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

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
        
        $__internal_b5ed65a9611b9eec455d492a26ad04b8a31d2845bbfd0918d1cd4e06a3482c41->leave($__internal_b5ed65a9611b9eec455d492a26ad04b8a31d2845bbfd0918d1cd4e06a3482c41_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_866da7400cdea173b31f39e121ef15db3de501e1a145e8c8fdb67b645e1f0106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866da7400cdea173b31f39e121ef15db3de501e1a145e8c8fdb67b645e1f0106->enter($__internal_866da7400cdea173b31f39e121ef15db3de501e1a145e8c8fdb67b645e1f0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 24
        echo "            ";
        
        $__internal_866da7400cdea173b31f39e121ef15db3de501e1a145e8c8fdb67b645e1f0106->leave($__internal_866da7400cdea173b31f39e121ef15db3de501e1a145e8c8fdb67b645e1f0106_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_b261dd420073da3bda9125a20ff4a21db121a65f7c81ae22b7f81ee22e3dada1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b261dd420073da3bda9125a20ff4a21db121a65f7c81ae22b7f81ee22e3dada1->enter($__internal_b261dd420073da3bda9125a20ff4a21db121a65f7c81ae22b7f81ee22e3dada1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 30
        echo "                ";
        
        $__internal_b261dd420073da3bda9125a20ff4a21db121a65f7c81ae22b7f81ee22e3dada1->leave($__internal_b261dd420073da3bda9125a20ff4a21db121a65f7c81ae22b7f81ee22e3dada1_prof);

    }

    // line 34
    public function block_section($context, array $blocks = array())
    {
        $__internal_239787512ef41c24caa4faec830f4c1234372d6b1aa1e90159cf401dbd7aa85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239787512ef41c24caa4faec830f4c1234372d6b1aa1e90159cf401dbd7aa85d->enter($__internal_239787512ef41c24caa4faec830f4c1234372d6b1aa1e90159cf401dbd7aa85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 35
        echo "                ";
        
        $__internal_239787512ef41c24caa4faec830f4c1234372d6b1aa1e90159cf401dbd7aa85d->leave($__internal_239787512ef41c24caa4faec830f4c1234372d6b1aa1e90159cf401dbd7aa85d_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93d4a0f7188b111d727e6dd6566dc812521ec7e48097c08f01c38010e1e818f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d4a0f7188b111d727e6dd6566dc812521ec7e48097c08f01c38010e1e818f5->enter($__internal_93d4a0f7188b111d727e6dd6566dc812521ec7e48097c08f01c38010e1e818f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

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
        
        $__internal_93d4a0f7188b111d727e6dd6566dc812521ec7e48097c08f01c38010e1e818f5->leave($__internal_93d4a0f7188b111d727e6dd6566dc812521ec7e48097c08f01c38010e1e818f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 51,  192 => 50,  188 => 49,  184 => 48,  179 => 47,  173 => 46,  166 => 35,  160 => 34,  153 => 30,  147 => 29,  140 => 24,  134 => 23,  125 => 16,  121 => 15,  117 => 14,  112 => 13,  106 => 12,  98 => 8,  92 => 7,  82 => 53,  80 => 46,  68 => 36,  66 => 34,  61 => 31,  59 => 29,  53 => 25,  51 => 23,  44 => 18,  42 => 12,  38 => 10,  36 => 7,  28 => 1,);
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
                Bienvenue
            {% endblock %}
        </title>
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
        {% endblock %}

    </head>
    <body>

        <nav class=\"navbar navbar-default navbar-fixed-top\">
            {% block menu %}
            {% endblock menu %}
        </nav>

        <div class=\"container\">
            <header>
                {% block header %}
                {% endblock %}
            </header>

            <section>
                {% block section %}
                {% endblock %}
            </section>
        </div>
        <div class=\"clear\"></div>
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Projet ODI | ©2016</p>
            </div>
        </footer>


        {% block javascripts %}
            <script src=\"{{ asset('bundles/jQuery-2.2.3/jquery-2.2.3.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/jquery-sizzle/src/sizzle.js') }}\"></script>
            <script src=\"{{ asset('bundles/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('bundles/Momentjs/moment.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-datetime.js') }}\"></script>
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/var/www/html/projet_odi/app/Resources/views/base.html.twig");
    }
}
