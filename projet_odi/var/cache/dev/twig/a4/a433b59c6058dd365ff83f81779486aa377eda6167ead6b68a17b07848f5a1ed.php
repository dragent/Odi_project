<?php

/* client/contenu_panier_client.twig */
class __TwigTemplate_22b65aa18a8cd989d0ab19db406731c02eb087a79f5e474f317492dd3ff5a44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/contenu_panier_client.twig", 1);
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
        $__internal_7215a9be54315ddc00d0903e57de088c72bce03bff6e7cc0406039a7eb13a1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7215a9be54315ddc00d0903e57de088c72bce03bff6e7cc0406039a7eb13a1ab->enter($__internal_7215a9be54315ddc00d0903e57de088c72bce03bff6e7cc0406039a7eb13a1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/contenu_panier_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7215a9be54315ddc00d0903e57de088c72bce03bff6e7cc0406039a7eb13a1ab->leave($__internal_7215a9be54315ddc00d0903e57de088c72bce03bff6e7cc0406039a7eb13a1ab_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7aa4ccea64c8b8c958104cca3d7a6f49a604163a82e1d57737b100f1fd1fd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aa4ccea64c8b8c958104cca3d7a6f49a604163a82e1d57737b100f1fd1fd5e->enter($__internal_a7aa4ccea64c8b8c958104cca3d7a6f49a604163a82e1d57737b100f1fd1fd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/contenu_panier_client.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/contenu_panier_client.twig", 4)->display($context);
        
        $__internal_a7aa4ccea64c8b8c958104cca3d7a6f49a604163a82e1d57737b100f1fd1fd5e->leave($__internal_a7aa4ccea64c8b8c958104cca3d7a6f49a604163a82e1d57737b100f1fd1fd5e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_623d934ba307d7295a3eaeac06b75f4f36f9d769711ebd97c418070c27baf72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623d934ba307d7295a3eaeac06b75f4f36f9d769711ebd97c418070c27baf72b->enter($__internal_623d934ba307d7295a3eaeac06b75f4f36f9d769711ebd97c418070c27baf72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/contenu_panier_client.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Contenu du panier n° ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
        echo "</h2>
    </div>
";
        
        $__internal_623d934ba307d7295a3eaeac06b75f4f36f9d769711ebd97c418070c27baf72b->leave($__internal_623d934ba307d7295a3eaeac06b75f4f36f9d769711ebd97c418070c27baf72b_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_f27632867596f8ea94a0444e6887a9c08cbdd1f5727fca746dc86d1a749f7af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27632867596f8ea94a0444e6887a9c08cbdd1f5727fca746dc86d1a749f7af7->enter($__internal_f27632867596f8ea94a0444e6887a9c08cbdd1f5727fca746dc86d1a749f7af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/contenu_panier_client.twig"));

        // line 14
        echo "    <div class=\"container\">
\t   <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>Référence</th>
            <th>Nom</th>
            <th>Quantité</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 26
            echo "    \t    <tr>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 29
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 30
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 32
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "              <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 35
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 36
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 38
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
      </table>
      </div>
";
        
        $__internal_f27632867596f8ea94a0444e6887a9c08cbdd1f5727fca746dc86d1a749f7af7->leave($__internal_f27632867596f8ea94a0444e6887a9c08cbdd1f5727fca746dc86d1a749f7af7_prof);

    }

    public function getTemplateName()
    {
        return "client/contenu_panier_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  142 => 39,  136 => 38,  130 => 36,  127 => 35,  123 => 34,  118 => 33,  112 => 32,  106 => 30,  103 => 29,  99 => 28,  95 => 27,  92 => 26,  88 => 25,  75 => 14,  69 => 13,  59 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
      <h2 class=\"centrer isoler\">Contenu du panier n° {{ Panier.getIdPanier() }}</h2>
    </div>
{% endblock %}

{% block section %}
    <div class=\"container\">
\t   <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>Référence</th>
            <th>Nom</th>
            <th>Quantité</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          {% for contenir in Contenir %}
    \t    <tr>
              <td>{{ contenir.getRefProduit() }}</td>
              {% for produit in Produit %}
              {% if produit.getRefProduit() == contenir.getRefProduit() %}
                <td>{{ produit.getNomProduit() }}</td>
              {% endif %}
              {% endfor %}
              <td>{{ contenir.getQuantiteProduit() }}</td>
              {% for produit in Produit %}
              {% if produit.getRefProduit() == contenir.getRefProduit() %}
                <td>{{ produit.getPrixProduit() }}</td>
              {% endif %}
              {% endfor %}
            </tr>
          {% endfor %}
        </tbody>
      </table>
      </div>
{% endblock %}
", "client/contenu_panier_client.twig", "/var/www/html/projet_odi/app/Resources/views/client/contenu_panier_client.twig");
    }
}
