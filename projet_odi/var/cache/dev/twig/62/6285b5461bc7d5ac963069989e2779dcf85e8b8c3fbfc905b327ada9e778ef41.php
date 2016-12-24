<?php

/* produits/liste_produits.twig */
class __TwigTemplate_c97b03c3ee9934b5b6af91675ba9e286ca892b2b3e581a884003e98207dd62e6 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_782d1e5cffe38906dc4af2025f0b62c9f7f348bc7f4c399771937790c85c8e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782d1e5cffe38906dc4af2025f0b62c9f7f348bc7f4c399771937790c85c8e37->enter($__internal_782d1e5cffe38906dc4af2025f0b62c9f7f348bc7f4c399771937790c85c8e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782d1e5cffe38906dc4af2025f0b62c9f7f348bc7f4c399771937790c85c8e37->leave($__internal_782d1e5cffe38906dc4af2025f0b62c9f7f348bc7f4c399771937790c85c8e37_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db6f09984e7b538b6b682b10b2072a1dcef7f018a2bb26f2dc78763605d75b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6f09984e7b538b6b682b10b2072a1dcef7f018a2bb26f2dc78763605d75b82->enter($__internal_db6f09984e7b538b6b682b10b2072a1dcef7f018a2bb26f2dc78763605d75b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/liste_produits.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "produits/liste_produits.twig", 4)->display($context);
        
        $__internal_db6f09984e7b538b6b682b10b2072a1dcef7f018a2bb26f2dc78763605d75b82->leave($__internal_db6f09984e7b538b6b682b10b2072a1dcef7f018a2bb26f2dc78763605d75b82_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_ef3d353e794b6a5333f06543034d05aea43e29fd6b10159bcfc123bf4384a214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3d353e794b6a5333f06543034d05aea43e29fd6b10159bcfc123bf4384a214->enter($__internal_ef3d353e794b6a5333f06543034d05aea43e29fd6b10159bcfc123bf4384a214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/liste_produits.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Produits</h2>
    </div>
";
        
        $__internal_ef3d353e794b6a5333f06543034d05aea43e29fd6b10159bcfc123bf4384a214->leave($__internal_ef3d353e794b6a5333f06543034d05aea43e29fd6b10159bcfc123bf4384a214_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_c77d2582125ff4d84e7a1c4ec7a3f365799ceda629c121779c24b4fe32b87b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77d2582125ff4d84e7a1c4ec7a3f365799ceda629c121779c24b4fe32b87b2d->enter($__internal_c77d2582125ff4d84e7a1c4ec7a3f365799ceda629c121779c24b4fe32b87b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/liste_produits.twig"));

        // line 14
        echo "  <div class=\"container\">
    ";
        // line 15
        if ((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit"))) {
            // line 16
            echo "        <table class=\"table table-striped table-hover \">
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
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 30
                echo "            ";
                if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                    // line 31
                    echo "        \t  <tr>
                <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array(), "method"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array(), "method"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</td>
            </tr>
            ";
                }
                // line 41
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "          </tbody>
        </table> 
    ";
        } else {
            // line 45
            echo "       <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
        // line 47
        echo "  </div>
";
        
        $__internal_c77d2582125ff4d84e7a1c4ec7a3f365799ceda629c121779c24b4fe32b87b2d->leave($__internal_c77d2582125ff4d84e7a1c4ec7a3f365799ceda629c121779c24b4fe32b87b2d_prof);

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
        return array (  147 => 47,  143 => 45,  138 => 42,  132 => 41,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  99 => 31,  96 => 30,  92 => 29,  77 => 16,  75 => 15,  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Produits</h2>
    </div>
{% endblock %}

{% block section %}
  <div class=\"container\">
    {% if Produit %}
        <table class=\"table table-striped table-hover \">
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
    {% else %}
       <p class=\"centrer\">Aucun produit dans la base.</p>
    {% endif %}
  </div>
{% endblock %}

", "produits/liste_produits.twig", "/var/www/html/projet_odi/app/Resources/views/produits/liste_produits.twig");
    }
}
