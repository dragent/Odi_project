<?php

/* produits/list.html.twig */
class __TwigTemplate_12fd4c2dcf485fee4e39cd57471e50b06659bbf0bdfd64dfabecf1835be9f4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/list.html.twig", 1);
        $this->blocks = array(
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
        $__internal_30f9910d0e8eef2fce757b00cd630a1974bf814faf46b569cf00b795c23da836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f9910d0e8eef2fce757b00cd630a1974bf814faf46b569cf00b795c23da836->enter($__internal_30f9910d0e8eef2fce757b00cd630a1974bf814faf46b569cf00b795c23da836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f9910d0e8eef2fce757b00cd630a1974bf814faf46b569cf00b795c23da836->leave($__internal_30f9910d0e8eef2fce757b00cd630a1974bf814faf46b569cf00b795c23da836_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a63e6de15db715e8599c75fce97ef1f70b6c8341412c1e976e8f28de17dfe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a63e6de15db715e8599c75fce97ef1f70b6c8341412c1e976e8f28de17dfe97->enter($__internal_5a63e6de15db715e8599c75fce97ef1f70b6c8341412c1e976e8f28de17dfe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/list.html.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "produits/list.html.twig", 4)->display($context);
        
        $__internal_5a63e6de15db715e8599c75fce97ef1f70b6c8341412c1e976e8f28de17dfe97->leave($__internal_5a63e6de15db715e8599c75fce97ef1f70b6c8341412c1e976e8f28de17dfe97_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_4f0f65f3a19258142677c0ea377db7472a0e03a055246607a10c120133f54e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0f65f3a19258142677c0ea377db7472a0e03a055246607a10c120133f54e8d->enter($__internal_4f0f65f3a19258142677c0ea377db7472a0e03a055246607a10c120133f54e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/list.html.twig"));

        // line 8
        echo "    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Produits</h2>
    </div>
";
        
        $__internal_4f0f65f3a19258142677c0ea377db7472a0e03a055246607a10c120133f54e8d->leave($__internal_4f0f65f3a19258142677c0ea377db7472a0e03a055246607a10c120133f54e8d_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_73553ab9035ec36a097694f4926b93055b21746d7a5c43b8df59fab095d8cc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73553ab9035ec36a097694f4926b93055b21746d7a5c43b8df59fab095d8cc9d->enter($__internal_73553ab9035ec36a097694f4926b93055b21746d7a5c43b8df59fab095d8cc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/list.html.twig"));

        // line 14
        echo "    ";
        if ((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) {
            // line 15
            echo "    <table class=\"table table-striped table-hover\" id='tab'>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom du produit</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 27
                echo "            ";
                if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                    // line 28
                    echo "            <tr>
                <td> <img src=\"img/";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                    echo "\" alt=\"stylo\" /></td>
                <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array()), "html", null, true);
                    echo " <i class=\"fa fa-eur\" aria-hidden=\"true\"></i></td>
            </tr>
            ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tbody>
    </table>

    ";
        } else {
            // line 41
            echo "       <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
        
        $__internal_73553ab9035ec36a097694f4926b93055b21746d7a5c43b8df59fab095d8cc9d->leave($__internal_73553ab9035ec36a097694f4926b93055b21746d7a5c43b8df59fab095d8cc9d_prof);

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
        return array (  132 => 41,  126 => 37,  120 => 36,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  92 => 27,  88 => 26,  75 => 15,  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    {% include 'menubase.twig' %}
{% endblock %}

{% block header %}
    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Produits</h2>
    </div>
{% endblock %}

{% block section %}
    {% if produits %}
    <table class=\"table table-striped table-hover\" id='tab'>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom du produit</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            {% if produit.getVisibleProduit() == 1 %}
            <tr>
                <td> <img src=\"img/{{ produit.getPhotoProduit }}\" alt=\"stylo\" /></td>
                <td>{{ produit.getRefProduit }}</td>
                <td>{{ produit.getNomProduit }}</td>
                <td>{{ produit.getDescriptionProduit }}</td>
                <td>{{ produit.getPrixProduit }} <i class=\"fa fa-eur\" aria-hidden=\"true\"></i></td>
            </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    {% else %}
       <p class=\"centrer\">Aucun produit dans la base.</p>
    {% endif %}
{% endblock %}
", "produits/list.html.twig", "/var/www/html/projet_odi/app/Resources/views/produits/list.html.twig");
    }
}
