<?php

/* usersidentification.html.twig */
class __TwigTemplate_2af01b6ec19467b946407beeeed33fae019454f2b252482be9d65548cfc7894e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usersidentification.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9f6f8afc01114a984d225ccde1c5db60f52e4bf827201ff6a1385b69a582809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f6f8afc01114a984d225ccde1c5db60f52e4bf827201ff6a1385b69a582809->enter($__internal_c9f6f8afc01114a984d225ccde1c5db60f52e4bf827201ff6a1385b69a582809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usersidentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f6f8afc01114a984d225ccde1c5db60f52e4bf827201ff6a1385b69a582809->leave($__internal_c9f6f8afc01114a984d225ccde1c5db60f52e4bf827201ff6a1385b69a582809_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9de2b3625d3b3497af194c1193d5f75afb71353672adc25c71c04ae0635e96c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de2b3625d3b3497af194c1193d5f75afb71353672adc25c71c04ae0635e96c2->enter($__internal_9de2b3625d3b3497af194c1193d5f75afb71353672adc25c71c04ae0635e96c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "usersidentification.html.twig", 4)->display($context);
        
        $__internal_9de2b3625d3b3497af194c1193d5f75afb71353672adc25c71c04ae0635e96c2->leave($__internal_9de2b3625d3b3497af194c1193d5f75afb71353672adc25c71c04ae0635e96c2_prof);

    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        $__internal_90d00bf7e6254d2abcd4c502239c7ef2e9be9cb7872b2717cc8fbfea90262258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d00bf7e6254d2abcd4c502239c7ef2e9be9cb7872b2717cc8fbfea90262258->enter($__internal_90d00bf7e6254d2abcd4c502239c7ef2e9be9cb7872b2717cc8fbfea90262258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_90d00bf7e6254d2abcd4c502239c7ef2e9be9cb7872b2717cc8fbfea90262258->leave($__internal_90d00bf7e6254d2abcd4c502239c7ef2e9be9cb7872b2717cc8fbfea90262258_prof);

    }

    public function getTemplateName()
    {
        return "usersidentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block section %}
    {{ form(form) }}
{% endblock %}
", "usersidentification.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\usersidentification.html.twig");
    }
}
