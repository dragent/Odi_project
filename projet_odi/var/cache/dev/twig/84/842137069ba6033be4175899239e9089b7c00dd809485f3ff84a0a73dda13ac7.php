<?php

/* magasinier/listeMagasinier.html.twig */
class __TwigTemplate_f735e3efe9f37a12ddccac07c2915948f2ff34d36b7f4f76fbadc414d187c929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/listeMagasinier.html.twig", 1);
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
        $__internal_56421222be769a21c69e1557b4980210303199b18c7fe413e766aa34f84069d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56421222be769a21c69e1557b4980210303199b18c7fe413e766aa34f84069d2->enter($__internal_56421222be769a21c69e1557b4980210303199b18c7fe413e766aa34f84069d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/listeMagasinier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56421222be769a21c69e1557b4980210303199b18c7fe413e766aa34f84069d2->leave($__internal_56421222be769a21c69e1557b4980210303199b18c7fe413e766aa34f84069d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b00c7dc29e0e9b75ec36f729bebe1ed1bed184cd32554b06b543ec43bb8069d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00c7dc29e0e9b75ec36f729bebe1ed1bed184cd32554b06b543ec43bb8069d4->enter($__internal_b00c7dc29e0e9b75ec36f729bebe1ed1bed184cd32554b06b543ec43bb8069d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeMagasinier.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_b00c7dc29e0e9b75ec36f729bebe1ed1bed184cd32554b06b543ec43bb8069d4->leave($__internal_b00c7dc29e0e9b75ec36f729bebe1ed1bed184cd32554b06b543ec43bb8069d4_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c7a154de041e98d8f5eafe60f2fc3e9c7bf82758325adae0a7fdd4b1906e8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7a154de041e98d8f5eafe60f2fc3e9c7bf82758325adae0a7fdd4b1906e8d5->enter($__internal_2c7a154de041e98d8f5eafe60f2fc3e9c7bf82758325adae0a7fdd4b1906e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeMagasinier.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/listeMagasinier.html.twig", 11)->display($context);
        
        $__internal_2c7a154de041e98d8f5eafe60f2fc3e9c7bf82758325adae0a7fdd4b1906e8d5->leave($__internal_2c7a154de041e98d8f5eafe60f2fc3e9c7bf82758325adae0a7fdd4b1906e8d5_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_566707071c5e465d657df0cb2ecbc68e59a8dabbe2e5cb5bd735fa1d71f15fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566707071c5e465d657df0cb2ecbc68e59a8dabbe2e5cb5bd735fa1d71f15fe0->enter($__internal_566707071c5e465d657df0cb2ecbc68e59a8dabbe2e5cb5bd735fa1d71f15fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeMagasinier.html.twig"));

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
        
        $__internal_566707071c5e465d657df0cb2ecbc68e59a8dabbe2e5cb5bd735fa1d71f15fe0->leave($__internal_566707071c5e465d657df0cb2ecbc68e59a8dabbe2e5cb5bd735fa1d71f15fe0_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_c6c16cd6053bec6cb8b9fc7b19ef168d2512a8a0505006d0519c87d97d5c4341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c16cd6053bec6cb8b9fc7b19ef168d2512a8a0505006d0519c87d97d5c4341->enter($__internal_c6c16cd6053bec6cb8b9fc7b19ef168d2512a8a0505006d0519c87d97d5c4341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeMagasinier.html.twig"));

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
        
        $__internal_c6c16cd6053bec6cb8b9fc7b19ef168d2512a8a0505006d0519c87d97d5c4341->leave($__internal_c6c16cd6053bec6cb8b9fc7b19ef168d2512a8a0505006d0519c87d97d5c4341_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/listeMagasinier.html.twig";
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




", "magasinier/listeMagasinier.html.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/listeMagasinier.html.twig");
    }
}
