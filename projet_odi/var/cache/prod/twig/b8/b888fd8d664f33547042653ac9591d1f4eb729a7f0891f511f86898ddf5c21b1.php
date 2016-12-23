<?php

/* produits/liste_produits.twig */
class __TwigTemplate_fc8ecce996d66f38b76047de6cb02754bf988c61a41a24a6081f42ff0cf0bdff extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "produits/liste_produits.twig", 4)->display($context);
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : null));
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
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
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
        return array (  116 => 43,  109 => 38,  103 => 37,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  70 => 27,  67 => 26,  63 => 25,  47 => 11,  44 => 10,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "produits/liste_produits.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\liste_produits.twig");
    }
}
