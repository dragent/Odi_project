<?php

/* produits/gestionProduits.html.twig */
class __TwigTemplate_3aa05f73590853a44eabf776d1b579639a6544f7625ca8a125cb7a0aedfa71df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produits/gestionProduits.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_0d464dfeb1bdc3b7a92dcfe028d6179995969b9b05edd75a48b1dc830c17c40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d464dfeb1bdc3b7a92dcfe028d6179995969b9b05edd75a48b1dc830c17c40f->enter($__internal_0d464dfeb1bdc3b7a92dcfe028d6179995969b9b05edd75a48b1dc830c17c40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/gestionProduits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d464dfeb1bdc3b7a92dcfe028d6179995969b9b05edd75a48b1dc830c17c40f->leave($__internal_0d464dfeb1bdc3b7a92dcfe028d6179995969b9b05edd75a48b1dc830c17c40f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99799d1f555571f7804c27ff66b4751ce618beb9383196136743a61aefb59193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99799d1f555571f7804c27ff66b4751ce618beb9383196136743a61aefb59193->enter($__internal_99799d1f555571f7804c27ff66b4751ce618beb9383196136743a61aefb59193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/gestionProduits.html.twig"));

        // line 4
        echo "    Magasinier | Produits
";
        
        $__internal_99799d1f555571f7804c27ff66b4751ce618beb9383196136743a61aefb59193->leave($__internal_99799d1f555571f7804c27ff66b4751ce618beb9383196136743a61aefb59193_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebfd128b36c738dc758b5c73e31382289fbaa4811287a26da7f4fbdb115362a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfd128b36c738dc758b5c73e31382289fbaa4811287a26da7f4fbdb115362a3->enter($__internal_ebfd128b36c738dc758b5c73e31382289fbaa4811287a26da7f4fbdb115362a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/gestionProduits.html.twig"));

        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("menu_magasinier.twig", "produits/gestionProduits.html.twig", 11)->display($context);
        
        $__internal_ebfd128b36c738dc758b5c73e31382289fbaa4811287a26da7f4fbdb115362a3->leave($__internal_ebfd128b36c738dc758b5c73e31382289fbaa4811287a26da7f4fbdb115362a3_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_398bd11d792ae463b821c5dac693b7343b663cc3696aacd958055a42ca66e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398bd11d792ae463b821c5dac693b7343b663cc3696aacd958055a42ca66e7cf->enter($__internal_398bd11d792ae463b821c5dac693b7343b663cc3696aacd958055a42ca66e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/gestionProduits.html.twig"));

        // line 15
        echo "    ";
        // line 16
        echo "        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        
        $__internal_398bd11d792ae463b821c5dac693b7343b663cc3696aacd958055a42ca66e7cf->leave($__internal_398bd11d792ae463b821c5dac693b7343b663cc3696aacd958055a42ca66e7cf_prof);

    }

    // line 22
    public function block_section($context, array $blocks = array())
    {
        $__internal_74f76422da0bf7e3da6f41c09f85157a995ba258804e76a422d971f6dfeb0559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f76422da0bf7e3da6f41c09f85157a995ba258804e76a422d971f6dfeb0559->enter($__internal_74f76422da0bf7e3da6f41c09f85157a995ba258804e76a422d971f6dfeb0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "produits/gestionProduits.html.twig"));

        // line 23
        echo "  <div class=\"container\">
    <div class=\"centrer isolerBottom\">
        <a href=\"#\" class=\"btn btn-info btn-lg\">Télécharger l'état des stocks (.csv)</a>
    </div>
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Quantité Min.</th>
          <th>Date Limite</th>
          <th>Modifier Stocks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
      </tbody>
    </table> 
  </div>
";
        
        $__internal_74f76422da0bf7e3da6f41c09f85157a995ba258804e76a422d971f6dfeb0559->leave($__internal_74f76422da0bf7e3da6f41c09f85157a995ba258804e76a422d971f6dfeb0559_prof);

    }

    public function getTemplateName()
    {
        return "produits/gestionProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  87 => 22,  80 => 19,  78 => 18,  75 => 16,  73 => 15,  67 => 14,  59 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

{% block title %}
    Magasinier | Produits
{% endblock %}

{% block menu %}
    {#{% if magasinier %}
        {% include 'menu_magasinier.twig' %}
    {% endif %}#}
    {% include 'menu_magasinier.twig' %}
{% endblock %}

{% block header %}
    {#{% if magasinier %}#}
        <h2 class=\"centrer isoler\">Gestion des stocks</h2>
    {#{% else %}#}
        {#<h1 class=\"centrer\">Erreur 404 : Page introuvable.</h1>#}
    {#{% endif %}#}
{% endblock %}

{% block section %}
  <div class=\"container\">
    <div class=\"centrer isolerBottom\">
        <a href=\"#\" class=\"btn btn-info btn-lg\">Télécharger l'état des stocks (.csv)</a>
    </div>
    <table class=\"table table-striped table-hover \">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Descriptif</th>
          <th>Catégorie</th>
          <th>Quantité</th>
          <th>Quantité Min.</th>
          <th>Date Limite</th>
          <th>Modifier Stocks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
        <tr>
          <td>00256</td>
          <td>Papier<br /><a href=\"#\">Voir photo</a></td>
          <td>Papier A4 24x32</td>
          <td>Papeterie</td>
          <td>5</td>
          <td>3</td>
          <td>12/12/16</td>
          <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-edit\"></span>
        </a></td>
        </tr>
      </tbody>
    </table> 
  </div>
{% endblock %}




", "produits/gestionProduits.html.twig", "/var/www/html/projet_odi/app/Resources/views/produits/gestionProduits.html.twig");
    }
}
