<?php

/* client/contenu_panier_client.twig */
class __TwigTemplate_5be65d1084253b7b5a9a4cfb3658aef7b9a8c704519b7b4d4cfadb61280716c6 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0ab24b57c2ee7be74adbdce46424ee0b998a191bd97ac2610c044c5bddf38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0ab24b57c2ee7be74adbdce46424ee0b998a191bd97ac2610c044c5bddf38f->enter($__internal_dc0ab24b57c2ee7be74adbdce46424ee0b998a191bd97ac2610c044c5bddf38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/contenu_panier_client.twig"));

        $__internal_88c71953b95aca9ec8680a39ec600f18a920b42ed11e04c74b81efcc349a9f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c71953b95aca9ec8680a39ec600f18a920b42ed11e04c74b81efcc349a9f7b->enter($__internal_88c71953b95aca9ec8680a39ec600f18a920b42ed11e04c74b81efcc349a9f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/contenu_panier_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0ab24b57c2ee7be74adbdce46424ee0b998a191bd97ac2610c044c5bddf38f->leave($__internal_dc0ab24b57c2ee7be74adbdce46424ee0b998a191bd97ac2610c044c5bddf38f_prof);

        
        $__internal_88c71953b95aca9ec8680a39ec600f18a920b42ed11e04c74b81efcc349a9f7b->leave($__internal_88c71953b95aca9ec8680a39ec600f18a920b42ed11e04c74b81efcc349a9f7b_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d22778dd539c625e6e8fa7f4be052020d42c8dc8e5c4b46d04c7a28c30a6612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d22778dd539c625e6e8fa7f4be052020d42c8dc8e5c4b46d04c7a28c30a6612->enter($__internal_1d22778dd539c625e6e8fa7f4be052020d42c8dc8e5c4b46d04c7a28c30a6612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f79cc0e3816d417e079a96a33a2e5cd556362efc2a2cb100bc8cb986f56fdf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79cc0e3816d417e079a96a33a2e5cd556362efc2a2cb100bc8cb986f56fdf46->enter($__internal_f79cc0e3816d417e079a96a33a2e5cd556362efc2a2cb100bc8cb986f56fdf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/contenu_panier_client.twig", 4)->display($context);
        
        $__internal_f79cc0e3816d417e079a96a33a2e5cd556362efc2a2cb100bc8cb986f56fdf46->leave($__internal_f79cc0e3816d417e079a96a33a2e5cd556362efc2a2cb100bc8cb986f56fdf46_prof);

        
        $__internal_1d22778dd539c625e6e8fa7f4be052020d42c8dc8e5c4b46d04c7a28c30a6612->leave($__internal_1d22778dd539c625e6e8fa7f4be052020d42c8dc8e5c4b46d04c7a28c30a6612_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_eacbe067eba516b1ad507d6cbd2b3debfcf85f2155f958ffe39f4e66e67e85a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacbe067eba516b1ad507d6cbd2b3debfcf85f2155f958ffe39f4e66e67e85a3->enter($__internal_eacbe067eba516b1ad507d6cbd2b3debfcf85f2155f958ffe39f4e66e67e85a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6c104ae7b1b6f14715db28af4ff7ec41b1292cd9728c7f5e1c7226e2e7f521ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c104ae7b1b6f14715db28af4ff7ec41b1292cd9728c7f5e1c7226e2e7f521ba->enter($__internal_6c104ae7b1b6f14715db28af4ff7ec41b1292cd9728c7f5e1c7226e2e7f521ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6c104ae7b1b6f14715db28af4ff7ec41b1292cd9728c7f5e1c7226e2e7f521ba->leave($__internal_6c104ae7b1b6f14715db28af4ff7ec41b1292cd9728c7f5e1c7226e2e7f521ba_prof);

        
        $__internal_eacbe067eba516b1ad507d6cbd2b3debfcf85f2155f958ffe39f4e66e67e85a3->leave($__internal_eacbe067eba516b1ad507d6cbd2b3debfcf85f2155f958ffe39f4e66e67e85a3_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_2a4b129605f655a238ae4cff36b8f72faf6de344f14fd252752af70c25ecce15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4b129605f655a238ae4cff36b8f72faf6de344f14fd252752af70c25ecce15->enter($__internal_2a4b129605f655a238ae4cff36b8f72faf6de344f14fd252752af70c25ecce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_eb5419d00586800440914cccedaa573c131ca126cbf4c67874ce32fe834be03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5419d00586800440914cccedaa573c131ca126cbf4c67874ce32fe834be03c->enter($__internal_eb5419d00586800440914cccedaa573c131ca126cbf4c67874ce32fe834be03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Contenu du panier : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")), "getIdPanier", array(), "method"), "html", null, true);
        echo "</h1>
    <div class=\"container\">
\t<table class=\"table table-striped \" style=\"background-color:lightblue;\">
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contenir"]) ? $context["Contenir"] : $this->getContext($context, "Contenir")));
        foreach ($context['_seq'] as $context["_key"] => $context["contenir"]) {
            // line 24
            echo "    \t    <tr>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 27
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 28
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 30
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "              <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contenir"], "getQuantiteProduit", array(), "method"), "html", null, true);
            echo "</td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 33
                echo "              ";
                if (($this->getAttribute($context["produit"], "getRefProduit", array(), "method") == $this->getAttribute($context["contenir"], "getRefProduit", array(), "method"))) {
                    // line 34
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array(), "method"), "html", null, true);
                    echo "</td>
              ";
                }
                // line 36
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
      </table>
      </div>
";
        
        $__internal_eb5419d00586800440914cccedaa573c131ca126cbf4c67874ce32fe834be03c->leave($__internal_eb5419d00586800440914cccedaa573c131ca126cbf4c67874ce32fe834be03c_prof);

        
        $__internal_2a4b129605f655a238ae4cff36b8f72faf6de344f14fd252752af70c25ecce15->leave($__internal_2a4b129605f655a238ae4cff36b8f72faf6de344f14fd252752af70c25ecce15_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6eb62918ffeb75b17e9f9576570ee3a7d48f49dd20663d55736292ca5641295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eb62918ffeb75b17e9f9576570ee3a7d48f49dd20663d55736292ca5641295->enter($__internal_c6eb62918ffeb75b17e9f9576570ee3a7d48f49dd20663d55736292ca5641295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7343ada7f3800ff9e264c2501efc4a5c317681c923c3239c59f3bc478e919338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7343ada7f3800ff9e264c2501efc4a5c317681c923c3239c59f3bc478e919338->enter($__internal_7343ada7f3800ff9e264c2501efc4a5c317681c923c3239c59f3bc478e919338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7343ada7f3800ff9e264c2501efc4a5c317681c923c3239c59f3bc478e919338->leave($__internal_7343ada7f3800ff9e264c2501efc4a5c317681c923c3239c59f3bc478e919338_prof);

        
        $__internal_c6eb62918ffeb75b17e9f9576570ee3a7d48f49dd20663d55736292ca5641295->leave($__internal_c6eb62918ffeb75b17e9f9576570ee3a7d48f49dd20663d55736292ca5641295_prof);

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
        return array (  179 => 44,  166 => 39,  159 => 37,  153 => 36,  147 => 34,  144 => 33,  140 => 32,  135 => 31,  129 => 30,  123 => 28,  120 => 27,  116 => 26,  112 => 25,  109 => 24,  105 => 23,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
    <h2>Contenu du panier : {{ Panier.getIdPanier() }}</h1>
    <div class=\"container\">
\t<table class=\"table table-striped \" style=\"background-color:lightblue;\">
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
      </div>
{% endblock %}

{% block footer %}
{% endblock %}
", "client/contenu_panier_client.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\client\\contenu_panier_client.twig");
    }
}
