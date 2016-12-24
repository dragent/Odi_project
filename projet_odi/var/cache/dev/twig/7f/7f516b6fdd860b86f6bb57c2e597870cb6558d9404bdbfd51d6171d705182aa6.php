<?php

/* produits/liste_produits.twig */
class __TwigTemplate_f3f74e9abff631ae704db14e43941e0e7af6171a9311b7f5b8beb4721efd5e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/liste_produits.twig", 1);
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
        $__internal_9621d5d9126ed23fcc2cffb6f7c0c1079f995c9fb32b69b048aeb902e3e81882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9621d5d9126ed23fcc2cffb6f7c0c1079f995c9fb32b69b048aeb902e3e81882->enter($__internal_9621d5d9126ed23fcc2cffb6f7c0c1079f995c9fb32b69b048aeb902e3e81882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $__internal_afd8b2c13035354f588522bb6edbaee07d7fd7e6c6b0bdc9b56a1ae3afefe32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd8b2c13035354f588522bb6edbaee07d7fd7e6c6b0bdc9b56a1ae3afefe32a->enter($__internal_afd8b2c13035354f588522bb6edbaee07d7fd7e6c6b0bdc9b56a1ae3afefe32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9621d5d9126ed23fcc2cffb6f7c0c1079f995c9fb32b69b048aeb902e3e81882->leave($__internal_9621d5d9126ed23fcc2cffb6f7c0c1079f995c9fb32b69b048aeb902e3e81882_prof);

        
        $__internal_afd8b2c13035354f588522bb6edbaee07d7fd7e6c6b0bdc9b56a1ae3afefe32a->leave($__internal_afd8b2c13035354f588522bb6edbaee07d7fd7e6c6b0bdc9b56a1ae3afefe32a_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c79aa3328e2a2adebf664052d9675f289624bc0d365d7038a7914e21d2c156f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79aa3328e2a2adebf664052d9675f289624bc0d365d7038a7914e21d2c156f2->enter($__internal_c79aa3328e2a2adebf664052d9675f289624bc0d365d7038a7914e21d2c156f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5b9fc2bd5488e60d47ef8c8014a700e4010855faaa718047539bc0fb5673d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b9fc2bd5488e60d47ef8c8014a700e4010855faaa718047539bc0fb5673d3e->enter($__internal_f5b9fc2bd5488e60d47ef8c8014a700e4010855faaa718047539bc0fb5673d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "produits/liste_produits.twig", 4)->display($context);
        
        $__internal_f5b9fc2bd5488e60d47ef8c8014a700e4010855faaa718047539bc0fb5673d3e->leave($__internal_f5b9fc2bd5488e60d47ef8c8014a700e4010855faaa718047539bc0fb5673d3e_prof);

        
        $__internal_c79aa3328e2a2adebf664052d9675f289624bc0d365d7038a7914e21d2c156f2->leave($__internal_c79aa3328e2a2adebf664052d9675f289624bc0d365d7038a7914e21d2c156f2_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_374624db9afb5d6b13f7e8dc3f03b21ebc2428d974a2cbe9394d4cb8b7948154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374624db9afb5d6b13f7e8dc3f03b21ebc2428d974a2cbe9394d4cb8b7948154->enter($__internal_374624db9afb5d6b13f7e8dc3f03b21ebc2428d974a2cbe9394d4cb8b7948154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cc9293341b2e4d32476ec46d94ca9e10dd88fa28bda2db2ef47219b1d31f548b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9293341b2e4d32476ec46d94ca9e10dd88fa28bda2db2ef47219b1d31f548b->enter($__internal_cc9293341b2e4d32476ec46d94ca9e10dd88fa28bda2db2ef47219b1d31f548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cc9293341b2e4d32476ec46d94ca9e10dd88fa28bda2db2ef47219b1d31f548b->leave($__internal_cc9293341b2e4d32476ec46d94ca9e10dd88fa28bda2db2ef47219b1d31f548b_prof);

        
        $__internal_374624db9afb5d6b13f7e8dc3f03b21ebc2428d974a2cbe9394d4cb8b7948154->leave($__internal_374624db9afb5d6b13f7e8dc3f03b21ebc2428d974a2cbe9394d4cb8b7948154_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_3f3bf4aafa053c476d97c9de7b26b53737d735010f0176c3ca0467988288ca39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3bf4aafa053c476d97c9de7b26b53737d735010f0176c3ca0467988288ca39->enter($__internal_3f3bf4aafa053c476d97c9de7b26b53737d735010f0176c3ca0467988288ca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_684322f30f685b90ea34caaaaaeaa8ea3fe3b31ff57f15f2a2e9e13e52046eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684322f30f685b90ea34caaaaaeaa8ea3fe3b31ff57f15f2a2e9e13e52046eb5->enter($__internal_684322f30f685b90ea34caaaaaeaa8ea3fe3b31ff57f15f2a2e9e13e52046eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Liste des produits : </h1>
\t<table class=\"table table-striped \">
  <thead>
    <tr>
      <th>ref</th>
      <th>nom</th>
      <th>description</th>
      <th>categorie</th>
      <th>qtt</th>
      <th>prix</th>
      <th>date peremption</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            echo "    ";
            if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                // line 27
                echo "\t  <tr>
        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
                echo "</td>
        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                echo "</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array(), "method"), "html", null, true);
                echo "</td>
        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array(), "method"), "html", null, true);
                echo "</td>
        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                echo "</td>
        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
      </tr>
    ";
            }
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
  </tbody>
</table> 
";
        
        $__internal_684322f30f685b90ea34caaaaaeaa8ea3fe3b31ff57f15f2a2e9e13e52046eb5->leave($__internal_684322f30f685b90ea34caaaaaeaa8ea3fe3b31ff57f15f2a2e9e13e52046eb5_prof);

        
        $__internal_3f3bf4aafa053c476d97c9de7b26b53737d735010f0176c3ca0467988288ca39->leave($__internal_3f3bf4aafa053c476d97c9de7b26b53737d735010f0176c3ca0467988288ca39_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_292104c98c221850d9141625eb2fe325dddcb6a938784b12a60d7d61d81024cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292104c98c221850d9141625eb2fe325dddcb6a938784b12a60d7d61d81024cb->enter($__internal_292104c98c221850d9141625eb2fe325dddcb6a938784b12a60d7d61d81024cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c3527fedce0ad8759a73e22df153e8bb6801493f8b0341b977b1949ea7391d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3527fedce0ad8759a73e22df153e8bb6801493f8b0341b977b1949ea7391d21->enter($__internal_c3527fedce0ad8759a73e22df153e8bb6801493f8b0341b977b1949ea7391d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c3527fedce0ad8759a73e22df153e8bb6801493f8b0341b977b1949ea7391d21->leave($__internal_c3527fedce0ad8759a73e22df153e8bb6801493f8b0341b977b1949ea7391d21_prof);

        
        $__internal_292104c98c221850d9141625eb2fe325dddcb6a938784b12a60d7d61d81024cb->leave($__internal_292104c98c221850d9141625eb2fe325dddcb6a938784b12a60d7d61d81024cb_prof);

    }

    public function getTemplateName()
    {
        return "produits/liste_produits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 43,  151 => 38,  145 => 37,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  112 => 27,  109 => 26,  105 => 25,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
    <h2>Liste des produits : </h1>
\t<table class=\"table table-striped \">
  <thead>
    <tr>
      <th>ref</th>
      <th>nom</th>
      <th>description</th>
      <th>categorie</th>
      <th>qtt</th>
      <th>prix</th>
      <th>date peremption</th>
    </tr>
  </thead>
  <tbody>
  {% for produit in Produit %}
    {% if produit.getVisibleProduit() == 1 %}
\t  <tr>
        <td>{{ produit.getRefProduit() }}</td>
        <td>{{ produit.getNomProduit() }}</td>
        <td>{{ produit.getDescriptionProduit() }}</td>
        <td>{{ produit.getCategorieProduit() }}</td>
        <td>{{ produit.getQuantiteProduit }}</td>
        <td>{{ produit.getPrixProduit() }}</td>
        <td>{{ produit.getDatePeremptionProduit() | date(\"d/m/Y\")}}</td>
      </tr>
    {% endif %}
  {% endfor %}

  </tbody>
</table> 
{% endblock %}

{% block footer %}
{% endblock %}
", "produits/liste_produits.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\liste_produits.twig");
    }
}
