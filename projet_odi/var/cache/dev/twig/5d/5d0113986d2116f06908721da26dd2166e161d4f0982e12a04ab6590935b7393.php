<?php

/* menubase.twig */
class __TwigTemplate_1e461d3caf3891aba1d0525a52d31c7bb201131fd3cc9d6d82008e6d2d7d726a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'users' => array($this, 'block_users'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca743323ae3b100ce7572bc6f28837f99445e2a4516878a2617d998ed55afe96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca743323ae3b100ce7572bc6f28837f99445e2a4516878a2617d998ed55afe96->enter($__internal_ca743323ae3b100ce7572bc6f28837f99445e2a4516878a2617d998ed55afe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menubase.twig"));

        $__internal_01259c0cffd53cdec66359bfb4075000d8a24ed5cf061871ec7f8f0add368811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01259c0cffd53cdec66359bfb4075000d8a24ed5cf061871ec7f8f0add368811->enter($__internal_01259c0cffd53cdec66359bfb4075000d8a24ed5cf061871ec7f8f0add368811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menubase.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
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
        <li><a href=\"/list\">List</a></li>
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
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
          ";
        // line 36
        $this->displayBlock('users', $context, $blocks);
        // line 39
        echo "      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_ca743323ae3b100ce7572bc6f28837f99445e2a4516878a2617d998ed55afe96->leave($__internal_ca743323ae3b100ce7572bc6f28837f99445e2a4516878a2617d998ed55afe96_prof);

        
        $__internal_01259c0cffd53cdec66359bfb4075000d8a24ed5cf061871ec7f8f0add368811->leave($__internal_01259c0cffd53cdec66359bfb4075000d8a24ed5cf061871ec7f8f0add368811_prof);

    }

    // line 36
    public function block_users($context, array $blocks = array())
    {
        $__internal_f63b1c367d4914bcd3e7b1138ff55e390e4c94e267b1c267efefc7ba50c6e6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63b1c367d4914bcd3e7b1138ff55e390e4c94e267b1c267efefc7ba50c6e6a0->enter($__internal_f63b1c367d4914bcd3e7b1138ff55e390e4c94e267b1c267efefc7ba50c6e6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        $__internal_610f07ee0d6757ee7e2f67406a1e9eb47cf06a0ebc48a2fb9190d09d3831bfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610f07ee0d6757ee7e2f67406a1e9eb47cf06a0ebc48a2fb9190d09d3831bfa2->enter($__internal_610f07ee0d6757ee7e2f67406a1e9eb47cf06a0ebc48a2fb9190d09d3831bfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        // line 37
        echo "            ";
        $this->loadTemplate("usersidentification.html.twig", "menubase.twig", 37)->display($context);
        // line 38
        echo "          ";
        
        $__internal_610f07ee0d6757ee7e2f67406a1e9eb47cf06a0ebc48a2fb9190d09d3831bfa2->leave($__internal_610f07ee0d6757ee7e2f67406a1e9eb47cf06a0ebc48a2fb9190d09d3831bfa2_prof);

        
        $__internal_f63b1c367d4914bcd3e7b1138ff55e390e4c94e267b1c267efefc7ba50c6e6a0->leave($__internal_f63b1c367d4914bcd3e7b1138ff55e390e4c94e267b1c267efefc7ba50c6e6a0_prof);

    }

    public function getTemplateName()
    {
        return "menubase.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  88 => 37,  79 => 36,  65 => 39,  63 => 36,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
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
        <li><a href=\"/list\">List</a></li>
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
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
          {% block users %}
            {% include 'usersidentification.html.twig' %}
          {% endblock %}
      </ul>
    </div>
  </div>
</nav>
", "menubase.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\menubase.twig");
    }
}
