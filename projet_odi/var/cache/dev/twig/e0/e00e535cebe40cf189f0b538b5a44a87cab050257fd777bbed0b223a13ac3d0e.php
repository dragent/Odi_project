<?php

/* default/index.html.twig */
class __TwigTemplate_0d6e60c43c022194d5cd2507079c91d90a00b8730e6a48456fecc90b3d2b6ff9 extends Twig_Template
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
        $__internal_13a9b87328254e5fb95c5444a26f7736ad7580d9aad43d1cee5c326fa610023f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a9b87328254e5fb95c5444a26f7736ad7580d9aad43d1cee5c326fa610023f->enter($__internal_13a9b87328254e5fb95c5444a26f7736ad7580d9aad43d1cee5c326fa610023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a9b87328254e5fb95c5444a26f7736ad7580d9aad43d1cee5c326fa610023f->leave($__internal_13a9b87328254e5fb95c5444a26f7736ad7580d9aad43d1cee5c326fa610023f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa52a051478e9eb11705b34def494c0655c33a65f3e8be5aa085c961d3a09b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa52a051478e9eb11705b34def494c0655c33a65f3e8be5aa085c961d3a09b5b->enter($__internal_fa52a051478e9eb11705b34def494c0655c33a65f3e8be5aa085c961d3a09b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "    Bienvenue | ODI
";
        
        $__internal_fa52a051478e9eb11705b34def494c0655c33a65f3e8be5aa085c961d3a09b5b->leave($__internal_fa52a051478e9eb11705b34def494c0655c33a65f3e8be5aa085c961d3a09b5b_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94df1cc7c4c0973c3892ac8ff490d08ac4eb938dd3f235aea4571c058dc5938c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94df1cc7c4c0973c3892ac8ff490d08ac4eb938dd3f235aea4571c058dc5938c->enter($__internal_94df1cc7c4c0973c3892ac8ff490d08ac4eb938dd3f235aea4571c058dc5938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 8
        echo "    ";
        $this->loadTemplate("menubase.twig", "default/index.html.twig", 8)->display($context);
        
        $__internal_94df1cc7c4c0973c3892ac8ff490d08ac4eb938dd3f235aea4571c058dc5938c->leave($__internal_94df1cc7c4c0973c3892ac8ff490d08ac4eb938dd3f235aea4571c058dc5938c_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_574da81241b7f04b45f40e800ed483c536561edf3764b27dd2da47189470b3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574da81241b7f04b45f40e800ed483c536561edf3764b27dd2da47189470b3d4->enter($__internal_574da81241b7f04b45f40e800ed483c536561edf3764b27dd2da47189470b3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 12
        echo "\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Bienvenue dans le projet ODI</h2>
\t</div>
";
        
        $__internal_574da81241b7f04b45f40e800ed483c536561edf3764b27dd2da47189470b3d4->leave($__internal_574da81241b7f04b45f40e800ed483c536561edf3764b27dd2da47189470b3d4_prof);

    }

    // line 17
    public function block_section($context, array $blocks = array())
    {
        $__internal_a8a803ca3d5daa912e652d059187b726bc78f7667e6b9a5574a404f8be610428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a803ca3d5daa912e652d059187b726bc78f7667e6b9a5574a404f8be610428->enter($__internal_a8a803ca3d5daa912e652d059187b726bc78f7667e6b9a5574a404f8be610428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 18
        echo "  <div class=\"container\">
  </div>
";
        
        $__internal_a8a803ca3d5daa912e652d059187b726bc78f7667e6b9a5574a404f8be610428->leave($__internal_a8a803ca3d5daa912e652d059187b726bc78f7667e6b9a5574a404f8be610428_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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





", "default/index.html.twig", "/var/www/html/projet_odi/app/Resources/views/default/index.html.twig");
    }
}
