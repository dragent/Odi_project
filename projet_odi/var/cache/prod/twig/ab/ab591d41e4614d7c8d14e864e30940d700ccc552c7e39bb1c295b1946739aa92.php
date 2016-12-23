<?php

/* client/achat_client.twig */
class __TwigTemplate_fd0786e4b7314773de3134262013304cd338d32e1bff466d6727d8f9809e360c extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbefa0a424f02de89c602325cbea9f3e010809694ad315566a52ef867e9411ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbefa0a424f02de89c602325cbea9f3e010809694ad315566a52ef867e9411ae->enter($__internal_bbefa0a424f02de89c602325cbea9f3e010809694ad315566a52ef867e9411ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/achat_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbefa0a424f02de89c602325cbea9f3e010809694ad315566a52ef867e9411ae->leave($__internal_bbefa0a424f02de89c602325cbea9f3e010809694ad315566a52ef867e9411ae_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b26ae4b54b52be3303259223a9d9bad6aad9cfaf2da17543aac2cdecc4fc4714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26ae4b54b52be3303259223a9d9bad6aad9cfaf2da17543aac2cdecc4fc4714->enter($__internal_b26ae4b54b52be3303259223a9d9bad6aad9cfaf2da17543aac2cdecc4fc4714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/achat_client.twig", 4)->display($context);
        
        $__internal_b26ae4b54b52be3303259223a9d9bad6aad9cfaf2da17543aac2cdecc4fc4714->leave($__internal_b26ae4b54b52be3303259223a9d9bad6aad9cfaf2da17543aac2cdecc4fc4714_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_6b5cdb0ce239c6763c40aa5f9a87a23d8486f422ad9e436afc04d2f1b4543e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5cdb0ce239c6763c40aa5f9a87a23d8486f422ad9e436afc04d2f1b4543e19->enter($__internal_6b5cdb0ce239c6763c40aa5f9a87a23d8486f422ad9e436afc04d2f1b4543e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6b5cdb0ce239c6763c40aa5f9a87a23d8486f422ad9e436afc04d2f1b4543e19->leave($__internal_6b5cdb0ce239c6763c40aa5f9a87a23d8486f422ad9e436afc04d2f1b4543e19_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_10b0437f27be4ab3105baccc4398cb165da3eb3723c73622a9709209fdf3072c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b0437f27be4ab3105baccc4398cb165da3eb3723c73622a9709209fdf3072c->enter($__internal_10b0437f27be4ab3105baccc4398cb165da3eb3723c73622a9709209fdf3072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Panier ID : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
        echo " </h2>
    
    <div class=\"container-fluid\">
    <div class=\"row\">
    
    <div class=\"col-sm-4\">
      <h4>Contenu du panier en cours :</h4>
      <table class=\"table table-striped \" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>ref</th>
            <th>nom</th>
            <th>qtt</th>
            <th>prix/unite</th>
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
        <th>ref</th>
        <th>nom</th>
        <th>description</th>
        <th>categorie</th>
        <th>prix</th>
        <th>date peremption</th>
        <th>qtt</th>
        <th>Ajout panier</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 68
        $context["cpt"] = 0;
        // line 69
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 70
            echo "      ";
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            // line 71
            echo "      ";
            if (($this->getAttribute($context["produit"], "getVisibleProduit", array(), "method") == 1)) {
                // line 72
                echo "\t    <tr>
          <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array(), "method"), "html", null, true);
                echo "</td> 
          <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                echo "</td>
          <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
          <td>
            <input type=\"number\" id=\"qtt";
                // line 80
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "\" value=\"1\"></input>
          </td>
          <td>
            <a type=\"button\" id=\"btnAdd";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\" onclick=\"confirme('";
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
            // line 87
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        
        $__internal_10b0437f27be4ab3105baccc4398cb165da3eb3723c73622a9709209fdf3072c->leave($__internal_10b0437f27be4ab3105baccc4398cb165da3eb3723c73622a9709209fdf3072c_prof);

    }

    // line 125
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b0807550f269445c2ed7b7e4049bcf1078adfbac87bfcdee645df5a30074e938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0807550f269445c2ed7b7e4049bcf1078adfbac87bfcdee645df5a30074e938->enter($__internal_b0807550f269445c2ed7b7e4049bcf1078adfbac87bfcdee645df5a30074e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b0807550f269445c2ed7b7e4049bcf1078adfbac87bfcdee645df5a30074e938->leave($__internal_b0807550f269445c2ed7b7e4049bcf1078adfbac87bfcdee645df5a30074e938_prof);

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
        return array (  292 => 125,  250 => 88,  244 => 87,  229 => 83,  223 => 80,  218 => 78,  214 => 77,  210 => 76,  206 => 75,  202 => 74,  198 => 73,  195 => 72,  192 => 71,  189 => 70,  184 => 69,  182 => 68,  158 => 47,  154 => 46,  150 => 44,  143 => 42,  137 => 41,  131 => 39,  128 => 38,  124 => 37,  119 => 36,  113 => 35,  107 => 33,  104 => 32,  100 => 31,  96 => 30,  93 => 29,  89 => 28,  68 => 11,  62 => 10,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
{% endblock %}

{% block section %}
    <h2>Panier ID : {{ Panier.getIdPanier() }} </h2>
    
    <div class=\"container-fluid\">
    <div class=\"row\">
    
    <div class=\"col-sm-4\">
      <h4>Contenu du panier en cours :</h4>
      <table class=\"table table-striped \" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>ref</th>
            <th>nom</th>
            <th>qtt</th>
            <th>prix/unite</th>
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
        <th>ref</th>
        <th>nom</th>
        <th>description</th>
        <th>categorie</th>
        <th>prix</th>
        <th>date peremption</th>
        <th>qtt</th>
        <th>Ajout panier</th>
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
          <td>{{ produit.getDatePeremptionProduit() | date(\"d/m/Y\")}}</td>
          <td>
            <input type=\"number\" id=\"qtt{{ cpt }}\" value=\"1\"></input>
          </td>
          <td>
            <a type=\"button\" id=\"btnAdd{{ cpt }}\" class=\"btn btn-default btn-sm\" onclick=\"confirme('{{ cpt }}','{{ produit.getRefProduit() }}','{{ Panier.getIdPanier() }}')\">{% set qtt %}3{% endset %}Ajouter</a>
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

{% block footer %}
{% endblock %}







", "client/achat_client.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\client\\achat_client.twig");
    }
}
