<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_eec5554bdc64787c6da9158c9b148c7787fb6e4dc32168c0e1713fae9baf0482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_068b38f81906d9ca24e2d2f1df7438b378d75e538b4b4014e2a99488597e34c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068b38f81906d9ca24e2d2f1df7438b378d75e538b4b4014e2a99488597e34c3->enter($__internal_068b38f81906d9ca24e2d2f1df7438b378d75e538b4b4014e2a99488597e34c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_3091d360dca799ca9df92a78fd130802efde174127b890d647c8652205372379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3091d360dca799ca9df92a78fd130802efde174127b890d647c8652205372379->enter($__internal_3091d360dca799ca9df92a78fd130802efde174127b890d647c8652205372379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_068b38f81906d9ca24e2d2f1df7438b378d75e538b4b4014e2a99488597e34c3->leave($__internal_068b38f81906d9ca24e2d2f1df7438b378d75e538b4b4014e2a99488597e34c3_prof);

        
        $__internal_3091d360dca799ca9df92a78fd130802efde174127b890d647c8652205372379->leave($__internal_3091d360dca799ca9df92a78fd130802efde174127b890d647c8652205372379_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7aa8d179b675c2486bdbce75e68f0a7c867b239e2683b7a2a6fa3920e4c53e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa8d179b675c2486bdbce75e68f0a7c867b239e2683b7a2a6fa3920e4c53e16->enter($__internal_7aa8d179b675c2486bdbce75e68f0a7c867b239e2683b7a2a6fa3920e4c53e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_259ed37cab4126a91e7f96fe1edcd06f6cd49d9a2ccbacccd6f698c75011b674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259ed37cab4126a91e7f96fe1edcd06f6cd49d9a2ccbacccd6f698c75011b674->enter($__internal_259ed37cab4126a91e7f96fe1edcd06f6cd49d9a2ccbacccd6f698c75011b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_259ed37cab4126a91e7f96fe1edcd06f6cd49d9a2ccbacccd6f698c75011b674->leave($__internal_259ed37cab4126a91e7f96fe1edcd06f6cd49d9a2ccbacccd6f698c75011b674_prof);

        
        $__internal_7aa8d179b675c2486bdbce75e68f0a7c867b239e2683b7a2a6fa3920e4c53e16->leave($__internal_7aa8d179b675c2486bdbce75e68f0a7c867b239e2683b7a2a6fa3920e4c53e16_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
