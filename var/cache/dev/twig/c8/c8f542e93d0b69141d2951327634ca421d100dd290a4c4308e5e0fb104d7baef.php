<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b09f57a6ecb55023ac7341480f5f9e1414848067d622d318b183e4799284acc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_87a8b2a07eeaf23624f30d9ccf2c4802c17dbfa40d2b2de906f2583e73017be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a8b2a07eeaf23624f30d9ccf2c4802c17dbfa40d2b2de906f2583e73017be5->enter($__internal_87a8b2a07eeaf23624f30d9ccf2c4802c17dbfa40d2b2de906f2583e73017be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_61366c6c71fce59f9aac67a1dfc3577ef9d233fdd88a97f2e7005015f9272ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61366c6c71fce59f9aac67a1dfc3577ef9d233fdd88a97f2e7005015f9272ac2->enter($__internal_61366c6c71fce59f9aac67a1dfc3577ef9d233fdd88a97f2e7005015f9272ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a8b2a07eeaf23624f30d9ccf2c4802c17dbfa40d2b2de906f2583e73017be5->leave($__internal_87a8b2a07eeaf23624f30d9ccf2c4802c17dbfa40d2b2de906f2583e73017be5_prof);

        
        $__internal_61366c6c71fce59f9aac67a1dfc3577ef9d233fdd88a97f2e7005015f9272ac2->leave($__internal_61366c6c71fce59f9aac67a1dfc3577ef9d233fdd88a97f2e7005015f9272ac2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f58fd5ec63811720f9f63cb50454f7518634fdce335505fbe6ba193f6158ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f58fd5ec63811720f9f63cb50454f7518634fdce335505fbe6ba193f6158ecc->enter($__internal_9f58fd5ec63811720f9f63cb50454f7518634fdce335505fbe6ba193f6158ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c11b7089e22d7ab6f379f7705eabb916cbe8177a2cd8bc8bba0c817d33c2e5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11b7089e22d7ab6f379f7705eabb916cbe8177a2cd8bc8bba0c817d33c2e5ae->enter($__internal_c11b7089e22d7ab6f379f7705eabb916cbe8177a2cd8bc8bba0c817d33c2e5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c11b7089e22d7ab6f379f7705eabb916cbe8177a2cd8bc8bba0c817d33c2e5ae->leave($__internal_c11b7089e22d7ab6f379f7705eabb916cbe8177a2cd8bc8bba0c817d33c2e5ae_prof);

        
        $__internal_9f58fd5ec63811720f9f63cb50454f7518634fdce335505fbe6ba193f6158ecc->leave($__internal_9f58fd5ec63811720f9f63cb50454f7518634fdce335505fbe6ba193f6158ecc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
