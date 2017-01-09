<?php

/* menubase.twig */
class __TwigTemplate_8f953083b93fb37e8100c69cfe0ccd3e55a559ec772e1a6825b52ebdf6739b27 extends Twig_Template
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
        $__internal_a48a001dd10a50aabfc0d06c8e57f9657822e7b2576fb5aa8f82638a0fda70af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a001dd10a50aabfc0d06c8e57f9657822e7b2576fb5aa8f82638a0fda70af->enter($__internal_a48a001dd10a50aabfc0d06c8e57f9657822e7b2576fb5aa8f82638a0fda70af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menubase.twig"));

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
      <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeProduit");
        echo "\">Produits</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/identification\">Identification</a></li>
    </ul>
  </div>
</div>
";
        
        $__internal_a48a001dd10a50aabfc0d06c8e57f9657822e7b2576fb5aa8f82638a0fda70af->leave($__internal_a48a001dd10a50aabfc0d06c8e57f9657822e7b2576fb5aa8f82638a0fda70af_prof);

    }

    public function getTemplateName()
    {
        return "menubase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  22 => 1,);
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
      <li><a href=\"{{ path('listeProduit') }}\">Produits</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"/identification\">Identification</a></li>
    </ul>
  </div>
</div>
", "menubase.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\menubase.twig");
    }
}
