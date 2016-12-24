<?php

/* personne/new.html.twig */
class __TwigTemplate_e60561aef298f133f44eda57bb6554833aaf7c76908694729b34a939f6fc8915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personne/new.html.twig", 1);
        $this->blocks = array(
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
        $__internal_20e81c070e9fa3b849f30e22e2fceb4fc67890c5e6c8fa9c4921ccc67dcf3a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e81c070e9fa3b849f30e22e2fceb4fc67890c5e6c8fa9c4921ccc67dcf3a46->enter($__internal_20e81c070e9fa3b849f30e22e2fceb4fc67890c5e6c8fa9c4921ccc67dcf3a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personne/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e81c070e9fa3b849f30e22e2fceb4fc67890c5e6c8fa9c4921ccc67dcf3a46->leave($__internal_20e81c070e9fa3b849f30e22e2fceb4fc67890c5e6c8fa9c4921ccc67dcf3a46_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_921a345cb2bd9d202aab6ac2cdebee75b06cc47c590792a665d3862404297236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921a345cb2bd9d202aab6ac2cdebee75b06cc47c590792a665d3862404297236->enter($__internal_921a345cb2bd9d202aab6ac2cdebee75b06cc47c590792a665d3862404297236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne/new.html.twig"));

        // line 4
        echo "  <div class=\"page-header\">
    <h2 class=\"centrer isoler\">Créer une nouvelle personne</h2>
  </div>
";
        
        $__internal_921a345cb2bd9d202aab6ac2cdebee75b06cc47c590792a665d3862404297236->leave($__internal_921a345cb2bd9d202aab6ac2cdebee75b06cc47c590792a665d3862404297236_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_abec94cc4534389f727b82a966087fe0fa7ac381ba5e0dac857576baacbd9e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abec94cc4534389f727b82a966087fe0fa7ac381ba5e0dac857576baacbd9e75->enter($__internal_abec94cc4534389f727b82a966087fe0fa7ac381ba5e0dac857576baacbd9e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne/new.html.twig"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <p class=\"isoler\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePersonne");
        echo "\" class=\"btn btn-primary\">Retourner à la liste</a></p>
";
        
        $__internal_abec94cc4534389f727b82a966087fe0fa7ac381ba5e0dac857576baacbd9e75->leave($__internal_abec94cc4534389f727b82a966087fe0fa7ac381ba5e0dac857576baacbd9e75_prof);

    }

    public function getTemplateName()
    {
        return "personne/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
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

{% block header %}
  <div class=\"page-header\">
    <h2 class=\"centrer isoler\">Créer une nouvelle personne</h2>
  </div>
{% endblock %}

{% block section %}

    {{ form_start(form) }}
    {{ form_errors(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

    <p class=\"isoler\"><a href=\"{{ path('affichePersonne') }}\" class=\"btn btn-primary\">Retourner à la liste</a></p>
{% endblock %}
", "personne/new.html.twig", "/var/www/html/projet_odi/app/Resources/views/personne/new.html.twig");
    }
}
