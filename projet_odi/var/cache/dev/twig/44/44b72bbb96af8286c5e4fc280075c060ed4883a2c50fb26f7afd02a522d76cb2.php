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
        $__internal_c193ddf141e8265487b3ceab9dcd66ef84f8270fe7f557247634d42cc4ab90ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c193ddf141e8265487b3ceab9dcd66ef84f8270fe7f557247634d42cc4ab90ac->enter($__internal_c193ddf141e8265487b3ceab9dcd66ef84f8270fe7f557247634d42cc4ab90ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_fea900a9efe98f71ee1950db02b74d85454743165017e19c5f794d0c4167040e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea900a9efe98f71ee1950db02b74d85454743165017e19c5f794d0c4167040e->enter($__internal_fea900a9efe98f71ee1950db02b74d85454743165017e19c5f794d0c4167040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c193ddf141e8265487b3ceab9dcd66ef84f8270fe7f557247634d42cc4ab90ac->leave($__internal_c193ddf141e8265487b3ceab9dcd66ef84f8270fe7f557247634d42cc4ab90ac_prof);

        
        $__internal_fea900a9efe98f71ee1950db02b74d85454743165017e19c5f794d0c4167040e->leave($__internal_fea900a9efe98f71ee1950db02b74d85454743165017e19c5f794d0c4167040e_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d4b9e419409024f7fff7c3d24f7101dc065b22f6989985bee3abf6c1d8ad156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4b9e419409024f7fff7c3d24f7101dc065b22f6989985bee3abf6c1d8ad156->enter($__internal_2d4b9e419409024f7fff7c3d24f7101dc065b22f6989985bee3abf6c1d8ad156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_232df40f01de9158a761abcef877ccb67cb121adc1789b6558a7cc5a75d86a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232df40f01de9158a761abcef877ccb67cb121adc1789b6558a7cc5a75d86a33->enter($__internal_232df40f01de9158a761abcef877ccb67cb121adc1789b6558a7cc5a75d86a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("/menu.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_232df40f01de9158a761abcef877ccb67cb121adc1789b6558a7cc5a75d86a33->leave($__internal_232df40f01de9158a761abcef877ccb67cb121adc1789b6558a7cc5a75d86a33_prof);

        
        $__internal_2d4b9e419409024f7fff7c3d24f7101dc065b22f6989985bee3abf6c1d8ad156->leave($__internal_2d4b9e419409024f7fff7c3d24f7101dc065b22f6989985bee3abf6c1d8ad156_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_4ffb977a1ab6efb34963409e78812ee21a5e6dffd102c33d702f697c09eec450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffb977a1ab6efb34963409e78812ee21a5e6dffd102c33d702f697c09eec450->enter($__internal_4ffb977a1ab6efb34963409e78812ee21a5e6dffd102c33d702f697c09eec450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_071dbe010417209ec0aa12958f4a72dc71118a37d2eff2633b200b891eedc2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071dbe010417209ec0aa12958f4a72dc71118a37d2eff2633b200b891eedc2dd->enter($__internal_071dbe010417209ec0aa12958f4a72dc71118a37d2eff2633b200b891eedc2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_071dbe010417209ec0aa12958f4a72dc71118a37d2eff2633b200b891eedc2dd->leave($__internal_071dbe010417209ec0aa12958f4a72dc71118a37d2eff2633b200b891eedc2dd_prof);

        
        $__internal_4ffb977a1ab6efb34963409e78812ee21a5e6dffd102c33d702f697c09eec450->leave($__internal_4ffb977a1ab6efb34963409e78812ee21a5e6dffd102c33d702f697c09eec450_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_5e3f4e37df67669f5aed2776d2141a980eab2944ecd5abe614176971a44da744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3f4e37df67669f5aed2776d2141a980eab2944ecd5abe614176971a44da744->enter($__internal_5e3f4e37df67669f5aed2776d2141a980eab2944ecd5abe614176971a44da744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_e6e15aae434414218825fb259cdf10d43552a1775afb98cb0b76ef3f6731dfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e15aae434414218825fb259cdf10d43552a1775afb98cb0b76ef3f6731dfa2->enter($__internal_e6e15aae434414218825fb259cdf10d43552a1775afb98cb0b76ef3f6731dfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
        
        $__internal_e6e15aae434414218825fb259cdf10d43552a1775afb98cb0b76ef3f6731dfa2->leave($__internal_e6e15aae434414218825fb259cdf10d43552a1775afb98cb0b76ef3f6731dfa2_prof);

        
        $__internal_5e3f4e37df67669f5aed2776d2141a980eab2944ecd5abe614176971a44da744->leave($__internal_5e3f4e37df67669f5aed2776d2141a980eab2944ecd5abe614176971a44da744_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6ff29e68e7e94f0be75e15302f28291eb53cc6f3685f9085e32e788553f75c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ff29e68e7e94f0be75e15302f28291eb53cc6f3685f9085e32e788553f75c7->enter($__internal_c6ff29e68e7e94f0be75e15302f28291eb53cc6f3685f9085e32e788553f75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_852aab45d6156147ab1501c60f5db2198a9c5b26b446f7ece0db14f43da570c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852aab45d6156147ab1501c60f5db2198a9c5b26b446f7ece0db14f43da570c8->enter($__internal_852aab45d6156147ab1501c60f5db2198a9c5b26b446f7ece0db14f43da570c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_852aab45d6156147ab1501c60f5db2198a9c5b26b446f7ece0db14f43da570c8->leave($__internal_852aab45d6156147ab1501c60f5db2198a9c5b26b446f7ece0db14f43da570c8_prof);

        
        $__internal_c6ff29e68e7e94f0be75e15302f28291eb53cc6f3685f9085e32e788553f75c7->leave($__internal_c6ff29e68e7e94f0be75e15302f28291eb53cc6f3685f9085e32e788553f75c7_prof);

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
    {% include '/menu.twig' %}
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
