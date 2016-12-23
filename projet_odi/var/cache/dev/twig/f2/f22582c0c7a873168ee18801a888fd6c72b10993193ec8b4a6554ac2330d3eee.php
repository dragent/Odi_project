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
        $__internal_772479ba1e780045e34efea9e7b16009f62e4188924db78eb52bf5736d2f3062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772479ba1e780045e34efea9e7b16009f62e4188924db78eb52bf5736d2f3062->enter($__internal_772479ba1e780045e34efea9e7b16009f62e4188924db78eb52bf5736d2f3062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2aefc1f33219a4763940d43dbf4838e0bec2bf81a3bf2250fb4ee7a7d0859b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aefc1f33219a4763940d43dbf4838e0bec2bf81a3bf2250fb4ee7a7d0859b2b->enter($__internal_2aefc1f33219a4763940d43dbf4838e0bec2bf81a3bf2250fb4ee7a7d0859b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_772479ba1e780045e34efea9e7b16009f62e4188924db78eb52bf5736d2f3062->leave($__internal_772479ba1e780045e34efea9e7b16009f62e4188924db78eb52bf5736d2f3062_prof);

        
        $__internal_2aefc1f33219a4763940d43dbf4838e0bec2bf81a3bf2250fb4ee7a7d0859b2b->leave($__internal_2aefc1f33219a4763940d43dbf4838e0bec2bf81a3bf2250fb4ee7a7d0859b2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4290c8a86edfb921e038d20163974525aa65b39b6d383d4d07a390de31498da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4290c8a86edfb921e038d20163974525aa65b39b6d383d4d07a390de31498da8->enter($__internal_4290c8a86edfb921e038d20163974525aa65b39b6d383d4d07a390de31498da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0fb3b00e84b3399f56f3b11789c477ac3d05635ddf77205abd438f307350392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fb3b00e84b3399f56f3b11789c477ac3d05635ddf77205abd438f307350392->enter($__internal_c0fb3b00e84b3399f56f3b11789c477ac3d05635ddf77205abd438f307350392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                Welcome!
            ";
        
        $__internal_c0fb3b00e84b3399f56f3b11789c477ac3d05635ddf77205abd438f307350392->leave($__internal_c0fb3b00e84b3399f56f3b11789c477ac3d05635ddf77205abd438f307350392_prof);

        
        $__internal_4290c8a86edfb921e038d20163974525aa65b39b6d383d4d07a390de31498da8->leave($__internal_4290c8a86edfb921e038d20163974525aa65b39b6d383d4d07a390de31498da8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0712520b5d9b1e28af0f5c56de6c103d80b0d93803bf736974130a8330eea3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0712520b5d9b1e28af0f5c56de6c103d80b0d93803bf736974130a8330eea3e6->enter($__internal_0712520b5d9b1e28af0f5c56de6c103d80b0d93803bf736974130a8330eea3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a15f885f869dbc5a75edfe0f116b7cb2dcaad50ef0fd7ba6ebc22028e703161a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15f885f869dbc5a75edfe0f116b7cb2dcaad50ef0fd7ba6ebc22028e703161a->enter($__internal_a15f885f869dbc5a75edfe0f116b7cb2dcaad50ef0fd7ba6ebc22028e703161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a15f885f869dbc5a75edfe0f116b7cb2dcaad50ef0fd7ba6ebc22028e703161a->leave($__internal_a15f885f869dbc5a75edfe0f116b7cb2dcaad50ef0fd7ba6ebc22028e703161a_prof);

        
        $__internal_0712520b5d9b1e28af0f5c56de6c103d80b0d93803bf736974130a8330eea3e6->leave($__internal_0712520b5d9b1e28af0f5c56de6c103d80b0d93803bf736974130a8330eea3e6_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cb0de0ad50dcc14cad3745aa979e7f45e86210bd97046bb6d125ac4ca138336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb0de0ad50dcc14cad3745aa979e7f45e86210bd97046bb6d125ac4ca138336->enter($__internal_1cb0de0ad50dcc14cad3745aa979e7f45e86210bd97046bb6d125ac4ca138336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a6c15179a164059a4891059b446b680e4803ddc6d259651fa48ecd8c681be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6c15179a164059a4891059b446b680e4803ddc6d259651fa48ecd8c681be57->enter($__internal_5a6c15179a164059a4891059b446b680e4803ddc6d259651fa48ecd8c681be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "            ";
        
        $__internal_5a6c15179a164059a4891059b446b680e4803ddc6d259651fa48ecd8c681be57->leave($__internal_5a6c15179a164059a4891059b446b680e4803ddc6d259651fa48ecd8c681be57_prof);

        
        $__internal_1cb0de0ad50dcc14cad3745aa979e7f45e86210bd97046bb6d125ac4ca138336->leave($__internal_1cb0de0ad50dcc14cad3745aa979e7f45e86210bd97046bb6d125ac4ca138336_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_37e8f309735f868231a2062e658fddc7b284c22d402dcc7bdf163d67f7deb7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e8f309735f868231a2062e658fddc7b284c22d402dcc7bdf163d67f7deb7a1->enter($__internal_37e8f309735f868231a2062e658fddc7b284c22d402dcc7bdf163d67f7deb7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f988406f404955c5990c974f01f17c89a3b241111b7701117c26cb8a78da37db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f988406f404955c5990c974f01f17c89a3b241111b7701117c26cb8a78da37db->enter($__internal_f988406f404955c5990c974f01f17c89a3b241111b7701117c26cb8a78da37db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "            ";
        
        $__internal_f988406f404955c5990c974f01f17c89a3b241111b7701117c26cb8a78da37db->leave($__internal_f988406f404955c5990c974f01f17c89a3b241111b7701117c26cb8a78da37db_prof);

        
        $__internal_37e8f309735f868231a2062e658fddc7b284c22d402dcc7bdf163d67f7deb7a1->leave($__internal_37e8f309735f868231a2062e658fddc7b284c22d402dcc7bdf163d67f7deb7a1_prof);

    }

    // line 31
    public function block_section($context, array $blocks = array())
    {
        $__internal_42877a6a71676b9952cef4a6622f0fbf9c1da63b1baa30eaa27490cb2b1b21af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42877a6a71676b9952cef4a6622f0fbf9c1da63b1baa30eaa27490cb2b1b21af->enter($__internal_42877a6a71676b9952cef4a6622f0fbf9c1da63b1baa30eaa27490cb2b1b21af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_c2bcc3aa088c088131524742a165fffc9dbd03381315fb37e4311da59d1ef67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bcc3aa088c088131524742a165fffc9dbd03381315fb37e4311da59d1ef67f->enter($__internal_c2bcc3aa088c088131524742a165fffc9dbd03381315fb37e4311da59d1ef67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 32
        echo "            ";
        
        $__internal_c2bcc3aa088c088131524742a165fffc9dbd03381315fb37e4311da59d1ef67f->leave($__internal_c2bcc3aa088c088131524742a165fffc9dbd03381315fb37e4311da59d1ef67f_prof);

        
        $__internal_42877a6a71676b9952cef4a6622f0fbf9c1da63b1baa30eaa27490cb2b1b21af->leave($__internal_42877a6a71676b9952cef4a6622f0fbf9c1da63b1baa30eaa27490cb2b1b21af_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_afddb7c22c799bc24bd034d383d30ebe57a6e20e598afeaee4147ec757ed12c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afddb7c22c799bc24bd034d383d30ebe57a6e20e598afeaee4147ec757ed12c4->enter($__internal_afddb7c22c799bc24bd034d383d30ebe57a6e20e598afeaee4147ec757ed12c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4d380beca8c9bf229a7d02b22fd1c36b731b05863c6ab7c398bb6d581abea118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d380beca8c9bf229a7d02b22fd1c36b731b05863c6ab7c398bb6d581abea118->enter($__internal_4d380beca8c9bf229a7d02b22fd1c36b731b05863c6ab7c398bb6d581abea118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 37
        echo "            ";
        
        $__internal_4d380beca8c9bf229a7d02b22fd1c36b731b05863c6ab7c398bb6d581abea118->leave($__internal_4d380beca8c9bf229a7d02b22fd1c36b731b05863c6ab7c398bb6d581abea118_prof);

        
        $__internal_afddb7c22c799bc24bd034d383d30ebe57a6e20e598afeaee4147ec757ed12c4->leave($__internal_afddb7c22c799bc24bd034d383d30ebe57a6e20e598afeaee4147ec757ed12c4_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ddeb067dc0ffd9685c8a9edd127a276793524ac298778f3053a781aafb883e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddeb067dc0ffd9685c8a9edd127a276793524ac298778f3053a781aafb883e8->enter($__internal_0ddeb067dc0ffd9685c8a9edd127a276793524ac298778f3053a781aafb883e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b4966b83e37b1452d1792139deb25c12d77cee4ff015e687339cedc71f03785a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4966b83e37b1452d1792139deb25c12d77cee4ff015e687339cedc71f03785a->enter($__internal_b4966b83e37b1452d1792139deb25c12d77cee4ff015e687339cedc71f03785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        ";
        
        $__internal_b4966b83e37b1452d1792139deb25c12d77cee4ff015e687339cedc71f03785a->leave($__internal_b4966b83e37b1452d1792139deb25c12d77cee4ff015e687339cedc71f03785a_prof);

        
        $__internal_0ddeb067dc0ffd9685c8a9edd127a276793524ac298778f3053a781aafb883e8->leave($__internal_0ddeb067dc0ffd9685c8a9edd127a276793524ac298778f3053a781aafb883e8_prof);

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
