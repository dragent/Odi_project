<?php

/* magasinier/gestion_panier_magasinier.twig */
class __TwigTemplate_0e22a474dd9820ed738a9ba8cfa577ecbaf210fd6f77442bb6bf6ffd8898b452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/gestion_panier_magasinier.twig", 1);
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
        $__internal_b3a418c33f452459f342fe7381e479f55650aab970b68fa8b0b2881e15d7c376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a418c33f452459f342fe7381e479f55650aab970b68fa8b0b2881e15d7c376->enter($__internal_b3a418c33f452459f342fe7381e479f55650aab970b68fa8b0b2881e15d7c376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/gestion_panier_magasinier.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a418c33f452459f342fe7381e479f55650aab970b68fa8b0b2881e15d7c376->leave($__internal_b3a418c33f452459f342fe7381e479f55650aab970b68fa8b0b2881e15d7c376_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cc7d64757b7d650222c34ed8cc4c15d9644255a92496179e20b410b52da48e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc7d64757b7d650222c34ed8cc4c15d9644255a92496179e20b410b52da48e7->enter($__internal_5cc7d64757b7d650222c34ed8cc4c15d9644255a92496179e20b410b52da48e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/gestion_panier_magasinier.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/gestion_panier_magasinier.twig", 4)->display($context);
        
        $__internal_5cc7d64757b7d650222c34ed8cc4c15d9644255a92496179e20b410b52da48e7->leave($__internal_5cc7d64757b7d650222c34ed8cc4c15d9644255a92496179e20b410b52da48e7_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_75a3f06cfa03028d2936d7fbbe0c8c02d7d348e1e3c72c618be009a92dea2a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a3f06cfa03028d2936d7fbbe0c8c02d7d348e1e3c72c618be009a92dea2a10->enter($__internal_75a3f06cfa03028d2936d7fbbe0c8c02d7d348e1e3c72c618be009a92dea2a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/gestion_panier_magasinier.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Gestion des paniers</h2>
    </div>
";
        
        $__internal_75a3f06cfa03028d2936d7fbbe0c8c02d7d348e1e3c72c618be009a92dea2a10->leave($__internal_75a3f06cfa03028d2936d7fbbe0c8c02d7d348e1e3c72c618be009a92dea2a10_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_35fdbc4c8b6cdd6bbf37fb1d4b42f063f776f77abc5f3ced861a88fbffeb81c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fdbc4c8b6cdd6bbf37fb1d4b42f063f776f77abc5f3ced861a88fbffeb81c4->enter($__internal_35fdbc4c8b6cdd6bbf37fb1d4b42f063f776f77abc5f3ced861a88fbffeb81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/gestion_panier_magasinier.twig"));

        // line 14
        echo "  <div class=\"container\">
    <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
      <thead>
        <tr>
          <th>Réf.</th>
          <th>Nom</th>
          <th>Qté. commandée restante</th>
          <th>Qté. en stock</th>
          <th>Qté. à délivrer</th>
          <th>Validation</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 27
        $context["cpt"] = 0;
        // line 28
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 29
            echo "        ";
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            echo " 
\t        <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
            echo "</td>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 33
                echo "            ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 34
                    echo "              <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
            ";
                }
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <td>";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")), "html", null, true);
            echo "</td>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 39
                echo "            ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 40
                    echo "              <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array(), "method"), "html", null, true);
                    echo "</td>
            ";
                }
                // line 42
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            <td>
              <input type=\"number\" id=\"qtt";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
            echo "\" value=\"1\"></input>
            </td>
            <td>
              ";
            // line 47
            if ((($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")) == 0)) {
                // line 48
                echo "                OK
              ";
            } else {
                // line 50
                echo "                <a type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"confirme('";
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
                echo "')\">";
                $context["qtt"] = ('' === $tmp = "3") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                echo "Confirmer</a>
              ";
            }
            // line 52
            echo "            </td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      </tbody>
    </table>
      ";
        // line 57
        $context["validate"] = 1;
        // line 58
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 59
            echo "        ";
            if ((($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")) > 0)) {
                // line 60
                echo "          ";
                $context["validate"] = 0;
                // line 61
                echo "        ";
            }
            // line 62
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "      
      ";
        // line 64
        if (((isset($context["validate"]) ? $context["validate"] : $this->getContext($context, "validate")) == 1)) {
            // line 65
            echo "        <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_panier_valider_magasinier", array("id_panier" => $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"))), "html", null, true);
            echo "\" >Valider panier</a>
      ";
        } else {
            // line 67
            echo "        <a type=\"button\" class=\"btn btn-danger btn-sm\" href=\"#\" >Valider panier</a>
      ";
        }
        // line 69
        echo "  </div>
      
      
      
      
  <script>
  function confirme(cpt,id_panier,ref){
\tvar qtt = \$(\"#qtt\"+cpt).val();
    //alert(\"cpt=\"+cpt+\" ref=\"+ref+\" idpanier=\"+id_panier+\" qtt=\"+qtt);
    
    //on recupere l'url
   \tvar str = location.href;
   \tvar lgth = str.length;

   \t//taille de \"gestion_panier/\"+id_panier
   \tvar lgthFin = \"gestion_panier/\"+id_panier;
   \tlgthFin = lgthFin.length;


   \t//on recupere la partie de l'url devant(ou pas) contenir \"creation_panier\"
   \tvar test = str.substring(lgth-lgthFin, lgth);
   \tvar res = str.substring(0, lgth-lgthFin);

   \t//alert(\"res=\"+res+\"  test=\"+test);\t
    //on test et on modifie en consequence
   \tif(test.localeCompare(\"gestion_panier\")==0)
   \t  res += \"produit_gestion_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    else{
      res = str.substring(0, lgth-(lgth-str.indexOf(\"/magasinier\")));
      res += \"/magasinier/produit_gestion_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;

      
    }

    //redirection sur l'url finale
    document.location.href = res;
    //alert(\"res=\"+res);
  }
  
  </script>
";
        
        $__internal_35fdbc4c8b6cdd6bbf37fb1d4b42f063f776f77abc5f3ced861a88fbffeb81c4->leave($__internal_35fdbc4c8b6cdd6bbf37fb1d4b42f063f776f77abc5f3ced861a88fbffeb81c4_prof);

    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c61591b01d4cf323f9e7d39b4f29f3b3d6685377c76d973b8bda92f2f152f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61591b01d4cf323f9e7d39b4f29f3b3d6685377c76d973b8bda92f2f152f0a2->enter($__internal_c61591b01d4cf323f9e7d39b4f29f3b3d6685377c76d973b8bda92f2f152f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/gestion_panier_magasinier.twig"));

        
        $__internal_c61591b01d4cf323f9e7d39b4f29f3b3d6685377c76d973b8bda92f2f152f0a2->leave($__internal_c61591b01d4cf323f9e7d39b4f29f3b3d6685377c76d973b8bda92f2f152f0a2_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/gestion_panier_magasinier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 111,  224 => 69,  220 => 67,  214 => 65,  212 => 64,  209 => 63,  203 => 62,  200 => 61,  197 => 60,  194 => 59,  189 => 58,  187 => 57,  183 => 55,  175 => 52,  163 => 50,  159 => 48,  157 => 47,  151 => 44,  148 => 43,  142 => 42,  136 => 40,  133 => 39,  129 => 38,  124 => 37,  118 => 36,  112 => 34,  109 => 33,  105 => 32,  101 => 31,  95 => 29,  90 => 28,  88 => 27,  73 => 14,  67 => 13,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
    {% include 'magasinier/menu_magasinier.twig' %}
{% endblock %}

{% block header %}
    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Gestion des paniers</h2>
    </div>
{% endblock %}

{% block section %}
  <div class=\"container\">
    <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
      <thead>
        <tr>
          <th>Réf.</th>
          <th>Nom</th>
          <th>Qté. commandée restante</th>
          <th>Qté. en stock</th>
          <th>Qté. à délivrer</th>
          <th>Validation</th>
        </tr>
      </thead>
      <tbody>
      {% set cpt=0 %}
      {% for contenir in Contenir %}
        {% set cpt = cpt+1 %} 
\t        <tr>
            <td>{{ contenir.getRefProduit() }}</td>
            {% for produit in Produit %}
            {% if produit.getRefProduit() == contenir.getRefProduit() %}
              <td>{{ produit.getNomProduit() }}</td>
            {% endif %}
            {% endfor %}
            <td>{{ contenir.getQuantiteProduit() - contenir.getQuantiteProduitGeree() }}</td>
            {% for produit in Produit %}
            {% if produit.getRefProduit() == contenir.getRefProduit() %}
              <td>{{ produit.getQuantiteProduit() }}</td>
            {% endif %}
            {% endfor %}
            <td>
              <input type=\"number\" id=\"qtt{{ cpt }}\" value=\"1\"></input>
            </td>
            <td>
              {% if (contenir.getQuantiteProduit() - contenir.getQuantiteProduitGeree()) == 0 %}
                OK
              {% else %}
                <a type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"confirme('{{ cpt }}','{{ Panier.getIdPanier() }}','{{ contenir.getRefProduit() }}')\">{% set qtt %}3{% endset %}Confirmer</a>
              {% endif %}
            </td>
          </tr>
      {% endfor %}
      </tbody>
    </table>
      {% set validate = 1 %}
      {% for contenir in Contenir %}
        {% if (contenir.getQuantiteProduit() - contenir.getQuantiteProduitGeree()) > 0 %}
          {% set validate = 0 %}
        {% endif %}
      {% endfor %}
      
      {% if validate == 1 %}
        <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"{{ path('gestion_panier_valider_magasinier', { id_panier : Panier.getIdPanier() }) }}\" >Valider panier</a>
      {% else %}
        <a type=\"button\" class=\"btn btn-danger btn-sm\" href=\"#\" >Valider panier</a>
      {% endif %}
  </div>
      
      
      
      
  <script>
  function confirme(cpt,id_panier,ref){
\tvar qtt = \$(\"#qtt\"+cpt).val();
    //alert(\"cpt=\"+cpt+\" ref=\"+ref+\" idpanier=\"+id_panier+\" qtt=\"+qtt);
    
    //on recupere l'url
   \tvar str = location.href;
   \tvar lgth = str.length;

   \t//taille de \"gestion_panier/\"+id_panier
   \tvar lgthFin = \"gestion_panier/\"+id_panier;
   \tlgthFin = lgthFin.length;


   \t//on recupere la partie de l'url devant(ou pas) contenir \"creation_panier\"
   \tvar test = str.substring(lgth-lgthFin, lgth);
   \tvar res = str.substring(0, lgth-lgthFin);

   \t//alert(\"res=\"+res+\"  test=\"+test);\t
    //on test et on modifie en consequence
   \tif(test.localeCompare(\"gestion_panier\")==0)
   \t  res += \"produit_gestion_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    else{
      res = str.substring(0, lgth-(lgth-str.indexOf(\"/magasinier\")));
      res += \"/magasinier/produit_gestion_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;

      
    }

    //redirection sur l'url finale
    document.location.href = res;
    //alert(\"res=\"+res);
  }
  
  </script>
{% endblock %}

{% block footer %}
{% endblock %}
", "magasinier/gestion_panier_magasinier.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/gestion_panier_magasinier.twig");
    }
}
