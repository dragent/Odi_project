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
        $__internal_7a981095d95cc27f1531a88098e383151adad1a1862e17e46de577045f83f58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a981095d95cc27f1531a88098e383151adad1a1862e17e46de577045f83f58f->enter($__internal_7a981095d95cc27f1531a88098e383151adad1a1862e17e46de577045f83f58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/gestion_panier_magasinier.twig"));

        $__internal_6c4ccbb0efaabff7af289f2a73d731a866cd1f339964857e2f42f11e68651c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4ccbb0efaabff7af289f2a73d731a866cd1f339964857e2f42f11e68651c9d->enter($__internal_6c4ccbb0efaabff7af289f2a73d731a866cd1f339964857e2f42f11e68651c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/gestion_panier_magasinier.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a981095d95cc27f1531a88098e383151adad1a1862e17e46de577045f83f58f->leave($__internal_7a981095d95cc27f1531a88098e383151adad1a1862e17e46de577045f83f58f_prof);

        
        $__internal_6c4ccbb0efaabff7af289f2a73d731a866cd1f339964857e2f42f11e68651c9d->leave($__internal_6c4ccbb0efaabff7af289f2a73d731a866cd1f339964857e2f42f11e68651c9d_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e62811fa94749b13cc5bdb745e5452428e31500d7d785ee76e91a95a1ed51d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62811fa94749b13cc5bdb745e5452428e31500d7d785ee76e91a95a1ed51d1f->enter($__internal_e62811fa94749b13cc5bdb745e5452428e31500d7d785ee76e91a95a1ed51d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30ba88a38d21b5bc7e58370ab10565c8a51ae59a13bdf9d59b71852040544d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ba88a38d21b5bc7e58370ab10565c8a51ae59a13bdf9d59b71852040544d38->enter($__internal_30ba88a38d21b5bc7e58370ab10565c8a51ae59a13bdf9d59b71852040544d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "magasinier/gestion_panier_magasinier.twig", 4)->display($context);
        
        $__internal_30ba88a38d21b5bc7e58370ab10565c8a51ae59a13bdf9d59b71852040544d38->leave($__internal_30ba88a38d21b5bc7e58370ab10565c8a51ae59a13bdf9d59b71852040544d38_prof);

        
        $__internal_e62811fa94749b13cc5bdb745e5452428e31500d7d785ee76e91a95a1ed51d1f->leave($__internal_e62811fa94749b13cc5bdb745e5452428e31500d7d785ee76e91a95a1ed51d1f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_0d5a5a0f241589be69cb0e1088f3d35793fe6f97c57571fec9dfffac307becea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5a5a0f241589be69cb0e1088f3d35793fe6f97c57571fec9dfffac307becea->enter($__internal_0d5a5a0f241589be69cb0e1088f3d35793fe6f97c57571fec9dfffac307becea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f96f23f40f70f8a1f65f5903042db3d6e21cb91d48ef6c244646834e79cc4c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96f23f40f70f8a1f65f5903042db3d6e21cb91d48ef6c244646834e79cc4c29->enter($__internal_f96f23f40f70f8a1f65f5903042db3d6e21cb91d48ef6c244646834e79cc4c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f96f23f40f70f8a1f65f5903042db3d6e21cb91d48ef6c244646834e79cc4c29->leave($__internal_f96f23f40f70f8a1f65f5903042db3d6e21cb91d48ef6c244646834e79cc4c29_prof);

        
        $__internal_0d5a5a0f241589be69cb0e1088f3d35793fe6f97c57571fec9dfffac307becea->leave($__internal_0d5a5a0f241589be69cb0e1088f3d35793fe6f97c57571fec9dfffac307becea_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_be4ced59ceb5a7dfa6cf422a000a8f8e425beadbdd91ef1992869dbffdd381f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4ced59ceb5a7dfa6cf422a000a8f8e425beadbdd91ef1992869dbffdd381f5->enter($__internal_be4ced59ceb5a7dfa6cf422a000a8f8e425beadbdd91ef1992869dbffdd381f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_cfe5e19862b1d58082a780d579c0ee709f4f6159582506908065db8dfdf67ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe5e19862b1d58082a780d579c0ee709f4f6159582506908065db8dfdf67ae5->enter($__internal_cfe5e19862b1d58082a780d579c0ee709f4f6159582506908065db8dfdf67ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_cfe5e19862b1d58082a780d579c0ee709f4f6159582506908065db8dfdf67ae5->leave($__internal_cfe5e19862b1d58082a780d579c0ee709f4f6159582506908065db8dfdf67ae5_prof);

        
        $__internal_be4ced59ceb5a7dfa6cf422a000a8f8e425beadbdd91ef1992869dbffdd381f5->leave($__internal_be4ced59ceb5a7dfa6cf422a000a8f8e425beadbdd91ef1992869dbffdd381f5_prof);

    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        $__internal_92759e2e2551b098c67302758e768d5ff5ef75dda0b80813e3d94cdf904632ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92759e2e2551b098c67302758e768d5ff5ef75dda0b80813e3d94cdf904632ba->enter($__internal_92759e2e2551b098c67302758e768d5ff5ef75dda0b80813e3d94cdf904632ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3448b21e58e501aa03de29d467e6ee7f9aab40fbe7b45703631c88d117257426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3448b21e58e501aa03de29d467e6ee7f9aab40fbe7b45703631c88d117257426->enter($__internal_3448b21e58e501aa03de29d467e6ee7f9aab40fbe7b45703631c88d117257426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_3448b21e58e501aa03de29d467e6ee7f9aab40fbe7b45703631c88d117257426->leave($__internal_3448b21e58e501aa03de29d467e6ee7f9aab40fbe7b45703631c88d117257426_prof);

        
        $__internal_92759e2e2551b098c67302758e768d5ff5ef75dda0b80813e3d94cdf904632ba->leave($__internal_92759e2e2551b098c67302758e768d5ff5ef75dda0b80813e3d94cdf904632ba_prof);

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
