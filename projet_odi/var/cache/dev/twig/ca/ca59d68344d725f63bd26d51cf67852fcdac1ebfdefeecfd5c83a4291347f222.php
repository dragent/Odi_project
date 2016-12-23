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
        $__internal_bb4b662d4444e3fe5d79dee0e96f9f07be714708fae607b6f3e54396c05675d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4b662d4444e3fe5d79dee0e96f9f07be714708fae607b6f3e54396c05675d3->enter($__internal_bb4b662d4444e3fe5d79dee0e96f9f07be714708fae607b6f3e54396c05675d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c000fd422ba68b82d5a29259ca208d537a055f6f4a739cf7e1931ed4da050a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c000fd422ba68b82d5a29259ca208d537a055f6f4a739cf7e1931ed4da050a54->enter($__internal_c000fd422ba68b82d5a29259ca208d537a055f6f4a739cf7e1931ed4da050a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4b662d4444e3fe5d79dee0e96f9f07be714708fae607b6f3e54396c05675d3->leave($__internal_bb4b662d4444e3fe5d79dee0e96f9f07be714708fae607b6f3e54396c05675d3_prof);

        
        $__internal_c000fd422ba68b82d5a29259ca208d537a055f6f4a739cf7e1931ed4da050a54->leave($__internal_c000fd422ba68b82d5a29259ca208d537a055f6f4a739cf7e1931ed4da050a54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6994cae0ed336260ebd1314b2eeebaf6ab726bb4ccff94dbbf75b02a11327212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6994cae0ed336260ebd1314b2eeebaf6ab726bb4ccff94dbbf75b02a11327212->enter($__internal_6994cae0ed336260ebd1314b2eeebaf6ab726bb4ccff94dbbf75b02a11327212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77c163ee86e4354d7cacb3d87ca164ccf8ea8286d7b8f2d54a58d142dfcbb84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c163ee86e4354d7cacb3d87ca164ccf8ea8286d7b8f2d54a58d142dfcbb84b->enter($__internal_77c163ee86e4354d7cacb3d87ca164ccf8ea8286d7b8f2d54a58d142dfcbb84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_77c163ee86e4354d7cacb3d87ca164ccf8ea8286d7b8f2d54a58d142dfcbb84b->leave($__internal_77c163ee86e4354d7cacb3d87ca164ccf8ea8286d7b8f2d54a58d142dfcbb84b_prof);

        
        $__internal_6994cae0ed336260ebd1314b2eeebaf6ab726bb4ccff94dbbf75b02a11327212->leave($__internal_6994cae0ed336260ebd1314b2eeebaf6ab726bb4ccff94dbbf75b02a11327212_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6947067d5a4f5b392f57ab835aec1832621ca94c440d0753da2e5b05f05241be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6947067d5a4f5b392f57ab835aec1832621ca94c440d0753da2e5b05f05241be->enter($__internal_6947067d5a4f5b392f57ab835aec1832621ca94c440d0753da2e5b05f05241be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b72ae24342e1d9e245b9d3c408c66a775f54fa54668ce4e0e4ca215c9eeff8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72ae24342e1d9e245b9d3c408c66a775f54fa54668ce4e0e4ca215c9eeff8c5->enter($__internal_b72ae24342e1d9e245b9d3c408c66a775f54fa54668ce4e0e4ca215c9eeff8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b72ae24342e1d9e245b9d3c408c66a775f54fa54668ce4e0e4ca215c9eeff8c5->leave($__internal_b72ae24342e1d9e245b9d3c408c66a775f54fa54668ce4e0e4ca215c9eeff8c5_prof);

        
        $__internal_6947067d5a4f5b392f57ab835aec1832621ca94c440d0753da2e5b05f05241be->leave($__internal_6947067d5a4f5b392f57ab835aec1832621ca94c440d0753da2e5b05f05241be_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84e595e1cf130485914c9411aeccf082176fe4d8837e199d3a648de30715d2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e595e1cf130485914c9411aeccf082176fe4d8837e199d3a648de30715d2a9->enter($__internal_84e595e1cf130485914c9411aeccf082176fe4d8837e199d3a648de30715d2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a929feb38fb4e8c571bea86bad1d1da811d2c0682dc5707d143d3e6f456c9b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a929feb38fb4e8c571bea86bad1d1da811d2c0682dc5707d143d3e6f456c9b49->enter($__internal_a929feb38fb4e8c571bea86bad1d1da811d2c0682dc5707d143d3e6f456c9b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a929feb38fb4e8c571bea86bad1d1da811d2c0682dc5707d143d3e6f456c9b49->leave($__internal_a929feb38fb4e8c571bea86bad1d1da811d2c0682dc5707d143d3e6f456c9b49_prof);

        
        $__internal_84e595e1cf130485914c9411aeccf082176fe4d8837e199d3a648de30715d2a9->leave($__internal_84e595e1cf130485914c9411aeccf082176fe4d8837e199d3a648de30715d2a9_prof);

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
