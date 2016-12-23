<?php

/* personne/form.twig */
class __TwigTemplate_01325c7826761cdf4edee96b207fc59cd5bf28c4e94e12e5623c999b5b6ad196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afd27bc3ed4b99ecc5c28bc0ad39f5ff8419890bdb336d90cf88152b34c9d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afd27bc3ed4b99ecc5c28bc0ad39f5ff8419890bdb336d90cf88152b34c9d08->enter($__internal_6afd27bc3ed4b99ecc5c28bc0ad39f5ff8419890bdb336d90cf88152b34c9d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personne/form.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_6afd27bc3ed4b99ecc5c28bc0ad39f5ff8419890bdb336d90cf88152b34c9d08->leave($__internal_6afd27bc3ed4b99ecc5c28bc0ad39f5ff8419890bdb336d90cf88152b34c9d08_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_fc7888e9731be65dd633b6ff83315d48a9bbc1619ecb6543d7c839f29de7463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7888e9731be65dd633b6ff83315d48a9bbc1619ecb6543d7c839f29de7463c->enter($__internal_fc7888e9731be65dd633b6ff83315d48a9bbc1619ecb6543d7c839f29de7463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fc7888e9731be65dd633b6ff83315d48a9bbc1619ecb6543d7c839f29de7463c->leave($__internal_fc7888e9731be65dd633b6ff83315d48a9bbc1619ecb6543d7c839f29de7463c_prof);

    }

    public function getTemplateName()
    {
        return "personne/form.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {{ form_start(form) }}
    {{ form_errors(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "personne/form.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\personne\\form.twig");
    }
}
