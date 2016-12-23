<?php

/* /menu.twig */
class __TwigTemplate_35517b5451c7fa8fb7d108d4a0ce0aed184127a6c0a9afdf59d36e4db70e371d extends Twig_Template
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
        $__internal_075c368bc2531fd6ca285f94b26bb1c23c53da116d5fa4c75449998c6bead9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075c368bc2531fd6ca285f94b26bb1c23c53da116d5fa4c75449998c6bead9cc->enter($__internal_075c368bc2531fd6ca285f94b26bb1c23c53da116d5fa4c75449998c6bead9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/menu.twig"));

        $__internal_9e9af171fb0937055c3a2c271c26eb8a566f9f4c29bfc681b711d4e4ad376f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9af171fb0937055c3a2c271c26eb8a566f9f4c29bfc681b711d4e4ad376f9a->enter($__internal_9e9af171fb0937055c3a2c271c26eb8a566f9f4c29bfc681b711d4e4ad376f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/menu.twig"));

        // line 1
        echo " <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_produits");
        echo "\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
      </ul>
    </div>
  </div>";
        
        $__internal_075c368bc2531fd6ca285f94b26bb1c23c53da116d5fa4c75449998c6bead9cc->leave($__internal_075c368bc2531fd6ca285f94b26bb1c23c53da116d5fa4c75449998c6bead9cc_prof);

        
        $__internal_9e9af171fb0937055c3a2c271c26eb8a566f9f4c29bfc681b711d4e4ad376f9a->leave($__internal_9e9af171fb0937055c3a2c271c26eb8a566f9f4c29bfc681b711d4e4ad376f9a_prof);

    }

    public function getTemplateName()
    {
        return "/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  25 => 1,);
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
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"{{ path('liste_produits') }}\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
      </ul>
    </div>
  </div>", "/menu.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\menu.twig");
    }
}
