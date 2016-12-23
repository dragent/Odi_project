<?php

/* produits/list.html.twig */
class __TwigTemplate_7ca9753a4b9b0b3cb7e31599e5dab31c216711067c213dd9d32502e294484b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/list.html.twig", 1);
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
        $__internal_6ae0d8cb31181414d582fe1af3f728df63637aa196e822fa9d7c7f40fda52b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae0d8cb31181414d582fe1af3f728df63637aa196e822fa9d7c7f40fda52b7e->enter($__internal_6ae0d8cb31181414d582fe1af3f728df63637aa196e822fa9d7c7f40fda52b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae0d8cb31181414d582fe1af3f728df63637aa196e822fa9d7c7f40fda52b7e->leave($__internal_6ae0d8cb31181414d582fe1af3f728df63637aa196e822fa9d7c7f40fda52b7e_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_882169ec7c1f92f039deb387ff6cd46a5e97f27cdb19804435a3fb56d8d7fa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882169ec7c1f92f039deb387ff6cd46a5e97f27cdb19804435a3fb56d8d7fa5b->enter($__internal_882169ec7c1f92f039deb387ff6cd46a5e97f27cdb19804435a3fb56d8d7fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        $this->loadTemplate("menubase.twig", "produits/list.html.twig", 3)->display($context);
        
        $__internal_882169ec7c1f92f039deb387ff6cd46a5e97f27cdb19804435a3fb56d8d7fa5b->leave($__internal_882169ec7c1f92f039deb387ff6cd46a5e97f27cdb19804435a3fb56d8d7fa5b_prof);

    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        $__internal_ab36e7ea84336f823c066d7b3c04ae041053bc29f250573ffb9251f51ed36b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab36e7ea84336f823c066d7b3c04ae041053bc29f250573ffb9251f51ed36b78->enter($__internal_ab36e7ea84336f823c066d7b3c04ae041053bc29f250573ffb9251f51ed36b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 6
        echo "    <h1><i class=\"fa fa-pencil fa-lg\"></i>Produit</h1>
    ";
        // line 7
        if ( !twig_test_empty((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")))) {
            // line 8
            echo "        <div class='alert alert-success'>
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
                <i class='fa fa-times fa-lg'></i>
            </a>

            ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) {
            // line 18
            echo "    <table class=\"table table-striped\" id='tab'>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom du produit</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 30
                echo "            <tr>
                <td> <img src=\"img/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPhotoProduit", array()), "html", null, true);
                echo "\" alt=\"stylo\" /></td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getPrixProduit", array()), "html", null, true);
                echo " <i class=\"fa fa-eur\" aria-hidden=\"true\"></i></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
    </table>

    ";
        } else {
            // line 42
            echo "       Aucun produit dans la base.
    ";
        }
        
        $__internal_ab36e7ea84336f823c066d7b3c04ae041053bc29f250573ffb9251f51ed36b78->leave($__internal_ab36e7ea84336f823c066d7b3c04ae041053bc29f250573ffb9251f51ed36b78_prof);

    }

    public function getTemplateName()
    {
        return "produits/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  123 => 38,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  95 => 30,  91 => 29,  78 => 18,  76 => 17,  73 => 16,  67 => 13,  60 => 8,  58 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1><i class=\"fa fa-pencil fa-lg\"></i>Produit</h1>
    {% if msg is not empty %}
        <div class='alert alert-success'>
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
                <i class='fa fa-times fa-lg'></i>
            </a>

            {{ msg }}
        </div>
    {% endif %}

    {% if produits %}
    <table class=\"table table-striped\" id='tab'>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom du produit</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td> <img src=\"img/{{ produit.getPhotoProduit }}\" alt=\"stylo\" /></td>
                <td>{{ produit.getRefProduit }}</td>
                <td>{{ produit.getNomProduit }}</td>
                <td>{{ produit.getDescriptionProduit }}</td>
                <td>{{ produit.getPrixProduit }} <i class=\"fa fa-eur\" aria-hidden=\"true\"></i></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% else %}
       Aucun produit dans la base.
    {% endif %}
{% endblock %}
", "produits/list.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produits\\list.html.twig");
    }
}
