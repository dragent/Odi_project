<?php

/* produits/list.html.twig */
class __TwigTemplate_a1a26db7ad89fbf1a5f819679dfbb199f2e8a13485f9feea2a90a4d5ac2b5271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/list.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9da195d5a0d0501da22f57b810ba375c5bbc13e36ad5567120e69ef6ac0464fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da195d5a0d0501da22f57b810ba375c5bbc13e36ad5567120e69ef6ac0464fc->enter($__internal_9da195d5a0d0501da22f57b810ba375c5bbc13e36ad5567120e69ef6ac0464fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/list.html.twig"));

        $__internal_886add3ef223051792c4730e41c644597082c0bb22c4562bf369c45585d1cee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886add3ef223051792c4730e41c644597082c0bb22c4562bf369c45585d1cee2->enter($__internal_886add3ef223051792c4730e41c644597082c0bb22c4562bf369c45585d1cee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da195d5a0d0501da22f57b810ba375c5bbc13e36ad5567120e69ef6ac0464fc->leave($__internal_9da195d5a0d0501da22f57b810ba375c5bbc13e36ad5567120e69ef6ac0464fc_prof);

        
        $__internal_886add3ef223051792c4730e41c644597082c0bb22c4562bf369c45585d1cee2->leave($__internal_886add3ef223051792c4730e41c644597082c0bb22c4562bf369c45585d1cee2_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15fdbad52b9b9759696ddb4a6cb120845315bc879d0d1c914c24397fd2359d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fdbad52b9b9759696ddb4a6cb120845315bc879d0d1c914c24397fd2359d4c->enter($__internal_15fdbad52b9b9759696ddb4a6cb120845315bc879d0d1c914c24397fd2359d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12409f175c8c8478972a34eb5ed0dccc922045208e8f870e4b068315505fc88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12409f175c8c8478972a34eb5ed0dccc922045208e8f870e4b068315505fc88c->enter($__internal_12409f175c8c8478972a34eb5ed0dccc922045208e8f870e4b068315505fc88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        $this->loadTemplate("menu.twig", "produits/list.html.twig", 3)->display($context);
        
        $__internal_12409f175c8c8478972a34eb5ed0dccc922045208e8f870e4b068315505fc88c->leave($__internal_12409f175c8c8478972a34eb5ed0dccc922045208e8f870e4b068315505fc88c_prof);

        
        $__internal_15fdbad52b9b9759696ddb4a6cb120845315bc879d0d1c914c24397fd2359d4c->leave($__internal_15fdbad52b9b9759696ddb4a6cb120845315bc879d0d1c914c24397fd2359d4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6df9a8f4cbb93ac97b43f26c543377483aa526cdd4fd9a9996136c8e29d116a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df9a8f4cbb93ac97b43f26c543377483aa526cdd4fd9a9996136c8e29d116a9->enter($__internal_6df9a8f4cbb93ac97b43f26c543377483aa526cdd4fd9a9996136c8e29d116a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6356f7a179bea1c97315ea4ead417c0fb6aec5d7ec5b0893e41835f7771d08ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6356f7a179bea1c97315ea4ead417c0fb6aec5d7ec5b0893e41835f7771d08ba->enter($__internal_6356f7a179bea1c97315ea4ead417c0fb6aec5d7ec5b0893e41835f7771d08ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> Liste des produits </h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6356f7a179bea1c97315ea4ead417c0fb6aec5d7ec5b0893e41835f7771d08ba->leave($__internal_6356f7a179bea1c97315ea4ead417c0fb6aec5d7ec5b0893e41835f7771d08ba_prof);

        
        $__internal_6df9a8f4cbb93ac97b43f26c543377483aa526cdd4fd9a9996136c8e29d116a9->leave($__internal_6df9a8f4cbb93ac97b43f26c543377483aa526cdd4fd9a9996136c8e29d116a9_prof);

    }

    public function getTemplateName()
    {
        return "produits/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  77 => 8,  73 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    {% include 'menu.twig' %}
{% endblock %}
{% block body %}
    <h1> Liste des produits </h1>
    {% for produit in produits %}
        <div>
            {{ produit.getRefProduit() }}
        </div>
    {% endfor %}
{% endblock %}
", "produits/list.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\list.html.twig");
    }
}
