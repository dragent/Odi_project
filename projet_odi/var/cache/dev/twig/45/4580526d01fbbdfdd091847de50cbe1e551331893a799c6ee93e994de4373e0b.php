<?php

/* produits/stocks.html.twig */
class __TwigTemplate_633c26e3736db51f565c20a823f9c5a88ef08255169ad6ce6e9fe8c2f1d2648a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/stocks.html.twig", 1);
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
        $__internal_75db0f5b60086457aa32daf40daa19521a59ae05dfd0373e00885bc2c517d0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75db0f5b60086457aa32daf40daa19521a59ae05dfd0373e00885bc2c517d0ac->enter($__internal_75db0f5b60086457aa32daf40daa19521a59ae05dfd0373e00885bc2c517d0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/stocks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75db0f5b60086457aa32daf40daa19521a59ae05dfd0373e00885bc2c517d0ac->leave($__internal_75db0f5b60086457aa32daf40daa19521a59ae05dfd0373e00885bc2c517d0ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d7fb2fc7edf9dcf6d59ea52f6bd91141ef262305b53fd7cc95541b3352f981a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7fb2fc7edf9dcf6d59ea52f6bd91141ef262305b53fd7cc95541b3352f981a->enter($__internal_0d7fb2fc7edf9dcf6d59ea52f6bd91141ef262305b53fd7cc95541b3352f981a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/stocks.html.twig"));

        // line 4
        echo "    Magasinier | Stocks
";
        
        $__internal_0d7fb2fc7edf9dcf6d59ea52f6bd91141ef262305b53fd7cc95541b3352f981a->leave($__internal_0d7fb2fc7edf9dcf6d59ea52f6bd91141ef262305b53fd7cc95541b3352f981a_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a59c04d44cbeb63a493e62fb183588f69cecbf2d3d40748313f987d4c5407dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59c04d44cbeb63a493e62fb183588f69cecbf2d3d40748313f987d4c5407dac->enter($__internal_a59c04d44cbeb63a493e62fb183588f69cecbf2d3d40748313f987d4c5407dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/stocks.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "produits/stocks.html.twig", 11)->display($context);
        
        $__internal_a59c04d44cbeb63a493e62fb183588f69cecbf2d3d40748313f987d4c5407dac->leave($__internal_a59c04d44cbeb63a493e62fb183588f69cecbf2d3d40748313f987d4c5407dac_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ae2935324f360519213ae3379573f510e7420bde8364bc14ac310ca7109e7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae2935324f360519213ae3379573f510e7420bde8364bc14ac310ca7109e7f4->enter($__internal_0ae2935324f360519213ae3379573f510e7420bde8364bc14ac310ca7109e7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/stocks.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    </div>
    ";
        // line 20
        echo "        ";
        // line 21
        echo "    ";
        
        $__internal_0ae2935324f360519213ae3379573f510e7420bde8364bc14ac310ca7109e7f4->leave($__internal_0ae2935324f360519213ae3379573f510e7420bde8364bc14ac310ca7109e7f4_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_575f5eafb70285bd57d7690053f3f264f056009c368026e9a008193cb38346fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575f5eafb70285bd57d7690053f3f264f056009c368026e9a008193cb38346fc->enter($__internal_575f5eafb70285bd57d7690053f3f264f056009c368026e9a008193cb38346fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/stocks.html.twig"));

        // line 25
        echo "  <div class=\"container\">
    ";
        // line 26
        if ((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) {
            // line 27
            echo "        <div class=\"alignerGauche isolerBottom\">
            <a href=\"/magasinier/produits/list/stock.csv\" class=\"btn btn-info\">Télécharger l'état des stocks (.csv)</a>
        </div>
        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Référence</th>
              <th>Nom</th>
              <th>Descriptif</th>
              <th>Catégorie</th>
              <th>Quantité</th>
              <th>Quantité Min.</th>
              <th>Date Limite</th>
              <th>Modifier Stocks</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 45
                echo "              <tr>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                echo "<br /><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                echo "\">Voir photo</a></td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteMinProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array()), "d / m / Y"), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateStock", array("numero" => $this->getAttribute($context["produit"], "getRefProduit", array()))), "html", null, true);
                echo "\">
                <span class=\"glyphicon glyphicon-edit\"></span>
                </a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </tbody>
        </table> 
    ";
        } else {
            // line 61
            echo "        <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
        // line 63
        echo "  </div>
";
        
        $__internal_575f5eafb70285bd57d7690053f3f264f056009c368026e9a008193cb38346fc->leave($__internal_575f5eafb70285bd57d7690053f3f264f056009c368026e9a008193cb38346fc_prof);

    }

    public function getTemplateName()
    {
        return "produits/stocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  172 => 61,  167 => 58,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  130 => 47,  126 => 46,  123 => 45,  119 => 44,  100 => 27,  98 => 26,  95 => 25,  89 => 24,  82 => 21,  80 => 20,  75 => 16,  73 => 15,  67 => 14,  59 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
    Magasinier | Stocks
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
        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    </div>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
  <div class=\"container\">
    {% if produits %}
        <div class=\"alignerGauche isolerBottom\">
            <a href=\"/magasinier/produits/list/stock.csv\" class=\"btn btn-info\">Télécharger l'état des stocks (.csv)</a>
        </div>
        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Référence</th>
              <th>Nom</th>
              <th>Descriptif</th>
              <th>Catégorie</th>
              <th>Quantité</th>
              <th>Quantité Min.</th>
              <th>Date Limite</th>
              <th>Modifier Stocks</th>
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
                <td>{{produit.getQuantiteMinProduit}}</td>
                <td>{{produit.getDatePeremptionProduit|date('d / m / Y')}}</td>
                <td><a href=\"{{ path('updateStock', {numero: produit.getRefProduit}) }}\">
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




", "produits/stocks.html.twig", "/var/www/html/projet_odi/app/Resources/views/produits/stocks.html.twig");
    }
}
