<?php

/* usersidentification.html.twig */
class __TwigTemplate_d452f48a24fbe9797b61b4949c3b9a9b74ac8b2b9e4c402644b4688a8b86f952 extends Twig_Template
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
        $__internal_76554b15b25d9bb61cb27476ec642aea34bdf230a7796eb69a5e7d1767aa1f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76554b15b25d9bb61cb27476ec642aea34bdf230a7796eb69a5e7d1767aa1f93->enter($__internal_76554b15b25d9bb61cb27476ec642aea34bdf230a7796eb69a5e7d1767aa1f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usersidentification.html.twig"));

        $__internal_42192eae11b735deb1cb3dd990774b040c80765290833329682a095797d78a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42192eae11b735deb1cb3dd990774b040c80765290833329682a095797d78a32->enter($__internal_42192eae11b735deb1cb3dd990774b040c80765290833329682a095797d78a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usersidentification.html.twig"));

        // line 1
        echo "<!-- Bouton execution modal -->
<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
  Sign in
</button>
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h2 class=\"modal-title\" id=\"myModalLabel\">Sign in</h2>
      </div>
      <div class=\"modal-body\">
          <form action='Identification.php' method='post' >
        <div class=\"row\">
          <div class=\"form-group\">
            <label for=\"inputLogin\" class=\"col-lg-2 control-label\">Login</label>
            <div class=\"col-lg-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputLogin\" placeholder=\"Login\">
            </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"form-group\">
            <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
            <div class=\"col-lg-10\">
              <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
            </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
    <div class=\"modal-footer\">
      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
";
        
        $__internal_76554b15b25d9bb61cb27476ec642aea34bdf230a7796eb69a5e7d1767aa1f93->leave($__internal_76554b15b25d9bb61cb27476ec642aea34bdf230a7796eb69a5e7d1767aa1f93_prof);

        
        $__internal_42192eae11b735deb1cb3dd990774b040c80765290833329682a095797d78a32->leave($__internal_42192eae11b735deb1cb3dd990774b040c80765290833329682a095797d78a32_prof);

    }

    public function getTemplateName()
    {
        return "usersidentification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Bouton execution modal -->
<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
  Sign in
</button>
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h2 class=\"modal-title\" id=\"myModalLabel\">Sign in</h2>
      </div>
      <div class=\"modal-body\">
          <form action='Identification.php' method='post' >
        <div class=\"row\">
          <div class=\"form-group\">
            <label for=\"inputLogin\" class=\"col-lg-2 control-label\">Login</label>
            <div class=\"col-lg-10\">
              <input type=\"text\" class=\"form-control\" id=\"inputLogin\" placeholder=\"Login\">
            </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"form-group\">
            <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
            <div class=\"col-lg-10\">
              <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
            </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
    <div class=\"modal-footer\">
      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
", "usersidentification.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\usersidentification.html.twig");
    }
}
