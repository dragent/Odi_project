<?php

/* form/fields.html.twig */
class __TwigTemplate_7603e2dc02d1b11e2c08eef7ad976f720dd87c7b0ff97bc8cd67cfd9c35236ce extends Twig_Template
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
        $__internal_7315511443d24fc1798082c70921c77935b1424db89a500888c29453fee6f3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7315511443d24fc1798082c70921c77935b1424db89a500888c29453fee6f3ef->enter($__internal_7315511443d24fc1798082c70921c77935b1424db89a500888c29453fee6f3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

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
        
        $__internal_7315511443d24fc1798082c70921c77935b1424db89a500888c29453fee6f3ef->leave($__internal_7315511443d24fc1798082c70921c77935b1424db89a500888c29453fee6f3ef_prof);

    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_f1c1521ad634af290ef5b1a8ef3c97ebcf72d848caa53da3558f65f8117acffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c1521ad634af290ef5b1a8ef3c97ebcf72d848caa53da3558f65f8117acffd->enter($__internal_f1c1521ad634af290ef5b1a8ef3c97ebcf72d848caa53da3558f65f8117acffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form/fields.html.twig"));

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
        
        $__internal_f1c1521ad634af290ef5b1a8ef3c97ebcf72d848caa53da3558f65f8117acffd->leave($__internal_f1c1521ad634af290ef5b1a8ef3c97ebcf72d848caa53da3558f65f8117acffd_prof);

    }

    // line 21
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_9e8efe9a570b71e323e0aa71284b525b9e5caaed9bb7d5345157f3eb349c1642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8efe9a570b71e323e0aa71284b525b9e5caaed9bb7d5345157f3eb349c1642->enter($__internal_9e8efe9a570b71e323e0aa71284b525b9e5caaed9bb7d5345157f3eb349c1642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form/fields.html.twig"));

        // line 22
        echo "    <div class=\"number_widget\">
        ";
        // line 23
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 24
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_9e8efe9a570b71e323e0aa71284b525b9e5caaed9bb7d5345157f3eb349c1642->leave($__internal_9e8efe9a570b71e323e0aa71284b525b9e5caaed9bb7d5345157f3eb349c1642_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  79 => 23,  76 => 22,  70 => 21,  56 => 13,  53 => 12,  50 => 11,  44 => 10,  34 => 27,  32 => 21,  29 => 20,  27 => 10,  24 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    {% endspaceless %}
{% endblock %}

{% block number_widget %}
    <div class=\"number_widget\">
        {% set type = type|default('number') %}
        {{ block('form_widget_simple') }}
    </div>
{% endblock number_widget %}



", "form/fields.html.twig", "/var/www/html/projet_odi/app/Resources/views/form/fields.html.twig");
    }
}
