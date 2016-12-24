<?php

/* client/achat_client.twig */
class __TwigTemplate_3b1d4537ce5236af120a4f2184be0d817b1155862bd0d4cee7190c6947d6042c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/achat_client.twig", 1);
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
        $__internal_b1446225cd7f97a22bfe71ac59c846618a29310e15c7c30ccb6a865e55ceb09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1446225cd7f97a22bfe71ac59c846618a29310e15c7c30ccb6a865e55ceb09c->enter($__internal_b1446225cd7f97a22bfe71ac59c846618a29310e15c7c30ccb6a865e55ceb09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/achat_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1446225cd7f97a22bfe71ac59c846618a29310e15c7c30ccb6a865e55ceb09c->leave($__internal_b1446225cd7f97a22bfe71ac59c846618a29310e15c7c30ccb6a865e55ceb09c_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98d3f05a3307163084b81e13d56ef5ebf766b74d7bfac0910739856411a42ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d3f05a3307163084b81e13d56ef5ebf766b74d7bfac0910739856411a42ed0->enter($__internal_98d3f05a3307163084b81e13d56ef5ebf766b74d7bfac0910739856411a42ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/achat_client.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/achat_client.twig", 4)->display($context);
        
        $__internal_98d3f05a3307163084b81e13d56ef5ebf766b74d7bfac0910739856411a42ed0->leave($__internal_98d3f05a3307163084b81e13d56ef5ebf766b74d7bfac0910739856411a42ed0_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_4faf9ffdeac9eabf833a963a699226ca47a193356812dd49fcf1affaa3f0710e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faf9ffdeac9eabf833a963a699226ca47a193356812dd49fcf1affaa3f0710e->enter($__internal_4faf9ffdeac9eabf833a963a699226ca47a193356812dd49fcf1affaa3f0710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/achat_client.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Panier ID : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
        echo "</h2>
    </div>
";
        
        $__internal_4faf9ffdeac9eabf833a963a699226ca47a193356812dd49fcf1affaa3f0710e->leave($__internal_4faf9ffdeac9eabf833a963a699226ca47a193356812dd49fcf1affaa3f0710e_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_eab64f834b6d0e727d9eb04f2b9f3bfce38d208c3e03a15e93b5d4d5558104a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab64f834b6d0e727d9eb04f2b9f3bfce38d208c3e03a15e93b5d4d5558104a9->enter($__internal_eab64f834b6d0e727d9eb04f2b9f3bfce38d208c3e03a15e93b5d4d5558104a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/achat_client.twig"));

        // line 14
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-sm-4\">
      <h4>Contenu du panier en cours :</h4>
      <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>Réf.</th>
            <th>Nom</th>
            <th>Qté.</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 29
            echo "    \t    <tr>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 32
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 33
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 35
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "              <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 38
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 39
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 41
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
      </table>
      <a type=\"button\" class=\"btn btn-warning \" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_panier_client", array("id_panier" => $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"))), "html", null, true);
        echo "\">Valider panier</a> 
      <a type=\"button\" class=\"btn btn-danger\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_panier_client", array("id_panier" => $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"))), "html", null, true);
        echo "\">Supprimer panier</a>
    </div>
    
    
    
    <div class=\"col-sm-8\">
    <h4>Contenu du catalogue :</h4>
\t<table class=\"table table-striped \" style=\"background-color:lightgrey;\">
  \t  <thead>
      <tr>
        <th>Réf.</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Categorie</th>
        <th>Prix</th>
        <th>Qté.</th>
        <th>Ajouter</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 67
        $context["cpt"] = 0;
        // line 68
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 69
            echo "      ";
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            // line 70
            echo "      ";
            if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                // line 71
                echo "\t    <tr>
          <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array(), "method"), "html", null, true);
                echo "</td> 
          <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>
            <input type=\"number\" id=\"qtt";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "\" value=\"1\"></input>
          </td>
          <td>
            <a type=\"button\" id=\"btnAdd";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\" onclick=\"confirme('";
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
                echo "')\">";
                $context["qtt"] = ('' === $tmp = "3") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                echo "Ajouter</a>
          </td>
        </tr>
      ";
            }
            // line 85
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </tbody>
  </table>
  </div>
  
  </div><!-- fin row -->
  </div><!-- fin container -->
  
  
  <script>
  function confirme(cpt,ref,id_panier){
\tvar qtt = \$(\"#qtt\"+cpt).val();
    //alert(\"cpt=\"+cpt+\" ref=\"+ref+\" idpanier=\"+id_panier+\" qtt=\"+qtt);
    
    //on recupere l'url
   \tvar str = location.href;
   \tvar lgth = str.length;

   \t//on recupere la partie de l'url devant(ou pas) contenir \"creation_panier\"
   \tvar test = str.substring(lgth-15, lgth);
   \tvar res = str.substring(0, lgth-15);

    //on test et on modifie en consequence
   \tif(test.localeCompare(\"creation_panier\")==0)
   \t  res += \"ajout_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    else{
      res = str.substring(0, lgth-(lgth-str.indexOf(\"/client\")));
      res += \"/client/ajout_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    }

    //redirection sur l'url finale
    document.location.href = res;
   
  }
  
  </script>
";
        
        $__internal_eab64f834b6d0e727d9eb04f2b9f3bfce38d208c3e03a15e93b5d4d5558104a9->leave($__internal_eab64f834b6d0e727d9eb04f2b9f3bfce38d208c3e03a15e93b5d4d5558104a9_prof);

    }

    public function getTemplateName()
    {
        return "client/achat_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 86,  241 => 85,  226 => 81,  220 => 78,  215 => 76,  211 => 75,  207 => 74,  203 => 73,  199 => 72,  196 => 71,  193 => 70,  190 => 69,  185 => 68,  183 => 67,  160 => 47,  156 => 46,  152 => 44,  145 => 42,  139 => 41,  133 => 39,  130 => 38,  126 => 37,  121 => 36,  115 => 35,  109 => 33,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  91 => 28,  75 => 14,  69 => 13,  59 => 9,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
      <h2 class=\"centrer isoler\">Panier ID : {{ Panier.getIdPanier() }}</h2>
    </div>
{% endblock %}

{% block section %}
  <div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-sm-4\">
      <h4>Contenu du panier en cours :</h4>
      <table class=\"table table-striped table-hover\" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>Réf.</th>
            <th>Nom</th>
            <th>Qté.</th>
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
      <a type=\"button\" class=\"btn btn-warning \" href=\"{{ path('validate_panier_client', { id_panier : Panier.getIdPanier() }) }}\">Valider panier</a> 
      <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path('delete_panier_client', { id_panier : Panier.getIdPanier() }) }}\">Supprimer panier</a>
    </div>
    
    
    
    <div class=\"col-sm-8\">
    <h4>Contenu du catalogue :</h4>
\t<table class=\"table table-striped \" style=\"background-color:lightgrey;\">
  \t  <thead>
      <tr>
        <th>Réf.</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Categorie</th>
        <th>Prix</th>
        <th>Qté.</th>
        <th>Ajouter</th>
      </tr>
    </thead>
    <tbody>
    {% set cpt=0 %}
    {% for produit in Produit %}
      {% set cpt = cpt+1 %}
      {% if produit.getVisibleProduit() == 1 %}
\t    <tr>
          <td>{{ produit.getRefProduit() }}</td>
          <td>{{ produit.getNomProduit() }}</td>
          <td>{{ produit.getDescriptionProduit() }}</td>
          <td>{{ produit.getCategorieProduit() }}</td> 
          <td>{{ produit.getPrixProduit() }}</td>
          <td>
            <input type=\"number\" id=\"qtt{{ cpt }}\" value=\"1\"></input>
          </td>
          <td>
            <a type=\"button\" id=\"btnAdd{{ cpt }}\" class=\"btn btn-primary btn-sm\" onclick=\"confirme('{{ cpt }}','{{ produit.getRefProduit() }}','{{ Panier.getIdPanier() }}')\">{% set qtt %}3{% endset %}Ajouter</a>
          </td>
        </tr>
      {% endif %}
    {% endfor %}
    </tbody>
  </table>
  </div>
  
  </div><!-- fin row -->
  </div><!-- fin container -->
  
  
  <script>
  function confirme(cpt,ref,id_panier){
\tvar qtt = \$(\"#qtt\"+cpt).val();
    //alert(\"cpt=\"+cpt+\" ref=\"+ref+\" idpanier=\"+id_panier+\" qtt=\"+qtt);
    
    //on recupere l'url
   \tvar str = location.href;
   \tvar lgth = str.length;

   \t//on recupere la partie de l'url devant(ou pas) contenir \"creation_panier\"
   \tvar test = str.substring(lgth-15, lgth);
   \tvar res = str.substring(0, lgth-15);

    //on test et on modifie en consequence
   \tif(test.localeCompare(\"creation_panier\")==0)
   \t  res += \"ajout_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    else{
      res = str.substring(0, lgth-(lgth-str.indexOf(\"/client\")));
      res += \"/client/ajout_panier/\"+id_panier+\"/\"+ref+\"/\"+qtt;
    }

    //redirection sur l'url finale
    document.location.href = res;
   
  }
  
  </script>
{% endblock %}








", "client/achat_client.twig", "/var/www/html/projet_odi/app/Resources/views/client/achat_client.twig");
    }
}
