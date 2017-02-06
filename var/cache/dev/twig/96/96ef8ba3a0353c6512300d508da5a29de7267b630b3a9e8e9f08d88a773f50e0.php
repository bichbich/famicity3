<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3524469227c935bca055e4dfa9e3e1fcdd51cee6845ae703da57379029e1efce extends Twig_Template
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
        $__internal_03b2d668ec8fa4bf3c039350101955787fa59aebe7338e5cc71fc83719470648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b2d668ec8fa4bf3c039350101955787fa59aebe7338e5cc71fc83719470648->enter($__internal_03b2d668ec8fa4bf3c039350101955787fa59aebe7338e5cc71fc83719470648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a145c37348ff327e6f781dbb1e7a73b2dc8e14e6b7eb142378326b8ebb8af4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a145c37348ff327e6f781dbb1e7a73b2dc8e14e6b7eb142378326b8ebb8af4fc->enter($__internal_a145c37348ff327e6f781dbb1e7a73b2dc8e14e6b7eb142378326b8ebb8af4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b2d668ec8fa4bf3c039350101955787fa59aebe7338e5cc71fc83719470648->leave($__internal_03b2d668ec8fa4bf3c039350101955787fa59aebe7338e5cc71fc83719470648_prof);

        
        $__internal_a145c37348ff327e6f781dbb1e7a73b2dc8e14e6b7eb142378326b8ebb8af4fc->leave($__internal_a145c37348ff327e6f781dbb1e7a73b2dc8e14e6b7eb142378326b8ebb8af4fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7afde88c608e4d9603d405cba0984d2216420b98e669856584480f455996633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7afde88c608e4d9603d405cba0984d2216420b98e669856584480f455996633->enter($__internal_f7afde88c608e4d9603d405cba0984d2216420b98e669856584480f455996633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2be747bdae5e616b8bef3cca4f901fb6a52f20f6e23f7684902d4cdcada1f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2be747bdae5e616b8bef3cca4f901fb6a52f20f6e23f7684902d4cdcada1f75->enter($__internal_c2be747bdae5e616b8bef3cca4f901fb6a52f20f6e23f7684902d4cdcada1f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c2be747bdae5e616b8bef3cca4f901fb6a52f20f6e23f7684902d4cdcada1f75->leave($__internal_c2be747bdae5e616b8bef3cca4f901fb6a52f20f6e23f7684902d4cdcada1f75_prof);

        
        $__internal_f7afde88c608e4d9603d405cba0984d2216420b98e669856584480f455996633->leave($__internal_f7afde88c608e4d9603d405cba0984d2216420b98e669856584480f455996633_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
