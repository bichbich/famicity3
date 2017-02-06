<?php

/* MyAppBundle:Default:login.html.twig */
class __TwigTemplate_4baf44d04cb87e3206f77e40aff62c2c4416bab613e3289f4075afd2d3e2ac8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb6784c6e5c28aefbb5e8737800ea6456d77bde87f6f2b2c6f8572f68785a271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6784c6e5c28aefbb5e8737800ea6456d77bde87f6f2b2c6f8572f68785a271->enter($__internal_fb6784c6e5c28aefbb5e8737800ea6456d77bde87f6f2b2c6f8572f68785a271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:login.html.twig"));

        $__internal_d9fa3a6a2c9dddc1b06423a5ac26d2aa21ea5768593617e2742cba1b157572a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fa3a6a2c9dddc1b06423a5ac26d2aa21ea5768593617e2742cba1b157572a0->enter($__internal_d9fa3a6a2c9dddc1b06423a5ac26d2aa21ea5768593617e2742cba1b157572a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6784c6e5c28aefbb5e8737800ea6456d77bde87f6f2b2c6f8572f68785a271->leave($__internal_fb6784c6e5c28aefbb5e8737800ea6456d77bde87f6f2b2c6f8572f68785a271_prof);

        
        $__internal_d9fa3a6a2c9dddc1b06423a5ac26d2aa21ea5768593617e2742cba1b157572a0->leave($__internal_d9fa3a6a2c9dddc1b06423a5ac26d2aa21ea5768593617e2742cba1b157572a0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b4299f09c2812905be3badc3078c1f06ec1af131a71b3e4bc075ff3741c8ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4299f09c2812905be3badc3078c1f06ec1af131a71b3e4bc075ff3741c8ce9->enter($__internal_2b4299f09c2812905be3badc3078c1f06ec1af131a71b3e4bc075ff3741c8ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_771236975817159009b0c24efcfb082b1ddcf1820c1733276a055b746a936596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771236975817159009b0c24efcfb082b1ddcf1820c1733276a055b746a936596->enter($__internal_771236975817159009b0c24efcfb082b1ddcf1820c1733276a055b746a936596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_771236975817159009b0c24efcfb082b1ddcf1820c1733276a055b746a936596->leave($__internal_771236975817159009b0c24efcfb082b1ddcf1820c1733276a055b746a936596_prof);

        
        $__internal_2b4299f09c2812905be3badc3078c1f06ec1af131a71b3e4bc075ff3741c8ce9->leave($__internal_2b4299f09c2812905be3badc3078c1f06ec1af131a71b3e4bc075ff3741c8ce9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock %}", "MyAppBundle:Default:login.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/login.html.twig");
    }
}
