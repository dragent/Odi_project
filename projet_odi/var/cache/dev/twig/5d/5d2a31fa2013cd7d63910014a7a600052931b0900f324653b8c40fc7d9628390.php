<?php

/* client/creation_panier_client.twig */
class __TwigTemplate_6ceb0ec5a0f84a695cdb782faf200d6124874cc2051f697a5104186e94b34a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/creation_panier_client.twig", 1);
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
        $__internal_f7e7b173d137ba719d60f731add284e6bf885cf4b46522fb74a64143b5515ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e7b173d137ba719d60f731add284e6bf885cf4b46522fb74a64143b5515ac2->enter($__internal_f7e7b173d137ba719d60f731add284e6bf885cf4b46522fb74a64143b5515ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/creation_panier_client.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e7b173d137ba719d60f731add284e6bf885cf4b46522fb74a64143b5515ac2->leave($__internal_f7e7b173d137ba719d60f731add284e6bf885cf4b46522fb74a64143b5515ac2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f3d0fc7f0acf5cb9ad0c6734c983c19a336b35b751f8ed139252ca211552df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3d0fc7f0acf5cb9ad0c6734c983c19a336b35b751f8ed139252ca211552df1->enter($__internal_9f3d0fc7f0acf5cb9ad0c6734c983c19a336b35b751f8ed139252ca211552df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/creation_panier_client.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("client/menu_client.twig", "client/creation_panier_client.twig", 4)->display($context);
        
        $__internal_9f3d0fc7f0acf5cb9ad0c6734c983c19a336b35b751f8ed139252ca211552df1->leave($__internal_9f3d0fc7f0acf5cb9ad0c6734c983c19a336b35b751f8ed139252ca211552df1_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_e72e237dccb115dec4dbdf153662dbdfdf4ddd9eb23c8e1badfbaeece4208912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72e237dccb115dec4dbdf153662dbdfdf4ddd9eb23c8e1badfbaeece4208912->enter($__internal_e72e237dccb115dec4dbdf153662dbdfdf4ddd9eb23c8e1badfbaeece4208912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/creation_panier_client.twig"));

        // line 8
        echo "    <div class=\"page-header\">
      <h2 class=\"centrer isoler\">Création d'un panier</h2>
    </div>
";
        
        $__internal_e72e237dccb115dec4dbdf153662dbdfdf4ddd9eb23c8e1badfbaeece4208912->leave($__internal_e72e237dccb115dec4dbdf153662dbdfdf4ddd9eb23c8e1badfbaeece4208912_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_7e39fd66e33efb0c45710836963dcb1ead425762862b853429e3d9031cf8962a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e39fd66e33efb0c45710836963dcb1ead425762862b853429e3d9031cf8962a->enter($__internal_7e39fd66e33efb0c45710836963dcb1ead425762862b853429e3d9031cf8962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client/creation_panier_client.twig"));

        // line 14
        echo "    <p class=\"centrer\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creation_panier_client");
        echo "\" class=\"btn btn-primary\">Nouveau Panier (ou reprise du precedent)</a></p>
";
        
        $__internal_7e39fd66e33efb0c45710836963dcb1ead425762862b853429e3d9031cf8962a->leave($__internal_7e39fd66e33efb0c45710836963dcb1ead425762862b853429e3d9031cf8962a_prof);

    }

    public function getTemplateName()
    {
        return "client/creation_panier_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  66 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
      <h2 class=\"centrer isoler\">Création d'un panier</h2>
    </div>
{% endblock %}

{% block section %}
    <p class=\"centrer\"><a href=\"{{ path('creation_panier_client') }}\" class=\"btn btn-primary\">Nouveau Panier (ou reprise du precedent)</a></p>
{% endblock %}

", "client/creation_panier_client.twig", "/var/www/html/projet_odi/app/Resources/views/client/creation_panier_client.twig");
    }
}
