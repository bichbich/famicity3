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
        $__internal_c7a54e08439dc47830b85720ce66db0cb4fc60e7e60a9f4dbacf790599524adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a54e08439dc47830b85720ce66db0cb4fc60e7e60a9f4dbacf790599524adb->enter($__internal_c7a54e08439dc47830b85720ce66db0cb4fc60e7e60a9f4dbacf790599524adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_6d4beda91fea61cc8ed6e052aee9f3c3b2c579d07b82f42ed038edc644c65fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4beda91fea61cc8ed6e052aee9f3c3b2c579d07b82f42ed038edc644c65fa3->enter($__internal_6d4beda91fea61cc8ed6e052aee9f3c3b2c579d07b82f42ed038edc644c65fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a54e08439dc47830b85720ce66db0cb4fc60e7e60a9f4dbacf790599524adb->leave($__internal_c7a54e08439dc47830b85720ce66db0cb4fc60e7e60a9f4dbacf790599524adb_prof);

        
        $__internal_6d4beda91fea61cc8ed6e052aee9f3c3b2c579d07b82f42ed038edc644c65fa3->leave($__internal_6d4beda91fea61cc8ed6e052aee9f3c3b2c579d07b82f42ed038edc644c65fa3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_707f1a09401d20ba22b2812dd42dea002695836fbdd59f2f11c54d29e9af0281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707f1a09401d20ba22b2812dd42dea002695836fbdd59f2f11c54d29e9af0281->enter($__internal_707f1a09401d20ba22b2812dd42dea002695836fbdd59f2f11c54d29e9af0281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df52c831453625445d44451b9c349a7b881e6f2fa07d5ecbfca9c22767469f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df52c831453625445d44451b9c349a7b881e6f2fa07d5ecbfca9c22767469f9e->enter($__internal_df52c831453625445d44451b9c349a7b881e6f2fa07d5ecbfca9c22767469f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_df52c831453625445d44451b9c349a7b881e6f2fa07d5ecbfca9c22767469f9e->leave($__internal_df52c831453625445d44451b9c349a7b881e6f2fa07d5ecbfca9c22767469f9e_prof);

        
        $__internal_707f1a09401d20ba22b2812dd42dea002695836fbdd59f2f11c54d29e9af0281->leave($__internal_707f1a09401d20ba22b2812dd42dea002695836fbdd59f2f11c54d29e9af0281_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
