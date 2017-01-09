<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8344f7d6e5a4f26feb4eaf00cd8fe5ccfcd7c21f24e302a1a2d6efa26cc63b07 extends Twig_Template
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
        $__internal_bef98e0425d4f2698d04bb5cf1a403689289f63c766e21eea9e59bfe9160c368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef98e0425d4f2698d04bb5cf1a403689289f63c766e21eea9e59bfe9160c368->enter($__internal_bef98e0425d4f2698d04bb5cf1a403689289f63c766e21eea9e59bfe9160c368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef98e0425d4f2698d04bb5cf1a403689289f63c766e21eea9e59bfe9160c368->leave($__internal_bef98e0425d4f2698d04bb5cf1a403689289f63c766e21eea9e59bfe9160c368_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d738adab06070b56c1abd446b91b5eccdcdf08dccb40ef025f1012cdec6acf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d738adab06070b56c1abd446b91b5eccdcdf08dccb40ef025f1012cdec6acf65->enter($__internal_d738adab06070b56c1abd446b91b5eccdcdf08dccb40ef025f1012cdec6acf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d738adab06070b56c1abd446b91b5eccdcdf08dccb40ef025f1012cdec6acf65->leave($__internal_d738adab06070b56c1abd446b91b5eccdcdf08dccb40ef025f1012cdec6acf65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d3006a6472fc4504d1049c8ecb30a2b366c5ef0cd830f3e5ae14b6954d3529a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3006a6472fc4504d1049c8ecb30a2b366c5ef0cd830f3e5ae14b6954d3529a->enter($__internal_1d3006a6472fc4504d1049c8ecb30a2b366c5ef0cd830f3e5ae14b6954d3529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1d3006a6472fc4504d1049c8ecb30a2b366c5ef0cd830f3e5ae14b6954d3529a->leave($__internal_1d3006a6472fc4504d1049c8ecb30a2b366c5ef0cd830f3e5ae14b6954d3529a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c572c68ecff8954c975e2250ccde76058746f8298dea5bc7a8364f08938d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c572c68ecff8954c975e2250ccde76058746f8298dea5bc7a8364f08938d44->enter($__internal_a7c572c68ecff8954c975e2250ccde76058746f8298dea5bc7a8364f08938d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a7c572c68ecff8954c975e2250ccde76058746f8298dea5bc7a8364f08938d44->leave($__internal_a7c572c68ecff8954c975e2250ccde76058746f8298dea5bc7a8364f08938d44_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
