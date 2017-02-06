<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_be6cfeb15dd0f3dec35e9cd8113f183dfef5e751b02cec0aa3e0a93ed208727e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_3053c6c8a02694bba2c09320680c241c4420cb8b45a1841b395c5ae2cc146264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3053c6c8a02694bba2c09320680c241c4420cb8b45a1841b395c5ae2cc146264->enter($__internal_3053c6c8a02694bba2c09320680c241c4420cb8b45a1841b395c5ae2cc146264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_7a606e206be2c0c0a2a08f278baa882bb8c93f2e8291b39148f1bfe7998ce07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a606e206be2c0c0a2a08f278baa882bb8c93f2e8291b39148f1bfe7998ce07f->enter($__internal_7a606e206be2c0c0a2a08f278baa882bb8c93f2e8291b39148f1bfe7998ce07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3053c6c8a02694bba2c09320680c241c4420cb8b45a1841b395c5ae2cc146264->leave($__internal_3053c6c8a02694bba2c09320680c241c4420cb8b45a1841b395c5ae2cc146264_prof);

        
        $__internal_7a606e206be2c0c0a2a08f278baa882bb8c93f2e8291b39148f1bfe7998ce07f->leave($__internal_7a606e206be2c0c0a2a08f278baa882bb8c93f2e8291b39148f1bfe7998ce07f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1ca0a1432dff2f4fc2fca6058b98fc8d3d8d9f0652e2ac358fd69b99b410446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ca0a1432dff2f4fc2fca6058b98fc8d3d8d9f0652e2ac358fd69b99b410446->enter($__internal_c1ca0a1432dff2f4fc2fca6058b98fc8d3d8d9f0652e2ac358fd69b99b410446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a012abc9f66509dbbe9fc30602447217f314ea2d7c1391a15ff7ff6035616567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a012abc9f66509dbbe9fc30602447217f314ea2d7c1391a15ff7ff6035616567->enter($__internal_a012abc9f66509dbbe9fc30602447217f314ea2d7c1391a15ff7ff6035616567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a012abc9f66509dbbe9fc30602447217f314ea2d7c1391a15ff7ff6035616567->leave($__internal_a012abc9f66509dbbe9fc30602447217f314ea2d7c1391a15ff7ff6035616567_prof);

        
        $__internal_c1ca0a1432dff2f4fc2fca6058b98fc8d3d8d9f0652e2ac358fd69b99b410446->leave($__internal_c1ca0a1432dff2f4fc2fca6058b98fc8d3d8d9f0652e2ac358fd69b99b410446_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
