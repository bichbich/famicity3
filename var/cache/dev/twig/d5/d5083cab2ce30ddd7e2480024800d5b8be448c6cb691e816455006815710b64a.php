<?php

/* @MyApp/Default/register.html.twig */
class __TwigTemplate_7fa0f1e983fc12e41f6035199a24f0824c004c33f408b119043722206686af43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MyApp/Default/register.html.twig", 1);
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
        $__internal_384f5fbbc282e18e200d61855ed75ad2f9c83eff7d5103fa8af85c595d7e404b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384f5fbbc282e18e200d61855ed75ad2f9c83eff7d5103fa8af85c595d7e404b->enter($__internal_384f5fbbc282e18e200d61855ed75ad2f9c83eff7d5103fa8af85c595d7e404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/Default/register.html.twig"));

        $__internal_804e3e1a764313ed68f590eb8ba88e6c1b2b11dce81bd3552b99f1ecf98faebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804e3e1a764313ed68f590eb8ba88e6c1b2b11dce81bd3552b99f1ecf98faebb->enter($__internal_804e3e1a764313ed68f590eb8ba88e6c1b2b11dce81bd3552b99f1ecf98faebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/Default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384f5fbbc282e18e200d61855ed75ad2f9c83eff7d5103fa8af85c595d7e404b->leave($__internal_384f5fbbc282e18e200d61855ed75ad2f9c83eff7d5103fa8af85c595d7e404b_prof);

        
        $__internal_804e3e1a764313ed68f590eb8ba88e6c1b2b11dce81bd3552b99f1ecf98faebb->leave($__internal_804e3e1a764313ed68f590eb8ba88e6c1b2b11dce81bd3552b99f1ecf98faebb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4df529bf360a598a9c091f4675fa5aa6d00ddc5d4aac759378bc1d5852d2956e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df529bf360a598a9c091f4675fa5aa6d00ddc5d4aac759378bc1d5852d2956e->enter($__internal_4df529bf360a598a9c091f4675fa5aa6d00ddc5d4aac759378bc1d5852d2956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a738ebd70372c07e24b9e62352b4d8d01c2b9f34deb14701e901a047465a10bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a738ebd70372c07e24b9e62352b4d8d01c2b9f34deb14701e901a047465a10bc->enter($__internal_a738ebd70372c07e24b9e62352b4d8d01c2b9f34deb14701e901a047465a10bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MyApp/Default/register.html.twig", 3)->display($context);
        
        $__internal_a738ebd70372c07e24b9e62352b4d8d01c2b9f34deb14701e901a047465a10bc->leave($__internal_a738ebd70372c07e24b9e62352b4d8d01c2b9f34deb14701e901a047465a10bc_prof);

        
        $__internal_4df529bf360a598a9c091f4675fa5aa6d00ddc5d4aac759378bc1d5852d2956e->leave($__internal_4df529bf360a598a9c091f4675fa5aa6d00ddc5d4aac759378bc1d5852d2956e_prof);

    }

    public function getTemplateName()
    {
        return "@MyApp/Default/register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock %}", "@MyApp/Default/register.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
