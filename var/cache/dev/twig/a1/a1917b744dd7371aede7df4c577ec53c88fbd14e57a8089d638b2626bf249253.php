<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b4d3ae379af6aa4d73170482db78f6218e1c05f51a145f83c95c75774169ea28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_fa92d8824bcd9b2c8c48565d564d74961cb795fa74f02c630f3ad3ae81f20be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa92d8824bcd9b2c8c48565d564d74961cb795fa74f02c630f3ad3ae81f20be4->enter($__internal_fa92d8824bcd9b2c8c48565d564d74961cb795fa74f02c630f3ad3ae81f20be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_8cdbcd10d4c9dddec12e6d11b2ba8a3bc5244e39ef12ca83cfbd25d16b06d635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdbcd10d4c9dddec12e6d11b2ba8a3bc5244e39ef12ca83cfbd25d16b06d635->enter($__internal_8cdbcd10d4c9dddec12e6d11b2ba8a3bc5244e39ef12ca83cfbd25d16b06d635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa92d8824bcd9b2c8c48565d564d74961cb795fa74f02c630f3ad3ae81f20be4->leave($__internal_fa92d8824bcd9b2c8c48565d564d74961cb795fa74f02c630f3ad3ae81f20be4_prof);

        
        $__internal_8cdbcd10d4c9dddec12e6d11b2ba8a3bc5244e39ef12ca83cfbd25d16b06d635->leave($__internal_8cdbcd10d4c9dddec12e6d11b2ba8a3bc5244e39ef12ca83cfbd25d16b06d635_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2233872baf383696a8e0d43570bc931fb927af6ca9c930be494ad79d73c13fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2233872baf383696a8e0d43570bc931fb927af6ca9c930be494ad79d73c13fbb->enter($__internal_2233872baf383696a8e0d43570bc931fb927af6ca9c930be494ad79d73c13fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e223a03dc3c5c297e476b4854a585f39aa70387b7a61865888eedc29fea35e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e223a03dc3c5c297e476b4854a585f39aa70387b7a61865888eedc29fea35e4d->enter($__internal_e223a03dc3c5c297e476b4854a585f39aa70387b7a61865888eedc29fea35e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e223a03dc3c5c297e476b4854a585f39aa70387b7a61865888eedc29fea35e4d->leave($__internal_e223a03dc3c5c297e476b4854a585f39aa70387b7a61865888eedc29fea35e4d_prof);

        
        $__internal_2233872baf383696a8e0d43570bc931fb927af6ca9c930be494ad79d73c13fbb->leave($__internal_2233872baf383696a8e0d43570bc931fb927af6ca9c930be494ad79d73c13fbb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
