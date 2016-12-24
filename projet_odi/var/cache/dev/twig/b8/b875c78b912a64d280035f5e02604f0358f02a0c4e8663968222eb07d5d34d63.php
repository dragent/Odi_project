<?php

/* menubase.twig */
class __TwigTemplate_a168c93a7d36c8281b3c3962f9b0c857f778ca73bd70acf00d16bc3fe228094f extends Twig_Template
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
        $__internal_3277c526a6ecc8b95278b624759cd36db719c90a5158c37aa64fcb6b46e14dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3277c526a6ecc8b95278b624759cd36db719c90a5158c37aa64fcb6b46e14dc1->enter($__internal_3277c526a6ecc8b95278b624759cd36db719c90a5158c37aa64fcb6b46e14dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menubase.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"/\">ODI</a>
  </div>

  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"/produits/list\">Produits</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/identification\">Identification</a></li>
    </ul>
  </div>
</div>
";
        
        $__internal_3277c526a6ecc8b95278b624759cd36db719c90a5158c37aa64fcb6b46e14dc1->leave($__internal_3277c526a6ecc8b95278b624759cd36db719c90a5158c37aa64fcb6b46e14dc1_prof);

    }

    public function getTemplateName()
    {
        return "menubase.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"/\">ODI</a>
  </div>

  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"/produits/list\">Produits</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/identification\">Identification</a></li>
    </ul>
  </div>
</div>
", "menubase.twig", "/var/www/html/projet_odi/app/Resources/views/menubase.twig");
    }
}
