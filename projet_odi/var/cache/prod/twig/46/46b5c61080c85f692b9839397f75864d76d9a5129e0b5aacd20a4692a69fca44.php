<?php

/* produits/liste_produits.twig */
class __TwigTemplate_f7fdf31a8037ab83c9c01bb13b2b61a866bb14abb49b5bbee68460012724904d extends Twig_Template
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
        $__internal_31df9fff66911c42a172499009e63a39984fa2b00ec5cf80aff604a0f3dd2c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31df9fff66911c42a172499009e63a39984fa2b00ec5cf80aff604a0f3dd2c10->enter($__internal_31df9fff66911c42a172499009e63a39984fa2b00ec5cf80aff604a0f3dd2c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31df9fff66911c42a172499009e63a39984fa2b00ec5cf80aff604a0f3dd2c10->leave($__internal_31df9fff66911c42a172499009e63a39984fa2b00ec5cf80aff604a0f3dd2c10_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69746a1209f35403f0ffb5f8df5a7f143d99195ebf639998e0becbcc41f389b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69746a1209f35403f0ffb5f8df5a7f143d99195ebf639998e0becbcc41f389b5->enter($__internal_69746a1209f35403f0ffb5f8df5a7f143d99195ebf639998e0becbcc41f389b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "produits/liste_produits.twig", 4)->display($context);
        
        $__internal_69746a1209f35403f0ffb5f8df5a7f143d99195ebf639998e0becbcc41f389b5->leave($__internal_69746a1209f35403f0ffb5f8df5a7f143d99195ebf639998e0becbcc41f389b5_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_21ccfe6255c7d413a52ca22286ab5ba1a176d22a55bf8fb6715231856233506d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ccfe6255c7d413a52ca22286ab5ba1a176d22a55bf8fb6715231856233506d->enter($__internal_21ccfe6255c7d413a52ca22286ab5ba1a176d22a55bf8fb6715231856233506d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_21ccfe6255c7d413a52ca22286ab5ba1a176d22a55bf8fb6715231856233506d->leave($__internal_21ccfe6255c7d413a52ca22286ab5ba1a176d22a55bf8fb6715231856233506d_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_ba58022f6e9a3d279abe13b00526e164b961b6e80f67965a168888c70b221d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba58022f6e9a3d279abe13b00526e164b961b6e80f67965a168888c70b221d76->enter($__internal_ba58022f6e9a3d279abe13b00526e164b961b6e80f67965a168888c70b221d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_ba58022f6e9a3d279abe13b00526e164b961b6e80f67965a168888c70b221d76->leave($__internal_ba58022f6e9a3d279abe13b00526e164b961b6e80f67965a168888c70b221d76_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6eedad5f39255187330b2270c704303715594c56e96b46a57a66247feac585a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eedad5f39255187330b2270c704303715594c56e96b46a57a66247feac585a3->enter($__internal_6eedad5f39255187330b2270c704303715594c56e96b46a57a66247feac585a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6eedad5f39255187330b2270c704303715594c56e96b46a57a66247feac585a3->leave($__internal_6eedad5f39255187330b2270c704303715594c56e96b46a57a66247feac585a3_prof);

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
        return array (  140 => 43,  130 => 38,  124 => 37,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  91 => 27,  88 => 26,  84 => 25,  68 => 11,  62 => 10,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
