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
        $__internal_8fe8e2a3964467de45c36b9b2fe5e2fcd2e03a22bfdee2de20f8f4cb60ac5e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe8e2a3964467de45c36b9b2fe5e2fcd2e03a22bfdee2de20f8f4cb60ac5e59->enter($__internal_8fe8e2a3964467de45c36b9b2fe5e2fcd2e03a22bfdee2de20f8f4cb60ac5e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_51c2013f0536c248d224d32f1c7ff1980268e8d65f2a003f7aa601c6f065ca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c2013f0536c248d224d32f1c7ff1980268e8d65f2a003f7aa601c6f065ca1d->enter($__internal_51c2013f0536c248d224d32f1c7ff1980268e8d65f2a003f7aa601c6f065ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe8e2a3964467de45c36b9b2fe5e2fcd2e03a22bfdee2de20f8f4cb60ac5e59->leave($__internal_8fe8e2a3964467de45c36b9b2fe5e2fcd2e03a22bfdee2de20f8f4cb60ac5e59_prof);

        
        $__internal_51c2013f0536c248d224d32f1c7ff1980268e8d65f2a003f7aa601c6f065ca1d->leave($__internal_51c2013f0536c248d224d32f1c7ff1980268e8d65f2a003f7aa601c6f065ca1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1df1b667eea28e8dfe92ee7f07fb6520e5ad103ea91c0d484dd570b28e6737d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1df1b667eea28e8dfe92ee7f07fb6520e5ad103ea91c0d484dd570b28e6737d->enter($__internal_d1df1b667eea28e8dfe92ee7f07fb6520e5ad103ea91c0d484dd570b28e6737d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20ebe9a2623ad7a4d801de8d8c93242b6371020cc1e324797f0665eebb2f0df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ebe9a2623ad7a4d801de8d8c93242b6371020cc1e324797f0665eebb2f0df0->enter($__internal_20ebe9a2623ad7a4d801de8d8c93242b6371020cc1e324797f0665eebb2f0df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_20ebe9a2623ad7a4d801de8d8c93242b6371020cc1e324797f0665eebb2f0df0->leave($__internal_20ebe9a2623ad7a4d801de8d8c93242b6371020cc1e324797f0665eebb2f0df0_prof);

        
        $__internal_d1df1b667eea28e8dfe92ee7f07fb6520e5ad103ea91c0d484dd570b28e6737d->leave($__internal_d1df1b667eea28e8dfe92ee7f07fb6520e5ad103ea91c0d484dd570b28e6737d_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
