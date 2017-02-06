<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_da80f75cc15435226333108f73c639fdc771ae8e65c92c5e28c5ac673ba10f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3764c752ec61dbcc4c9055b21177728614331d0388531f733cc36b0794afb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3764c752ec61dbcc4c9055b21177728614331d0388531f733cc36b0794afb6f->enter($__internal_d3764c752ec61dbcc4c9055b21177728614331d0388531f733cc36b0794afb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_f7a5d2235d3b62c32d46cafa31ea2016e1a77384af135df716bfbce27cab8585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a5d2235d3b62c32d46cafa31ea2016e1a77384af135df716bfbce27cab8585->enter($__internal_f7a5d2235d3b62c32d46cafa31ea2016e1a77384af135df716bfbce27cab8585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3764c752ec61dbcc4c9055b21177728614331d0388531f733cc36b0794afb6f->leave($__internal_d3764c752ec61dbcc4c9055b21177728614331d0388531f733cc36b0794afb6f_prof);

        
        $__internal_f7a5d2235d3b62c32d46cafa31ea2016e1a77384af135df716bfbce27cab8585->leave($__internal_f7a5d2235d3b62c32d46cafa31ea2016e1a77384af135df716bfbce27cab8585_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac3190bf6722e357ecb3dfec9f65e347149be06a37163d7c18aa7edc65fdbcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3190bf6722e357ecb3dfec9f65e347149be06a37163d7c18aa7edc65fdbcba->enter($__internal_ac3190bf6722e357ecb3dfec9f65e347149be06a37163d7c18aa7edc65fdbcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c69db1cb70b4f4eef9f5141868a5a0e6ab19c91096a5b0f5ad92793555abba09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69db1cb70b4f4eef9f5141868a5a0e6ab19c91096a5b0f5ad92793555abba09->enter($__internal_c69db1cb70b4f4eef9f5141868a5a0e6ab19c91096a5b0f5ad92793555abba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c69db1cb70b4f4eef9f5141868a5a0e6ab19c91096a5b0f5ad92793555abba09->leave($__internal_c69db1cb70b4f4eef9f5141868a5a0e6ab19c91096a5b0f5ad92793555abba09_prof);

        
        $__internal_ac3190bf6722e357ecb3dfec9f65e347149be06a37163d7c18aa7edc65fdbcba->leave($__internal_ac3190bf6722e357ecb3dfec9f65e347149be06a37163d7c18aa7edc65fdbcba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
