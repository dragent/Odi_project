<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_6542db5d3f04232677dc428a881fdd81e7043d35337946010aba9f105b213d04 extends Twig_Template
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
        $__internal_048e9ea5a01734a7c5a766cf01102858c3dc60a26ce1bf2b84d390eddb23f7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048e9ea5a01734a7c5a766cf01102858c3dc60a26ce1bf2b84d390eddb23f7d7->enter($__internal_048e9ea5a01734a7c5a766cf01102858c3dc60a26ce1bf2b84d390eddb23f7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3c5716b49da3b2094952e7ac3febf959491c66c64adf4d0ee2b7cd254de06990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5716b49da3b2094952e7ac3febf959491c66c64adf4d0ee2b7cd254de06990->enter($__internal_3c5716b49da3b2094952e7ac3febf959491c66c64adf4d0ee2b7cd254de06990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_048e9ea5a01734a7c5a766cf01102858c3dc60a26ce1bf2b84d390eddb23f7d7->leave($__internal_048e9ea5a01734a7c5a766cf01102858c3dc60a26ce1bf2b84d390eddb23f7d7_prof);

        
        $__internal_3c5716b49da3b2094952e7ac3febf959491c66c64adf4d0ee2b7cd254de06990->leave($__internal_3c5716b49da3b2094952e7ac3febf959491c66c64adf4d0ee2b7cd254de06990_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
