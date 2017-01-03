<?php

/* magasinier/listeProduits.html.twig */
class __TwigTemplate_adacf68c391cf9ffb773ddbe97e39899ea14c7f866856bedf930ddf217d79ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/listeProduits.html.twig", 1);
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
        $__internal_efd359ac2d311e9705e759d32476716816355b7052aa27a1e53942e9c562e83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd359ac2d311e9705e759d32476716816355b7052aa27a1e53942e9c562e83d->enter($__internal_efd359ac2d311e9705e759d32476716816355b7052aa27a1e53942e9c562e83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/listeProduits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd359ac2d311e9705e759d32476716816355b7052aa27a1e53942e9c562e83d->leave($__internal_efd359ac2d311e9705e759d32476716816355b7052aa27a1e53942e9c562e83d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67e6c14260557c8ae5b53c13dc6cf79f52a71706185752bf5a06fb4f56e5c704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e6c14260557c8ae5b53c13dc6cf79f52a71706185752bf5a06fb4f56e5c704->enter($__internal_67e6c14260557c8ae5b53c13dc6cf79f52a71706185752bf5a06fb4f56e5c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeProduits.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_67e6c14260557c8ae5b53c13dc6cf79f52a71706185752bf5a06fb4f56e5c704->leave($__internal_67e6c14260557c8ae5b53c13dc6cf79f52a71706185752bf5a06fb4f56e5c704_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2ab4bce2dee40ce6c13942e0650173ae09a871b6204cab85aa46d0f9f9a267c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ab4bce2dee40ce6c13942e0650173ae09a871b6204cab85aa46d0f9f9a267c->enter($__internal_b2ab4bce2dee40ce6c13942e0650173ae09a871b6204cab85aa46d0f9f9a267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeProduits.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "magasinier/listeProduits.html.twig", 11)->display($context);
        
        $__internal_b2ab4bce2dee40ce6c13942e0650173ae09a871b6204cab85aa46d0f9f9a267c->leave($__internal_b2ab4bce2dee40ce6c13942e0650173ae09a871b6204cab85aa46d0f9f9a267c_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_b07f36c519f0965a36d27416f0970284736afa3de749a5776e1fcafbe89bac1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07f36c519f0965a36d27416f0970284736afa3de749a5776e1fcafbe89bac1a->enter($__internal_b07f36c519f0965a36d27416f0970284736afa3de749a5776e1fcafbe89bac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeProduits.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "        <h2 class=\"centrer isoler\">Liste des produits en stock</h2>
    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        
        $__internal_b07f36c519f0965a36d27416f0970284736afa3de749a5776e1fcafbe89bac1a->leave($__internal_b07f36c519f0965a36d27416f0970284736afa3de749a5776e1fcafbe89bac1a_prof);

    }

    // line 22
    public function block_section($context, array $blocks = array())
    {
        $__internal_55916c4f771d4c77e3c2228d452fbbae183253041e24df2242d1c01f169cfba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55916c4f771d4c77e3c2228d452fbbae183253041e24df2242d1c01f169cfba3->enter($__internal_55916c4f771d4c77e3c2228d452fbbae183253041e24df2242d1c01f169cfba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/listeProduits.html.twig"));

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
          <th>Modif.</th>
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
        
        $__internal_55916c4f771d4c77e3c2228d452fbbae183253041e24df2242d1c01f169cfba3->leave($__internal_55916c4f771d4c77e3c2228d452fbbae183253041e24df2242d1c01f169cfba3_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/listeProduits.html.twig";
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
          <th>Modif.</th>
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




", "magasinier/listeProduits.html.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/listeProduits.html.twig");
    }
}
