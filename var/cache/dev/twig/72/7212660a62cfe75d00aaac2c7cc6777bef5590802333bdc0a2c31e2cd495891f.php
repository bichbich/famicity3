<?php

/* ::admin.html.twig */
class __TwigTemplate_4d8e943089ecd66aadf61d6ae1657d23a5937188a4b157ce08bacabb6064ff75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyApp/Default/indexAdmin.html.twig", "::admin.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyApp/Default/indexAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd45cc70db0184048d83f01d9822c8ecd2dffde7cf6971e56d97032d82c3fd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd45cc70db0184048d83f01d9822c8ecd2dffde7cf6971e56d97032d82c3fd8b->enter($__internal_cd45cc70db0184048d83f01d9822c8ecd2dffde7cf6971e56d97032d82c3fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        $__internal_877851bcba79349c5d102dde409bad8685fecacbdbdccb098b9d0ed6028a1c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877851bcba79349c5d102dde409bad8685fecacbdbdccb098b9d0ed6028a1c53->enter($__internal_877851bcba79349c5d102dde409bad8685fecacbdbdccb098b9d0ed6028a1c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd45cc70db0184048d83f01d9822c8ecd2dffde7cf6971e56d97032d82c3fd8b->leave($__internal_cd45cc70db0184048d83f01d9822c8ecd2dffde7cf6971e56d97032d82c3fd8b_prof);

        
        $__internal_877851bcba79349c5d102dde409bad8685fecacbdbdccb098b9d0ed6028a1c53->leave($__internal_877851bcba79349c5d102dde409bad8685fecacbdbdccb098b9d0ed6028a1c53_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@MyApp/Default/indexAdmin.html.twig\" %}
", "::admin.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/admin.html.twig");
    }
}
