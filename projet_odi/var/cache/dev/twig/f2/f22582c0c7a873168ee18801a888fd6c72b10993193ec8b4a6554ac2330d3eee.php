<?php

/* base.html.twig */
class __TwigTemplate_673638effbd360d61264345d6064be17da2e210797eaab8d28a434ec45e21427 extends Twig_Template
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
        $__internal_9c76898ccf447c869001ad8158c20cc00ddb5302e867dab608a14eeca71f2cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c76898ccf447c869001ad8158c20cc00ddb5302e867dab608a14eeca71f2cda->enter($__internal_9c76898ccf447c869001ad8158c20cc00ddb5302e867dab608a14eeca71f2cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_01f9b1cffdcb4e0a332ae321875df48df54c1ece73f5c9f85f4437a89a5e05a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f9b1cffdcb4e0a332ae321875df48df54c1ece73f5c9f85f4437a89a5e05a8->enter($__internal_01f9b1cffdcb4e0a332ae321875df48df54c1ece73f5c9f85f4437a89a5e05a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9c76898ccf447c869001ad8158c20cc00ddb5302e867dab608a14eeca71f2cda->leave($__internal_9c76898ccf447c869001ad8158c20cc00ddb5302e867dab608a14eeca71f2cda_prof);

        
        $__internal_01f9b1cffdcb4e0a332ae321875df48df54c1ece73f5c9f85f4437a89a5e05a8->leave($__internal_01f9b1cffdcb4e0a332ae321875df48df54c1ece73f5c9f85f4437a89a5e05a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2064a8cc4393871745414c9e187a7ed605fcd57582905119708c0755a5493661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2064a8cc4393871745414c9e187a7ed605fcd57582905119708c0755a5493661->enter($__internal_2064a8cc4393871745414c9e187a7ed605fcd57582905119708c0755a5493661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b0ad5a954f3f23551aee02bdc44cb60eb9515179961fa9323302bf1c6d5169e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0ad5a954f3f23551aee02bdc44cb60eb9515179961fa9323302bf1c6d5169e->enter($__internal_1b0ad5a954f3f23551aee02bdc44cb60eb9515179961fa9323302bf1c6d5169e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Welcome!
            ";
        
        $__internal_1b0ad5a954f3f23551aee02bdc44cb60eb9515179961fa9323302bf1c6d5169e->leave($__internal_1b0ad5a954f3f23551aee02bdc44cb60eb9515179961fa9323302bf1c6d5169e_prof);

        
        $__internal_2064a8cc4393871745414c9e187a7ed605fcd57582905119708c0755a5493661->leave($__internal_2064a8cc4393871745414c9e187a7ed605fcd57582905119708c0755a5493661_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70e69487e23a2fb6a615615b9601b77881228a7d245bdd05f4caa0d38663bec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e69487e23a2fb6a615615b9601b77881228a7d245bdd05f4caa0d38663bec7->enter($__internal_70e69487e23a2fb6a615615b9601b77881228a7d245bdd05f4caa0d38663bec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a8dcfef1ac3edb967629b29d632b30c76ea37b9900ed5668594f33c2a456813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8dcfef1ac3edb967629b29d632b30c76ea37b9900ed5668594f33c2a456813->enter($__internal_4a8dcfef1ac3edb967629b29d632b30c76ea37b9900ed5668594f33c2a456813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4a8dcfef1ac3edb967629b29d632b30c76ea37b9900ed5668594f33c2a456813->leave($__internal_4a8dcfef1ac3edb967629b29d632b30c76ea37b9900ed5668594f33c2a456813_prof);

        
        $__internal_70e69487e23a2fb6a615615b9601b77881228a7d245bdd05f4caa0d38663bec7->leave($__internal_70e69487e23a2fb6a615615b9601b77881228a7d245bdd05f4caa0d38663bec7_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e8f347050fd7d7caa76635a07f77816a3b78e2550a48bf9a63feeb42a67ad59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8f347050fd7d7caa76635a07f77816a3b78e2550a48bf9a63feeb42a67ad59->enter($__internal_9e8f347050fd7d7caa76635a07f77816a3b78e2550a48bf9a63feeb42a67ad59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4350b6dd287e67c2362f712dfa5d25762e40138a49a157f7453906bc4d466274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4350b6dd287e67c2362f712dfa5d25762e40138a49a157f7453906bc4d466274->enter($__internal_4350b6dd287e67c2362f712dfa5d25762e40138a49a157f7453906bc4d466274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "          ";
        
        $__internal_4350b6dd287e67c2362f712dfa5d25762e40138a49a157f7453906bc4d466274->leave($__internal_4350b6dd287e67c2362f712dfa5d25762e40138a49a157f7453906bc4d466274_prof);

        
        $__internal_9e8f347050fd7d7caa76635a07f77816a3b78e2550a48bf9a63feeb42a67ad59->leave($__internal_9e8f347050fd7d7caa76635a07f77816a3b78e2550a48bf9a63feeb42a67ad59_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_a04e090a1861a66b589d2adeb80aef465acea5c3b8ff204808f19972d59467ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04e090a1861a66b589d2adeb80aef465acea5c3b8ff204808f19972d59467ba->enter($__internal_a04e090a1861a66b589d2adeb80aef465acea5c3b8ff204808f19972d59467ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2a7edf186d838c5064baf9f8337f8bf1316c2269c86b44430009c775dc37630d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7edf186d838c5064baf9f8337f8bf1316c2269c86b44430009c775dc37630d->enter($__internal_2a7edf186d838c5064baf9f8337f8bf1316c2269c86b44430009c775dc37630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "            ";
        
        $__internal_2a7edf186d838c5064baf9f8337f8bf1316c2269c86b44430009c775dc37630d->leave($__internal_2a7edf186d838c5064baf9f8337f8bf1316c2269c86b44430009c775dc37630d_prof);

        
        $__internal_a04e090a1861a66b589d2adeb80aef465acea5c3b8ff204808f19972d59467ba->leave($__internal_a04e090a1861a66b589d2adeb80aef465acea5c3b8ff204808f19972d59467ba_prof);

    }

    // line 30
    public function block_section($context, array $blocks = array())
    {
        $__internal_3f97664b40f5b791e34a8db43646611eff568f2d0177f542fa5057ebc1261f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f97664b40f5b791e34a8db43646611eff568f2d0177f542fa5057ebc1261f5a->enter($__internal_3f97664b40f5b791e34a8db43646611eff568f2d0177f542fa5057ebc1261f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_63fc4574295372cce7914db565763fa42a5d75af00559dee072320deee43b429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fc4574295372cce7914db565763fa42a5d75af00559dee072320deee43b429->enter($__internal_63fc4574295372cce7914db565763fa42a5d75af00559dee072320deee43b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 31
        echo "            ";
        
        $__internal_63fc4574295372cce7914db565763fa42a5d75af00559dee072320deee43b429->leave($__internal_63fc4574295372cce7914db565763fa42a5d75af00559dee072320deee43b429_prof);

        
        $__internal_3f97664b40f5b791e34a8db43646611eff568f2d0177f542fa5057ebc1261f5a->leave($__internal_3f97664b40f5b791e34a8db43646611eff568f2d0177f542fa5057ebc1261f5a_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ab4e3456e9371438d850254ca248aa7ade6fa2a65c00a1f3c206b80666b7a652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4e3456e9371438d850254ca248aa7ade6fa2a65c00a1f3c206b80666b7a652->enter($__internal_ab4e3456e9371438d850254ca248aa7ade6fa2a65c00a1f3c206b80666b7a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f2d3e103e2df50a407bb4c46d533875f7daa04605254c9c62505e93e252204c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d3e103e2df50a407bb4c46d533875f7daa04605254c9c62505e93e252204c7->enter($__internal_f2d3e103e2df50a407bb4c46d533875f7daa04605254c9c62505e93e252204c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "            ";
        
        $__internal_f2d3e103e2df50a407bb4c46d533875f7daa04605254c9c62505e93e252204c7->leave($__internal_f2d3e103e2df50a407bb4c46d533875f7daa04605254c9c62505e93e252204c7_prof);

        
        $__internal_ab4e3456e9371438d850254ca248aa7ade6fa2a65c00a1f3c206b80666b7a652->leave($__internal_ab4e3456e9371438d850254ca248aa7ade6fa2a65c00a1f3c206b80666b7a652_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c72f9d9257857c4800b51c053773fa83515026dc9b029798f6287c633c9915ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72f9d9257857c4800b51c053773fa83515026dc9b029798f6287c633c9915ec->enter($__internal_c72f9d9257857c4800b51c053773fa83515026dc9b029798f6287c633c9915ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7770a81b4afecc8571f9f51efe2963a24ff138b03f8dd47ecdd6ca43daa9f1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7770a81b4afecc8571f9f51efe2963a24ff138b03f8dd47ecdd6ca43daa9f1da->enter($__internal_7770a81b4afecc8571f9f51efe2963a24ff138b03f8dd47ecdd6ca43daa9f1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7770a81b4afecc8571f9f51efe2963a24ff138b03f8dd47ecdd6ca43daa9f1da->leave($__internal_7770a81b4afecc8571f9f51efe2963a24ff138b03f8dd47ecdd6ca43daa9f1da_prof);

        
        $__internal_c72f9d9257857c4800b51c053773fa83515026dc9b029798f6287c633c9915ec->leave($__internal_c72f9d9257857c4800b51c053773fa83515026dc9b029798f6287c633c9915ec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 46,  250 => 45,  246 => 44,  242 => 43,  238 => 42,  233 => 41,  224 => 40,  214 => 36,  205 => 35,  195 => 31,  186 => 30,  176 => 26,  167 => 25,  157 => 24,  148 => 23,  136 => 16,  132 => 15,  128 => 14,  123 => 13,  114 => 12,  103 => 8,  94 => 7,  81 => 48,  79 => 40,  74 => 37,  72 => 35,  67 => 32,  65 => 30,  60 => 27,  57 => 25,  55 => 23,  48 => 18,  46 => 12,  42 => 10,  40 => 7,  32 => 1,);
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
