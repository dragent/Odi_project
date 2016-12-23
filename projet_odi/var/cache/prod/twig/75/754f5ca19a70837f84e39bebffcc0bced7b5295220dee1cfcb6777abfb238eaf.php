<?php

/* default/index.html.twig */
class __TwigTemplate_4f9baeafefd2df11bb04a5d75fed1b58162de812a4b395972530ebd990c95c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_0601cab6e59deb3993e5d9ad461b7a85395ec1342ef11676f9ce18b7d7e97e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0601cab6e59deb3993e5d9ad461b7a85395ec1342ef11676f9ce18b7d7e97e8e->enter($__internal_0601cab6e59deb3993e5d9ad461b7a85395ec1342ef11676f9ce18b7d7e97e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0601cab6e59deb3993e5d9ad461b7a85395ec1342ef11676f9ce18b7d7e97e8e->leave($__internal_0601cab6e59deb3993e5d9ad461b7a85395ec1342ef11676f9ce18b7d7e97e8e_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68aca315a6b06653e6f8e88a2cdf65d0cca7166c30e3a46b4a190e460b08622c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68aca315a6b06653e6f8e88a2cdf65d0cca7166c30e3a46b4a190e460b08622c->enter($__internal_68aca315a6b06653e6f8e88a2cdf65d0cca7166c30e3a46b4a190e460b08622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "default/index.html.twig", 4)->display($context);
        
        $__internal_68aca315a6b06653e6f8e88a2cdf65d0cca7166c30e3a46b4a190e460b08622c->leave($__internal_68aca315a6b06653e6f8e88a2cdf65d0cca7166c30e3a46b4a190e460b08622c_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_2d61d0cf7033cdf3c44756ac2f8c7a46aab2208dab5ab30e4b25660c3e200831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d61d0cf7033cdf3c44756ac2f8c7a46aab2208dab5ab30e4b25660c3e200831->enter($__internal_2d61d0cf7033cdf3c44756ac2f8c7a46aab2208dab5ab30e4b25660c3e200831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_2d61d0cf7033cdf3c44756ac2f8c7a46aab2208dab5ab30e4b25660c3e200831->leave($__internal_2d61d0cf7033cdf3c44756ac2f8c7a46aab2208dab5ab30e4b25660c3e200831_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_8e5a40238ef3ab05370897a1cfd4b643a6801d17cc289ab22f6b63e3a96ae164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5a40238ef3ab05370897a1cfd4b643a6801d17cc289ab22f6b63e3a96ae164->enter($__internal_8e5a40238ef3ab05370897a1cfd4b643a6801d17cc289ab22f6b63e3a96ae164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
        
        $__internal_8e5a40238ef3ab05370897a1cfd4b643a6801d17cc289ab22f6b63e3a96ae164->leave($__internal_8e5a40238ef3ab05370897a1cfd4b643a6801d17cc289ab22f6b63e3a96ae164_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_646c1100acdf56c0fd6f5c3e2d6e1381be25992508a052a07a166bf256cc595a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646c1100acdf56c0fd6f5c3e2d6e1381be25992508a052a07a166bf256cc595a->enter($__internal_646c1100acdf56c0fd6f5c3e2d6e1381be25992508a052a07a166bf256cc595a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
        
        $__internal_646c1100acdf56c0fd6f5c3e2d6e1381be25992508a052a07a166bf256cc595a->leave($__internal_646c1100acdf56c0fd6f5c3e2d6e1381be25992508a052a07a166bf256cc595a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 15,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
    HEADER (app/Resources/views/default/index.html.twig)
{% endblock %}

{% block section %}
    SECTION (app/Resources/views/default/index.html.twig)
{% endblock %}

{% block footer %}
    FOOTER (app/Resources/views/default/index.html.twig)
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\default\\index.html.twig");
    }
}
