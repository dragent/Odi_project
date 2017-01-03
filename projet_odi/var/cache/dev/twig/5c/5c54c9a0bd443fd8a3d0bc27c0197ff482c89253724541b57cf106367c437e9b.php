<?php

/* produits/form.twig */
class __TwigTemplate_e227669c4ead85826529d5bbb814f2c34e8ad1311c1219d23531290adfbab124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/form.twig", 1);
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
        $__internal_36a1f1231410e5c7164bc90f80fa07776f7fd307606c5e70f51a94f8b7a70f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a1f1231410e5c7164bc90f80fa07776f7fd307606c5e70f51a94f8b7a70f95->enter($__internal_36a1f1231410e5c7164bc90f80fa07776f7fd307606c5e70f51a94f8b7a70f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/form.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a1f1231410e5c7164bc90f80fa07776f7fd307606c5e70f51a94f8b7a70f95->leave($__internal_36a1f1231410e5c7164bc90f80fa07776f7fd307606c5e70f51a94f8b7a70f95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aefa7345935869ba6d5f6f9eb330c22b300e6d44d68764085b421d1ec1e61288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefa7345935869ba6d5f6f9eb330c22b300e6d44d68764085b421d1ec1e61288->enter($__internal_aefa7345935869ba6d5f6f9eb330c22b300e6d44d68764085b421d1ec1e61288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/form.twig"));

        // line 4
        echo "\tMagasinier | ";
        echo twig_escape_filter($this->env, (isset($context["titreOnglet"]) ? $context["titreOnglet"] : $this->getContext($context, "titreOnglet")), "html", null, true);
        echo "
";
        
        $__internal_aefa7345935869ba6d5f6f9eb330c22b300e6d44d68764085b421d1ec1e61288->leave($__internal_aefa7345935869ba6d5f6f9eb330c22b300e6d44d68764085b421d1ec1e61288_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06bab882c3a30e06bfce5ddd18f3bcd9e61823a01f47fc0461200d38959024ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bab882c3a30e06bfce5ddd18f3bcd9e61823a01f47fc0461200d38959024ba->enter($__internal_06bab882c3a30e06bfce5ddd18f3bcd9e61823a01f47fc0461200d38959024ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/form.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "produits/form.twig", 11)->display($context);
        
        $__internal_06bab882c3a30e06bfce5ddd18f3bcd9e61823a01f47fc0461200d38959024ba->leave($__internal_06bab882c3a30e06bfce5ddd18f3bcd9e61823a01f47fc0461200d38959024ba_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_4efc6c61f026a86532d3ff0687e5493f87f63a63f2313a89657d5a608b7cc978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efc6c61f026a86532d3ff0687e5493f87f63a63f2313a89657d5a608b7cc978->enter($__internal_4efc6c61f026a86532d3ff0687e5493f87f63a63f2313a89657d5a608b7cc978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/form.twig"));

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
        
        $__internal_4efc6c61f026a86532d3ff0687e5493f87f63a63f2313a89657d5a608b7cc978->leave($__internal_4efc6c61f026a86532d3ff0687e5493f87f63a63f2313a89657d5a608b7cc978_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_c1f6941e6c89dfbc689b1f690b655f15391e71b9e31e42d65e3226b6f106e184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f6941e6c89dfbc689b1f690b655f15391e71b9e31e42d65e3226b6f106e184->enter($__internal_c1f6941e6c89dfbc689b1f690b655f15391e71b9e31e42d65e3226b6f106e184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/form.twig"));

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
        
        $__internal_c1f6941e6c89dfbc689b1f690b655f15391e71b9e31e42d65e3226b6f106e184->leave($__internal_c1f6941e6c89dfbc689b1f690b655f15391e71b9e31e42d65e3226b6f106e184_prof);

    }

    public function getTemplateName()
    {
        return "produits/form.twig";
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
    {% include 'menu_magasinier.twig' %}
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
{% endblock %}", "produits/form.twig", "/var/www/html/projet_odi/app/Resources/views/produits/form.twig");
    }
}
