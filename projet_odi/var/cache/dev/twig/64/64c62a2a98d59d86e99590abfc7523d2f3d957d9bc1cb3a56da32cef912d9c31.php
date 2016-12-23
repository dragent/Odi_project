<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ff1465237ded6ff1e14b7258e9650f4a3e7e49fd236f8dc4c8b524fd1dc8c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44055490482715fe0b62a25ae409aa0d4bcead9ce84ffc7cb2b294c24c6dffd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44055490482715fe0b62a25ae409aa0d4bcead9ce84ffc7cb2b294c24c6dffd6->enter($__internal_44055490482715fe0b62a25ae409aa0d4bcead9ce84ffc7cb2b294c24c6dffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2d287b04ce20376a50bbecfb878e62b8b8b900b4ddc9c1b9194dc01156b5cd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d287b04ce20376a50bbecfb878e62b8b8b900b4ddc9c1b9194dc01156b5cd79->enter($__internal_2d287b04ce20376a50bbecfb878e62b8b8b900b4ddc9c1b9194dc01156b5cd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44055490482715fe0b62a25ae409aa0d4bcead9ce84ffc7cb2b294c24c6dffd6->leave($__internal_44055490482715fe0b62a25ae409aa0d4bcead9ce84ffc7cb2b294c24c6dffd6_prof);

        
        $__internal_2d287b04ce20376a50bbecfb878e62b8b8b900b4ddc9c1b9194dc01156b5cd79->leave($__internal_2d287b04ce20376a50bbecfb878e62b8b8b900b4ddc9c1b9194dc01156b5cd79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48dcd9f4a5ec36c327629a17a9aaa341c17f3c9b0d89b31f4bf8266f6480a992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48dcd9f4a5ec36c327629a17a9aaa341c17f3c9b0d89b31f4bf8266f6480a992->enter($__internal_48dcd9f4a5ec36c327629a17a9aaa341c17f3c9b0d89b31f4bf8266f6480a992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47f40fb039c778a8e68e9d6bc782441cdf97a63c0465c187ba8bdd05be03fcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f40fb039c778a8e68e9d6bc782441cdf97a63c0465c187ba8bdd05be03fcbc->enter($__internal_47f40fb039c778a8e68e9d6bc782441cdf97a63c0465c187ba8bdd05be03fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_47f40fb039c778a8e68e9d6bc782441cdf97a63c0465c187ba8bdd05be03fcbc->leave($__internal_47f40fb039c778a8e68e9d6bc782441cdf97a63c0465c187ba8bdd05be03fcbc_prof);

        
        $__internal_48dcd9f4a5ec36c327629a17a9aaa341c17f3c9b0d89b31f4bf8266f6480a992->leave($__internal_48dcd9f4a5ec36c327629a17a9aaa341c17f3c9b0d89b31f4bf8266f6480a992_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_35addac0f988b6fd1dba573aff9c63f63bb01dcf22bb02d3c5b7f2f7dd435359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35addac0f988b6fd1dba573aff9c63f63bb01dcf22bb02d3c5b7f2f7dd435359->enter($__internal_35addac0f988b6fd1dba573aff9c63f63bb01dcf22bb02d3c5b7f2f7dd435359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3ef9561adfd9b1eb3a89769adbb92f626e055c6a383c95ba0bc1c167e262c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ef9561adfd9b1eb3a89769adbb92f626e055c6a383c95ba0bc1c167e262c6b->enter($__internal_f3ef9561adfd9b1eb3a89769adbb92f626e055c6a383c95ba0bc1c167e262c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3ef9561adfd9b1eb3a89769adbb92f626e055c6a383c95ba0bc1c167e262c6b->leave($__internal_f3ef9561adfd9b1eb3a89769adbb92f626e055c6a383c95ba0bc1c167e262c6b_prof);

        
        $__internal_35addac0f988b6fd1dba573aff9c63f63bb01dcf22bb02d3c5b7f2f7dd435359->leave($__internal_35addac0f988b6fd1dba573aff9c63f63bb01dcf22bb02d3c5b7f2f7dd435359_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a14e057865e0684ba09cba73bc318d8557909a49afeddbbf749372508f16d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a14e057865e0684ba09cba73bc318d8557909a49afeddbbf749372508f16d17->enter($__internal_9a14e057865e0684ba09cba73bc318d8557909a49afeddbbf749372508f16d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3dd1185cb9e2a042717facd4597ce1b0bdff326e8663dcffb430af311729743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dd1185cb9e2a042717facd4597ce1b0bdff326e8663dcffb430af311729743->enter($__internal_f3dd1185cb9e2a042717facd4597ce1b0bdff326e8663dcffb430af311729743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f3dd1185cb9e2a042717facd4597ce1b0bdff326e8663dcffb430af311729743->leave($__internal_f3dd1185cb9e2a042717facd4597ce1b0bdff326e8663dcffb430af311729743_prof);

        
        $__internal_9a14e057865e0684ba09cba73bc318d8557909a49afeddbbf749372508f16d17->leave($__internal_9a14e057865e0684ba09cba73bc318d8557909a49afeddbbf749372508f16d17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
