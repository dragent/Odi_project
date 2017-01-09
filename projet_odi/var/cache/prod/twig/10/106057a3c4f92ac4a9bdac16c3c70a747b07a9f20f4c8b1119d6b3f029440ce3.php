<?php

/* magasinier/form.twig */
class __TwigTemplate_d679afead8baf2493251d287df83409a3c945568822a631f15f8a17c6c6c454a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "magasinier/form.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tMagasinier | ";
        echo twig_escape_filter($this->env, (isset($context["titreOnglet"]) ? $context["titreOnglet"] : null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 11
        echo "    ";
        $this->loadTemplate("magasinier/menu_magasinier.twig", "magasinier/form.twig", 11)->display($context);
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        // line 16
        echo "    <div class=\"page-header\">
        <h2 class=\"centrer isoler\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 20
        echo "        ";
        // line 21
        echo "    ";
    }

    // line 24
    public function block_section($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "magasinier/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  82 => 27,  78 => 26,  73 => 25,  70 => 24,  66 => 21,  64 => 20,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  46 => 11,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "magasinier/form.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\magasinier\\form.twig");
    }
}
