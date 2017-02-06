<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11ebcee873e77cf1a82c05c481743450d25729f7497f829dc4b3176696aba47b extends Twig_Template
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
        $__internal_cd694b871b00d0c1d1f505602fd0fe61dff37c551e834048ea5a3fb75c63d1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd694b871b00d0c1d1f505602fd0fe61dff37c551e834048ea5a3fb75c63d1ac->enter($__internal_cd694b871b00d0c1d1f505602fd0fe61dff37c551e834048ea5a3fb75c63d1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d6dbcdb71e8eda1ebb2cc284de06f5c22fef4cc80d89d42aea347e9603a23e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dbcdb71e8eda1ebb2cc284de06f5c22fef4cc80d89d42aea347e9603a23e47->enter($__internal_d6dbcdb71e8eda1ebb2cc284de06f5c22fef4cc80d89d42aea347e9603a23e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd694b871b00d0c1d1f505602fd0fe61dff37c551e834048ea5a3fb75c63d1ac->leave($__internal_cd694b871b00d0c1d1f505602fd0fe61dff37c551e834048ea5a3fb75c63d1ac_prof);

        
        $__internal_d6dbcdb71e8eda1ebb2cc284de06f5c22fef4cc80d89d42aea347e9603a23e47->leave($__internal_d6dbcdb71e8eda1ebb2cc284de06f5c22fef4cc80d89d42aea347e9603a23e47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb0cb8489044bc861db2e33085dd681bc0100114154ca03bc4a8ae9951aa37f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0cb8489044bc861db2e33085dd681bc0100114154ca03bc4a8ae9951aa37f8->enter($__internal_fb0cb8489044bc861db2e33085dd681bc0100114154ca03bc4a8ae9951aa37f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb5f35509589ba0c2c54c4afa6326e588877809e206b30d31e6fe8800e2264b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5f35509589ba0c2c54c4afa6326e588877809e206b30d31e6fe8800e2264b0->enter($__internal_cb5f35509589ba0c2c54c4afa6326e588877809e206b30d31e6fe8800e2264b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cb5f35509589ba0c2c54c4afa6326e588877809e206b30d31e6fe8800e2264b0->leave($__internal_cb5f35509589ba0c2c54c4afa6326e588877809e206b30d31e6fe8800e2264b0_prof);

        
        $__internal_fb0cb8489044bc861db2e33085dd681bc0100114154ca03bc4a8ae9951aa37f8->leave($__internal_fb0cb8489044bc861db2e33085dd681bc0100114154ca03bc4a8ae9951aa37f8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_96d4f91062cb8de2c51f478760416d8c2ac8b2c66bd020dd01014c886ceadbbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d4f91062cb8de2c51f478760416d8c2ac8b2c66bd020dd01014c886ceadbbd->enter($__internal_96d4f91062cb8de2c51f478760416d8c2ac8b2c66bd020dd01014c886ceadbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b30f38f8fd6f114eb94d09b676abe132ab893c6ddf4b26cc9119424b47c03ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30f38f8fd6f114eb94d09b676abe132ab893c6ddf4b26cc9119424b47c03ea1->enter($__internal_b30f38f8fd6f114eb94d09b676abe132ab893c6ddf4b26cc9119424b47c03ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b30f38f8fd6f114eb94d09b676abe132ab893c6ddf4b26cc9119424b47c03ea1->leave($__internal_b30f38f8fd6f114eb94d09b676abe132ab893c6ddf4b26cc9119424b47c03ea1_prof);

        
        $__internal_96d4f91062cb8de2c51f478760416d8c2ac8b2c66bd020dd01014c886ceadbbd->leave($__internal_96d4f91062cb8de2c51f478760416d8c2ac8b2c66bd020dd01014c886ceadbbd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_811651328040dc75e83afc812838e445b037d7b3553846f47e1588b408667138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811651328040dc75e83afc812838e445b037d7b3553846f47e1588b408667138->enter($__internal_811651328040dc75e83afc812838e445b037d7b3553846f47e1588b408667138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a1a3626b3f4fb5fec9c712558f42b63179f9839522f2c89eb6c9ad53237c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a1a3626b3f4fb5fec9c712558f42b63179f9839522f2c89eb6c9ad53237c38->enter($__internal_d3a1a3626b3f4fb5fec9c712558f42b63179f9839522f2c89eb6c9ad53237c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3a1a3626b3f4fb5fec9c712558f42b63179f9839522f2c89eb6c9ad53237c38->leave($__internal_d3a1a3626b3f4fb5fec9c712558f42b63179f9839522f2c89eb6c9ad53237c38_prof);

        
        $__internal_811651328040dc75e83afc812838e445b037d7b3553846f47e1588b408667138->leave($__internal_811651328040dc75e83afc812838e445b037d7b3553846f47e1588b408667138_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
