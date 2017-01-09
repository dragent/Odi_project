<?php

/* default/index.html.twig */
class __TwigTemplate_8ce16602d77e7c010de29041ff280f278ed4e8a9102d3230691bb430cd145a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da733c092da32bafc8e446c789fc178acd7680d4392b3d33383accbd8c3f882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da733c092da32bafc8e446c789fc178acd7680d4392b3d33383accbd8c3f882->enter($__internal_4da733c092da32bafc8e446c789fc178acd7680d4392b3d33383accbd8c3f882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da733c092da32bafc8e446c789fc178acd7680d4392b3d33383accbd8c3f882->leave($__internal_4da733c092da32bafc8e446c789fc178acd7680d4392b3d33383accbd8c3f882_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69bca6d32f83d8c934943d37b6e5d2e03ad162584897faeaa04263ef6cf47333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bca6d32f83d8c934943d37b6e5d2e03ad162584897faeaa04263ef6cf47333->enter($__internal_69bca6d32f83d8c934943d37b6e5d2e03ad162584897faeaa04263ef6cf47333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Bienvenue | ODI
";
        
        $__internal_69bca6d32f83d8c934943d37b6e5d2e03ad162584897faeaa04263ef6cf47333->leave($__internal_69bca6d32f83d8c934943d37b6e5d2e03ad162584897faeaa04263ef6cf47333_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fae8508af680679945b616c6b93137bcd1c5db3c9fcc7e333ac1d6741f9402b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fae8508af680679945b616c6b93137bcd1c5db3c9fcc7e333ac1d6741f9402b->enter($__internal_2fae8508af680679945b616c6b93137bcd1c5db3c9fcc7e333ac1d6741f9402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "    ";
        $this->loadTemplate("menubase.twig", "default/index.html.twig", 8)->display($context);
        
        $__internal_2fae8508af680679945b616c6b93137bcd1c5db3c9fcc7e333ac1d6741f9402b->leave($__internal_2fae8508af680679945b616c6b93137bcd1c5db3c9fcc7e333ac1d6741f9402b_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c29548c0dd6cb422e86371e4b8c4163a61af1626407516051efbf6bc9ced5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c29548c0dd6cb422e86371e4b8c4163a61af1626407516051efbf6bc9ced5f2->enter($__internal_2c29548c0dd6cb422e86371e4b8c4163a61af1626407516051efbf6bc9ced5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Bienvenue dans le projet ODI</h2>
\t</div>
";
        
        $__internal_2c29548c0dd6cb422e86371e4b8c4163a61af1626407516051efbf6bc9ced5f2->leave($__internal_2c29548c0dd6cb422e86371e4b8c4163a61af1626407516051efbf6bc9ced5f2_prof);

    }

    // line 17
    public function block_section($context, array $blocks = array())
    {
        $__internal_9134c95f04b7971f5fb7a13c42da6dcf4ef297fb6f2e444c4ce4b365c434663a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9134c95f04b7971f5fb7a13c42da6dcf4ef297fb6f2e444c4ce4b365c434663a->enter($__internal_9134c95f04b7971f5fb7a13c42da6dcf4ef297fb6f2e444c4ce4b365c434663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 18
        echo "  <div class=\"container\">
  </div>
";
        
        $__internal_9134c95f04b7971f5fb7a13c42da6dcf4ef297fb6f2e444c4ce4b365c434663a->leave($__internal_9134c95f04b7971f5fb7a13c42da6dcf4ef297fb6f2e444c4ce4b365c434663a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  81 => 17,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Bienvenue | ODI
{% endblock %}

{% block menu %}
    {% include 'menubase.twig' %}
{% endblock %}

{% block header %}
\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Bienvenue dans le projet ODI</h2>
\t</div>
{% endblock %}

{% block section %}
  <div class=\"container\">
  </div>
{% endblock %}





", "default/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\default\\index.html.twig");
    }
}
