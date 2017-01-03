<?php

/* client/liste_paniers_client.twig */
class __TwigTemplate_f7e12ba774a75a5458fe3767536bf8eaaee8b8226611f130db3443771006724c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/liste_paniers_client.twig", 1);
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
        $__internal_4a100d356f13daae2849fc1891fa0aea537816841c310e67306c1f8093384791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a100d356f13daae2849fc1891fa0aea537816841c310e67306c1f8093384791->enter($__internal_4a100d356f13daae2849fc1891fa0aea537816841c310e67306c1f8093384791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/liste_paniers_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a100d356f13daae2849fc1891fa0aea537816841c310e67306c1f8093384791->leave($__internal_4a100d356f13daae2849fc1891fa0aea537816841c310e67306c1f8093384791_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d97dd3dfdc23d6f7f94f09771f22fed085e7533955eb41c12ad6dd651ab3dd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97dd3dfdc23d6f7f94f09771f22fed085e7533955eb41c12ad6dd651ab3dd1a->enter($__internal_d97dd3dfdc23d6f7f94f09771f22fed085e7533955eb41c12ad6dd651ab3dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/liste_paniers_client.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/liste_paniers_client.twig", 4)->display($context);
        
        $__internal_d97dd3dfdc23d6f7f94f09771f22fed085e7533955eb41c12ad6dd651ab3dd1a->leave($__internal_d97dd3dfdc23d6f7f94f09771f22fed085e7533955eb41c12ad6dd651ab3dd1a_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_329a17dfca56433574b6a7b893067d2127c19e9a972a8fc65165b2d41dbe0116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329a17dfca56433574b6a7b893067d2127c19e9a972a8fc65165b2d41dbe0116->enter($__internal_329a17dfca56433574b6a7b893067d2127c19e9a972a8fc65165b2d41dbe0116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/liste_paniers_client.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Liste des paniers</h2>
    </div>
";
        
        $__internal_329a17dfca56433574b6a7b893067d2127c19e9a972a8fc65165b2d41dbe0116->leave($__internal_329a17dfca56433574b6a7b893067d2127c19e9a972a8fc65165b2d41dbe0116_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_c76d669b36a8785f74952c1a1ed30aaa83234acf6e1bfc1878d5c3fb1122fb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76d669b36a8785f74952c1a1ed30aaa83234acf6e1bfc1878d5c3fb1122fb47->enter($__internal_c76d669b36a8785f74952c1a1ed30aaa83234acf6e1bfc1878d5c3fb1122fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/liste_paniers_client.twig"));

        // line 14
        echo "    <div class=\"container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>État</th>
          <th>Date de création</th>
          <th>Contenu</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["paniers"]) {
            // line 26
            echo "    \t<tr>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"), "html", null, true);
            echo "</td>
          ";
            // line 28
            if (($this->getAttribute($context["paniers"], "getEtatPanier", array(), "method") == 1)) {
                // line 29
                echo "            <td>Non validé</td>
          ";
            } elseif (($this->getAttribute(            // line 30
$context["paniers"], "getEtatPanier", array(), "method") == 2)) {
                // line 31
                echo "            <td>En cours de traitement</td>
          ";
            } else {
                // line 33
                echo "            <td>Traité</td>
          ";
            }
            // line 35
            echo "          <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paniers"], "getDatePanier", array(), "method"), "d / m / Y"), "html", null, true);
            echo "</td>
          <td><a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contenu_panier_client", array("id_panier" => $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"))), "html", null, true);
            echo "\">Voir</a></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paniers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      </tbody>
    </table> 
    </div>
";
        
        $__internal_c76d669b36a8785f74952c1a1ed30aaa83234acf6e1bfc1878d5c3fb1122fb47->leave($__internal_c76d669b36a8785f74952c1a1ed30aaa83234acf6e1bfc1878d5c3fb1122fb47_prof);

    }

    public function getTemplateName()
    {
        return "client/liste_paniers_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  116 => 36,  111 => 35,  107 => 33,  103 => 31,  101 => 30,  98 => 29,  96 => 28,  92 => 27,  89 => 26,  85 => 25,  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    {% include 'client/menu_client.twig' %}
{% endblock %}

{% block header %}
    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Liste des paniers</h2>
    </div>
{% endblock %}

{% block section %}
    <div class=\"container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>État</th>
          <th>Date de création</th>
          <th>Contenu</th>
        </tr>
      </thead>
      <tbody>
      {% for paniers in Panier %}
    \t<tr>
          <td>{{ paniers.getIdPanier() }}</td>
          {% if paniers.getEtatPanier() == 1 %}
            <td>Non validé</td>
          {% elseif paniers.getEtatPanier() == 2 %}
            <td>En cours de traitement</td>
          {% else %}
            <td>Traité</td>
          {% endif %}
          <td>{{ paniers.getDatePanier() | date(\"d / m / Y\")}}</td>
          <td><a class=\"btn btn-primary\" href=\"{{ path('contenu_panier_client', { id_panier : paniers.getIdPanier() }) }}\">Voir</a></td>
        </tr>
      {% endfor %}
      </tbody>
    </table> 
    </div>
{% endblock %}
", "client/liste_paniers_client.twig", "/var/www/html/projet_odi/app/Resources/views/client/liste_paniers_client.twig");
    }
}
