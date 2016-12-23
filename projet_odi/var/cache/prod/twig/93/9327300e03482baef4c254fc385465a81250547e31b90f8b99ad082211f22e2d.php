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
        $__internal_f3a26631d0dab7c6b9176b0136c020afc5bdc2474dd09025d8e31d295285d915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a26631d0dab7c6b9176b0136c020afc5bdc2474dd09025d8e31d295285d915->enter($__internal_f3a26631d0dab7c6b9176b0136c020afc5bdc2474dd09025d8e31d295285d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f3a26631d0dab7c6b9176b0136c020afc5bdc2474dd09025d8e31d295285d915->leave($__internal_f3a26631d0dab7c6b9176b0136c020afc5bdc2474dd09025d8e31d295285d915_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee634adcbce735f3ddc764928e08d336d498587c9ccb4f14a6ccc31914eab45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee634adcbce735f3ddc764928e08d336d498587c9ccb4f14a6ccc31914eab45->enter($__internal_6ee634adcbce735f3ddc764928e08d336d498587c9ccb4f14a6ccc31914eab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Welcome!
            ";
        
        $__internal_6ee634adcbce735f3ddc764928e08d336d498587c9ccb4f14a6ccc31914eab45->leave($__internal_6ee634adcbce735f3ddc764928e08d336d498587c9ccb4f14a6ccc31914eab45_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd93ce94e19431d8b21cfc225fe8b321a85569a8b3eb00de118b6797459554dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd93ce94e19431d8b21cfc225fe8b321a85569a8b3eb00de118b6797459554dc->enter($__internal_cd93ce94e19431d8b21cfc225fe8b321a85569a8b3eb00de118b6797459554dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_cd93ce94e19431d8b21cfc225fe8b321a85569a8b3eb00de118b6797459554dc->leave($__internal_cd93ce94e19431d8b21cfc225fe8b321a85569a8b3eb00de118b6797459554dc_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b4cda2754924690489231ec1fb00b3fbf6df17525d2c92bdee418430c36bee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4cda2754924690489231ec1fb00b3fbf6df17525d2c92bdee418430c36bee5->enter($__internal_6b4cda2754924690489231ec1fb00b3fbf6df17525d2c92bdee418430c36bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "            ";
        
        $__internal_6b4cda2754924690489231ec1fb00b3fbf6df17525d2c92bdee418430c36bee5->leave($__internal_6b4cda2754924690489231ec1fb00b3fbf6df17525d2c92bdee418430c36bee5_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_59b5dd172e06223c3393a3ff40cf37a245cb08567eec019f72c1bf88fe462bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b5dd172e06223c3393a3ff40cf37a245cb08567eec019f72c1bf88fe462bfa->enter($__internal_59b5dd172e06223c3393a3ff40cf37a245cb08567eec019f72c1bf88fe462bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "            ";
        
        $__internal_59b5dd172e06223c3393a3ff40cf37a245cb08567eec019f72c1bf88fe462bfa->leave($__internal_59b5dd172e06223c3393a3ff40cf37a245cb08567eec019f72c1bf88fe462bfa_prof);

    }

    // line 31
    public function block_section($context, array $blocks = array())
    {
        $__internal_d3d3af3e06d8df151dc74a3799a29719d6f9a1b0210a97e387b8a3c606d4efb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d3af3e06d8df151dc74a3799a29719d6f9a1b0210a97e387b8a3c606d4efb8->enter($__internal_d3d3af3e06d8df151dc74a3799a29719d6f9a1b0210a97e387b8a3c606d4efb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 32
        echo "            ";
        
        $__internal_d3d3af3e06d8df151dc74a3799a29719d6f9a1b0210a97e387b8a3c606d4efb8->leave($__internal_d3d3af3e06d8df151dc74a3799a29719d6f9a1b0210a97e387b8a3c606d4efb8_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_31d92c71c554cb40014d636ccf3a8d98de1072e832555a231884845d97b5b20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d92c71c554cb40014d636ccf3a8d98de1072e832555a231884845d97b5b20f->enter($__internal_31d92c71c554cb40014d636ccf3a8d98de1072e832555a231884845d97b5b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "            ";
        
        $__internal_31d92c71c554cb40014d636ccf3a8d98de1072e832555a231884845d97b5b20f->leave($__internal_31d92c71c554cb40014d636ccf3a8d98de1072e832555a231884845d97b5b20f_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9e8c8d1359f440d5f97884db3682abb3f3c660b84ad02642bbb56bb70bf83b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e8c8d1359f440d5f97884db3682abb3f3c660b84ad02642bbb56bb70bf83b7->enter($__internal_c9e8c8d1359f440d5f97884db3682abb3f3c660b84ad02642bbb56bb70bf83b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        ";
        
        $__internal_c9e8c8d1359f440d5f97884db3682abb3f3c660b84ad02642bbb56bb70bf83b7->leave($__internal_c9e8c8d1359f440d5f97884db3682abb3f3c660b84ad02642bbb56bb70bf83b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 42,  175 => 41,  168 => 37,  162 => 36,  155 => 32,  149 => 31,  142 => 27,  136 => 26,  129 => 22,  123 => 21,  113 => 13,  107 => 12,  99 => 8,  93 => 7,  83 => 43,  81 => 41,  76 => 38,  74 => 36,  69 => 33,  67 => 31,  62 => 28,  60 => 26,  55 => 23,  53 => 21,  45 => 15,  43 => 12,  39 => 10,  37 => 7,  29 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        {% endblock %}
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

    </head>
    <body>

        <nav class=\"navbar navbar-default\">
            {% block menu %}
            {% endblock menu %}
        </nav>

        <header>
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
        {% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\base.html.twig");
    }
}
