<?php

/* magasinier/liste_paniers_magasinier.twig */
class __TwigTemplate_05341fc0167dfab6046cdf9fb6de91cfc10736a8d9c216242e2bba8964b83046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/liste_paniers_magasinier.twig", 1);
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
        $__internal_22c2689c02a3261e5d6a1c1c12e962ccc9ec530f74f636cc8b505d37da83ea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2689c02a3261e5d6a1c1c12e962ccc9ec530f74f636cc8b505d37da83ea7b->enter($__internal_22c2689c02a3261e5d6a1c1c12e962ccc9ec530f74f636cc8b505d37da83ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/liste_paniers_magasinier.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c2689c02a3261e5d6a1c1c12e962ccc9ec530f74f636cc8b505d37da83ea7b->leave($__internal_22c2689c02a3261e5d6a1c1c12e962ccc9ec530f74f636cc8b505d37da83ea7b_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a99b4b187af566afc65dc74f783a596618c4e1b30fb94b9e504ae1fad23059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a99b4b187af566afc65dc74f783a596618c4e1b30fb94b9e504ae1fad23059a->enter($__internal_3a99b4b187af566afc65dc74f783a596618c4e1b30fb94b9e504ae1fad23059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_paniers_magasinier.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/liste_paniers_magasinier.twig", 4)->display($context);
        
        $__internal_3a99b4b187af566afc65dc74f783a596618c4e1b30fb94b9e504ae1fad23059a->leave($__internal_3a99b4b187af566afc65dc74f783a596618c4e1b30fb94b9e504ae1fad23059a_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_548621b2bf8e3b3c29fff21c08bdcf5b72cd2333fce1cce8d89d2b7637c7e41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548621b2bf8e3b3c29fff21c08bdcf5b72cd2333fce1cce8d89d2b7637c7e41c->enter($__internal_548621b2bf8e3b3c29fff21c08bdcf5b72cd2333fce1cce8d89d2b7637c7e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_paniers_magasinier.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Liste des paniers</h2>
    </div>
";
        
        $__internal_548621b2bf8e3b3c29fff21c08bdcf5b72cd2333fce1cce8d89d2b7637c7e41c->leave($__internal_548621b2bf8e3b3c29fff21c08bdcf5b72cd2333fce1cce8d89d2b7637c7e41c_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_421c09063a6c2553bc81b2be14dfebc6efd62da0fcd120e533b65e3ac072d8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421c09063a6c2553bc81b2be14dfebc6efd62da0fcd120e533b65e3ac072d8a3->enter($__internal_421c09063a6c2553bc81b2be14dfebc6efd62da0fcd120e533b65e3ac072d8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_paniers_magasinier.twig"));

        // line 14
        echo "  <div class=\"container\">
    ";
        // line 15
        if ((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier"))) {
            // line 16
            echo "        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Id. Panier</th>
              <th>Id. Personne</th>
              <th>Date de création</th>
              <th>Contenu</th>
            </tr>
          </thead>
          <tbody>
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")));
            foreach ($context['_seq'] as $context["_key"] => $context["paniers"]) {
                // line 27
                echo "        \t<tr>
              <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"), "html", null, true);
                echo "</td>
              <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["paniers"], "getIdPersonne", array(), "method"), "html", null, true);
                echo "</td>
              <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paniers"], "getDatePanier", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
              <td><a class=\"btn btn-primary\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_panier_magasinier", array("id_panier" => $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"))), "html", null, true);
                echo "\">Gérer</a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paniers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          </tbody>
        </table> 
    ";
        } else {
            // line 37
            echo "       <p class=\"centrer\">Aucun panier dans la base.</p>
    ";
        }
        // line 39
        echo "  </div>
";
        
        $__internal_421c09063a6c2553bc81b2be14dfebc6efd62da0fcd120e533b65e3ac072d8a3->leave($__internal_421c09063a6c2553bc81b2be14dfebc6efd62da0fcd120e533b65e3ac072d8a3_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0ee0217e89b315fc5de67c108631737c99ac7486449e36784f1d61d9eb14f22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee0217e89b315fc5de67c108631737c99ac7486449e36784f1d61d9eb14f22e->enter($__internal_0ee0217e89b315fc5de67c108631737c99ac7486449e36784f1d61d9eb14f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "magasinier/liste_paniers_magasinier.twig"));

        
        $__internal_0ee0217e89b315fc5de67c108631737c99ac7486449e36784f1d61d9eb14f22e->leave($__internal_0ee0217e89b315fc5de67c108631737c99ac7486449e36784f1d61d9eb14f22e_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/liste_paniers_magasinier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  127 => 39,  123 => 37,  118 => 34,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  94 => 27,  90 => 26,  78 => 16,  76 => 15,  73 => 14,  67 => 13,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
    {% include 'magasinier/menu_magasinier.twig' %}
{% endblock %}

{% block header %}
    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Liste des paniers</h2>
    </div>
{% endblock %}

{% block section %}
  <div class=\"container\">
    {% if Panier %}
        <table class=\"table table-striped table-hover \">
          <thead>
            <tr>
              <th>Id. Panier</th>
              <th>Id. Personne</th>
              <th>Date de création</th>
              <th>Contenu</th>
            </tr>
          </thead>
          <tbody>
          {% for paniers in Panier %}
        \t<tr>
              <td>{{ paniers.getIdPanier() }}</td>
              <td>{{ paniers.getIdPersonne() }}</td>
              <td>{{ paniers.getDatePanier() | date(\"d/m/Y\")}}</td>
              <td><a class=\"btn btn-primary\" href=\"{{ path('gestion_panier_magasinier', { id_panier : paniers.getIdPanier() }) }}\">Gérer</a></td>
            </tr>
          {% endfor %}
          </tbody>
        </table> 
    {% else %}
       <p class=\"centrer\">Aucun panier dans la base.</p>
    {% endif %}
  </div>
{% endblock %}

{% block footer %}
{% endblock %}
", "magasinier/liste_paniers_magasinier.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/liste_paniers_magasinier.twig");
    }
}
