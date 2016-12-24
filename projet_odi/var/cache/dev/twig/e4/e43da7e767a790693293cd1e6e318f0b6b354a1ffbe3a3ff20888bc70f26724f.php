<?php

/* magasinier/gestion_panier_magasinier.twig */
class __TwigTemplate_f7bb61bbc1c02d6462aba2aec1b437a9be2315319de6c5854df3c272bfde63d2 extends Twig_Template
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
        $__internal_e4bb44515b705962c7cad33793395c25ffa4ca007ee08422d6ce86725c40e5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bb44515b705962c7cad33793395c25ffa4ca007ee08422d6ce86725c40e5af->enter($__internal_e4bb44515b705962c7cad33793395c25ffa4ca007ee08422d6ce86725c40e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/gestion_panier_magasinier.twig"));

        $__internal_2076da45b15ce15ace21339599613bd67574d8068a93106336f790d894cb2ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2076da45b15ce15ace21339599613bd67574d8068a93106336f790d894cb2ee4->enter($__internal_2076da45b15ce15ace21339599613bd67574d8068a93106336f790d894cb2ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/gestion_panier_magasinier.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4bb44515b705962c7cad33793395c25ffa4ca007ee08422d6ce86725c40e5af->leave($__internal_e4bb44515b705962c7cad33793395c25ffa4ca007ee08422d6ce86725c40e5af_prof);

        
        $__internal_2076da45b15ce15ace21339599613bd67574d8068a93106336f790d894cb2ee4->leave($__internal_2076da45b15ce15ace21339599613bd67574d8068a93106336f790d894cb2ee4_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81315149b0eff6a01a8b3af32bf879cde223400993c81344a12de54d77f41916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81315149b0eff6a01a8b3af32bf879cde223400993c81344a12de54d77f41916->enter($__internal_81315149b0eff6a01a8b3af32bf879cde223400993c81344a12de54d77f41916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d623abb5fb50c883556800c80565891c2fe57ac9317b7c4f857881d99d933c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d623abb5fb50c883556800c80565891c2fe57ac9317b7c4f857881d99d933c4e->enter($__internal_d623abb5fb50c883556800c80565891c2fe57ac9317b7c4f857881d99d933c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "magasinier/gestion_panier_magasinier.twig", 4)->display($context);
        
        $__internal_d623abb5fb50c883556800c80565891c2fe57ac9317b7c4f857881d99d933c4e->leave($__internal_d623abb5fb50c883556800c80565891c2fe57ac9317b7c4f857881d99d933c4e_prof);

        
        $__internal_81315149b0eff6a01a8b3af32bf879cde223400993c81344a12de54d77f41916->leave($__internal_81315149b0eff6a01a8b3af32bf879cde223400993c81344a12de54d77f41916_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_f1c7890fd1527c7a5079f23f8c39362459a0660af576f5f0b5a0df01fe0b2eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c7890fd1527c7a5079f23f8c39362459a0660af576f5f0b5a0df01fe0b2eca->enter($__internal_f1c7890fd1527c7a5079f23f8c39362459a0660af576f5f0b5a0df01fe0b2eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1fe0c77f10cbe2fb739d5dd7369879b5f7262bc92928ab3c7c83546c1bc96550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe0c77f10cbe2fb739d5dd7369879b5f7262bc92928ab3c7c83546c1bc96550->enter($__internal_1fe0c77f10cbe2fb739d5dd7369879b5f7262bc92928ab3c7c83546c1bc96550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_1fe0c77f10cbe2fb739d5dd7369879b5f7262bc92928ab3c7c83546c1bc96550->leave($__internal_1fe0c77f10cbe2fb739d5dd7369879b5f7262bc92928ab3c7c83546c1bc96550_prof);

        
        $__internal_f1c7890fd1527c7a5079f23f8c39362459a0660af576f5f0b5a0df01fe0b2eca->leave($__internal_f1c7890fd1527c7a5079f23f8c39362459a0660af576f5f0b5a0df01fe0b2eca_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_498062645f3f5994b6c09e4d2c4d138c51ade53a5ba0379872b3644b9efd44b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498062645f3f5994b6c09e4d2c4d138c51ade53a5ba0379872b3644b9efd44b0->enter($__internal_498062645f3f5994b6c09e4d2c4d138c51ade53a5ba0379872b3644b9efd44b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_434ffecc2629e67cef3e4710766c47aea0a746090816c56f3f433b9440b0d823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434ffecc2629e67cef3e4710766c47aea0a746090816c56f3f433b9440b0d823->enter($__internal_434ffecc2629e67cef3e4710766c47aea0a746090816c56f3f433b9440b0d823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Contenu du panier : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
        echo " </h1>
    <div class=\"container\">
\t<table class=\"table table-striped \" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>ref</th>
            <th>nom</th>
            <th>qtt comandée restante</th>
            <th>qtt en stock</th>
            <th>qtt a delivrer</th>
            <th>gestion</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 25
        $context["cpt"] = 0;
        // line 26
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 27
            echo "            ";
            $context["cpt"] = ((isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")) + 1);
            echo " 
    \t    <tr>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 31
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 32
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 34
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "              <td>";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")), "html", null, true);
            echo "</td>
              ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 37
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 38
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 40
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "              <td>
                <input type=\"number\" id=\"qtt";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["cpt"]) ? $context["cpt"] : $this->getContext($context, "cpt")), "html", null, true);
            echo "\" value=\"1\"></input>
              </td>
              <td>
                ";
            // line 45
            if ((($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")) == 0)) {
                // line 46
                echo "                  OK
                ";
            } else {
                // line 48
                echo "                  <a type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"confirme('";
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
            // line 50
            echo "              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
      </table>
      ";
        // line 55
        $context["validate"] = 1;
        // line 56
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 57
            echo "        ";
            if ((($this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method") - $this->getAttribute($context["contenir"], "getQuantiteProduitGeree", array(), "method")) > 0)) {
                // line 58
                echo "          ";
                $context["validate"] = 0;
                // line 59
                echo "        ";
            }
            // line 60
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      
      ";
        // line 62
        if (((isset($context["validate"]) ? $context["validate"] : $this->getContext($context, "validate")) == 1)) {
            // line 63
            echo "        <a type=\"button\" class=\"btn btn-success btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_panier_valider_magasinier", array("id_panier" => $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"))), "html", null, true);
            echo "\" >Valider panier</a>
      ";
        } else {
            // line 65
            echo "        <a type=\"button\" class=\"btn btn-danger btn-sm\" href=\"#\" >Valider panier</a>
      ";
        }
        // line 67
        echo "      </div>
      
      
      
      
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
        
        $__internal_434ffecc2629e67cef3e4710766c47aea0a746090816c56f3f433b9440b0d823->leave($__internal_434ffecc2629e67cef3e4710766c47aea0a746090816c56f3f433b9440b0d823_prof);

        
        $__internal_498062645f3f5994b6c09e4d2c4d138c51ade53a5ba0379872b3644b9efd44b0->leave($__internal_498062645f3f5994b6c09e4d2c4d138c51ade53a5ba0379872b3644b9efd44b0_prof);

    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8e5d060497b0adc53f1b6808857f76080ca039cae854391ff2cfecfd916e088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e5d060497b0adc53f1b6808857f76080ca039cae854391ff2cfecfd916e088->enter($__internal_f8e5d060497b0adc53f1b6808857f76080ca039cae854391ff2cfecfd916e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fa4a4f4ffc9b146a72f9a5f07f0b9f5cf194dc64c31a76a005fb957bfa5558cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4a4f4ffc9b146a72f9a5f07f0b9f5cf194dc64c31a76a005fb957bfa5558cc->enter($__internal_fa4a4f4ffc9b146a72f9a5f07f0b9f5cf194dc64c31a76a005fb957bfa5558cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_fa4a4f4ffc9b146a72f9a5f07f0b9f5cf194dc64c31a76a005fb957bfa5558cc->leave($__internal_fa4a4f4ffc9b146a72f9a5f07f0b9f5cf194dc64c31a76a005fb957bfa5558cc_prof);

        
        $__internal_f8e5d060497b0adc53f1b6808857f76080ca039cae854391ff2cfecfd916e088->leave($__internal_f8e5d060497b0adc53f1b6808857f76080ca039cae854391ff2cfecfd916e088_prof);

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
        return array (  293 => 109,  243 => 67,  239 => 65,  233 => 63,  231 => 62,  228 => 61,  222 => 60,  219 => 59,  216 => 58,  213 => 57,  208 => 56,  206 => 55,  202 => 53,  194 => 50,  182 => 48,  178 => 46,  176 => 45,  170 => 42,  167 => 41,  161 => 40,  155 => 38,  152 => 37,  148 => 36,  143 => 35,  137 => 34,  131 => 32,  128 => 31,  124 => 30,  120 => 29,  114 => 27,  109 => 26,  107 => 25,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
    <h2>Contenu du panier : {{ Panier.getIdPanier() }} </h1>
    <div class=\"container\">
\t<table class=\"table table-striped \" style=\"background-color:lightblue;\">
  \t    <thead>
          <tr>
            <th>ref</th>
            <th>nom</th>
            <th>qtt comandée restante</th>
            <th>qtt en stock</th>
            <th>qtt a delivrer</th>
            <th>gestion</th>
          </tr>
        </thead>
        <tbody>
          {% set cpt=0 %}
          {% for contenir in Contenir %}
            {% set cpt = cpt+1 %} 
    \t    <tr>
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
", "magasinier/gestion_panier_magasinier.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\magasinier\\gestion_panier_magasinier.twig");
    }
}
