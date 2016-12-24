<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f87bfc0ab9be96c65513930cced407dbf6a79e5b9a887f2dbfb49365cbdd8bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f0d25c63030377cc4b2ae04a9d1e7c596349fd88db9357d63021a0a8fee9c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0d25c63030377cc4b2ae04a9d1e7c596349fd88db9357d63021a0a8fee9c56->enter($__internal_1f0d25c63030377cc4b2ae04a9d1e7c596349fd88db9357d63021a0a8fee9c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f0d25c63030377cc4b2ae04a9d1e7c596349fd88db9357d63021a0a8fee9c56->leave($__internal_1f0d25c63030377cc4b2ae04a9d1e7c596349fd88db9357d63021a0a8fee9c56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86c620aeacd602027e9d658e56ffcec59e7ff3b7f9a842400e0a8ec6b35c0bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c620aeacd602027e9d658e56ffcec59e7ff3b7f9a842400e0a8ec6b35c0bf0->enter($__internal_86c620aeacd602027e9d658e56ffcec59e7ff3b7f9a842400e0a8ec6b35c0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86c620aeacd602027e9d658e56ffcec59e7ff3b7f9a842400e0a8ec6b35c0bf0->leave($__internal_86c620aeacd602027e9d658e56ffcec59e7ff3b7f9a842400e0a8ec6b35c0bf0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b48c048041993e486ef3b5902a916d3a9e0257462791b8e7d5ed05a6b73a0e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48c048041993e486ef3b5902a916d3a9e0257462791b8e7d5ed05a6b73a0e82->enter($__internal_b48c048041993e486ef3b5902a916d3a9e0257462791b8e7d5ed05a6b73a0e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b48c048041993e486ef3b5902a916d3a9e0257462791b8e7d5ed05a6b73a0e82->leave($__internal_b48c048041993e486ef3b5902a916d3a9e0257462791b8e7d5ed05a6b73a0e82_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ac16153ca7086e1d7e5631302ce8c0bd03fc67bfdb6dd3946767939ae2328e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ac16153ca7086e1d7e5631302ce8c0bd03fc67bfdb6dd3946767939ae2328e->enter($__internal_54ac16153ca7086e1d7e5631302ce8c0bd03fc67bfdb6dd3946767939ae2328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_54ac16153ca7086e1d7e5631302ce8c0bd03fc67bfdb6dd3946767939ae2328e->leave($__internal_54ac16153ca7086e1d7e5631302ce8c0bd03fc67bfdb6dd3946767939ae2328e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/projet_odi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
