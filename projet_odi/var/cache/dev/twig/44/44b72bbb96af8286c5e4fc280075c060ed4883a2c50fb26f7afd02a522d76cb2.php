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
        $__internal_b2595ce7e6fd72dad9c0ce00d41cd34079ae3474f1b60b3de63d3daa1c454bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2595ce7e6fd72dad9c0ce00d41cd34079ae3474f1b60b3de63d3daa1c454bfd->enter($__internal_b2595ce7e6fd72dad9c0ce00d41cd34079ae3474f1b60b3de63d3daa1c454bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c0c9ca5c452384b8d54f0bdb358325156e30b33adf5712565f06c94f9b6cb6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c9ca5c452384b8d54f0bdb358325156e30b33adf5712565f06c94f9b6cb6e8->enter($__internal_c0c9ca5c452384b8d54f0bdb358325156e30b33adf5712565f06c94f9b6cb6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2595ce7e6fd72dad9c0ce00d41cd34079ae3474f1b60b3de63d3daa1c454bfd->leave($__internal_b2595ce7e6fd72dad9c0ce00d41cd34079ae3474f1b60b3de63d3daa1c454bfd_prof);

        
        $__internal_c0c9ca5c452384b8d54f0bdb358325156e30b33adf5712565f06c94f9b6cb6e8->leave($__internal_c0c9ca5c452384b8d54f0bdb358325156e30b33adf5712565f06c94f9b6cb6e8_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77133edc5c02003c4e1ad75f39418258411d0dd8e79741f076738005b39cf1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77133edc5c02003c4e1ad75f39418258411d0dd8e79741f076738005b39cf1e0->enter($__internal_77133edc5c02003c4e1ad75f39418258411d0dd8e79741f076738005b39cf1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c80626551e0af94c6bf4904407818104f0e3a044fa8fe6785c571e62b74b3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c80626551e0af94c6bf4904407818104f0e3a044fa8fe6785c571e62b74b3c2->enter($__internal_6c80626551e0af94c6bf4904407818104f0e3a044fa8fe6785c571e62b74b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("/menu.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_6c80626551e0af94c6bf4904407818104f0e3a044fa8fe6785c571e62b74b3c2->leave($__internal_6c80626551e0af94c6bf4904407818104f0e3a044fa8fe6785c571e62b74b3c2_prof);

        
        $__internal_77133edc5c02003c4e1ad75f39418258411d0dd8e79741f076738005b39cf1e0->leave($__internal_77133edc5c02003c4e1ad75f39418258411d0dd8e79741f076738005b39cf1e0_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_bd44fa76944684e478cffcca80c16f9ba85b3d5c31a23643ac1e2439573edfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd44fa76944684e478cffcca80c16f9ba85b3d5c31a23643ac1e2439573edfd5->enter($__internal_bd44fa76944684e478cffcca80c16f9ba85b3d5c31a23643ac1e2439573edfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ca3157ed0cb5713b61b36b6ad073761e459b15e255f2de4b5a5d48edc1cb4ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3157ed0cb5713b61b36b6ad073761e459b15e255f2de4b5a5d48edc1cb4ae2->enter($__internal_ca3157ed0cb5713b61b36b6ad073761e459b15e255f2de4b5a5d48edc1cb4ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_ca3157ed0cb5713b61b36b6ad073761e459b15e255f2de4b5a5d48edc1cb4ae2->leave($__internal_ca3157ed0cb5713b61b36b6ad073761e459b15e255f2de4b5a5d48edc1cb4ae2_prof);

        
        $__internal_bd44fa76944684e478cffcca80c16f9ba85b3d5c31a23643ac1e2439573edfd5->leave($__internal_bd44fa76944684e478cffcca80c16f9ba85b3d5c31a23643ac1e2439573edfd5_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_127c6a2073e63c73536d2e7b933bff3eaea55e90a8de033163aa571ddd67fa7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127c6a2073e63c73536d2e7b933bff3eaea55e90a8de033163aa571ddd67fa7a->enter($__internal_127c6a2073e63c73536d2e7b933bff3eaea55e90a8de033163aa571ddd67fa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_d3bef02e626c3a7836011a5f38a56bd4e3132e528453a2310e3f38eb87c01f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bef02e626c3a7836011a5f38a56bd4e3132e528453a2310e3f38eb87c01f8e->enter($__internal_d3bef02e626c3a7836011a5f38a56bd4e3132e528453a2310e3f38eb87c01f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
        
        $__internal_d3bef02e626c3a7836011a5f38a56bd4e3132e528453a2310e3f38eb87c01f8e->leave($__internal_d3bef02e626c3a7836011a5f38a56bd4e3132e528453a2310e3f38eb87c01f8e_prof);

        
        $__internal_127c6a2073e63c73536d2e7b933bff3eaea55e90a8de033163aa571ddd67fa7a->leave($__internal_127c6a2073e63c73536d2e7b933bff3eaea55e90a8de033163aa571ddd67fa7a_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5df7995a8dc7522fddb3c2f316bb5f5777509582f94c97824c9128021df39e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df7995a8dc7522fddb3c2f316bb5f5777509582f94c97824c9128021df39e93->enter($__internal_5df7995a8dc7522fddb3c2f316bb5f5777509582f94c97824c9128021df39e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_caa371073eceffc855363ce6c9f40786be6aeb7f9d52eafaf7439048446bea70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa371073eceffc855363ce6c9f40786be6aeb7f9d52eafaf7439048446bea70->enter($__internal_caa371073eceffc855363ce6c9f40786be6aeb7f9d52eafaf7439048446bea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_caa371073eceffc855363ce6c9f40786be6aeb7f9d52eafaf7439048446bea70->leave($__internal_caa371073eceffc855363ce6c9f40786be6aeb7f9d52eafaf7439048446bea70_prof);

        
        $__internal_5df7995a8dc7522fddb3c2f316bb5f5777509582f94c97824c9128021df39e93->leave($__internal_5df7995a8dc7522fddb3c2f316bb5f5777509582f94c97824c9128021df39e93_prof);

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
