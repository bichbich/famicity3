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
        $__internal_79c19c408aacd6f95865fd9840e5cc9370ed9a9a95ca5cc6cdce1a7570796066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c19c408aacd6f95865fd9840e5cc9370ed9a9a95ca5cc6cdce1a7570796066->enter($__internal_79c19c408aacd6f95865fd9840e5cc9370ed9a9a95ca5cc6cdce1a7570796066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_507a3d27fe162fdf8eaa6d7b2cc818c7a30840f2d127b5d8110c7a038ca2549f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507a3d27fe162fdf8eaa6d7b2cc818c7a30840f2d127b5d8110c7a038ca2549f->enter($__internal_507a3d27fe162fdf8eaa6d7b2cc818c7a30840f2d127b5d8110c7a038ca2549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c19c408aacd6f95865fd9840e5cc9370ed9a9a95ca5cc6cdce1a7570796066->leave($__internal_79c19c408aacd6f95865fd9840e5cc9370ed9a9a95ca5cc6cdce1a7570796066_prof);

        
        $__internal_507a3d27fe162fdf8eaa6d7b2cc818c7a30840f2d127b5d8110c7a038ca2549f->leave($__internal_507a3d27fe162fdf8eaa6d7b2cc818c7a30840f2d127b5d8110c7a038ca2549f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f3c1a5ac3707732ce785f98069ab30a2516754f8ba4d54b280bba4083b8410e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3c1a5ac3707732ce785f98069ab30a2516754f8ba4d54b280bba4083b8410e->enter($__internal_1f3c1a5ac3707732ce785f98069ab30a2516754f8ba4d54b280bba4083b8410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1db243b48d847e68edc189143b1feade8e1a6e568d01f5f06bc566b62f1caacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db243b48d847e68edc189143b1feade8e1a6e568d01f5f06bc566b62f1caacb->enter($__internal_1db243b48d847e68edc189143b1feade8e1a6e568d01f5f06bc566b62f1caacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1db243b48d847e68edc189143b1feade8e1a6e568d01f5f06bc566b62f1caacb->leave($__internal_1db243b48d847e68edc189143b1feade8e1a6e568d01f5f06bc566b62f1caacb_prof);

        
        $__internal_1f3c1a5ac3707732ce785f98069ab30a2516754f8ba4d54b280bba4083b8410e->leave($__internal_1f3c1a5ac3707732ce785f98069ab30a2516754f8ba4d54b280bba4083b8410e_prof);

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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
