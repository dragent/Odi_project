<?php

/* menu_magasinier.twig */
class __TwigTemplate_39200fef491146cfd563f337176f60bb7ede85a6bd0a515f15e3dba7b9814268 extends Twig_Template
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
        $__internal_9ae3db3ad6857bb3eea0daf0b00cb54c0f81d5636c8f910a22a137bcba77ff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae3db3ad6857bb3eea0daf0b00cb54c0f81d5636c8f910a22a137bcba77ff26->enter($__internal_9ae3db3ad6857bb3eea0daf0b00cb54c0f81d5636c8f910a22a137bcba77ff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu_magasinier.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listPanier");
        echo "\">Gestion des paniers</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAlerte");
        echo "\">Alertes</a></li>
    </div>
  </div>";
        
        $__internal_9ae3db3ad6857bb3eea0daf0b00cb54c0f81d5636c8f910a22a137bcba77ff26->leave($__internal_9ae3db3ad6857bb3eea0daf0b00cb54c0f81d5636c8f910a22a137bcba77ff26_prof);

    }

    public function getTemplateName()
    {
        return "menu_magasinier.twig";
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
        <li><a href=\"{{ path('listPanier') }}\">Gestion des paniers</a></li>
        <li><a href=\"{{ path('listAlerte') }}\">Alertes</a></li>
    </div>
  </div>", "menu_magasinier.twig", "/var/www/html/projet_odi/app/Resources/views/menu_magasinier.twig");
    }
}
