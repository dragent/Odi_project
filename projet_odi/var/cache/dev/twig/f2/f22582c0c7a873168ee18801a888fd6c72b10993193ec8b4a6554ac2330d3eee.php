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
        $__internal_64d0135a14ea880ed5a2f9f9d33db5e1fd8c76730c2634567482e6149ebaa88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d0135a14ea880ed5a2f9f9d33db5e1fd8c76730c2634567482e6149ebaa88f->enter($__internal_64d0135a14ea880ed5a2f9f9d33db5e1fd8c76730c2634567482e6149ebaa88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_daa631b746184a050747956a1031db1f12e5312157f4af03d90f04a3cda42aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa631b746184a050747956a1031db1f12e5312157f4af03d90f04a3cda42aee->enter($__internal_daa631b746184a050747956a1031db1f12e5312157f4af03d90f04a3cda42aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_64d0135a14ea880ed5a2f9f9d33db5e1fd8c76730c2634567482e6149ebaa88f->leave($__internal_64d0135a14ea880ed5a2f9f9d33db5e1fd8c76730c2634567482e6149ebaa88f_prof);

        
        $__internal_daa631b746184a050747956a1031db1f12e5312157f4af03d90f04a3cda42aee->leave($__internal_daa631b746184a050747956a1031db1f12e5312157f4af03d90f04a3cda42aee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26cef7b1d391961e17060b1077a2f8cdf2f508bba17fc2f440b98b9dd0ddb37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cef7b1d391961e17060b1077a2f8cdf2f508bba17fc2f440b98b9dd0ddb37a->enter($__internal_26cef7b1d391961e17060b1077a2f8cdf2f508bba17fc2f440b98b9dd0ddb37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4197dbb6e5891b690bc3e0841c33b3c4f404eb0de737c9adcb4220c480c0b51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4197dbb6e5891b690bc3e0841c33b3c4f404eb0de737c9adcb4220c480c0b51e->enter($__internal_4197dbb6e5891b690bc3e0841c33b3c4f404eb0de737c9adcb4220c480c0b51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Welcome!
            ";
        
        $__internal_4197dbb6e5891b690bc3e0841c33b3c4f404eb0de737c9adcb4220c480c0b51e->leave($__internal_4197dbb6e5891b690bc3e0841c33b3c4f404eb0de737c9adcb4220c480c0b51e_prof);

        
        $__internal_26cef7b1d391961e17060b1077a2f8cdf2f508bba17fc2f440b98b9dd0ddb37a->leave($__internal_26cef7b1d391961e17060b1077a2f8cdf2f508bba17fc2f440b98b9dd0ddb37a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe9858a901eef9a3e3183407d075fc2d8a094d5771db02902573ea4499d7f776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9858a901eef9a3e3183407d075fc2d8a094d5771db02902573ea4499d7f776->enter($__internal_fe9858a901eef9a3e3183407d075fc2d8a094d5771db02902573ea4499d7f776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_998e0038086a709a4bf7e49c062a3f871ae91d0890c204245a66ae0a1a5b2c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998e0038086a709a4bf7e49c062a3f871ae91d0890c204245a66ae0a1a5b2c26->enter($__internal_998e0038086a709a4bf7e49c062a3f871ae91d0890c204245a66ae0a1a5b2c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_998e0038086a709a4bf7e49c062a3f871ae91d0890c204245a66ae0a1a5b2c26->leave($__internal_998e0038086a709a4bf7e49c062a3f871ae91d0890c204245a66ae0a1a5b2c26_prof);

        
        $__internal_fe9858a901eef9a3e3183407d075fc2d8a094d5771db02902573ea4499d7f776->leave($__internal_fe9858a901eef9a3e3183407d075fc2d8a094d5771db02902573ea4499d7f776_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed49d22c1e09ef06672e75aae2809d888c8c91d940015e99f05c8c795207153e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed49d22c1e09ef06672e75aae2809d888c8c91d940015e99f05c8c795207153e->enter($__internal_ed49d22c1e09ef06672e75aae2809d888c8c91d940015e99f05c8c795207153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9945d4a1bb4157cc34d4add98f667122784e8e5b9b57de259371bf85c0d86f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9945d4a1bb4157cc34d4add98f667122784e8e5b9b57de259371bf85c0d86f35->enter($__internal_9945d4a1bb4157cc34d4add98f667122784e8e5b9b57de259371bf85c0d86f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "            ";
        
        $__internal_9945d4a1bb4157cc34d4add98f667122784e8e5b9b57de259371bf85c0d86f35->leave($__internal_9945d4a1bb4157cc34d4add98f667122784e8e5b9b57de259371bf85c0d86f35_prof);

        
        $__internal_ed49d22c1e09ef06672e75aae2809d888c8c91d940015e99f05c8c795207153e->leave($__internal_ed49d22c1e09ef06672e75aae2809d888c8c91d940015e99f05c8c795207153e_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_5524b08045e4c7eec6f3214b47d8d81d4fbcea19dacafe3e78c7db27018e278d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5524b08045e4c7eec6f3214b47d8d81d4fbcea19dacafe3e78c7db27018e278d->enter($__internal_5524b08045e4c7eec6f3214b47d8d81d4fbcea19dacafe3e78c7db27018e278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c56d6977fa1e8765ace2974c8eda2ded95cd913558c5e3f4f142d5f6ed470728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d6977fa1e8765ace2974c8eda2ded95cd913558c5e3f4f142d5f6ed470728->enter($__internal_c56d6977fa1e8765ace2974c8eda2ded95cd913558c5e3f4f142d5f6ed470728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "            ";
        
        $__internal_c56d6977fa1e8765ace2974c8eda2ded95cd913558c5e3f4f142d5f6ed470728->leave($__internal_c56d6977fa1e8765ace2974c8eda2ded95cd913558c5e3f4f142d5f6ed470728_prof);

        
        $__internal_5524b08045e4c7eec6f3214b47d8d81d4fbcea19dacafe3e78c7db27018e278d->leave($__internal_5524b08045e4c7eec6f3214b47d8d81d4fbcea19dacafe3e78c7db27018e278d_prof);

    }

    // line 31
    public function block_section($context, array $blocks = array())
    {
        $__internal_238321cd07d99c1a0c7fba66bc7de3e19f3b038ab9edc147913b0615da01a981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238321cd07d99c1a0c7fba66bc7de3e19f3b038ab9edc147913b0615da01a981->enter($__internal_238321cd07d99c1a0c7fba66bc7de3e19f3b038ab9edc147913b0615da01a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_a6e5841a3f60bfba68abb10e0094e01faaf7123bfacc3b6939c29c5de2b3e993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e5841a3f60bfba68abb10e0094e01faaf7123bfacc3b6939c29c5de2b3e993->enter($__internal_a6e5841a3f60bfba68abb10e0094e01faaf7123bfacc3b6939c29c5de2b3e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 32
        echo "            ";
        
        $__internal_a6e5841a3f60bfba68abb10e0094e01faaf7123bfacc3b6939c29c5de2b3e993->leave($__internal_a6e5841a3f60bfba68abb10e0094e01faaf7123bfacc3b6939c29c5de2b3e993_prof);

        
        $__internal_238321cd07d99c1a0c7fba66bc7de3e19f3b038ab9edc147913b0615da01a981->leave($__internal_238321cd07d99c1a0c7fba66bc7de3e19f3b038ab9edc147913b0615da01a981_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a0f10784fd8ddd1954b27037dfb7da9ce4171b447627c345783120015b0129e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0f10784fd8ddd1954b27037dfb7da9ce4171b447627c345783120015b0129e->enter($__internal_7a0f10784fd8ddd1954b27037dfb7da9ce4171b447627c345783120015b0129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6958d647d5fe16c6e78e308dff2e8434ea3dac26de0a3c7011ac4a3d23ca4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6958d647d5fe16c6e78e308dff2e8434ea3dac26de0a3c7011ac4a3d23ca4431->enter($__internal_6958d647d5fe16c6e78e308dff2e8434ea3dac26de0a3c7011ac4a3d23ca4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "            ";
        
        $__internal_6958d647d5fe16c6e78e308dff2e8434ea3dac26de0a3c7011ac4a3d23ca4431->leave($__internal_6958d647d5fe16c6e78e308dff2e8434ea3dac26de0a3c7011ac4a3d23ca4431_prof);

        
        $__internal_7a0f10784fd8ddd1954b27037dfb7da9ce4171b447627c345783120015b0129e->leave($__internal_7a0f10784fd8ddd1954b27037dfb7da9ce4171b447627c345783120015b0129e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efd69e662353ed02ec3f3f0bb02fc603d16c83f88351d5b06abeceb1577e4902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd69e662353ed02ec3f3f0bb02fc603d16c83f88351d5b06abeceb1577e4902->enter($__internal_efd69e662353ed02ec3f3f0bb02fc603d16c83f88351d5b06abeceb1577e4902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_017f8e4292e01a6b1a94398c3d86dec2f3a39f1bc0bde278890c4f40a3ed4015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017f8e4292e01a6b1a94398c3d86dec2f3a39f1bc0bde278890c4f40a3ed4015->enter($__internal_017f8e4292e01a6b1a94398c3d86dec2f3a39f1bc0bde278890c4f40a3ed4015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        ";
        
        $__internal_017f8e4292e01a6b1a94398c3d86dec2f3a39f1bc0bde278890c4f40a3ed4015->leave($__internal_017f8e4292e01a6b1a94398c3d86dec2f3a39f1bc0bde278890c4f40a3ed4015_prof);

        
        $__internal_efd69e662353ed02ec3f3f0bb02fc603d16c83f88351d5b06abeceb1577e4902->leave($__internal_efd69e662353ed02ec3f3f0bb02fc603d16c83f88351d5b06abeceb1577e4902_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  226 => 42,  217 => 41,  207 => 37,  198 => 36,  188 => 32,  179 => 31,  169 => 27,  160 => 26,  150 => 22,  141 => 21,  128 => 13,  119 => 12,  108 => 8,  99 => 7,  86 => 43,  84 => 41,  79 => 38,  77 => 36,  72 => 33,  70 => 31,  65 => 28,  63 => 26,  58 => 23,  56 => 21,  48 => 15,  46 => 12,  42 => 10,  40 => 7,  32 => 1,);
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
