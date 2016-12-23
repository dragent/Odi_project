<?php

/* client/menu_client.twig */
class __TwigTemplate_7e0cf4e98db2972e5698a2d72d334f443e4dd34073784bfec28eaf4b7edb54fb extends Twig_Template
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
        $__internal_0b94ec5801a151ea81e2bb9c967dcef0d0c9c037ecbf525a6182190ffd653a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b94ec5801a151ea81e2bb9c967dcef0d0c9c037ecbf525a6182190ffd653a04->enter($__internal_0b94ec5801a151ea81e2bb9c967dcef0d0c9c037ecbf525a6182190ffd653a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/menu_client.twig"));

        $__internal_4aff3e3e4944046d980c5410d3eea405b85e6698a8af7632768113733b93ea82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aff3e3e4944046d980c5410d3eea405b85e6698a8af7632768113733b93ea82->enter($__internal_4aff3e3e4944046d980c5410d3eea405b85e6698a8af7632768113733b93ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/menu_client.twig"));

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
        <li><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_produits");
        echo "\">Liste des produits</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_client");
        echo "\">Creation/Reprise d'un panier</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_paniers_client");
        echo "\">Liste des paniers</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_paniers_magasinier");
        echo "\">(Bouton : gestion paniers magasinier)</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">logout</a></li>
      </ul>
    </div>
  </div>";
        
        $__internal_0b94ec5801a151ea81e2bb9c967dcef0d0c9c037ecbf525a6182190ffd653a04->leave($__internal_0b94ec5801a151ea81e2bb9c967dcef0d0c9c037ecbf525a6182190ffd653a04_prof);

        
        $__internal_4aff3e3e4944046d980c5410d3eea405b85e6698a8af7632768113733b93ea82->leave($__internal_4aff3e3e4944046d980c5410d3eea405b85e6698a8af7632768113733b93ea82_prof);

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
        return array (  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
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
        <li><a  href=\"{{ path('liste_produits') }}\">Liste des produits</a></li>
        <li><a href=\"{{ path('panier_client') }}\">Creation/Reprise d'un panier</a></li>
        <li><a href=\"{{ path('liste_paniers_client') }}\">Liste des paniers</a></li>
        <li><a href=\"{{ path('liste_paniers_magasinier') }}\">(Bouton : gestion paniers magasinier)</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">logout</a></li>
      </ul>
    </div>
  </div>", "client/menu_client.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\client\\menu_client.twig");
    }
}
