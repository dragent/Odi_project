<?php

/* form/fields.html.twig */
class __TwigTemplate_ff94a47471b99d45a2bbeaa83fbfbd55ee0257627f522a91554edc3f7165baf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'number_widget' => array($this, 'block_number_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('number_widget', $context, $blocks);
        // line 27
        echo "


";
    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_number_widget($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"number_widget\">
        ";
        // line 23
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 24
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  64 => 23,  61 => 22,  58 => 21,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  31 => 27,  29 => 21,  26 => 20,  24 => 10,  21 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/fields.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
