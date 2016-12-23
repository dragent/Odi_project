<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9c7780ab003cc211aaf37a468576dfb94fafce584762342a12ceff544b1bfc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_150182f10dcc677efeea7e7e15f06b9c3e35be06957df2c3df67817fb118e5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150182f10dcc677efeea7e7e15f06b9c3e35be06957df2c3df67817fb118e5d1->enter($__internal_150182f10dcc677efeea7e7e15f06b9c3e35be06957df2c3df67817fb118e5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6760c79e152024c10c57e160c697a35d55340b2cd8b1545c5493a12e22696602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6760c79e152024c10c57e160c697a35d55340b2cd8b1545c5493a12e22696602->enter($__internal_6760c79e152024c10c57e160c697a35d55340b2cd8b1545c5493a12e22696602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150182f10dcc677efeea7e7e15f06b9c3e35be06957df2c3df67817fb118e5d1->leave($__internal_150182f10dcc677efeea7e7e15f06b9c3e35be06957df2c3df67817fb118e5d1_prof);

        
        $__internal_6760c79e152024c10c57e160c697a35d55340b2cd8b1545c5493a12e22696602->leave($__internal_6760c79e152024c10c57e160c697a35d55340b2cd8b1545c5493a12e22696602_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38605a2490861d195513c9604dbc8e4138a8cf21050934f1cc7850aba435d6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38605a2490861d195513c9604dbc8e4138a8cf21050934f1cc7850aba435d6ff->enter($__internal_38605a2490861d195513c9604dbc8e4138a8cf21050934f1cc7850aba435d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a5ad12c5835833172042c42a47ea96fa8105f9bed692a7d7dcbdaf3538e3a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5ad12c5835833172042c42a47ea96fa8105f9bed692a7d7dcbdaf3538e3a48->enter($__internal_2a5ad12c5835833172042c42a47ea96fa8105f9bed692a7d7dcbdaf3538e3a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a5ad12c5835833172042c42a47ea96fa8105f9bed692a7d7dcbdaf3538e3a48->leave($__internal_2a5ad12c5835833172042c42a47ea96fa8105f9bed692a7d7dcbdaf3538e3a48_prof);

        
        $__internal_38605a2490861d195513c9604dbc8e4138a8cf21050934f1cc7850aba435d6ff->leave($__internal_38605a2490861d195513c9604dbc8e4138a8cf21050934f1cc7850aba435d6ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaf6292310cc34444bc6a796456ba07ab580a7c07a74a8becaffe41b325dec9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf6292310cc34444bc6a796456ba07ab580a7c07a74a8becaffe41b325dec9c->enter($__internal_aaf6292310cc34444bc6a796456ba07ab580a7c07a74a8becaffe41b325dec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_caeb23bb660f13b364cbd0783d8ef09b314810e321203a2e609e59a7d7375d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caeb23bb660f13b364cbd0783d8ef09b314810e321203a2e609e59a7d7375d5d->enter($__internal_caeb23bb660f13b364cbd0783d8ef09b314810e321203a2e609e59a7d7375d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_caeb23bb660f13b364cbd0783d8ef09b314810e321203a2e609e59a7d7375d5d->leave($__internal_caeb23bb660f13b364cbd0783d8ef09b314810e321203a2e609e59a7d7375d5d_prof);

        
        $__internal_aaf6292310cc34444bc6a796456ba07ab580a7c07a74a8becaffe41b325dec9c->leave($__internal_aaf6292310cc34444bc6a796456ba07ab580a7c07a74a8becaffe41b325dec9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23df87ba81d28315db2e8e7a5d018cd7c171d843f3249e0c14e4ce917f6e8cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23df87ba81d28315db2e8e7a5d018cd7c171d843f3249e0c14e4ce917f6e8cdd->enter($__internal_23df87ba81d28315db2e8e7a5d018cd7c171d843f3249e0c14e4ce917f6e8cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7c33b46ea8acc5df8d22abed1cc53dc7616cb65a776cf44a7ccf92b9dd1bc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c33b46ea8acc5df8d22abed1cc53dc7616cb65a776cf44a7ccf92b9dd1bc0c->enter($__internal_f7c33b46ea8acc5df8d22abed1cc53dc7616cb65a776cf44a7ccf92b9dd1bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7c33b46ea8acc5df8d22abed1cc53dc7616cb65a776cf44a7ccf92b9dd1bc0c->leave($__internal_f7c33b46ea8acc5df8d22abed1cc53dc7616cb65a776cf44a7ccf92b9dd1bc0c_prof);

        
        $__internal_23df87ba81d28315db2e8e7a5d018cd7c171d843f3249e0c14e4ce917f6e8cdd->leave($__internal_23df87ba81d28315db2e8e7a5d018cd7c171d843f3249e0c14e4ce917f6e8cdd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
