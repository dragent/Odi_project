<?php

/* produits/liste_produits.twig */
class __TwigTemplate_f3f74e9abff631ae704db14e43941e0e7af6171a9311b7f5b8beb4721efd5e7e extends Twig_Template
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
        $__internal_5baaa56aee7bcf63a8b28cdb37e92127a937b5d7b27d93bb546e57f175a7d214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baaa56aee7bcf63a8b28cdb37e92127a937b5d7b27d93bb546e57f175a7d214->enter($__internal_5baaa56aee7bcf63a8b28cdb37e92127a937b5d7b27d93bb546e57f175a7d214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $__internal_47d408f59f354ee493a7546d1ea1c2d27d2bfd8083d244ee3e37be41ec4fe167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d408f59f354ee493a7546d1ea1c2d27d2bfd8083d244ee3e37be41ec4fe167->enter($__internal_47d408f59f354ee493a7546d1ea1c2d27d2bfd8083d244ee3e37be41ec4fe167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/liste_produits.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5baaa56aee7bcf63a8b28cdb37e92127a937b5d7b27d93bb546e57f175a7d214->leave($__internal_5baaa56aee7bcf63a8b28cdb37e92127a937b5d7b27d93bb546e57f175a7d214_prof);

        
        $__internal_47d408f59f354ee493a7546d1ea1c2d27d2bfd8083d244ee3e37be41ec4fe167->leave($__internal_47d408f59f354ee493a7546d1ea1c2d27d2bfd8083d244ee3e37be41ec4fe167_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04591c74df6a76c32637591eb6abf3b4f9be471c60e8ffd46a9fefb4415ec031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04591c74df6a76c32637591eb6abf3b4f9be471c60e8ffd46a9fefb4415ec031->enter($__internal_04591c74df6a76c32637591eb6abf3b4f9be471c60e8ffd46a9fefb4415ec031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63be3504b2f22e4f1213da1bcc2116f0f9f7096e689b7245ea5a50a247bd7c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63be3504b2f22e4f1213da1bcc2116f0f9f7096e689b7245ea5a50a247bd7c77->enter($__internal_63be3504b2f22e4f1213da1bcc2116f0f9f7096e689b7245ea5a50a247bd7c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "produits/liste_produits.twig", 4)->display($context);
        
        $__internal_63be3504b2f22e4f1213da1bcc2116f0f9f7096e689b7245ea5a50a247bd7c77->leave($__internal_63be3504b2f22e4f1213da1bcc2116f0f9f7096e689b7245ea5a50a247bd7c77_prof);

        
        $__internal_04591c74df6a76c32637591eb6abf3b4f9be471c60e8ffd46a9fefb4415ec031->leave($__internal_04591c74df6a76c32637591eb6abf3b4f9be471c60e8ffd46a9fefb4415ec031_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_19c21aefa00d68a89020810b11a22d808cd4ee266b1994a47fea14b4d92fb900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c21aefa00d68a89020810b11a22d808cd4ee266b1994a47fea14b4d92fb900->enter($__internal_19c21aefa00d68a89020810b11a22d808cd4ee266b1994a47fea14b4d92fb900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_20eaa17452ff0c663e1db6b14989fe36d9a1b6d173ffaaea60a436e5f08ed4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20eaa17452ff0c663e1db6b14989fe36d9a1b6d173ffaaea60a436e5f08ed4e7->enter($__internal_20eaa17452ff0c663e1db6b14989fe36d9a1b6d173ffaaea60a436e5f08ed4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_20eaa17452ff0c663e1db6b14989fe36d9a1b6d173ffaaea60a436e5f08ed4e7->leave($__internal_20eaa17452ff0c663e1db6b14989fe36d9a1b6d173ffaaea60a436e5f08ed4e7_prof);

        
        $__internal_19c21aefa00d68a89020810b11a22d808cd4ee266b1994a47fea14b4d92fb900->leave($__internal_19c21aefa00d68a89020810b11a22d808cd4ee266b1994a47fea14b4d92fb900_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_3fb5df2a01aa44eda0476fc8b4a7e6e97fd65cecd1eb8612e9305bbab9fe0463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb5df2a01aa44eda0476fc8b4a7e6e97fd65cecd1eb8612e9305bbab9fe0463->enter($__internal_3fb5df2a01aa44eda0476fc8b4a7e6e97fd65cecd1eb8612e9305bbab9fe0463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_45daeaedaae0449242aa3c0450e76acc2b3e1e0fc090407385e5217ca29fd5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45daeaedaae0449242aa3c0450e76acc2b3e1e0fc090407385e5217ca29fd5a9->enter($__internal_45daeaedaae0449242aa3c0450e76acc2b3e1e0fc090407385e5217ca29fd5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
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
        
        $__internal_45daeaedaae0449242aa3c0450e76acc2b3e1e0fc090407385e5217ca29fd5a9->leave($__internal_45daeaedaae0449242aa3c0450e76acc2b3e1e0fc090407385e5217ca29fd5a9_prof);

        
        $__internal_3fb5df2a01aa44eda0476fc8b4a7e6e97fd65cecd1eb8612e9305bbab9fe0463->leave($__internal_3fb5df2a01aa44eda0476fc8b4a7e6e97fd65cecd1eb8612e9305bbab9fe0463_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d233a83979ad91f44ea7e759a13346fc6db32de616af9269a4084464d6c30493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d233a83979ad91f44ea7e759a13346fc6db32de616af9269a4084464d6c30493->enter($__internal_d233a83979ad91f44ea7e759a13346fc6db32de616af9269a4084464d6c30493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a617868bb82269354c992f28423622027bbf218b23ab1c5d3e525671229acdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a617868bb82269354c992f28423622027bbf218b23ab1c5d3e525671229acdc9->enter($__internal_a617868bb82269354c992f28423622027bbf218b23ab1c5d3e525671229acdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a617868bb82269354c992f28423622027bbf218b23ab1c5d3e525671229acdc9->leave($__internal_a617868bb82269354c992f28423622027bbf218b23ab1c5d3e525671229acdc9_prof);

        
        $__internal_d233a83979ad91f44ea7e759a13346fc6db32de616af9269a4084464d6c30493->leave($__internal_d233a83979ad91f44ea7e759a13346fc6db32de616af9269a4084464d6c30493_prof);

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
        return array (  164 => 43,  151 => 38,  145 => 37,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  112 => 27,  109 => 26,  105 => 25,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
    <h2>Liste des produits : </h1>
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
  {% for produit in Produit %}
    {% if produit.getVisibleProduit() == 1 %}
\t  <tr>
        <td>{{ produit.getRefProduit() }}</td>
        <td>{{ produit.getNomProduit() }}</td>
        <td>{{ produit.getDescriptionProduit() }}</td>
        <td>{{ produit.getCategorieProduit() }}</td>
        <td>{{ produit.getQuantiteProduit }}</td>
        <td>{{ produit.getPrixProduit() }}</td>
        <td>{{ produit.getDatePeremptionProduit() | date(\"d/m/Y\")}}</td>
      </tr>
    {% endif %}
  {% endfor %}

  </tbody>
</table> 
{% endblock %}

{% block footer %}
{% endblock %}
", "produits/liste_produits.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\liste_produits.twig");
    }
}
