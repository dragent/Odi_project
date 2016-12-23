<?php

/* default/index.html.twig */
class __TwigTemplate_9399678f071d070638736fecb0d27e1f18cd733fa82f928bedc939bec50827a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7528dd11e1eb0d53fc55b61bbf36e64707e69e7286cc1823032ae1e484dc899b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7528dd11e1eb0d53fc55b61bbf36e64707e69e7286cc1823032ae1e484dc899b->enter($__internal_7528dd11e1eb0d53fc55b61bbf36e64707e69e7286cc1823032ae1e484dc899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_80d2ceb4d73737f456c5b27124143bcdc83c9bfc29dcab24084b81b547c6d406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d2ceb4d73737f456c5b27124143bcdc83c9bfc29dcab24084b81b547c6d406->enter($__internal_80d2ceb4d73737f456c5b27124143bcdc83c9bfc29dcab24084b81b547c6d406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7528dd11e1eb0d53fc55b61bbf36e64707e69e7286cc1823032ae1e484dc899b->leave($__internal_7528dd11e1eb0d53fc55b61bbf36e64707e69e7286cc1823032ae1e484dc899b_prof);

        
        $__internal_80d2ceb4d73737f456c5b27124143bcdc83c9bfc29dcab24084b81b547c6d406->leave($__internal_80d2ceb4d73737f456c5b27124143bcdc83c9bfc29dcab24084b81b547c6d406_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f3d53e8f8415cda43bdacd3fa312ed06f82df8da00bdaba125eaa9875ed0a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3d53e8f8415cda43bdacd3fa312ed06f82df8da00bdaba125eaa9875ed0a3c->enter($__internal_7f3d53e8f8415cda43bdacd3fa312ed06f82df8da00bdaba125eaa9875ed0a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ff57eec60f339600bba562734e87b33289f14d5144eedc70acf6ba600da3922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff57eec60f339600bba562734e87b33289f14d5144eedc70acf6ba600da3922->enter($__internal_9ff57eec60f339600bba562734e87b33289f14d5144eedc70acf6ba600da3922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_9ff57eec60f339600bba562734e87b33289f14d5144eedc70acf6ba600da3922->leave($__internal_9ff57eec60f339600bba562734e87b33289f14d5144eedc70acf6ba600da3922_prof);

        
        $__internal_7f3d53e8f8415cda43bdacd3fa312ed06f82df8da00bdaba125eaa9875ed0a3c->leave($__internal_7f3d53e8f8415cda43bdacd3fa312ed06f82df8da00bdaba125eaa9875ed0a3c_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_14e71670bbee46bfbe96a9e393755b5045a74027ef1bf0f5fa77e0839b43024e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e71670bbee46bfbe96a9e393755b5045a74027ef1bf0f5fa77e0839b43024e->enter($__internal_14e71670bbee46bfbe96a9e393755b5045a74027ef1bf0f5fa77e0839b43024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_50794bdd75913db5eafdf033c321703979941cc71f23cac0c0dddaaeb4977f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50794bdd75913db5eafdf033c321703979941cc71f23cac0c0dddaaeb4977f0e->enter($__internal_50794bdd75913db5eafdf033c321703979941cc71f23cac0c0dddaaeb4977f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_50794bdd75913db5eafdf033c321703979941cc71f23cac0c0dddaaeb4977f0e->leave($__internal_50794bdd75913db5eafdf033c321703979941cc71f23cac0c0dddaaeb4977f0e_prof);

        
        $__internal_14e71670bbee46bfbe96a9e393755b5045a74027ef1bf0f5fa77e0839b43024e->leave($__internal_14e71670bbee46bfbe96a9e393755b5045a74027ef1bf0f5fa77e0839b43024e_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_22b7c958780c7263a24e15667fdafa759916af5d1c8fe5733caf1a4c33d82116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b7c958780c7263a24e15667fdafa759916af5d1c8fe5733caf1a4c33d82116->enter($__internal_22b7c958780c7263a24e15667fdafa759916af5d1c8fe5733caf1a4c33d82116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_1395456bc260ea8c1acbb72673ae15d746cbda071e6d5edac06439883c7110dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1395456bc260ea8c1acbb72673ae15d746cbda071e6d5edac06439883c7110dd->enter($__internal_1395456bc260ea8c1acbb72673ae15d746cbda071e6d5edac06439883c7110dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
        
        $__internal_1395456bc260ea8c1acbb72673ae15d746cbda071e6d5edac06439883c7110dd->leave($__internal_1395456bc260ea8c1acbb72673ae15d746cbda071e6d5edac06439883c7110dd_prof);

        
        $__internal_22b7c958780c7263a24e15667fdafa759916af5d1c8fe5733caf1a4c33d82116->leave($__internal_22b7c958780c7263a24e15667fdafa759916af5d1c8fe5733caf1a4c33d82116_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bbd3b7510d0c45783777e18ed8afcf43ede514d48203d4bb57ccdef373701743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd3b7510d0c45783777e18ed8afcf43ede514d48203d4bb57ccdef373701743->enter($__internal_bbd3b7510d0c45783777e18ed8afcf43ede514d48203d4bb57ccdef373701743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b3d7ae1e45d7ff50060bfc9465bad71b6a8bd9c7ed186de7dea9fadd51c93383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d7ae1e45d7ff50060bfc9465bad71b6a8bd9c7ed186de7dea9fadd51c93383->enter($__internal_b3d7ae1e45d7ff50060bfc9465bad71b6a8bd9c7ed186de7dea9fadd51c93383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_b3d7ae1e45d7ff50060bfc9465bad71b6a8bd9c7ed186de7dea9fadd51c93383->leave($__internal_b3d7ae1e45d7ff50060bfc9465bad71b6a8bd9c7ed186de7dea9fadd51c93383_prof);

        
        $__internal_bbd3b7510d0c45783777e18ed8afcf43ede514d48203d4bb57ccdef373701743->leave($__internal_bbd3b7510d0c45783777e18ed8afcf43ede514d48203d4bb57ccdef373701743_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 16,  103 => 15,  92 => 12,  83 => 11,  72 => 8,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block menu %}
    {% include 'menubase.twig' %}
{% endblock %}

{% block header %}
    HEADER (app/Resources/views/default/index.html.twig)
{% endblock %}

{% block section %}
    SECTION (app/Resources/views/default/index.html.twig)
{% endblock %}

{% block footer %}
    FOOTER (app/Resources/views/default/index.html.twig)
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\default\\index.html.twig");
    }
}
