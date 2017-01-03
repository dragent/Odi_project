<?php

/* client/menu_client.twig */
class __TwigTemplate_326231329abf5e66af890e8f5ad84a2f330b6d0e04aaa1545abaf16bf3ded645 extends Twig_Template
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
        $__internal_ca6465d9299ad73a89a8b0e3de2d3ca9c0bd3e0af4285489ed24b31af95f03d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6465d9299ad73a89a8b0e3de2d3ca9c0bd3e0af4285489ed24b31af95f03d2->enter($__internal_ca6465d9299ad73a89a8b0e3de2d3ca9c0bd3e0af4285489ed24b31af95f03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/menu_client.twig"));

        // line 1
        echo " <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">User : {ID / nom}</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listProduit");
        echo "\">Liste des produits</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_client");
        echo "\">Creation/Reprise d'un panier</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_paniers_client");
        echo "\">Liste des paniers</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Déconnexion</a></li>
      </ul>
    </div>
  </div>";
        
        $__internal_ca6465d9299ad73a89a8b0e3de2d3ca9c0bd3e0af4285489ed24b31af95f03d2->leave($__internal_ca6465d9299ad73a89a8b0e3de2d3ca9c0bd3e0af4285489ed24b31af95f03d2_prof);

    }

    public function getTemplateName()
    {
        return "client/menu_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  41 => 15,  37 => 14,  22 => 1,);
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
      <a class=\"navbar-brand\" href=\"#\">User : {ID / nom}</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"{{ path('listProduit') }}\">Liste des produits</a></li>
        <li><a href=\"{{ path('panier_client') }}\">Creation/Reprise d'un panier</a></li>
        <li><a href=\"{{ path('liste_paniers_client') }}\">Liste des paniers</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Déconnexion</a></li>
      </ul>
    </div>
  </div>", "client/menu_client.twig", "/var/www/html/projet_odi/app/Resources/views/client/menu_client.twig");
    }
}
