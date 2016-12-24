<?php

/* magasinier/form.twig */
class __TwigTemplate_ec5097281cb35c7819c5d3269a87ff392306aa2828bdaa3adf41ea082f349ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/form.twig", 1);
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
        $__internal_7d3a40c469a18e226ffed9ed84fac4c46e4e34037cd9fe91921e09850f0e37ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3a40c469a18e226ffed9ed84fac4c46e4e34037cd9fe91921e09850f0e37ad->enter($__internal_7d3a40c469a18e226ffed9ed84fac4c46e4e34037cd9fe91921e09850f0e37ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/form.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3a40c469a18e226ffed9ed84fac4c46e4e34037cd9fe91921e09850f0e37ad->leave($__internal_7d3a40c469a18e226ffed9ed84fac4c46e4e34037cd9fe91921e09850f0e37ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a51f4b53bc9abf1647538309d0cbd8fed13afde4b80e0ccba0913b8cb84aacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a51f4b53bc9abf1647538309d0cbd8fed13afde4b80e0ccba0913b8cb84aacc->enter($__internal_5a51f4b53bc9abf1647538309d0cbd8fed13afde4b80e0ccba0913b8cb84aacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/form.twig"));

        // line 4
        echo "\tMagasinier | ";
        echo twig_escape_filter($this->env, (isset($context["titreOnglet"]) ? $context["titreOnglet"] : $this->getContext($context, "titreOnglet")), "html", null, true);
        echo "
";
        
        $__internal_5a51f4b53bc9abf1647538309d0cbd8fed13afde4b80e0ccba0913b8cb84aacc->leave($__internal_5a51f4b53bc9abf1647538309d0cbd8fed13afde4b80e0ccba0913b8cb84aacc_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1210d63a490457b6ddde98c84bea7332ddf2ab5ac73ffd672a5f8b0b425c2837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1210d63a490457b6ddde98c84bea7332ddf2ab5ac73ffd672a5f8b0b425c2837->enter($__internal_1210d63a490457b6ddde98c84bea7332ddf2ab5ac73ffd672a5f8b0b425c2837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/form.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/form.twig", 11)->display($context);
        
        $__internal_1210d63a490457b6ddde98c84bea7332ddf2ab5ac73ffd672a5f8b0b425c2837->leave($__internal_1210d63a490457b6ddde98c84bea7332ddf2ab5ac73ffd672a5f8b0b425c2837_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_78ab9db0543eaa2218750c9b8083fe3c9f822dad7c1cf39822e47b39c16fd960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ab9db0543eaa2218750c9b8083fe3c9f822dad7c1cf39822e47b39c16fd960->enter($__internal_78ab9db0543eaa2218750c9b8083fe3c9f822dad7c1cf39822e47b39c16fd960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/form.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 20
        echo "        ";
        // line 21
        echo "    ";
        
        $__internal_78ab9db0543eaa2218750c9b8083fe3c9f822dad7c1cf39822e47b39c16fd960->leave($__internal_78ab9db0543eaa2218750c9b8083fe3c9f822dad7c1cf39822e47b39c16fd960_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_d14633774d3e4073ba4050cbd854a7c2a12a6716b2e133bdb1f4acf537c68a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14633774d3e4073ba4050cbd854a7c2a12a6716b2e133bdb1f4acf537c68a00->enter($__internal_d14633774d3e4073ba4050cbd854a7c2a12a6716b2e133bdb1f4acf537c68a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/form.twig"));

        // line 25
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d14633774d3e4073ba4050cbd854a7c2a12a6716b2e133bdb1f4acf537c68a00->leave($__internal_d14633774d3e4073ba4050cbd854a7c2a12a6716b2e133bdb1f4acf537c68a00_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  109 => 27,  105 => 26,  100 => 25,  94 => 24,  87 => 21,  85 => 20,  80 => 17,  77 => 16,  75 => 15,  69 => 14,  61 => 11,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
\tMagasinier | {{ titreOnglet }}
{% endblock %}

{% block menu %}
    {#{% if magasinier %}
        {% include 'menu_magasinier.twig' %}
    {% endif %}#}
    {% include 'magasinier/menu_magasinier.twig' %}
{% endblock %}

{% block header %}
    {#{% if magasinier %}#}
    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">{{ titre }}</h2>
    </div>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
    {{ form_start(form) }}
\t{{ form_errors(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
{% endblock %}", "magasinier/form.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/form.twig");
    }
}
