<?php

/* personne/index.html.twig */
class __TwigTemplate_67e9fd06e8b5b083c812d07f36b939f76805785f9a544cdbee3d28f6cb2d149a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personne/index.html.twig", 1);
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
        $__internal_b088ca59fe3396b708b4ed808840c240e484ff62b9f2ae4e2031440d6c93bc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b088ca59fe3396b708b4ed808840c240e484ff62b9f2ae4e2031440d6c93bc32->enter($__internal_b088ca59fe3396b708b4ed808840c240e484ff62b9f2ae4e2031440d6c93bc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personne/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b088ca59fe3396b708b4ed808840c240e484ff62b9f2ae4e2031440d6c93bc32->leave($__internal_b088ca59fe3396b708b4ed808840c240e484ff62b9f2ae4e2031440d6c93bc32_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3dd5368f9edd37a98979085781872e67f0936dbed075c29724890697266beafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd5368f9edd37a98979085781872e67f0936dbed075c29724890697266beafb->enter($__internal_3dd5368f9edd37a98979085781872e67f0936dbed075c29724890697266beafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        $this->loadTemplate("menubase.twig", "personne/index.html.twig", 3)->display($context);
        
        $__internal_3dd5368f9edd37a98979085781872e67f0936dbed075c29724890697266beafb->leave($__internal_3dd5368f9edd37a98979085781872e67f0936dbed075c29724890697266beafb_prof);

    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        $__internal_0bf7dc0d1ef50194443ae81f1ee5d472091fb7146ff241b54e9f2d454b3a30e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf7dc0d1ef50194443ae81f1ee5d472091fb7146ff241b54e9f2d454b3a30e7->enter($__internal_0bf7dc0d1ef50194443ae81f1ee5d472091fb7146ff241b54e9f2d454b3a30e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 6
        echo "    <h1>Personnes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id_personne</th>
                <th>Pseudo_personne</th>
                <th>Mdp_personne</th>
                <th>Type_personne</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("montrePersonne", array("id" => $this->getAttribute($context["personne"], "getIdPersonne", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "getIdpersonne", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "pseudopersonne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "mdppersonne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "typepersonne", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("montrePersonne", array("id" => $this->getAttribute($context["personne"], "getIdPersonne", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("montrePersonne", array("id" => $this->getAttribute($context["personne"], "getIdPersonne", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personne_new");
        echo "\">Create a new personne</a>
        </li>
    </ul>
";
        
        $__internal_0bf7dc0d1ef50194443ae81f1ee5d472091fb7146ff241b54e9f2d454b3a30e7->leave($__internal_0bf7dc0d1ef50194443ae81f1ee5d472091fb7146ff241b54e9f2d454b3a30e7_prof);

    }

    public function getTemplateName()
    {
        return "personne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  116 => 37,  104 => 31,  98 => 28,  91 => 24,  87 => 23,  83 => 22,  77 => 21,  74 => 20,  70 => 19,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1>Personnes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id_personne</th>
                <th>Pseudo_personne</th>
                <th>Mdp_personne</th>
                <th>Type_personne</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for personne in personnes %}
            <tr>
                <td><a href=\"{{ path('montrePersonne', { 'id': personne.getIdPersonne }) }}\">{{ personne.getIdpersonne }}</a></td>
                <td>{{ personne.pseudopersonne }}</td>
                <td>{{ personne.mdppersonne }}</td>
                <td>{{ personne.typepersonne }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('montrePersonne', { 'id': personne.getIdPersonne }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('montrePersonne', { 'id': personne.getIdPersonne }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('personne_new') }}\">Create a new personne</a>
        </li>
    </ul>
{% endblock %}
", "personne/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\personne\\index.html.twig");
    }
}
