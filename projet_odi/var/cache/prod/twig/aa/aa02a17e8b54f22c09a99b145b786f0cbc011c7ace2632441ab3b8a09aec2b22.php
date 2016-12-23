<?php

/* client/menu_client.twig */
class __TwigTemplate_5258134c4408c82dbf281ccf02589c0d9b49a029cdfecb384bd4a2bfe3c92f67 extends Twig_Template
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
        $__internal_76e603942536502f04f762dceb548ab7e12d4f127f890764f1261852dc66ce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e603942536502f04f762dceb548ab7e12d4f127f890764f1261852dc66ce83->enter($__internal_76e603942536502f04f762dceb548ab7e12d4f127f890764f1261852dc66ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/menu_client.twig"));

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
        
        $__internal_76e603942536502f04f762dceb548ab7e12d4f127f890764f1261852dc66ce83->leave($__internal_76e603942536502f04f762dceb548ab7e12d4f127f890764f1261852dc66ce83_prof);

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
        return array (  49 => 17,  45 => 16,  41 => 15,  37 => 14,  22 => 1,);
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
