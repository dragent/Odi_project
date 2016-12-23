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
        $__internal_6ba4a15581091a01c9e8b96c2cc61bec7b7aa7b0990c82157b03d960ac6594c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba4a15581091a01c9e8b96c2cc61bec7b7aa7b0990c82157b03d960ac6594c1->enter($__internal_6ba4a15581091a01c9e8b96c2cc61bec7b7aa7b0990c82157b03d960ac6594c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_007a812556cf4907f6d794a7144547d52bdd1132870c1ce8d90d10d12147f8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007a812556cf4907f6d794a7144547d52bdd1132870c1ce8d90d10d12147f8d5->enter($__internal_007a812556cf4907f6d794a7144547d52bdd1132870c1ce8d90d10d12147f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ba4a15581091a01c9e8b96c2cc61bec7b7aa7b0990c82157b03d960ac6594c1->leave($__internal_6ba4a15581091a01c9e8b96c2cc61bec7b7aa7b0990c82157b03d960ac6594c1_prof);

        
        $__internal_007a812556cf4907f6d794a7144547d52bdd1132870c1ce8d90d10d12147f8d5->leave($__internal_007a812556cf4907f6d794a7144547d52bdd1132870c1ce8d90d10d12147f8d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c390e218b7f6fb2b54edbe48f1abad1f050164d7d3dec7044150f3762aaa1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c390e218b7f6fb2b54edbe48f1abad1f050164d7d3dec7044150f3762aaa1f2->enter($__internal_4c390e218b7f6fb2b54edbe48f1abad1f050164d7d3dec7044150f3762aaa1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15c6660e7664f549bf617094afe6fd90baf946ac3bef2ee8d37b32fd4a26cfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c6660e7664f549bf617094afe6fd90baf946ac3bef2ee8d37b32fd4a26cfef->enter($__internal_15c6660e7664f549bf617094afe6fd90baf946ac3bef2ee8d37b32fd4a26cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_15c6660e7664f549bf617094afe6fd90baf946ac3bef2ee8d37b32fd4a26cfef->leave($__internal_15c6660e7664f549bf617094afe6fd90baf946ac3bef2ee8d37b32fd4a26cfef_prof);

        
        $__internal_4c390e218b7f6fb2b54edbe48f1abad1f050164d7d3dec7044150f3762aaa1f2->leave($__internal_4c390e218b7f6fb2b54edbe48f1abad1f050164d7d3dec7044150f3762aaa1f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ed5b4c30c03618f62002af637d9173406490b0dd30a3e0cf699fd144e9b49c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed5b4c30c03618f62002af637d9173406490b0dd30a3e0cf699fd144e9b49c0->enter($__internal_1ed5b4c30c03618f62002af637d9173406490b0dd30a3e0cf699fd144e9b49c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a107d213b9101810a0dfb898fac6c130f759d6b5dc920c3632827168d9ce3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a107d213b9101810a0dfb898fac6c130f759d6b5dc920c3632827168d9ce3f5->enter($__internal_1a107d213b9101810a0dfb898fac6c130f759d6b5dc920c3632827168d9ce3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a107d213b9101810a0dfb898fac6c130f759d6b5dc920c3632827168d9ce3f5->leave($__internal_1a107d213b9101810a0dfb898fac6c130f759d6b5dc920c3632827168d9ce3f5_prof);

        
        $__internal_1ed5b4c30c03618f62002af637d9173406490b0dd30a3e0cf699fd144e9b49c0->leave($__internal_1ed5b4c30c03618f62002af637d9173406490b0dd30a3e0cf699fd144e9b49c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f27e681a3aef605991cbb960039c4921ad797a45bc01245600ab709bfad4f500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27e681a3aef605991cbb960039c4921ad797a45bc01245600ab709bfad4f500->enter($__internal_f27e681a3aef605991cbb960039c4921ad797a45bc01245600ab709bfad4f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7e787468dfc448661cfdc1b5d5e893fb10b857710cb06c0b9d2cbca82604678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e787468dfc448661cfdc1b5d5e893fb10b857710cb06c0b9d2cbca82604678->enter($__internal_b7e787468dfc448661cfdc1b5d5e893fb10b857710cb06c0b9d2cbca82604678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b7e787468dfc448661cfdc1b5d5e893fb10b857710cb06c0b9d2cbca82604678->leave($__internal_b7e787468dfc448661cfdc1b5d5e893fb10b857710cb06c0b9d2cbca82604678_prof);

        
        $__internal_f27e681a3aef605991cbb960039c4921ad797a45bc01245600ab709bfad4f500->leave($__internal_f27e681a3aef605991cbb960039c4921ad797a45bc01245600ab709bfad4f500_prof);

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
