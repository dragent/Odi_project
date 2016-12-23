<?php

/* client/creation_panier_client.twig */
class __TwigTemplate_3daf2208052111d4349b01746dc68dea0bfe94dae6c4d320e70b89c8f4127227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/creation_panier_client.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_066ffec9e7e84f646d5f0009f9539c50552c1c605b067579d34046da4138ca07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066ffec9e7e84f646d5f0009f9539c50552c1c605b067579d34046da4138ca07->enter($__internal_066ffec9e7e84f646d5f0009f9539c50552c1c605b067579d34046da4138ca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/creation_panier_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_066ffec9e7e84f646d5f0009f9539c50552c1c605b067579d34046da4138ca07->leave($__internal_066ffec9e7e84f646d5f0009f9539c50552c1c605b067579d34046da4138ca07_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba4b37b2b9538ccfe831fa2f016d934d0f70ca0c88eec556a746de245fb4bfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4b37b2b9538ccfe831fa2f016d934d0f70ca0c88eec556a746de245fb4bfbf->enter($__internal_ba4b37b2b9538ccfe831fa2f016d934d0f70ca0c88eec556a746de245fb4bfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/creation_panier_client.twig", 4)->display($context);
        
        $__internal_ba4b37b2b9538ccfe831fa2f016d934d0f70ca0c88eec556a746de245fb4bfbf->leave($__internal_ba4b37b2b9538ccfe831fa2f016d934d0f70ca0c88eec556a746de245fb4bfbf_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_331a59e5d7bc5d84622caf831bd62ba0eef21a5a28bd3dab85a357bf2adc6765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331a59e5d7bc5d84622caf831bd62ba0eef21a5a28bd3dab85a357bf2adc6765->enter($__internal_331a59e5d7bc5d84622caf831bd62ba0eef21a5a28bd3dab85a357bf2adc6765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_331a59e5d7bc5d84622caf831bd62ba0eef21a5a28bd3dab85a357bf2adc6765->leave($__internal_331a59e5d7bc5d84622caf831bd62ba0eef21a5a28bd3dab85a357bf2adc6765_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_7f4388f6770ba66ca8e5e529972c86b9dc4cb92c2f45892172f396433df809bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4388f6770ba66ca8e5e529972c86b9dc4cb92c2f45892172f396433df809bb->enter($__internal_7f4388f6770ba66ca8e5e529972c86b9dc4cb92c2f45892172f396433df809bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Creation de panier : <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creation_panier_client");
        echo "\" class=\"btn btn-primary\">Nouveau Panier (ou reprise du precedent)</a></h2>
";
        
        $__internal_7f4388f6770ba66ca8e5e529972c86b9dc4cb92c2f45892172f396433df809bb->leave($__internal_7f4388f6770ba66ca8e5e529972c86b9dc4cb92c2f45892172f396433df809bb_prof);

    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cc75da530269ec4e979dcb792ca16d1b0e34e7df8fd4d18fb5eec639f9426daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc75da530269ec4e979dcb792ca16d1b0e34e7df8fd4d18fb5eec639f9426daa->enter($__internal_cc75da530269ec4e979dcb792ca16d1b0e34e7df8fd4d18fb5eec639f9426daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_cc75da530269ec4e979dcb792ca16d1b0e34e7df8fd4d18fb5eec639f9426daa->leave($__internal_cc75da530269ec4e979dcb792ca16d1b0e34e7df8fd4d18fb5eec639f9426daa_prof);

    }

    public function getTemplateName()
    {
        return "client/creation_panier_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  68 => 11,  62 => 10,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block menu %}
    {% include 'client/menu_client.twig' %}
{% endblock %}

{% block header %}
{% endblock %}

{% block section %}
    <h2>Creation de panier : <a href=\"{{ path('creation_panier_client') }}\" class=\"btn btn-primary\">Nouveau Panier (ou reprise du precedent)</a></h2>
{% endblock %}

{% block footer %}
{% endblock %}
", "client/creation_panier_client.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\client\\creation_panier_client.twig");
    }
}
