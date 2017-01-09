<?php

/* base.html.twig */
class __TwigTemplate_822a78cc10f4f5e0c968b4030e284233f3e59196155760486015299a3bde59e1 extends Twig_Template
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
        $__internal_9ad31f15f7bc542bad98d2f519846b2455f789eb3a97f52c9d76648ad0588725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad31f15f7bc542bad98d2f519846b2455f789eb3a97f52c9d76648ad0588725->enter($__internal_9ad31f15f7bc542bad98d2f519846b2455f789eb3a97f52c9d76648ad0588725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9ad31f15f7bc542bad98d2f519846b2455f789eb3a97f52c9d76648ad0588725->leave($__internal_9ad31f15f7bc542bad98d2f519846b2455f789eb3a97f52c9d76648ad0588725_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a52a0e26f59058dcafd6386c7327141b77603ac407698d7a7e7389c3d947aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a52a0e26f59058dcafd6386c7327141b77603ac407698d7a7e7389c3d947aef->enter($__internal_3a52a0e26f59058dcafd6386c7327141b77603ac407698d7a7e7389c3d947aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Bienvenue
            ";
        
        $__internal_3a52a0e26f59058dcafd6386c7327141b77603ac407698d7a7e7389c3d947aef->leave($__internal_3a52a0e26f59058dcafd6386c7327141b77603ac407698d7a7e7389c3d947aef_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c88b9b2b8da3f2f848c327041a9ebb3a1d95b1fb50ea03eb6eeaf8d18a655263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88b9b2b8da3f2f848c327041a9ebb3a1d95b1fb50ea03eb6eeaf8d18a655263->enter($__internal_c88b9b2b8da3f2f848c327041a9ebb3a1d95b1fb50ea03eb6eeaf8d18a655263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c88b9b2b8da3f2f848c327041a9ebb3a1d95b1fb50ea03eb6eeaf8d18a655263->leave($__internal_c88b9b2b8da3f2f848c327041a9ebb3a1d95b1fb50ea03eb6eeaf8d18a655263_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3cc2ca55b19b05563844331a2a9324d6a8ef1a76e85d211d707ee775098951e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cc2ca55b19b05563844331a2a9324d6a8ef1a76e85d211d707ee775098951e->enter($__internal_d3cc2ca55b19b05563844331a2a9324d6a8ef1a76e85d211d707ee775098951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "            ";
        
        $__internal_d3cc2ca55b19b05563844331a2a9324d6a8ef1a76e85d211d707ee775098951e->leave($__internal_d3cc2ca55b19b05563844331a2a9324d6a8ef1a76e85d211d707ee775098951e_prof);

    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        $__internal_a8c3f5f6d2517125e3e701aeb0740ba7c9e2c881179ee428ca9e86cd034a8417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c3f5f6d2517125e3e701aeb0740ba7c9e2c881179ee428ca9e86cd034a8417->enter($__internal_a8c3f5f6d2517125e3e701aeb0740ba7c9e2c881179ee428ca9e86cd034a8417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "                ";
        
        $__internal_a8c3f5f6d2517125e3e701aeb0740ba7c9e2c881179ee428ca9e86cd034a8417->leave($__internal_a8c3f5f6d2517125e3e701aeb0740ba7c9e2c881179ee428ca9e86cd034a8417_prof);

    }

    // line 34
    public function block_section($context, array $blocks = array())
    {
        $__internal_d29517a085c2783bdfd8197af5ad39e2a74d9ac8ad06db1f352ce31d588dee02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29517a085c2783bdfd8197af5ad39e2a74d9ac8ad06db1f352ce31d588dee02->enter($__internal_d29517a085c2783bdfd8197af5ad39e2a74d9ac8ad06db1f352ce31d588dee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 35
        echo "                ";
        
        $__internal_d29517a085c2783bdfd8197af5ad39e2a74d9ac8ad06db1f352ce31d588dee02->leave($__internal_d29517a085c2783bdfd8197af5ad39e2a74d9ac8ad06db1f352ce31d588dee02_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_497327420eae33092e5aeee17e5f396895bf4927df88e6d77f989aca0779de86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497327420eae33092e5aeee17e5f396895bf4927df88e6d77f989aca0779de86->enter($__internal_497327420eae33092e5aeee17e5f396895bf4927df88e6d77f989aca0779de86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_497327420eae33092e5aeee17e5f396895bf4927df88e6d77f989aca0779de86->leave($__internal_497327420eae33092e5aeee17e5f396895bf4927df88e6d77f989aca0779de86_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 51,  192 => 50,  188 => 49,  184 => 48,  179 => 47,  173 => 46,  166 => 35,  160 => 34,  153 => 30,  147 => 29,  140 => 24,  134 => 23,  125 => 16,  121 => 15,  117 => 14,  112 => 13,  106 => 12,  98 => 8,  92 => 7,  82 => 53,  80 => 46,  68 => 36,  66 => 34,  61 => 31,  59 => 29,  53 => 25,  51 => 23,  44 => 18,  42 => 12,  38 => 10,  36 => 7,  28 => 1,);
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
", "base.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\base.html.twig");
    }
}
