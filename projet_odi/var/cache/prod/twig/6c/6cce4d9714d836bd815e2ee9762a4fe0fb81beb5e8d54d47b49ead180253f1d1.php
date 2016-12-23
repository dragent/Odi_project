<?php

/* menu.twig */
class __TwigTemplate_138f9ddebb236e3536e83b6c1d6e6611ce8284ae09629f5512b7b7f75a187382 extends Twig_Template
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
        $__internal_1e1aa201545c7b446d96db68213bd6c89270516f48d55efdd5f3d721422cad54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1aa201545c7b446d96db68213bd6c89270516f48d55efdd5f3d721422cad54->enter($__internal_1e1aa201545c7b446d96db68213bd6c89270516f48d55efdd5f3d721422cad54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.twig"));

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
        <!-- Bouton execution modal -->
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
              <button type=\"button\" class=\"btn btn-primary\">Submit</button>
            </div>
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_1e1aa201545c7b446d96db68213bd6c89270516f48d55efdd5f3d721422cad54->leave($__internal_1e1aa201545c7b446d96db68213bd6c89270516f48d55efdd5f3d721422cad54_prof);

    }

    public function getTemplateName()
    {
        return "menu.twig";
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
        <!-- Bouton execution modal -->
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
              <button type=\"button\" class=\"btn btn-primary\">Submit</button>
            </div>
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </ul>
    </div>
  </div>
</nav>
", "menu.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\menu.twig");
    }
}
