<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_01cf942446ad510ec2de6b84050a71fac4f52b3f116cc2f588fd8cc41c5d0b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ba57364e30acc52b3ee82e6cf92da3aed8b9be3cabe71cb1811c47fe21a2354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba57364e30acc52b3ee82e6cf92da3aed8b9be3cabe71cb1811c47fe21a2354->enter($__internal_4ba57364e30acc52b3ee82e6cf92da3aed8b9be3cabe71cb1811c47fe21a2354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4b235964c6ea596c8ac38d6073b7ad98cd324f088925d4b8084c25753d632757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b235964c6ea596c8ac38d6073b7ad98cd324f088925d4b8084c25753d632757->enter($__internal_4b235964c6ea596c8ac38d6073b7ad98cd324f088925d4b8084c25753d632757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4ba57364e30acc52b3ee82e6cf92da3aed8b9be3cabe71cb1811c47fe21a2354->leave($__internal_4ba57364e30acc52b3ee82e6cf92da3aed8b9be3cabe71cb1811c47fe21a2354_prof);

        
        $__internal_4b235964c6ea596c8ac38d6073b7ad98cd324f088925d4b8084c25753d632757->leave($__internal_4b235964c6ea596c8ac38d6073b7ad98cd324f088925d4b8084c25753d632757_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
