<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_801e1b6cfb89a315c15571abe1a24ff5bef9176aed04f5044fca008d05079315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_079abe7f137f6093dfecbaea17386c731aa0bc097be87629e2244fb21a047a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079abe7f137f6093dfecbaea17386c731aa0bc097be87629e2244fb21a047a66->enter($__internal_079abe7f137f6093dfecbaea17386c731aa0bc097be87629e2244fb21a047a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_fe4fe29a9795e7e59d2e12b8a221acf3b4faf55fc423a321bbe0be9d3b9fb322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4fe29a9795e7e59d2e12b8a221acf3b4faf55fc423a321bbe0be9d3b9fb322->enter($__internal_fe4fe29a9795e7e59d2e12b8a221acf3b4faf55fc423a321bbe0be9d3b9fb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079abe7f137f6093dfecbaea17386c731aa0bc097be87629e2244fb21a047a66->leave($__internal_079abe7f137f6093dfecbaea17386c731aa0bc097be87629e2244fb21a047a66_prof);

        
        $__internal_fe4fe29a9795e7e59d2e12b8a221acf3b4faf55fc423a321bbe0be9d3b9fb322->leave($__internal_fe4fe29a9795e7e59d2e12b8a221acf3b4faf55fc423a321bbe0be9d3b9fb322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0678a39791ebbce3045cffd388d12581276b0ebe890da56e10611b5ecf6ab763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0678a39791ebbce3045cffd388d12581276b0ebe890da56e10611b5ecf6ab763->enter($__internal_0678a39791ebbce3045cffd388d12581276b0ebe890da56e10611b5ecf6ab763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54fdd687741f48600b390b5f42fb21f46e2d48b604b6a374f2407e5197891978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fdd687741f48600b390b5f42fb21f46e2d48b604b6a374f2407e5197891978->enter($__internal_54fdd687741f48600b390b5f42fb21f46e2d48b604b6a374f2407e5197891978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_54fdd687741f48600b390b5f42fb21f46e2d48b604b6a374f2407e5197891978->leave($__internal_54fdd687741f48600b390b5f42fb21f46e2d48b604b6a374f2407e5197891978_prof);

        
        $__internal_0678a39791ebbce3045cffd388d12581276b0ebe890da56e10611b5ecf6ab763->leave($__internal_0678a39791ebbce3045cffd388d12581276b0ebe890da56e10611b5ecf6ab763_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
