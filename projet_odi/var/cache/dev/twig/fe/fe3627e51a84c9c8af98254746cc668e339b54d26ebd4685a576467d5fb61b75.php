<?php

/* client/liste_paniers_client.twig */
class __TwigTemplate_2ad15b6dce379c16448fbb6894aa04ab14f43e407aa811692054993a015ae4c0 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5e3d9f98257dc7062a17515205ac5220f8b223a05b5a1604575a65ce97bcaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e3d9f98257dc7062a17515205ac5220f8b223a05b5a1604575a65ce97bcaa6->enter($__internal_b5e3d9f98257dc7062a17515205ac5220f8b223a05b5a1604575a65ce97bcaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/liste_paniers_client.twig"));

        $__internal_82efb9ea2a7c4e6cd00639410cb102d2584aa3a0eff6fc6887333c26732fc063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82efb9ea2a7c4e6cd00639410cb102d2584aa3a0eff6fc6887333c26732fc063->enter($__internal_82efb9ea2a7c4e6cd00639410cb102d2584aa3a0eff6fc6887333c26732fc063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/liste_paniers_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e3d9f98257dc7062a17515205ac5220f8b223a05b5a1604575a65ce97bcaa6->leave($__internal_b5e3d9f98257dc7062a17515205ac5220f8b223a05b5a1604575a65ce97bcaa6_prof);

        
        $__internal_82efb9ea2a7c4e6cd00639410cb102d2584aa3a0eff6fc6887333c26732fc063->leave($__internal_82efb9ea2a7c4e6cd00639410cb102d2584aa3a0eff6fc6887333c26732fc063_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_784d6e0ae60a0ac9829dc966dd1c410cd225f9a5f003438ce420ee7671a292ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784d6e0ae60a0ac9829dc966dd1c410cd225f9a5f003438ce420ee7671a292ca->enter($__internal_784d6e0ae60a0ac9829dc966dd1c410cd225f9a5f003438ce420ee7671a292ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26560fa1bb6d74c19c78f4628d62843f0c10c1acd35ee4f042373c7f701f411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26560fa1bb6d74c19c78f4628d62843f0c10c1acd35ee4f042373c7f701f411e->enter($__internal_26560fa1bb6d74c19c78f4628d62843f0c10c1acd35ee4f042373c7f701f411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/liste_paniers_client.twig", 4)->display($context);
        
        $__internal_26560fa1bb6d74c19c78f4628d62843f0c10c1acd35ee4f042373c7f701f411e->leave($__internal_26560fa1bb6d74c19c78f4628d62843f0c10c1acd35ee4f042373c7f701f411e_prof);

        
        $__internal_784d6e0ae60a0ac9829dc966dd1c410cd225f9a5f003438ce420ee7671a292ca->leave($__internal_784d6e0ae60a0ac9829dc966dd1c410cd225f9a5f003438ce420ee7671a292ca_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_8a196fef654b55cfff47647a32db130e06a912ba9ba905b0c71fd56a18c6342f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a196fef654b55cfff47647a32db130e06a912ba9ba905b0c71fd56a18c6342f->enter($__internal_8a196fef654b55cfff47647a32db130e06a912ba9ba905b0c71fd56a18c6342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8ca952398ab2859d18556242f393fb5cfc52bcca20f31d29ae3f469c022383c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca952398ab2859d18556242f393fb5cfc52bcca20f31d29ae3f469c022383c9->enter($__internal_8ca952398ab2859d18556242f393fb5cfc52bcca20f31d29ae3f469c022383c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8ca952398ab2859d18556242f393fb5cfc52bcca20f31d29ae3f469c022383c9->leave($__internal_8ca952398ab2859d18556242f393fb5cfc52bcca20f31d29ae3f469c022383c9_prof);

        
        $__internal_8a196fef654b55cfff47647a32db130e06a912ba9ba905b0c71fd56a18c6342f->leave($__internal_8a196fef654b55cfff47647a32db130e06a912ba9ba905b0c71fd56a18c6342f_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_1fc8720d3f090989e699f17bdf63d22036ca8347e540a5254f516dccd7bb2057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc8720d3f090989e699f17bdf63d22036ca8347e540a5254f516dccd7bb2057->enter($__internal_1fc8720d3f090989e699f17bdf63d22036ca8347e540a5254f516dccd7bb2057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_1f53e2b64217756b55a7f8299d52559460a96e32d189e9b39d1238ad79bc9d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f53e2b64217756b55a7f8299d52559460a96e32d189e9b39d1238ad79bc9d62->enter($__internal_1f53e2b64217756b55a7f8299d52559460a96e32d189e9b39d1238ad79bc9d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    <h2>Liste des paniers : </h2>
    <div class=\"container\">
    <table class=\"table table-striped \">
      <thead>
        <tr>
          <th>id</th>
          <th>etat</th>
          <th>date</th>
          <th>contenu</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Panier"]) ? $context["Panier"] : $this->getContext($context, "Panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["paniers"]) {
            // line 24
            echo "    \t<tr>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"), "html", null, true);
            echo "</td>
          ";
            // line 26
            if (($this->getAttribute($context["paniers"], "getEtatPanier", array(), "method") == 1)) {
                // line 27
                echo "            <td>Non validé</td>
          ";
            } elseif (($this->getAttribute(            // line 28
$context["paniers"], "getEtatPanier", array(), "method") == 2)) {
                // line 29
                echo "            <td>En cours de traitement</td>
          ";
            } else {
                // line 31
                echo "            <td>Traité</td>
          ";
            }
            // line 33
            echo "          <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paniers"], "getDatePanier", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</td>
          <td><a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contenu_panier_client", array("id_panier" => $this->getAttribute($context["paniers"], "getIdPanier", array(), "method"))), "html", null, true);
            echo "\">voir</a></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paniers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </tbody>
    </table> 
    </div>
";
        
        $__internal_1f53e2b64217756b55a7f8299d52559460a96e32d189e9b39d1238ad79bc9d62->leave($__internal_1f53e2b64217756b55a7f8299d52559460a96e32d189e9b39d1238ad79bc9d62_prof);

        
        $__internal_1fc8720d3f090989e699f17bdf63d22036ca8347e540a5254f516dccd7bb2057->leave($__internal_1fc8720d3f090989e699f17bdf63d22036ca8347e540a5254f516dccd7bb2057_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ad3d3d45bdd469eab518a8500251c4041c7919cb3e6635ec39d2bde8c61bb038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3d3d45bdd469eab518a8500251c4041c7919cb3e6635ec39d2bde8c61bb038->enter($__internal_ad3d3d45bdd469eab518a8500251c4041c7919cb3e6635ec39d2bde8c61bb038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7e68092db00141080d710ae64e1d6d4f1df6b00fdc4e2df04b8cd2f68d4a84ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e68092db00141080d710ae64e1d6d4f1df6b00fdc4e2df04b8cd2f68d4a84ee->enter($__internal_7e68092db00141080d710ae64e1d6d4f1df6b00fdc4e2df04b8cd2f68d4a84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7e68092db00141080d710ae64e1d6d4f1df6b00fdc4e2df04b8cd2f68d4a84ee->leave($__internal_7e68092db00141080d710ae64e1d6d4f1df6b00fdc4e2df04b8cd2f68d4a84ee_prof);

        
        $__internal_ad3d3d45bdd469eab518a8500251c4041c7919cb3e6635ec39d2bde8c61bb038->leave($__internal_ad3d3d45bdd469eab518a8500251c4041c7919cb3e6635ec39d2bde8c61bb038_prof);

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
        return array (  156 => 42,  143 => 37,  134 => 34,  129 => 33,  125 => 31,  121 => 29,  119 => 28,  116 => 27,  114 => 26,  110 => 25,  107 => 24,  103 => 23,  89 => 11,  80 => 10,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
{% endblock %}

{% block section %}
    <h2>Liste des paniers : </h2>
    <div class=\"container\">
    <table class=\"table table-striped \">
      <thead>
        <tr>
          <th>id</th>
          <th>etat</th>
          <th>date</th>
          <th>contenu</th>
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
          <td>{{ paniers.getDatePanier() | date(\"d/m/Y\")}}</td>
          <td><a class=\"btn btn-primary\" href=\"{{ path('contenu_panier_client', { id_panier : paniers.getIdPanier() }) }}\">voir</a></td>
        </tr>
      {% endfor %}
      </tbody>
    </table> 
    </div>
{% endblock %}

{% block footer %}
{% endblock %}
", "client/liste_paniers_client.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\client\\liste_paniers_client.twig");
    }
}
