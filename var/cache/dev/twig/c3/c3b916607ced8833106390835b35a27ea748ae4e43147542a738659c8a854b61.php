<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_cd186be4184c5d40a0fa32943c969c5dc983261c8c3046b18b4aeb84869d2edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f73797e50bfbf22c72e59fc163b2c11f7bbf94ff7b2f3cab4652cd8cb01d619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f73797e50bfbf22c72e59fc163b2c11f7bbf94ff7b2f3cab4652cd8cb01d619->enter($__internal_2f73797e50bfbf22c72e59fc163b2c11f7bbf94ff7b2f3cab4652cd8cb01d619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_0e2296c7becb0e3992f82c02b845195bb334e370ccd8efd55b088ce9fc3e09e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2296c7becb0e3992f82c02b845195bb334e370ccd8efd55b088ce9fc3e09e6->enter($__internal_0e2296c7becb0e3992f82c02b845195bb334e370ccd8efd55b088ce9fc3e09e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_2f73797e50bfbf22c72e59fc163b2c11f7bbf94ff7b2f3cab4652cd8cb01d619->leave($__internal_2f73797e50bfbf22c72e59fc163b2c11f7bbf94ff7b2f3cab4652cd8cb01d619_prof);

        
        $__internal_0e2296c7becb0e3992f82c02b845195bb334e370ccd8efd55b088ce9fc3e09e6->leave($__internal_0e2296c7becb0e3992f82c02b845195bb334e370ccd8efd55b088ce9fc3e09e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
