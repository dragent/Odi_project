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
        $__internal_abb65fa297a4f648332c1fbec0a6e90ea074f07530d0dcfe493a98cc0b225645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb65fa297a4f648332c1fbec0a6e90ea074f07530d0dcfe493a98cc0b225645->enter($__internal_abb65fa297a4f648332c1fbec0a6e90ea074f07530d0dcfe493a98cc0b225645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c464cc6d89d6176aadeeae28175a8aa764086b1c8b6eb5252bbad1d3922f496d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c464cc6d89d6176aadeeae28175a8aa764086b1c8b6eb5252bbad1d3922f496d->enter($__internal_c464cc6d89d6176aadeeae28175a8aa764086b1c8b6eb5252bbad1d3922f496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb65fa297a4f648332c1fbec0a6e90ea074f07530d0dcfe493a98cc0b225645->leave($__internal_abb65fa297a4f648332c1fbec0a6e90ea074f07530d0dcfe493a98cc0b225645_prof);

        
        $__internal_c464cc6d89d6176aadeeae28175a8aa764086b1c8b6eb5252bbad1d3922f496d->leave($__internal_c464cc6d89d6176aadeeae28175a8aa764086b1c8b6eb5252bbad1d3922f496d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37419fac45bb13b321c81ece551adb26c67b75fc8e457daae2b7450da9d6aec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37419fac45bb13b321c81ece551adb26c67b75fc8e457daae2b7450da9d6aec4->enter($__internal_37419fac45bb13b321c81ece551adb26c67b75fc8e457daae2b7450da9d6aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b4570695cc60e2c158dc9100c0ef6ff02d1860501c55e7bb9f5df059259114c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4570695cc60e2c158dc9100c0ef6ff02d1860501c55e7bb9f5df059259114c->enter($__internal_7b4570695cc60e2c158dc9100c0ef6ff02d1860501c55e7bb9f5df059259114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b4570695cc60e2c158dc9100c0ef6ff02d1860501c55e7bb9f5df059259114c->leave($__internal_7b4570695cc60e2c158dc9100c0ef6ff02d1860501c55e7bb9f5df059259114c_prof);

        
        $__internal_37419fac45bb13b321c81ece551adb26c67b75fc8e457daae2b7450da9d6aec4->leave($__internal_37419fac45bb13b321c81ece551adb26c67b75fc8e457daae2b7450da9d6aec4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a07ce9b4aa14abacb0fb69ac89568dd21c52db1139b7ff66af0895a30cc08217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07ce9b4aa14abacb0fb69ac89568dd21c52db1139b7ff66af0895a30cc08217->enter($__internal_a07ce9b4aa14abacb0fb69ac89568dd21c52db1139b7ff66af0895a30cc08217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9141ab218a1dc9d8f5ec794fd13f7b3b648e390d61f106d72ec17fb8834ee251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141ab218a1dc9d8f5ec794fd13f7b3b648e390d61f106d72ec17fb8834ee251->enter($__internal_9141ab218a1dc9d8f5ec794fd13f7b3b648e390d61f106d72ec17fb8834ee251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9141ab218a1dc9d8f5ec794fd13f7b3b648e390d61f106d72ec17fb8834ee251->leave($__internal_9141ab218a1dc9d8f5ec794fd13f7b3b648e390d61f106d72ec17fb8834ee251_prof);

        
        $__internal_a07ce9b4aa14abacb0fb69ac89568dd21c52db1139b7ff66af0895a30cc08217->leave($__internal_a07ce9b4aa14abacb0fb69ac89568dd21c52db1139b7ff66af0895a30cc08217_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbff24063750b32343df0626fcba565b930f674cf643f2fd2acc1c273c9dfc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbff24063750b32343df0626fcba565b930f674cf643f2fd2acc1c273c9dfc72->enter($__internal_cbff24063750b32343df0626fcba565b930f674cf643f2fd2acc1c273c9dfc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99ef506ed35b23213606b4aeefac424f932855846a82e76be0102862f2896049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ef506ed35b23213606b4aeefac424f932855846a82e76be0102862f2896049->enter($__internal_99ef506ed35b23213606b4aeefac424f932855846a82e76be0102862f2896049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99ef506ed35b23213606b4aeefac424f932855846a82e76be0102862f2896049->leave($__internal_99ef506ed35b23213606b4aeefac424f932855846a82e76be0102862f2896049_prof);

        
        $__internal_cbff24063750b32343df0626fcba565b930f674cf643f2fd2acc1c273c9dfc72->leave($__internal_cbff24063750b32343df0626fcba565b930f674cf643f2fd2acc1c273c9dfc72_prof);

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
