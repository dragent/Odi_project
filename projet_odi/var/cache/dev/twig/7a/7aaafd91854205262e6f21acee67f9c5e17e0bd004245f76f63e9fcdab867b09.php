<?php

/* personne/index.html.twig */
class __TwigTemplate_f181e72d08292afe65c435a5ccc89656293e806e9a188e94f786224ce0e88096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personne/index.html.twig", 1);
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
        $__internal_1eed1a8f4f6a167661fa95d8f4930743b6cc81deb40a59bfb6b179a2483a4262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eed1a8f4f6a167661fa95d8f4930743b6cc81deb40a59bfb6b179a2483a4262->enter($__internal_1eed1a8f4f6a167661fa95d8f4930743b6cc81deb40a59bfb6b179a2483a4262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personne/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eed1a8f4f6a167661fa95d8f4930743b6cc81deb40a59bfb6b179a2483a4262->leave($__internal_1eed1a8f4f6a167661fa95d8f4930743b6cc81deb40a59bfb6b179a2483a4262_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f670afa47ccf8fd3108c6db2d354cb2d9f480241831e9269275613cd30f6526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f670afa47ccf8fd3108c6db2d354cb2d9f480241831e9269275613cd30f6526->enter($__internal_9f670afa47ccf8fd3108c6db2d354cb2d9f480241831e9269275613cd30f6526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne/index.html.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "personne/index.html.twig", 4)->display($context);
        
        $__internal_9f670afa47ccf8fd3108c6db2d354cb2d9f480241831e9269275613cd30f6526->leave($__internal_9f670afa47ccf8fd3108c6db2d354cb2d9f480241831e9269275613cd30f6526_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ff525f7530ad513f36f4548d413b01956ed247c5e5c345220e553d7d384be7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff525f7530ad513f36f4548d413b01956ed247c5e5c345220e553d7d384be7a->enter($__internal_0ff525f7530ad513f36f4548d413b01956ed247c5e5c345220e553d7d384be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne/index.html.twig"));

        // line 8
        echo "  <div class=\"page-header\">
    <h2 class=\"centrer isoler\">Liste des personnes</h2>
  </div>
";
        
        $__internal_0ff525f7530ad513f36f4548d413b01956ed247c5e5c345220e553d7d384be7a->leave($__internal_0ff525f7530ad513f36f4548d413b01956ed247c5e5c345220e553d7d384be7a_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_81e6c45dc6426773660afe8b7c0af01f5ec8a61b002265af95286c1ee4254e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e6c45dc6426773660afe8b7c0af01f5ec8a61b002265af95286c1ee4254e11->enter($__internal_81e6c45dc6426773660afe8b7c0af01f5ec8a61b002265af95286c1ee4254e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne/index.html.twig"));

        // line 14
        echo "    <div class=\"container\">
    ";
        // line 15
        if ((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes"))) {
            // line 16
            echo "        <table class=\"table table-striped table-hover \">
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
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
            foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                // line 28
                echo "                <tr>
                    <td><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("montrePersonne", array("id" => $this->getAttribute($context["personne"], "getIdPersonne", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "getIdpersonne", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "pseudopersonne", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "mdppersonne", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "typepersonne", array()), "html", null, true);
                echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("montrePersonne", array("id" => $this->getAttribute($context["personne"], "getIdPersonne", array()))), "html", null, true);
                echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 39
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
            // line 45
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 48
            echo "       <p class=\"centrer\">Aucune personne dans la base.</p>
    ";
        }
        // line 50
        echo "        <p class=\"isoler\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personne_new");
        echo "\" class=\"btn btn-primary\">Créer une nouvelle personne</a></p>
    </div>
";
        
        $__internal_81e6c45dc6426773660afe8b7c0af01f5ec8a61b002265af95286c1ee4254e11->leave($__internal_81e6c45dc6426773660afe8b7c0af01f5ec8a61b002265af95286c1ee4254e11_prof);

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
        return array (  145 => 50,  141 => 48,  136 => 45,  124 => 39,  118 => 36,  111 => 32,  107 => 31,  103 => 30,  97 => 29,  94 => 28,  90 => 27,  77 => 16,  75 => 15,  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
  <div class=\"page-header\">
    <h2 class=\"centrer isoler\">Liste des personnes</h2>
  </div>
{% endblock %}

{% block section %}
    <div class=\"container\">
    {% if personnes %}
        <table class=\"table table-striped table-hover \">
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
    {% else %}
       <p class=\"centrer\">Aucune personne dans la base.</p>
    {% endif %}
        <p class=\"isoler\"><a href=\"{{ path('personne_new') }}\" class=\"btn btn-primary\">Créer une nouvelle personne</a></p>
    </div>
{% endblock %}
", "personne/index.html.twig", "/var/www/html/projet_odi/app/Resources/views/personne/index.html.twig");
    }
}
