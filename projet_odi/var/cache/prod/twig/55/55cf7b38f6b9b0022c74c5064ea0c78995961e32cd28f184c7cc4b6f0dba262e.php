<?php

/* usersidentification.html.twig */
class __TwigTemplate_baae5f48a605049ef8da1ea597ee25bfeea0da992d6d10f7d300ad3cc7051853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usersidentification.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("menubase.twig", "usersidentification.html.twig", 4)->display($context);
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\">
\t\t<h2 class=\"centrer isoler\">Identification</h2>
\t</div>
";
    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "usersidentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "usersidentification.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\usersidentification.html.twig");
    }
}
