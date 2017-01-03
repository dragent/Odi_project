<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88bf75e1d88f71d5f6ff660c2b29b7bf74dd819665f2bb3ceac7069f60b2fcb0 extends Twig_Template
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
        $__internal_674b2dbc58c686553e66e914169c472a2bc82ec6b802e49a82c59f529dc18483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674b2dbc58c686553e66e914169c472a2bc82ec6b802e49a82c59f529dc18483->enter($__internal_674b2dbc58c686553e66e914169c472a2bc82ec6b802e49a82c59f529dc18483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_674b2dbc58c686553e66e914169c472a2bc82ec6b802e49a82c59f529dc18483->leave($__internal_674b2dbc58c686553e66e914169c472a2bc82ec6b802e49a82c59f529dc18483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49cfea32bcdb9b63163a2b6a4ea5fa55934a83044a68d0a88e39e04397574ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cfea32bcdb9b63163a2b6a4ea5fa55934a83044a68d0a88e39e04397574ecb->enter($__internal_49cfea32bcdb9b63163a2b6a4ea5fa55934a83044a68d0a88e39e04397574ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_49cfea32bcdb9b63163a2b6a4ea5fa55934a83044a68d0a88e39e04397574ecb->leave($__internal_49cfea32bcdb9b63163a2b6a4ea5fa55934a83044a68d0a88e39e04397574ecb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6fc7c108dc71f0e225cd7ee64da701de00f5abdeb3c157c607ee7bee61481d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc7c108dc71f0e225cd7ee64da701de00f5abdeb3c157c607ee7bee61481d0->enter($__internal_c6fc7c108dc71f0e225cd7ee64da701de00f5abdeb3c157c607ee7bee61481d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6fc7c108dc71f0e225cd7ee64da701de00f5abdeb3c157c607ee7bee61481d0->leave($__internal_c6fc7c108dc71f0e225cd7ee64da701de00f5abdeb3c157c607ee7bee61481d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f563b86aee624333f21e498fabfa8d50070b24ba3fde49e114adde3e0bda83a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f563b86aee624333f21e498fabfa8d50070b24ba3fde49e114adde3e0bda83a4->enter($__internal_f563b86aee624333f21e498fabfa8d50070b24ba3fde49e114adde3e0bda83a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f563b86aee624333f21e498fabfa8d50070b24ba3fde49e114adde3e0bda83a4->leave($__internal_f563b86aee624333f21e498fabfa8d50070b24ba3fde49e114adde3e0bda83a4_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projet_odi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
