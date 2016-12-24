<?php

/* produits/listeProduits.html.twig */
class __TwigTemplate_ad8703ee1a5f7756911ad1b9dbc271802990fd10b7fc3bb21db649fe7f27d5f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/listeProduits.html.twig", 1);
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
        $__internal_89ce7a821a28e123ac66b1bba67c7127cfd7621d266c7e35ce734358c8fdb241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ce7a821a28e123ac66b1bba67c7127cfd7621d266c7e35ce734358c8fdb241->enter($__internal_89ce7a821a28e123ac66b1bba67c7127cfd7621d266c7e35ce734358c8fdb241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/listeProduits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ce7a821a28e123ac66b1bba67c7127cfd7621d266c7e35ce734358c8fdb241->leave($__internal_89ce7a821a28e123ac66b1bba67c7127cfd7621d266c7e35ce734358c8fdb241_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7e70514b139ae1f67af3fe29d4f888c73dd9e704850d85262b64ef701482de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e70514b139ae1f67af3fe29d4f888c73dd9e704850d85262b64ef701482de5->enter($__internal_b7e70514b139ae1f67af3fe29d4f888c73dd9e704850d85262b64ef701482de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeProduits.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_b7e70514b139ae1f67af3fe29d4f888c73dd9e704850d85262b64ef701482de5->leave($__internal_b7e70514b139ae1f67af3fe29d4f888c73dd9e704850d85262b64ef701482de5_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f895f3ed8007fc528661792f77fb4f5122a7886ea579c7a1cacf4b33d9f546a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f895f3ed8007fc528661792f77fb4f5122a7886ea579c7a1cacf4b33d9f546a8->enter($__internal_f895f3ed8007fc528661792f77fb4f5122a7886ea579c7a1cacf4b33d9f546a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeProduits.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "produits/listeProduits.html.twig", 11)->display($context);
        
        $__internal_f895f3ed8007fc528661792f77fb4f5122a7886ea579c7a1cacf4b33d9f546a8->leave($__internal_f895f3ed8007fc528661792f77fb4f5122a7886ea579c7a1cacf4b33d9f546a8_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_33e3635749c12c90b19cc67c304c05f24322c057edd9f2e0423707857b3a5bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e3635749c12c90b19cc67c304c05f24322c057edd9f2e0423707857b3a5bb6->enter($__internal_33e3635749c12c90b19cc67c304c05f24322c057edd9f2e0423707857b3a5bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeProduits.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        
        $__internal_33e3635749c12c90b19cc67c304c05f24322c057edd9f2e0423707857b3a5bb6->leave($__internal_33e3635749c12c90b19cc67c304c05f24322c057edd9f2e0423707857b3a5bb6_prof);

    }

    // line 22
    public function block_section($context, array $blocks = array())
    {
        $__internal_e77f0aeabd52968f220a1d22dfe35d23cd1b3ddc76e9be388d141f3d87c5f1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77f0aeabd52968f220a1d22dfe35d23cd1b3ddc76e9be388d141f3d87c5f1a0->enter($__internal_e77f0aeabd52968f220a1d22dfe35d23cd1b3ddc76e9be388d141f3d87c5f1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/listeProduits.html.twig"));

        // line 23
        echo "  <div class=\"container\">
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Prix (€)</th>
          <th>Date Limite</th>
          <th>Visibilité</th>
          <th>Modifier Infos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
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
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
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
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
          <td><a href=\"#\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
        </tr>
      </tbody>
    </table> 
  </div>
";
        
        $__internal_e77f0aeabd52968f220a1d22dfe35d23cd1b3ddc76e9be388d141f3d87c5f1a0->leave($__internal_e77f0aeabd52968f220a1d22dfe35d23cd1b3ddc76e9be388d141f3d87c5f1a0_prof);

    }

    public function getTemplateName()
    {
        return "produits/listeProduits.html.twig";
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
        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
  <div class=\"container\">
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Prix (€)</th>
          <th>Date Limite</th>
          <th>Visibilité</th>
          <th>Modifier Infos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
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
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
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
          <td>12</td>
          <td>12/12/16</td>
          <td>Visible</td>
          <td><a href=\"#\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
        </tr>
      </tbody>
    </table> 
  </div>
{% endblock %}




", "produits/listeProduits.html.twig", "/var/www/html/projet_odi/app/Resources/views/produits/listeProduits.html.twig");
    }
}
