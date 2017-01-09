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
        $this->loadTemplate("menubase.twig", "magasinier/liste_magasinier.html.twig", 8)->display($context);
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "      <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
      </div>
";
    }

    // line 17
    public function block_section($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"container\">
    ";
        // line 19
        if ((isset($context["produits"]) ? $context["produits"] : null)) {
            // line 20
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
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 36
                echo "              <tr>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                echo "<br /><a href=\"/img/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                echo "\">Voir photo</a></td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array()), "d / m / Y"), "html", null, true);
                echo "</td>
                <td>
                  ";
                // line 45
                if (($this->getAttribute($context["produit"], "getVisibleProduit", array()) == 1)) {
                    // line 46
                    echo "                    Visible
                  ";
                } else {
                    // line 48
                    echo "                    Invisible
                  ";
                }
                // line 50
                echo "                </td>
                <td><a href=\"";
                // line 51
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
            // line 56
            echo "          </tbody>
        </table>
    ";
        } else {
            // line 59
            echo "       <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
        // line 61
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
        return array (  153 => 61,  149 => 59,  144 => 56,  133 => 51,  130 => 50,  126 => 48,  122 => 46,  120 => 45,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  93 => 38,  89 => 37,  86 => 36,  82 => 35,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
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
