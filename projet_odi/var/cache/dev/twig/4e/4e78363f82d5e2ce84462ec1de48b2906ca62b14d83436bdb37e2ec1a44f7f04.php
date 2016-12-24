<?php

/* usersidentification.html.twig */
class __TwigTemplate_78eed12a7649517277a5c09c754f63458b50a9afd51b8a4c41bea2ff6643bb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usersidentification.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1d47b0105aab1de142fc9597f1fa126c78fd881d23019989a51b02e311fcd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d47b0105aab1de142fc9597f1fa126c78fd881d23019989a51b02e311fcd48->enter($__internal_e1d47b0105aab1de142fc9597f1fa126c78fd881d23019989a51b02e311fcd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usersidentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d47b0105aab1de142fc9597f1fa126c78fd881d23019989a51b02e311fcd48->leave($__internal_e1d47b0105aab1de142fc9597f1fa126c78fd881d23019989a51b02e311fcd48_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_439e5d2d7f4d889d878fbefdb5f798aeddcd926cb13d09c59c18d2c8d98c1708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439e5d2d7f4d889d878fbefdb5f798aeddcd926cb13d09c59c18d2c8d98c1708->enter($__internal_439e5d2d7f4d889d878fbefdb5f798aeddcd926cb13d09c59c18d2c8d98c1708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersidentification.html.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "usersidentification.html.twig", 4)->display($context);
        
        $__internal_439e5d2d7f4d889d878fbefdb5f798aeddcd926cb13d09c59c18d2c8d98c1708->leave($__internal_439e5d2d7f4d889d878fbefdb5f798aeddcd926cb13d09c59c18d2c8d98c1708_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_88246ccdd03f88c8a3c7c8d5f0ee40b33f311684a73b50603d892812ce0bc709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88246ccdd03f88c8a3c7c8d5f0ee40b33f311684a73b50603d892812ce0bc709->enter($__internal_88246ccdd03f88c8a3c7c8d5f0ee40b33f311684a73b50603d892812ce0bc709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersidentification.html.twig"));

        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Identification</h2>
\t</div>
";
        
        $__internal_88246ccdd03f88c8a3c7c8d5f0ee40b33f311684a73b50603d892812ce0bc709->leave($__internal_88246ccdd03f88c8a3c7c8d5f0ee40b33f311684a73b50603d892812ce0bc709_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_9db94decd3e2597215eb68a49622f4bd5e1416f3dffae57cb7f1cdb555774cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db94decd3e2597215eb68a49622f4bd5e1416f3dffae57cb7f1cdb555774cf3->enter($__internal_9db94decd3e2597215eb68a49622f4bd5e1416f3dffae57cb7f1cdb555774cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersidentification.html.twig"));

        // line 14
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_9db94decd3e2597215eb68a49622f4bd5e1416f3dffae57cb7f1cdb555774cf3->leave($__internal_9db94decd3e2597215eb68a49622f4bd5e1416f3dffae57cb7f1cdb555774cf3_prof);

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
        return array (  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Identification</h2>
\t</div>
{% endblock %}

{% block section %}
    {{ form(form) }}
{% endblock %}
", "usersidentification.html.twig", "/var/www/html/projet_odi/app/Resources/views/usersidentification.html.twig");
    }
}
