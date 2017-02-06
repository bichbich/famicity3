<?php

/* @MyApp/FOS/views/Registration/register.html.twig */
class __TwigTemplate_a906982d222bb3e8141db9c6dd57a959bee409f9090cabd0ebaf58cc77624b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MyApp/FOS/views/Registration/register.html.twig", 1);
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
        $__internal_172d4b7acc3d345656ba30d5a7532e8eed427fe0e2bdb1077aea6546be3def77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172d4b7acc3d345656ba30d5a7532e8eed427fe0e2bdb1077aea6546be3def77->enter($__internal_172d4b7acc3d345656ba30d5a7532e8eed427fe0e2bdb1077aea6546be3def77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/FOS/views/Registration/register.html.twig"));

        $__internal_1b2f2ec3301bd18316b9b533e2dd1633d39c4beb7e83a4d1fc2a1fbce6abbaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2f2ec3301bd18316b9b533e2dd1633d39c4beb7e83a4d1fc2a1fbce6abbaca->enter($__internal_1b2f2ec3301bd18316b9b533e2dd1633d39c4beb7e83a4d1fc2a1fbce6abbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/FOS/views/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172d4b7acc3d345656ba30d5a7532e8eed427fe0e2bdb1077aea6546be3def77->leave($__internal_172d4b7acc3d345656ba30d5a7532e8eed427fe0e2bdb1077aea6546be3def77_prof);

        
        $__internal_1b2f2ec3301bd18316b9b533e2dd1633d39c4beb7e83a4d1fc2a1fbce6abbaca->leave($__internal_1b2f2ec3301bd18316b9b533e2dd1633d39c4beb7e83a4d1fc2a1fbce6abbaca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7adc1c9d39ad3ecd63baa8e8b59f65c03978cb723190e36865b3e87c1e6200c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7adc1c9d39ad3ecd63baa8e8b59f65c03978cb723190e36865b3e87c1e6200c->enter($__internal_d7adc1c9d39ad3ecd63baa8e8b59f65c03978cb723190e36865b3e87c1e6200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6aac67f42b4190d2baaed13b83c7dc9eafe432de7ef196305834f060b8a5259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6aac67f42b4190d2baaed13b83c7dc9eafe432de7ef196305834f060b8a5259->enter($__internal_f6aac67f42b4190d2baaed13b83c7dc9eafe432de7ef196305834f060b8a5259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MyApp/FOS/views/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f6aac67f42b4190d2baaed13b83c7dc9eafe432de7ef196305834f060b8a5259->leave($__internal_f6aac67f42b4190d2baaed13b83c7dc9eafe432de7ef196305834f060b8a5259_prof);

        
        $__internal_d7adc1c9d39ad3ecd63baa8e8b59f65c03978cb723190e36865b3e87c1e6200c->leave($__internal_d7adc1c9d39ad3ecd63baa8e8b59f65c03978cb723190e36865b3e87c1e6200c_prof);

    }

    public function getTemplateName()
    {
        return "@MyApp/FOS/views/Registration/register.html.twig";
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
", "@MyApp/FOS/views/Registration/register.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle\\Resources\\views\\FOS\\views\\Registration\\register.html.twig");
    }
}
