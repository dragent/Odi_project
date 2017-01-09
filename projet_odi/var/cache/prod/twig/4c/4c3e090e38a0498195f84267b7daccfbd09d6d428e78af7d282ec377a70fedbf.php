<?php

/* magasinier/liste_magasinier.html.twig */
class __TwigTemplate_77a715f04f92e8c0bb07db47fc3dc96d2c501c4a870d327b092969dc135b07e8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Magasinier | Produits
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/liste_magasinier.html.twig", 11)->display($context);
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
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
        return array (  161 => 68,  157 => 66,  152 => 63,  141 => 58,  138 => 57,  134 => 55,  130 => 53,  128 => 52,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  101 => 45,  97 => 44,  94 => 43,  90 => 42,  73 => 27,  71 => 26,  68 => 25,  65 => 24,  61 => 21,  59 => 20,  54 => 16,  52 => 15,  49 => 14,  44 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "magasinier/liste_magasinier.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\magasinier\\liste_magasinier.html.twig");
    }
}
