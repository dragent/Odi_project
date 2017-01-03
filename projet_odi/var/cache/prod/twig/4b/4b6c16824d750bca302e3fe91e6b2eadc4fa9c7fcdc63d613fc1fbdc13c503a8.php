<?php

/* magasinier/stocks.html.twig */
class __TwigTemplate_14603400a4271b919a8d8f712a717c3508dc1b7861deb19018ef3f60a5f203a7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Magasinier | Stocks
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/stocks.html.twig", 11)->display($context);
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
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
    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        // line 25
        echo "  <div class=\"container\">
    ";
        // line 26
        if ((isset($context["produits"]) ? $context["produits"] : null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
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
        return array (  149 => 63,  145 => 61,  140 => 58,  129 => 53,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  103 => 47,  99 => 46,  96 => 45,  92 => 44,  73 => 27,  71 => 26,  68 => 25,  65 => 24,  61 => 21,  59 => 20,  54 => 16,  52 => 15,  49 => 14,  44 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "magasinier/stocks.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\magasinier\\stocks.html.twig");
    }
}
