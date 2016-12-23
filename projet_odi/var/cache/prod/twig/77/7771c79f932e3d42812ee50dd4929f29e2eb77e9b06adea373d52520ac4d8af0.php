<?php

/* default/index.html.twig */
class __TwigTemplate_a19fd2c83de71b552ea9141841bb70125c156e877ad2db99c9060dd11eb4a54a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("menu.twig", "default/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    HEADER (app/Resources/views/default/index.html.twig)
";
    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        // line 12
        echo "    SECTION (app/Resources/views/default/index.html.twig)
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "    FOOTER (app/Resources/views/default/index.html.twig)
";
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
        return array (  58 => 16,  55 => 15,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\default\\index.html.twig");
    }
}
