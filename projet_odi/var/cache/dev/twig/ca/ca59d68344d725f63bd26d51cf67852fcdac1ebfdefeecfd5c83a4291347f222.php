<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff657e3bd3d688fc32396b4cdec67ceeb45e88cf12fa52a4962a966e64ac2920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_69a4bbd0193551bb7296ffb78b2b2aad17acb00d7a9185443a089b98f180fa41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a4bbd0193551bb7296ffb78b2b2aad17acb00d7a9185443a089b98f180fa41->enter($__internal_69a4bbd0193551bb7296ffb78b2b2aad17acb00d7a9185443a089b98f180fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_20a35e20765150ad241206831056c2746d21b3d577aa700f45f487f37f50e6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a35e20765150ad241206831056c2746d21b3d577aa700f45f487f37f50e6f8->enter($__internal_20a35e20765150ad241206831056c2746d21b3d577aa700f45f487f37f50e6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69a4bbd0193551bb7296ffb78b2b2aad17acb00d7a9185443a089b98f180fa41->leave($__internal_69a4bbd0193551bb7296ffb78b2b2aad17acb00d7a9185443a089b98f180fa41_prof);

        
        $__internal_20a35e20765150ad241206831056c2746d21b3d577aa700f45f487f37f50e6f8->leave($__internal_20a35e20765150ad241206831056c2746d21b3d577aa700f45f487f37f50e6f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c54d36d12ed189f7e8c18c249b65d6e690c76c7355ed31f08c0906d5b33f433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c54d36d12ed189f7e8c18c249b65d6e690c76c7355ed31f08c0906d5b33f433->enter($__internal_8c54d36d12ed189f7e8c18c249b65d6e690c76c7355ed31f08c0906d5b33f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b359caa06b430fdb662002eea1bb66feb18339ca2385fe7c8781c44beb3b0c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b359caa06b430fdb662002eea1bb66feb18339ca2385fe7c8781c44beb3b0c03->enter($__internal_b359caa06b430fdb662002eea1bb66feb18339ca2385fe7c8781c44beb3b0c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b359caa06b430fdb662002eea1bb66feb18339ca2385fe7c8781c44beb3b0c03->leave($__internal_b359caa06b430fdb662002eea1bb66feb18339ca2385fe7c8781c44beb3b0c03_prof);

        
        $__internal_8c54d36d12ed189f7e8c18c249b65d6e690c76c7355ed31f08c0906d5b33f433->leave($__internal_8c54d36d12ed189f7e8c18c249b65d6e690c76c7355ed31f08c0906d5b33f433_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b409ffc1dfcbed5cfcbe12c6312b19079e3a4f3788394797c7064351d51853a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b409ffc1dfcbed5cfcbe12c6312b19079e3a4f3788394797c7064351d51853a->enter($__internal_3b409ffc1dfcbed5cfcbe12c6312b19079e3a4f3788394797c7064351d51853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c6eaf3bdbde9eb972a94ebce547604e4e5fbfdbd1b5ed654403ef64cd40b3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6eaf3bdbde9eb972a94ebce547604e4e5fbfdbd1b5ed654403ef64cd40b3a3->enter($__internal_9c6eaf3bdbde9eb972a94ebce547604e4e5fbfdbd1b5ed654403ef64cd40b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9c6eaf3bdbde9eb972a94ebce547604e4e5fbfdbd1b5ed654403ef64cd40b3a3->leave($__internal_9c6eaf3bdbde9eb972a94ebce547604e4e5fbfdbd1b5ed654403ef64cd40b3a3_prof);

        
        $__internal_3b409ffc1dfcbed5cfcbe12c6312b19079e3a4f3788394797c7064351d51853a->leave($__internal_3b409ffc1dfcbed5cfcbe12c6312b19079e3a4f3788394797c7064351d51853a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b95421d5f981bee3667460421722655106b99f77d81f1373c7b82a8591914c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95421d5f981bee3667460421722655106b99f77d81f1373c7b82a8591914c24->enter($__internal_b95421d5f981bee3667460421722655106b99f77d81f1373c7b82a8591914c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6344ac90e4b1bea88ddcbd7b487f175bf33f0ff79571d8c00248b243f1b63879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6344ac90e4b1bea88ddcbd7b487f175bf33f0ff79571d8c00248b243f1b63879->enter($__internal_6344ac90e4b1bea88ddcbd7b487f175bf33f0ff79571d8c00248b243f1b63879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6344ac90e4b1bea88ddcbd7b487f175bf33f0ff79571d8c00248b243f1b63879->leave($__internal_6344ac90e4b1bea88ddcbd7b487f175bf33f0ff79571d8c00248b243f1b63879_prof);

        
        $__internal_b95421d5f981bee3667460421722655106b99f77d81f1373c7b82a8591914c24->leave($__internal_b95421d5f981bee3667460421722655106b99f77d81f1373c7b82a8591914c24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
