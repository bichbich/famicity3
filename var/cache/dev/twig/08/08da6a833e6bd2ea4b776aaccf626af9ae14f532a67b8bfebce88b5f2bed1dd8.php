<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_98a9f5d1a5f7c5aabbabe3548badccf95e3d1ebb0b97ed4bcb89fdb31b0003cb extends Twig_Template
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
        $__internal_cac65f11fd6a35e888293900b55923d9a635c1c9e2ef5d4aee5cb25b4bd9c750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac65f11fd6a35e888293900b55923d9a635c1c9e2ef5d4aee5cb25b4bd9c750->enter($__internal_cac65f11fd6a35e888293900b55923d9a635c1c9e2ef5d4aee5cb25b4bd9c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_802d17ad73a18140b1a6ca7ba6596fb17c14fd4c8661bf7e58942ce1bcf09b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802d17ad73a18140b1a6ca7ba6596fb17c14fd4c8661bf7e58942ce1bcf09b74->enter($__internal_802d17ad73a18140b1a6ca7ba6596fb17c14fd4c8661bf7e58942ce1bcf09b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac65f11fd6a35e888293900b55923d9a635c1c9e2ef5d4aee5cb25b4bd9c750->leave($__internal_cac65f11fd6a35e888293900b55923d9a635c1c9e2ef5d4aee5cb25b4bd9c750_prof);

        
        $__internal_802d17ad73a18140b1a6ca7ba6596fb17c14fd4c8661bf7e58942ce1bcf09b74->leave($__internal_802d17ad73a18140b1a6ca7ba6596fb17c14fd4c8661bf7e58942ce1bcf09b74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6e13c6f1824bcebdd4c8735c66bc123eae068e75521a0bc1d8855c26d146fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e13c6f1824bcebdd4c8735c66bc123eae068e75521a0bc1d8855c26d146fe8->enter($__internal_d6e13c6f1824bcebdd4c8735c66bc123eae068e75521a0bc1d8855c26d146fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79a32770059b3939410665be35f9f508db28dbef8e7b09ec11b7efb56badd223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a32770059b3939410665be35f9f508db28dbef8e7b09ec11b7efb56badd223->enter($__internal_79a32770059b3939410665be35f9f508db28dbef8e7b09ec11b7efb56badd223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_79a32770059b3939410665be35f9f508db28dbef8e7b09ec11b7efb56badd223->leave($__internal_79a32770059b3939410665be35f9f508db28dbef8e7b09ec11b7efb56badd223_prof);

        
        $__internal_d6e13c6f1824bcebdd4c8735c66bc123eae068e75521a0bc1d8855c26d146fe8->leave($__internal_d6e13c6f1824bcebdd4c8735c66bc123eae068e75521a0bc1d8855c26d146fe8_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
