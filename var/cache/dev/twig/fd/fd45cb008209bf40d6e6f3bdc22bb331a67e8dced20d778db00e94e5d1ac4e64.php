<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_11beddc4e1f1e1082603837fba633e52f5d3d291b7d42fd00f497453a9202888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_283127dcfd4a0a508840fb4f707990e573991ffdcdc80e9d27f8bad4a7b01538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283127dcfd4a0a508840fb4f707990e573991ffdcdc80e9d27f8bad4a7b01538->enter($__internal_283127dcfd4a0a508840fb4f707990e573991ffdcdc80e9d27f8bad4a7b01538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ed0bc24148db3cfb60e419c9365a91fd073b06a7e4d32c4a9b2563833b05134d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0bc24148db3cfb60e419c9365a91fd073b06a7e4d32c4a9b2563833b05134d->enter($__internal_ed0bc24148db3cfb60e419c9365a91fd073b06a7e4d32c4a9b2563833b05134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283127dcfd4a0a508840fb4f707990e573991ffdcdc80e9d27f8bad4a7b01538->leave($__internal_283127dcfd4a0a508840fb4f707990e573991ffdcdc80e9d27f8bad4a7b01538_prof);

        
        $__internal_ed0bc24148db3cfb60e419c9365a91fd073b06a7e4d32c4a9b2563833b05134d->leave($__internal_ed0bc24148db3cfb60e419c9365a91fd073b06a7e4d32c4a9b2563833b05134d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8f1b2f9d5bbd9dd33ce9e0de1100d55498831dc01665d9f869bdba9bd6a1ef53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1b2f9d5bbd9dd33ce9e0de1100d55498831dc01665d9f869bdba9bd6a1ef53->enter($__internal_8f1b2f9d5bbd9dd33ce9e0de1100d55498831dc01665d9f869bdba9bd6a1ef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6bb8a192786cbee4f89fe53cba3deb2f84725b38d26581cac01312cec9131b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb8a192786cbee4f89fe53cba3deb2f84725b38d26581cac01312cec9131b49->enter($__internal_6bb8a192786cbee4f89fe53cba3deb2f84725b38d26581cac01312cec9131b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6bb8a192786cbee4f89fe53cba3deb2f84725b38d26581cac01312cec9131b49->leave($__internal_6bb8a192786cbee4f89fe53cba3deb2f84725b38d26581cac01312cec9131b49_prof);

        
        $__internal_8f1b2f9d5bbd9dd33ce9e0de1100d55498831dc01665d9f869bdba9bd6a1ef53->leave($__internal_8f1b2f9d5bbd9dd33ce9e0de1100d55498831dc01665d9f869bdba9bd6a1ef53_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fa6bec2342effa963cc0430d04a2cc144381b92c66bc68a80e760f798b0453b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa6bec2342effa963cc0430d04a2cc144381b92c66bc68a80e760f798b0453b->enter($__internal_2fa6bec2342effa963cc0430d04a2cc144381b92c66bc68a80e760f798b0453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f02b2af68a20717565a68dc1d25b9449df1a0c88eee614bc4d5d3a0edbb12bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f02b2af68a20717565a68dc1d25b9449df1a0c88eee614bc4d5d3a0edbb12bf->enter($__internal_7f02b2af68a20717565a68dc1d25b9449df1a0c88eee614bc4d5d3a0edbb12bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7f02b2af68a20717565a68dc1d25b9449df1a0c88eee614bc4d5d3a0edbb12bf->leave($__internal_7f02b2af68a20717565a68dc1d25b9449df1a0c88eee614bc4d5d3a0edbb12bf_prof);

        
        $__internal_2fa6bec2342effa963cc0430d04a2cc144381b92c66bc68a80e760f798b0453b->leave($__internal_2fa6bec2342effa963cc0430d04a2cc144381b92c66bc68a80e760f798b0453b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
