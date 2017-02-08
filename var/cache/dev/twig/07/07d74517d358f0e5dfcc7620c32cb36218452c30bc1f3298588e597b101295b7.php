<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d67f447c8bc0bca7694411375148451be238bef24aec0fea109b92485d4f8cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8d30e8c2d86bfa40cdfdfe8178a45e25d08cc8d3a2ea566a8f851974d026adea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d30e8c2d86bfa40cdfdfe8178a45e25d08cc8d3a2ea566a8f851974d026adea->enter($__internal_8d30e8c2d86bfa40cdfdfe8178a45e25d08cc8d3a2ea566a8f851974d026adea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_7de9c5249096ea8a95cd1c39355fc208509dcc56bc73efa47f19f876fddbc875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de9c5249096ea8a95cd1c39355fc208509dcc56bc73efa47f19f876fddbc875->enter($__internal_7de9c5249096ea8a95cd1c39355fc208509dcc56bc73efa47f19f876fddbc875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d30e8c2d86bfa40cdfdfe8178a45e25d08cc8d3a2ea566a8f851974d026adea->leave($__internal_8d30e8c2d86bfa40cdfdfe8178a45e25d08cc8d3a2ea566a8f851974d026adea_prof);

        
        $__internal_7de9c5249096ea8a95cd1c39355fc208509dcc56bc73efa47f19f876fddbc875->leave($__internal_7de9c5249096ea8a95cd1c39355fc208509dcc56bc73efa47f19f876fddbc875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_413e3f181e75546acbd024a2fa2c1e6043e5c65fd05b6eccbaec26efdb35e6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413e3f181e75546acbd024a2fa2c1e6043e5c65fd05b6eccbaec26efdb35e6ca->enter($__internal_413e3f181e75546acbd024a2fa2c1e6043e5c65fd05b6eccbaec26efdb35e6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23873d32ec3ab67e19ea4c6c52b23ece4a003e8d94b1d54f336742638fe8822d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23873d32ec3ab67e19ea4c6c52b23ece4a003e8d94b1d54f336742638fe8822d->enter($__internal_23873d32ec3ab67e19ea4c6c52b23ece4a003e8d94b1d54f336742638fe8822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_23873d32ec3ab67e19ea4c6c52b23ece4a003e8d94b1d54f336742638fe8822d->leave($__internal_23873d32ec3ab67e19ea4c6c52b23ece4a003e8d94b1d54f336742638fe8822d_prof);

        
        $__internal_413e3f181e75546acbd024a2fa2c1e6043e5c65fd05b6eccbaec26efdb35e6ca->leave($__internal_413e3f181e75546acbd024a2fa2c1e6043e5c65fd05b6eccbaec26efdb35e6ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
