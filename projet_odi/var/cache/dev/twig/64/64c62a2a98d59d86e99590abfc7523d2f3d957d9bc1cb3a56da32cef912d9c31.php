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
        $__internal_a6110f645f4c86ed22770ba4c2c9fee87ffdbc329ae87b1e08b64697a54703a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6110f645f4c86ed22770ba4c2c9fee87ffdbc329ae87b1e08b64697a54703a6->enter($__internal_a6110f645f4c86ed22770ba4c2c9fee87ffdbc329ae87b1e08b64697a54703a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c3bed42d65d72b5acad0f41353833678805c82ebb8b0264a5e9cfa20a4ec0164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bed42d65d72b5acad0f41353833678805c82ebb8b0264a5e9cfa20a4ec0164->enter($__internal_c3bed42d65d72b5acad0f41353833678805c82ebb8b0264a5e9cfa20a4ec0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6110f645f4c86ed22770ba4c2c9fee87ffdbc329ae87b1e08b64697a54703a6->leave($__internal_a6110f645f4c86ed22770ba4c2c9fee87ffdbc329ae87b1e08b64697a54703a6_prof);

        
        $__internal_c3bed42d65d72b5acad0f41353833678805c82ebb8b0264a5e9cfa20a4ec0164->leave($__internal_c3bed42d65d72b5acad0f41353833678805c82ebb8b0264a5e9cfa20a4ec0164_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42eca51fea24f1fd27b9644f518691ad594d442708252c0228c1601b4dbe54fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42eca51fea24f1fd27b9644f518691ad594d442708252c0228c1601b4dbe54fd->enter($__internal_42eca51fea24f1fd27b9644f518691ad594d442708252c0228c1601b4dbe54fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_301fb24f171f6dc7ff6828454bfca1a6157aa4a7cd602bf6ed479333b01ac973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301fb24f171f6dc7ff6828454bfca1a6157aa4a7cd602bf6ed479333b01ac973->enter($__internal_301fb24f171f6dc7ff6828454bfca1a6157aa4a7cd602bf6ed479333b01ac973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_301fb24f171f6dc7ff6828454bfca1a6157aa4a7cd602bf6ed479333b01ac973->leave($__internal_301fb24f171f6dc7ff6828454bfca1a6157aa4a7cd602bf6ed479333b01ac973_prof);

        
        $__internal_42eca51fea24f1fd27b9644f518691ad594d442708252c0228c1601b4dbe54fd->leave($__internal_42eca51fea24f1fd27b9644f518691ad594d442708252c0228c1601b4dbe54fd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb946d80be5db383c42be4246116e4f62b1f0769253314081bcf732e04d80756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb946d80be5db383c42be4246116e4f62b1f0769253314081bcf732e04d80756->enter($__internal_eb946d80be5db383c42be4246116e4f62b1f0769253314081bcf732e04d80756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81d714c96f28258a2c85dbbe995635ce5b9fd61b0e257b6d0fbcc424d8d896a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d714c96f28258a2c85dbbe995635ce5b9fd61b0e257b6d0fbcc424d8d896a7->enter($__internal_81d714c96f28258a2c85dbbe995635ce5b9fd61b0e257b6d0fbcc424d8d896a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81d714c96f28258a2c85dbbe995635ce5b9fd61b0e257b6d0fbcc424d8d896a7->leave($__internal_81d714c96f28258a2c85dbbe995635ce5b9fd61b0e257b6d0fbcc424d8d896a7_prof);

        
        $__internal_eb946d80be5db383c42be4246116e4f62b1f0769253314081bcf732e04d80756->leave($__internal_eb946d80be5db383c42be4246116e4f62b1f0769253314081bcf732e04d80756_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a8d0962b14c9e98db1a2e44fb93ba7d3fd6c8b1f768a9c7f56a9799b7896028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8d0962b14c9e98db1a2e44fb93ba7d3fd6c8b1f768a9c7f56a9799b7896028->enter($__internal_5a8d0962b14c9e98db1a2e44fb93ba7d3fd6c8b1f768a9c7f56a9799b7896028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f486f555e656cfa89f0fc0196a04cec2ccd8099aadafc3518f358eb7dc59647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f486f555e656cfa89f0fc0196a04cec2ccd8099aadafc3518f358eb7dc59647->enter($__internal_5f486f555e656cfa89f0fc0196a04cec2ccd8099aadafc3518f358eb7dc59647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5f486f555e656cfa89f0fc0196a04cec2ccd8099aadafc3518f358eb7dc59647->leave($__internal_5f486f555e656cfa89f0fc0196a04cec2ccd8099aadafc3518f358eb7dc59647_prof);

        
        $__internal_5a8d0962b14c9e98db1a2e44fb93ba7d3fd6c8b1f768a9c7f56a9799b7896028->leave($__internal_5a8d0962b14c9e98db1a2e44fb93ba7d3fd6c8b1f768a9c7f56a9799b7896028_prof);

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
