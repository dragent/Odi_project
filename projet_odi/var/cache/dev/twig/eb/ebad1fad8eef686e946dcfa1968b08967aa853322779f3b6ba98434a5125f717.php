<?php

/* client/achat_client.twig */
class __TwigTemplate_0b2d52d8b3bbf0b912a857f21dcdb90429fa26e8fc95b4d192013c72cd823d1a extends Twig_Template
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
        $__internal_f5cbf1acc8cdba3ce66f96b4a1a31ed33c36c2efc13a13f3b9e172012cbce538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cbf1acc8cdba3ce66f96b4a1a31ed33c36c2efc13a13f3b9e172012cbce538->enter($__internal_f5cbf1acc8cdba3ce66f96b4a1a31ed33c36c2efc13a13f3b9e172012cbce538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/achat_client.twig"));

        $__internal_fe7fb36f5ca1f7fa8afdfe9d099565e7d1d1b161ba14ed2ef7068111f0a632eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7fb36f5ca1f7fa8afdfe9d099565e7d1d1b161ba14ed2ef7068111f0a632eb->enter($__internal_fe7fb36f5ca1f7fa8afdfe9d099565e7d1d1b161ba14ed2ef7068111f0a632eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/achat_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5cbf1acc8cdba3ce66f96b4a1a31ed33c36c2efc13a13f3b9e172012cbce538->leave($__internal_f5cbf1acc8cdba3ce66f96b4a1a31ed33c36c2efc13a13f3b9e172012cbce538_prof);

        
        $__internal_fe7fb36f5ca1f7fa8afdfe9d099565e7d1d1b161ba14ed2ef7068111f0a632eb->leave($__internal_fe7fb36f5ca1f7fa8afdfe9d099565e7d1d1b161ba14ed2ef7068111f0a632eb_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9229e19cf87626deecfeb45e9b28732fab9392c55c9f75950212d91d0894238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9229e19cf87626deecfeb45e9b28732fab9392c55c9f75950212d91d0894238->enter($__internal_f9229e19cf87626deecfeb45e9b28732fab9392c55c9f75950212d91d0894238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f8eefaa2c99f884bf32def521e5a5b4096bd7764c7d2bf61a4fadbba0e2ab78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8eefaa2c99f884bf32def521e5a5b4096bd7764c7d2bf61a4fadbba0e2ab78->enter($__internal_9f8eefaa2c99f884bf32def521e5a5b4096bd7764c7d2bf61a4fadbba0e2ab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/achat_client.twig", 4)->display($context);
        
        $__internal_9f8eefaa2c99f884bf32def521e5a5b4096bd7764c7d2bf61a4fadbba0e2ab78->leave($__internal_9f8eefaa2c99f884bf32def521e5a5b4096bd7764c7d2bf61a4fadbba0e2ab78_prof);

        
        $__internal_f9229e19cf87626deecfeb45e9b28732fab9392c55c9f75950212d91d0894238->leave($__internal_f9229e19cf87626deecfeb45e9b28732fab9392c55c9f75950212d91d0894238_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_a68d5de9c72df2d6fabb9bedacaa545d547812310b6b24b0a2bbf645385fc2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d5de9c72df2d6fabb9bedacaa545d547812310b6b24b0a2bbf645385fc2a1->enter($__internal_a68d5de9c72df2d6fabb9bedacaa545d547812310b6b24b0a2bbf645385fc2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ea16d4ef0edf2e8a92f1eafb7afa46b3e59b77ccf5796efc240f21027e2acd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea16d4ef0edf2e8a92f1eafb7afa46b3e59b77ccf5796efc240f21027e2acd52->enter($__internal_ea16d4ef0edf2e8a92f1eafb7afa46b3e59b77ccf5796efc240f21027e2acd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_ea16d4ef0edf2e8a92f1eafb7afa46b3e59b77ccf5796efc240f21027e2acd52->leave($__internal_ea16d4ef0edf2e8a92f1eafb7afa46b3e59b77ccf5796efc240f21027e2acd52_prof);

        
        $__internal_a68d5de9c72df2d6fabb9bedacaa545d547812310b6b24b0a2bbf645385fc2a1->leave($__internal_a68d5de9c72df2d6fabb9bedacaa545d547812310b6b24b0a2bbf645385fc2a1_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_52fef9963403ca5c91b6c9e145ccd21004e47a1e8f111780dc27de13d0f2a2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fef9963403ca5c91b6c9e145ccd21004e47a1e8f111780dc27de13d0f2a2d6->enter($__internal_52fef9963403ca5c91b6c9e145ccd21004e47a1e8f111780dc27de13d0f2a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_e0c990ffa582e0bc5ba50abb6bff35415a03a8c84b74e3fb1c864b8762b01922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c990ffa582e0bc5ba50abb6bff35415a03a8c84b74e3fb1c864b8762b01922->enter($__internal_e0c990ffa582e0bc5ba50abb6bff35415a03a8c84b74e3fb1c864b8762b01922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_e0c990ffa582e0bc5ba50abb6bff35415a03a8c84b74e3fb1c864b8762b01922->leave($__internal_e0c990ffa582e0bc5ba50abb6bff35415a03a8c84b74e3fb1c864b8762b01922_prof);

        
        $__internal_52fef9963403ca5c91b6c9e145ccd21004e47a1e8f111780dc27de13d0f2a2d6->leave($__internal_52fef9963403ca5c91b6c9e145ccd21004e47a1e8f111780dc27de13d0f2a2d6_prof);

    }

    // line 125
    public function block_footer($context, array $blocks = array())
    {
        $__internal_00804949c8f2fe5c4ed1c3bff4fa4a62652b4da5595408e9b30afe60aebf8237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00804949c8f2fe5c4ed1c3bff4fa4a62652b4da5595408e9b30afe60aebf8237->enter($__internal_00804949c8f2fe5c4ed1c3bff4fa4a62652b4da5595408e9b30afe60aebf8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5b82da6946431a573b1d0e3903d177dd1f1b9fd12753357b4a2c420371379bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b82da6946431a573b1d0e3903d177dd1f1b9fd12753357b4a2c420371379bce->enter($__internal_5b82da6946431a573b1d0e3903d177dd1f1b9fd12753357b4a2c420371379bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5b82da6946431a573b1d0e3903d177dd1f1b9fd12753357b4a2c420371379bce->leave($__internal_5b82da6946431a573b1d0e3903d177dd1f1b9fd12753357b4a2c420371379bce_prof);

        
        $__internal_00804949c8f2fe5c4ed1c3bff4fa4a62652b4da5595408e9b30afe60aebf8237->leave($__internal_00804949c8f2fe5c4ed1c3bff4fa4a62652b4da5595408e9b30afe60aebf8237_prof);

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
        return array (  316 => 125,  271 => 88,  265 => 87,  250 => 83,  244 => 80,  239 => 78,  235 => 77,  231 => 76,  227 => 75,  223 => 74,  219 => 73,  216 => 72,  213 => 71,  210 => 70,  205 => 69,  203 => 68,  179 => 47,  175 => 46,  171 => 44,  164 => 42,  158 => 41,  152 => 39,  149 => 38,  145 => 37,  140 => 36,  134 => 35,  128 => 33,  125 => 32,  121 => 31,  117 => 30,  114 => 29,  110 => 28,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
