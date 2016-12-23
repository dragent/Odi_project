<?php

/* personne/new.html.twig */
class __TwigTemplate_2455d6099b0f493c7906ee799165ac1ce6d75f53e4e9dbe0a3524d398353afcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personne/new.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adf98ec8d5ced9e98909e9b95cf56f15516e2780a415403c2b5df24e26775c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf98ec8d5ced9e98909e9b95cf56f15516e2780a415403c2b5df24e26775c45->enter($__internal_adf98ec8d5ced9e98909e9b95cf56f15516e2780a415403c2b5df24e26775c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personne/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf98ec8d5ced9e98909e9b95cf56f15516e2780a415403c2b5df24e26775c45->leave($__internal_adf98ec8d5ced9e98909e9b95cf56f15516e2780a415403c2b5df24e26775c45_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_f1eb8d4ebce266cee7fe1675d0b343f617a01a957dde49abfbcb40797cafa5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eb8d4ebce266cee7fe1675d0b343f617a01a957dde49abfbcb40797cafa5bd->enter($__internal_f1eb8d4ebce266cee7fe1675d0b343f617a01a957dde49abfbcb40797cafa5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "    <h1>Personne creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePersonne");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f1eb8d4ebce266cee7fe1675d0b343f617a01a957dde49abfbcb40797cafa5bd->leave($__internal_f1eb8d4ebce266cee7fe1675d0b343f617a01a957dde49abfbcb40797cafa5bd_prof);

    }

    public function getTemplateName()
    {
        return "personne/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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

{% block section %}
    <h1>Personne creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('affichePersonne') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "personne/new.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\personne\\new.html.twig");
    }
}
