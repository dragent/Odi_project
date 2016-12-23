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
        $__internal_04106746385d52061ff492e9244f1200cad83e31aabe4817c477594f69924a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04106746385d52061ff492e9244f1200cad83e31aabe4817c477594f69924a69->enter($__internal_04106746385d52061ff492e9244f1200cad83e31aabe4817c477594f69924a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f2a9b62edd9ba22a1a585ed6b752cf0f6d20d7a737b8f063b98a03311a5072e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2a9b62edd9ba22a1a585ed6b752cf0f6d20d7a737b8f063b98a03311a5072e->enter($__internal_7f2a9b62edd9ba22a1a585ed6b752cf0f6d20d7a737b8f063b98a03311a5072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04106746385d52061ff492e9244f1200cad83e31aabe4817c477594f69924a69->leave($__internal_04106746385d52061ff492e9244f1200cad83e31aabe4817c477594f69924a69_prof);

        
        $__internal_7f2a9b62edd9ba22a1a585ed6b752cf0f6d20d7a737b8f063b98a03311a5072e->leave($__internal_7f2a9b62edd9ba22a1a585ed6b752cf0f6d20d7a737b8f063b98a03311a5072e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d88297f806c7a9a04a8677cc0bf76e76e53fd54e1b00e3e09d4206a482ec3a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88297f806c7a9a04a8677cc0bf76e76e53fd54e1b00e3e09d4206a482ec3a12->enter($__internal_d88297f806c7a9a04a8677cc0bf76e76e53fd54e1b00e3e09d4206a482ec3a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04898d629abfa19a811ad8aed9d528d2fd73f6128078006a12b0c5b0ff23b232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04898d629abfa19a811ad8aed9d528d2fd73f6128078006a12b0c5b0ff23b232->enter($__internal_04898d629abfa19a811ad8aed9d528d2fd73f6128078006a12b0c5b0ff23b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04898d629abfa19a811ad8aed9d528d2fd73f6128078006a12b0c5b0ff23b232->leave($__internal_04898d629abfa19a811ad8aed9d528d2fd73f6128078006a12b0c5b0ff23b232_prof);

        
        $__internal_d88297f806c7a9a04a8677cc0bf76e76e53fd54e1b00e3e09d4206a482ec3a12->leave($__internal_d88297f806c7a9a04a8677cc0bf76e76e53fd54e1b00e3e09d4206a482ec3a12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45b6f9356f0128969ba2b3981aa3e6d0a3d4d23e72e526b5b61b0dc09eb0fe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b6f9356f0128969ba2b3981aa3e6d0a3d4d23e72e526b5b61b0dc09eb0fe16->enter($__internal_45b6f9356f0128969ba2b3981aa3e6d0a3d4d23e72e526b5b61b0dc09eb0fe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a871d4c91d416171c0080412fae905e10d2604a5317528fcbc219123866d12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a871d4c91d416171c0080412fae905e10d2604a5317528fcbc219123866d12b->enter($__internal_8a871d4c91d416171c0080412fae905e10d2604a5317528fcbc219123866d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a871d4c91d416171c0080412fae905e10d2604a5317528fcbc219123866d12b->leave($__internal_8a871d4c91d416171c0080412fae905e10d2604a5317528fcbc219123866d12b_prof);

        
        $__internal_45b6f9356f0128969ba2b3981aa3e6d0a3d4d23e72e526b5b61b0dc09eb0fe16->leave($__internal_45b6f9356f0128969ba2b3981aa3e6d0a3d4d23e72e526b5b61b0dc09eb0fe16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c3488519751f1e0f926be9e3abed09e5e1fedcfcd6a7c71acafa34080a0b12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3488519751f1e0f926be9e3abed09e5e1fedcfcd6a7c71acafa34080a0b12f->enter($__internal_7c3488519751f1e0f926be9e3abed09e5e1fedcfcd6a7c71acafa34080a0b12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6daf4b79360f79f57fabe5cf6fe2e9dbcaaa61d964a4ea54a6de16f491814460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daf4b79360f79f57fabe5cf6fe2e9dbcaaa61d964a4ea54a6de16f491814460->enter($__internal_6daf4b79360f79f57fabe5cf6fe2e9dbcaaa61d964a4ea54a6de16f491814460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6daf4b79360f79f57fabe5cf6fe2e9dbcaaa61d964a4ea54a6de16f491814460->leave($__internal_6daf4b79360f79f57fabe5cf6fe2e9dbcaaa61d964a4ea54a6de16f491814460_prof);

        
        $__internal_7c3488519751f1e0f926be9e3abed09e5e1fedcfcd6a7c71acafa34080a0b12f->leave($__internal_7c3488519751f1e0f926be9e3abed09e5e1fedcfcd6a7c71acafa34080a0b12f_prof);

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
