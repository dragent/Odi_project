<?php

/* default/index.html.twig */
class __TwigTemplate_4f9baeafefd2df11bb04a5d75fed1b58162de812a4b395972530ebd990c95c30 extends Twig_Template
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
        $__internal_ef89e4c28488539640bb7b65fcff296e9dcd82c07ca921436d82aeab1bf858f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef89e4c28488539640bb7b65fcff296e9dcd82c07ca921436d82aeab1bf858f6->enter($__internal_ef89e4c28488539640bb7b65fcff296e9dcd82c07ca921436d82aeab1bf858f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef89e4c28488539640bb7b65fcff296e9dcd82c07ca921436d82aeab1bf858f6->leave($__internal_ef89e4c28488539640bb7b65fcff296e9dcd82c07ca921436d82aeab1bf858f6_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ead90fdcb601f075cc803fb4d59b973e6cc236d4340eb552b020adc0dcf2d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead90fdcb601f075cc803fb4d59b973e6cc236d4340eb552b020adc0dcf2d861->enter($__internal_ead90fdcb601f075cc803fb4d59b973e6cc236d4340eb552b020adc0dcf2d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("/menu.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_ead90fdcb601f075cc803fb4d59b973e6cc236d4340eb552b020adc0dcf2d861->leave($__internal_ead90fdcb601f075cc803fb4d59b973e6cc236d4340eb552b020adc0dcf2d861_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_1b3adaf8ac18cd6a9c0e5ea42f101fe8784d3d382a80748312f3ce44216c92a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3adaf8ac18cd6a9c0e5ea42f101fe8784d3d382a80748312f3ce44216c92a6->enter($__internal_1b3adaf8ac18cd6a9c0e5ea42f101fe8784d3d382a80748312f3ce44216c92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_1b3adaf8ac18cd6a9c0e5ea42f101fe8784d3d382a80748312f3ce44216c92a6->leave($__internal_1b3adaf8ac18cd6a9c0e5ea42f101fe8784d3d382a80748312f3ce44216c92a6_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_4c14c688fef66c918ad40f1cee177e3ff3b95bbb14d95c7155852ce3d512581d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c14c688fef66c918ad40f1cee177e3ff3b95bbb14d95c7155852ce3d512581d->enter($__internal_4c14c688fef66c918ad40f1cee177e3ff3b95bbb14d95c7155852ce3d512581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
        
        $__internal_4c14c688fef66c918ad40f1cee177e3ff3b95bbb14d95c7155852ce3d512581d->leave($__internal_4c14c688fef66c918ad40f1cee177e3ff3b95bbb14d95c7155852ce3d512581d_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_92b87d620e0eece173889b1b5e774d0e08f07b55fe972c3b974a63ca8d5ca37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b87d620e0eece173889b1b5e774d0e08f07b55fe972c3b974a63ca8d5ca37c->enter($__internal_92b87d620e0eece173889b1b5e774d0e08f07b55fe972c3b974a63ca8d5ca37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_92b87d620e0eece173889b1b5e774d0e08f07b55fe972c3b974a63ca8d5ca37c->leave($__internal_92b87d620e0eece173889b1b5e774d0e08f07b55fe972c3b974a63ca8d5ca37c_prof);

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
        return array (  85 => 16,  79 => 15,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
