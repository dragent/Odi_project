<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_171140a80205c15add60d1a9ae1104d24b03e0caa2e9092cb60952a47b6c23c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c8ca24046ea3f0211cbbdaa9d77b6580a5003cffe8531064387d86aa1d6f772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8ca24046ea3f0211cbbdaa9d77b6580a5003cffe8531064387d86aa1d6f772->enter($__internal_8c8ca24046ea3f0211cbbdaa9d77b6580a5003cffe8531064387d86aa1d6f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ea1580ced5689b3e43126717a11ff9578bc4299c5f00ce92219036f56361e71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1580ced5689b3e43126717a11ff9578bc4299c5f00ce92219036f56361e71a->enter($__internal_ea1580ced5689b3e43126717a11ff9578bc4299c5f00ce92219036f56361e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8ca24046ea3f0211cbbdaa9d77b6580a5003cffe8531064387d86aa1d6f772->leave($__internal_8c8ca24046ea3f0211cbbdaa9d77b6580a5003cffe8531064387d86aa1d6f772_prof);

        
        $__internal_ea1580ced5689b3e43126717a11ff9578bc4299c5f00ce92219036f56361e71a->leave($__internal_ea1580ced5689b3e43126717a11ff9578bc4299c5f00ce92219036f56361e71a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0962e8cb2cd6b5a2d09fd633a3e6358653d7c50cdda16667ace7cd00c58c5ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0962e8cb2cd6b5a2d09fd633a3e6358653d7c50cdda16667ace7cd00c58c5ba7->enter($__internal_0962e8cb2cd6b5a2d09fd633a3e6358653d7c50cdda16667ace7cd00c58c5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a675f327dcc55c3b5d7d25738f1534a807ef180c45eee4041fa6e17a33df913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a675f327dcc55c3b5d7d25738f1534a807ef180c45eee4041fa6e17a33df913->enter($__internal_5a675f327dcc55c3b5d7d25738f1534a807ef180c45eee4041fa6e17a33df913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5a675f327dcc55c3b5d7d25738f1534a807ef180c45eee4041fa6e17a33df913->leave($__internal_5a675f327dcc55c3b5d7d25738f1534a807ef180c45eee4041fa6e17a33df913_prof);

        
        $__internal_0962e8cb2cd6b5a2d09fd633a3e6358653d7c50cdda16667ace7cd00c58c5ba7->leave($__internal_0962e8cb2cd6b5a2d09fd633a3e6358653d7c50cdda16667ace7cd00c58c5ba7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
