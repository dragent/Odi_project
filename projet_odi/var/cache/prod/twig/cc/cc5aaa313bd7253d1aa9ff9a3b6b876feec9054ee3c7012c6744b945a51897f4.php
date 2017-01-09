<?php

/* produits/list.html.twig */
class __TwigTemplate_c0b65ddce7fa21be2dd9c298eb1867aaa3413ff77db4e471170aee2e970331e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "produits/list.html.twig", 4)->display($context);
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">Produits</h2>
    </div>
";
    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((isset($context["produits"]) ? $context["produits"] : null)) {
            // line 15
            echo "    <table class=\"table table-striped table-hover\" id='tab'>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom du produit</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 27
                echo "            ";
                if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                    // line 28
                    echo "            <tr>
                    <td> <img src=\"img/";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                    echo "\" alt=\"abc\" /></td>
                <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array()), "html", null, true);
                    echo " <i class=\"fa fa-eur\" aria-hidden=\"true\"></i></td>
            </tr>
            ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tbody>
    </table>

    ";
        } else {
            // line 41
            echo "       <p class=\"centrer\">Aucun produit dans la base.</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "produits/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  105 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  54 => 15,  51 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "produits/list.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\list.html.twig");
    }
}
