<?php

/* produits/listeStocksProduits.html.twig */
class __TwigTemplate_8e60606445597862f87d9f354079aec384aac5476d12345ee40c9b37b0c0c87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/listeStocksProduits.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_657e492cf460f02bf8b10e541a9033a876d12023d352cf01a8f3eee3a231d3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657e492cf460f02bf8b10e541a9033a876d12023d352cf01a8f3eee3a231d3fd->enter($__internal_657e492cf460f02bf8b10e541a9033a876d12023d352cf01a8f3eee3a231d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/listeStocksProduits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657e492cf460f02bf8b10e541a9033a876d12023d352cf01a8f3eee3a231d3fd->leave($__internal_657e492cf460f02bf8b10e541a9033a876d12023d352cf01a8f3eee3a231d3fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8c532e0cb3b2bc281bc8cd89e45c01766d21fbd4cbc5565bc4d2772b0cd6db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c532e0cb3b2bc281bc8cd89e45c01766d21fbd4cbc5565bc4d2772b0cd6db9->enter($__internal_e8c532e0cb3b2bc281bc8cd89e45c01766d21fbd4cbc5565bc4d2772b0cd6db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeStocksProduits.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_e8c532e0cb3b2bc281bc8cd89e45c01766d21fbd4cbc5565bc4d2772b0cd6db9->leave($__internal_e8c532e0cb3b2bc281bc8cd89e45c01766d21fbd4cbc5565bc4d2772b0cd6db9_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bec6e826a104b8e2c6274bdadeb032c5ec90d1a4f0e85175cf9587e0fa4dd315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec6e826a104b8e2c6274bdadeb032c5ec90d1a4f0e85175cf9587e0fa4dd315->enter($__internal_bec6e826a104b8e2c6274bdadeb032c5ec90d1a4f0e85175cf9587e0fa4dd315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeStocksProduits.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "produits/listeStocksProduits.html.twig", 11)->display($context);
        
        $__internal_bec6e826a104b8e2c6274bdadeb032c5ec90d1a4f0e85175cf9587e0fa4dd315->leave($__internal_bec6e826a104b8e2c6274bdadeb032c5ec90d1a4f0e85175cf9587e0fa4dd315_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_04a39a25e8496a2ea8ae180959ab426cc051a243893b7211bb56a8c61394e2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a39a25e8496a2ea8ae180959ab426cc051a243893b7211bb56a8c61394e2d3->enter($__internal_04a39a25e8496a2ea8ae180959ab426cc051a243893b7211bb56a8c61394e2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeStocksProduits.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        
        $__internal_04a39a25e8496a2ea8ae180959ab426cc051a243893b7211bb56a8c61394e2d3->leave($__internal_04a39a25e8496a2ea8ae180959ab426cc051a243893b7211bb56a8c61394e2d3_prof);

    }

    // line 22
    public function block_section($context, array $blocks = array())
    {
        $__internal_a365c104f3c1808a5bb557527c1207d3ac725f53a029d3d0960f724101cc96ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a365c104f3c1808a5bb557527c1207d3ac725f53a029d3d0960f724101cc96ba->enter($__internal_a365c104f3c1808a5bb557527c1207d3ac725f53a029d3d0960f724101cc96ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeStocksProduits.html.twig"));

        // line 23
        echo "  <div class=\"container\">
    <div class=\"centrer isolerBottom\">
        <a href=\"#\" class=\"btn btn-info btn-lg\">Télécharger l'état des stocks (.csv)</a>
    </div>
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Quantité Min.</th>
          <th>Date Limite</th>
          <th>Modifier Stocks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
      </tbody>
    </table> 
  </div>
";
        
        $__internal_a365c104f3c1808a5bb557527c1207d3ac725f53a029d3d0960f724101cc96ba->leave($__internal_a365c104f3c1808a5bb557527c1207d3ac725f53a029d3d0960f724101cc96ba_prof);

    }

    public function getTemplateName()
    {
        return "produits/listeStocksProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  87 => 22,  80 => 19,  78 => 18,  75 => 16,  73 => 15,  67 => 14,  59 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

{% block title %}
    Magasinier | Produits
{% endblock %}

{% block menu %}
    {#{% if magasinier %}
        {% include 'menu_magasinier.twig' %}
    {% endif %}#}
    {% include 'menu_magasinier.twig' %}
{% endblock %}

{% block header %}
    {#{% if magasinier %}#}
        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
  <div class=\"container\">
    <div class=\"centrer isolerBottom\">
        <a href=\"#\" class=\"btn btn-info btn-lg\">Télécharger l'état des stocks (.csv)</a>
    </div>
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Quantité Min.</th>
          <th>Date Limite</th>
          <th>Modifier Stocks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
      </tbody>
    </table> 
  </div>
{% endblock %}




", "produits/listeStocksProduits.html.twig", "/var/www/html/projet_odi/app/Resources/views/produits/listeStocksProduits.html.twig");
    }
}
