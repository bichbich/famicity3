<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_3dc5c198eb731fd90038a5b02069147752558cf95a85e83e1dfc9d518def5b45 extends Twig_Template
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
        $__internal_2722a161cde3ca6712fa30caf46f2a0783903d037ebe95e5061893a1c7bf167f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2722a161cde3ca6712fa30caf46f2a0783903d037ebe95e5061893a1c7bf167f->enter($__internal_2722a161cde3ca6712fa30caf46f2a0783903d037ebe95e5061893a1c7bf167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_748e7a5e4a7e2d596787c7030eb03188f350a9d00abd122b45f60d3303abc117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748e7a5e4a7e2d596787c7030eb03188f350a9d00abd122b45f60d3303abc117->enter($__internal_748e7a5e4a7e2d596787c7030eb03188f350a9d00abd122b45f60d3303abc117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2722a161cde3ca6712fa30caf46f2a0783903d037ebe95e5061893a1c7bf167f->leave($__internal_2722a161cde3ca6712fa30caf46f2a0783903d037ebe95e5061893a1c7bf167f_prof);

        
        $__internal_748e7a5e4a7e2d596787c7030eb03188f350a9d00abd122b45f60d3303abc117->leave($__internal_748e7a5e4a7e2d596787c7030eb03188f350a9d00abd122b45f60d3303abc117_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_902c195991e1bec1d9d8679be54431ee60677846f6003a3b49de00812370fd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902c195991e1bec1d9d8679be54431ee60677846f6003a3b49de00812370fd5e->enter($__internal_902c195991e1bec1d9d8679be54431ee60677846f6003a3b49de00812370fd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85bc4951e0ac7fdff6925c727a51f6d73aa575c48a1b63e39882a58a998ac716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bc4951e0ac7fdff6925c727a51f6d73aa575c48a1b63e39882a58a998ac716->enter($__internal_85bc4951e0ac7fdff6925c727a51f6d73aa575c48a1b63e39882a58a998ac716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_85bc4951e0ac7fdff6925c727a51f6d73aa575c48a1b63e39882a58a998ac716->leave($__internal_85bc4951e0ac7fdff6925c727a51f6d73aa575c48a1b63e39882a58a998ac716_prof);

        
        $__internal_902c195991e1bec1d9d8679be54431ee60677846f6003a3b49de00812370fd5e->leave($__internal_902c195991e1bec1d9d8679be54431ee60677846f6003a3b49de00812370fd5e_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
