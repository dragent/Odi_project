<?php

/* magasinier/menu_magasinier.twig */
class __TwigTemplate_ebee7efc2ff23230f13d86573145d2d30e41c9d20899d1cf696c7e77a5218ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856e39676aa9f4383cfc91fc3215f6eebbecf6ccc6d5daee557d464636767e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856e39676aa9f4383cfc91fc3215f6eebbecf6ccc6d5daee557d464636767e4d->enter($__internal_856e39676aa9f4383cfc91fc3215f6eebbecf6ccc6d5daee557d464636767e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/menu_magasinier.twig"));

        // line 1
        echo " <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/magasinier/produits/list\">ODI</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMagasinierProduit");
        echo "\">Liste des produits</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutProduit");
        echo "\">Ajouter un produit</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listStockProduit");
        echo "\">Gestion des stocks</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_paniers_magasinier");
        echo "\">Gestion des paniers</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAlerte");
        echo "\">Alertes</a></li>
    </div>
  </div>";
        
        $__internal_856e39676aa9f4383cfc91fc3215f6eebbecf6ccc6d5daee557d464636767e4d->leave($__internal_856e39676aa9f4383cfc91fc3215f6eebbecf6ccc6d5daee557d464636767e4d_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/menu_magasinier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/magasinier/produits/list\">ODI</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"{{ path('listMagasinierProduit') }}\">Liste des produits</a></li>
        <li><a href=\"{{ path('ajoutProduit') }}\">Ajouter un produit</a></li>
        <li><a href=\"{{ path('listStockProduit') }}\">Gestion des stocks</a></li>
        <li><a href=\"{{ path('liste_paniers_magasinier') }}\">Gestion des paniers</a></li>
        <li><a href=\"{{ path('listAlerte') }}\">Alertes</a></li>
    </div>
  </div>", "magasinier/menu_magasinier.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/menu_magasinier.twig");
    }
}
