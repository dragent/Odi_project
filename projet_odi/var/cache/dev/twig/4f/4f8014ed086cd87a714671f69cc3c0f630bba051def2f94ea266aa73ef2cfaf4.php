<?php

/* magasinier/liste_magasinier.html.twig */
class __TwigTemplate_891bc1c1c5f5430f773348f8b3e6cae299c78ea784ca5d05ebd6da00bba89070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/liste_magasinier.html.twig", 1);
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
        $__internal_e0a35a80964ea1f7c33d459b7759d172f7c5fc4114aa69e10adf889ec0f81ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a35a80964ea1f7c33d459b7759d172f7c5fc4114aa69e10adf889ec0f81ddf->enter($__internal_e0a35a80964ea1f7c33d459b7759d172f7c5fc4114aa69e10adf889ec0f81ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/liste_magasinier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a35a80964ea1f7c33d459b7759d172f7c5fc4114aa69e10adf889ec0f81ddf->leave($__internal_e0a35a80964ea1f7c33d459b7759d172f7c5fc4114aa69e10adf889ec0f81ddf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d25e49e31ca33250a4557b728461c2bb08d3c40e7e6e7404ef067afad6e6b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d25e49e31ca33250a4557b728461c2bb08d3c40e7e6e7404ef067afad6e6b7d->enter($__internal_8d25e49e31ca33250a4557b728461c2bb08d3c40e7e6e7404ef067afad6e6b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_magasinier.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_8d25e49e31ca33250a4557b728461c2bb08d3c40e7e6e7404ef067afad6e6b7d->leave($__internal_8d25e49e31ca33250a4557b728461c2bb08d3c40e7e6e7404ef067afad6e6b7d_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c16e8bd24ddc7a17181300ef59e22ef9339bca1393f6ac2babaacc51996ed1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16e8bd24ddc7a17181300ef59e22ef9339bca1393f6ac2babaacc51996ed1a3->enter($__internal_c16e8bd24ddc7a17181300ef59e22ef9339bca1393f6ac2babaacc51996ed1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_magasinier.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/liste_magasinier.html.twig", 11)->display($context);
        
        $__internal_c16e8bd24ddc7a17181300ef59e22ef9339bca1393f6ac2babaacc51996ed1a3->leave($__internal_c16e8bd24ddc7a17181300ef59e22ef9339bca1393f6ac2babaacc51996ed1a3_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_07b34436da2bdf451dad198614efda6395a6e1a7f1849beec589e4258fb8f55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b34436da2bdf451dad198614efda6395a6e1a7f1849beec589e4258fb8f55a->enter($__internal_07b34436da2bdf451dad198614efda6395a6e1a7f1849beec589e4258fb8f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_magasinier.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "      <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
      </div>
    ";
        // line 20
        echo "        ";
        // line 21
        echo "    ";
        
        $__internal_07b34436da2bdf451dad198614efda6395a6e1a7f1849beec589e4258fb8f55a->leave($__internal_07b34436da2bdf451dad198614efda6395a6e1a7f1849beec589e4258fb8f55a_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_894235b49d6c15ebaf2cca176dcf10e206344e3742175bbd7e876fc5339c9cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894235b49d6c15ebaf2cca176dcf10e206344e3742175bbd7e876fc5339c9cd6->enter($__internal_894235b49d6c15ebaf2cca176dcf10e206344e3742175bbd7e876fc5339c9cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_magasinier.html.twig"));

        // line 25
        echo "  <div class=\"container\">
    ";
        // line 26
        if ((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) {
            // line 27
            echo "        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Référence</th>
              <th>Nom</th>
              <th>Descriptif</th>
              <th>Catégorie</th>
              <th>Quantité</th>
              <th>Prix (€)</th>
              <th>Date Limite</th>
              <th>Visibilité</th>
              <th>Modifier Infos</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 43
                echo "              <tr>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                echo "<br /><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                echo "\">Voir photo</a></td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array()), "d / m / Y"), "html", null, true);
                echo "</td>
                <td>
                  ";
                // line 52
                if (($this->getAttribute($context["produit"], "getVisibleProduit", array()) == 1)) {
                    // line 53
                    echo "                    Visible
                  ";
                } else {
                    // line 55
                    echo "                    Invisible
                  ";
                }
                // line 57
                echo "                </td>
                <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProduit", array("numero" => $this->getAttribute($context["produit"], "getRefProduit", array()))), "html", null, true);
                echo "\">
                <span class=\"glyphicon glyphicon-edit\"></span>
                </a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "          </tbody>
        </table> 
    ";
        } else {
            // line 66
            echo "       <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
        // line 68
        echo "  </div>
";
        
        $__internal_894235b49d6c15ebaf2cca176dcf10e206344e3742175bbd7e876fc5339c9cd6->leave($__internal_894235b49d6c15ebaf2cca176dcf10e206344e3742175bbd7e876fc5339c9cd6_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/liste_magasinier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 68,  184 => 66,  179 => 63,  168 => 58,  165 => 57,  161 => 55,  157 => 53,  155 => 52,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  128 => 45,  124 => 44,  121 => 43,  117 => 42,  100 => 27,  98 => 26,  95 => 25,  89 => 24,  82 => 21,  80 => 20,  75 => 16,  73 => 15,  67 => 14,  59 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
    Magasinier | Produits
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
        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
      </div>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
  <div class=\"container\">
    {% if produits %}
        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Référence</th>
              <th>Nom</th>
              <th>Descriptif</th>
              <th>Catégorie</th>
              <th>Quantité</th>
              <th>Prix (€)</th>
              <th>Date Limite</th>
              <th>Visibilité</th>
              <th>Modifier Infos</th>
            </tr>
          </thead>
          <tbody>
            {% for produit in produits %}
              <tr>
                <td>{{produit.getRefProduit}}</td>
                <td>{{produit.getNomProduit}}<br /><a href=\"{{ produit.getPhotoProduit }}\">Voir photo</a></td>
                <td>{{produit.getDescriptionProduit}}</td>
                <td>{{produit.getCategorieProduit}}</td>
                <td>{{produit.getQuantiteProduit}}</td>
                <td>{{produit.getPrixProduit}}</td>
                <td>{{produit.getDatePeremptionProduit|date('d / m / Y')}}</td>
                <td>
                  {% if produit.getVisibleProduit == 1 %}
                    Visible
                  {% else %}
                    Invisible
                  {% endif %}
                </td>
                <td><a href=\"{{ path('updateProduit', {numero: produit.getRefProduit}) }}\">
                <span class=\"glyphicon glyphicon-edit\"></span>
                </a></td>
              </tr>
            {% endfor %}
          </tbody>
        </table> 
    {% else %}
       <p class=\"centrer\">Aucun produit dans la base.</p>
    {% endif %}
  </div>
{% endblock %}




", "magasinier/liste_magasinier.html.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/liste_magasinier.html.twig");
    }
}
