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
        $__internal_eac8957a50a57fa927232b27bb1997a1bd21d650a0c14a802c381cd0b3d4ef42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac8957a50a57fa927232b27bb1997a1bd21d650a0c14a802c381cd0b3d4ef42->enter($__internal_eac8957a50a57fa927232b27bb1997a1bd21d650a0c14a802c381cd0b3d4ef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9978de51ea379f1830830cfa4004289e8e7ff9984368c52322d8e8cfead482be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9978de51ea379f1830830cfa4004289e8e7ff9984368c52322d8e8cfead482be->enter($__internal_9978de51ea379f1830830cfa4004289e8e7ff9984368c52322d8e8cfead482be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac8957a50a57fa927232b27bb1997a1bd21d650a0c14a802c381cd0b3d4ef42->leave($__internal_eac8957a50a57fa927232b27bb1997a1bd21d650a0c14a802c381cd0b3d4ef42_prof);

        
        $__internal_9978de51ea379f1830830cfa4004289e8e7ff9984368c52322d8e8cfead482be->leave($__internal_9978de51ea379f1830830cfa4004289e8e7ff9984368c52322d8e8cfead482be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0a63df7de7a63c85a8df80ee4c43990b6d60df730a8c5c6535cf7d513bc59b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a63df7de7a63c85a8df80ee4c43990b6d60df730a8c5c6535cf7d513bc59b5->enter($__internal_a0a63df7de7a63c85a8df80ee4c43990b6d60df730a8c5c6535cf7d513bc59b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec14dafbca61640cef4a0f2cc13adb049a71016fc8e8c93bd8f72da3fcb479b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec14dafbca61640cef4a0f2cc13adb049a71016fc8e8c93bd8f72da3fcb479b2->enter($__internal_ec14dafbca61640cef4a0f2cc13adb049a71016fc8e8c93bd8f72da3fcb479b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ec14dafbca61640cef4a0f2cc13adb049a71016fc8e8c93bd8f72da3fcb479b2->leave($__internal_ec14dafbca61640cef4a0f2cc13adb049a71016fc8e8c93bd8f72da3fcb479b2_prof);

        
        $__internal_a0a63df7de7a63c85a8df80ee4c43990b6d60df730a8c5c6535cf7d513bc59b5->leave($__internal_a0a63df7de7a63c85a8df80ee4c43990b6d60df730a8c5c6535cf7d513bc59b5_prof);

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
