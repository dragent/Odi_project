<?php

/* magasinier/stocks.html.twig */
class __TwigTemplate_f913da1b2cd3e0cac71df25cfac6aefab88d62fee6389370f126c8f26e8f44ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/stocks.html.twig", 1);
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
        $__internal_35b13267a638f4ee3efbfacb14551f6c29460b3a7e3160801b6c09dce8489522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b13267a638f4ee3efbfacb14551f6c29460b3a7e3160801b6c09dce8489522->enter($__internal_35b13267a638f4ee3efbfacb14551f6c29460b3a7e3160801b6c09dce8489522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/stocks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b13267a638f4ee3efbfacb14551f6c29460b3a7e3160801b6c09dce8489522->leave($__internal_35b13267a638f4ee3efbfacb14551f6c29460b3a7e3160801b6c09dce8489522_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b40a1e35cf642a494467554c520ccdc3415711a2714dad6efd1df23abdc2676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b40a1e35cf642a494467554c520ccdc3415711a2714dad6efd1df23abdc2676->enter($__internal_9b40a1e35cf642a494467554c520ccdc3415711a2714dad6efd1df23abdc2676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/stocks.html.twig"));

        // line 4
        echo "    Magasinier | Stocks
";
        
        $__internal_9b40a1e35cf642a494467554c520ccdc3415711a2714dad6efd1df23abdc2676->leave($__internal_9b40a1e35cf642a494467554c520ccdc3415711a2714dad6efd1df23abdc2676_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a511575e8c042f63ccd0aa91750520006dcdda6a47b1e6863ea785578afaf6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a511575e8c042f63ccd0aa91750520006dcdda6a47b1e6863ea785578afaf6e5->enter($__internal_a511575e8c042f63ccd0aa91750520006dcdda6a47b1e6863ea785578afaf6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/stocks.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/stocks.html.twig", 11)->display($context);
        
        $__internal_a511575e8c042f63ccd0aa91750520006dcdda6a47b1e6863ea785578afaf6e5->leave($__internal_a511575e8c042f63ccd0aa91750520006dcdda6a47b1e6863ea785578afaf6e5_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_ee6654dba9b42e0b29a602179b5463d64f9ae7e85204034c39f06f60a0fc372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6654dba9b42e0b29a602179b5463d64f9ae7e85204034c39f06f60a0fc372a->enter($__internal_ee6654dba9b42e0b29a602179b5463d64f9ae7e85204034c39f06f60a0fc372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/stocks.html.twig"));

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
        
        $__internal_ee6654dba9b42e0b29a602179b5463d64f9ae7e85204034c39f06f60a0fc372a->leave($__internal_ee6654dba9b42e0b29a602179b5463d64f9ae7e85204034c39f06f60a0fc372a_prof);

    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        $__internal_46c1cf749eb6613814a8bdef03953b94a4b411e0c2c255abb71574c2459b6fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c1cf749eb6613814a8bdef03953b94a4b411e0c2c255abb71574c2459b6fd8->enter($__internal_46c1cf749eb6613814a8bdef03953b94a4b411e0c2c255abb71574c2459b6fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/stocks.html.twig"));

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
        
        $__internal_46c1cf749eb6613814a8bdef03953b94a4b411e0c2c255abb71574c2459b6fd8->leave($__internal_46c1cf749eb6613814a8bdef03953b94a4b411e0c2c255abb71574c2459b6fd8_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/stocks.html.twig";
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
    {% include 'magasinier/menu_magasinier.twig' %}
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




", "magasinier/stocks.html.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/stocks.html.twig");
    }
}
