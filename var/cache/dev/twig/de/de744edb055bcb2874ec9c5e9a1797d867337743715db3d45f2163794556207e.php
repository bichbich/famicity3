<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e0ed8c851f34feba18632e34e99d296f8f09282518078da97fb55dcf00f277a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2daf391393eeff808d6523780c8588a676e0cf44c380087dd08808fd6056c00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2daf391393eeff808d6523780c8588a676e0cf44c380087dd08808fd6056c00b->enter($__internal_2daf391393eeff808d6523780c8588a676e0cf44c380087dd08808fd6056c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_da8a76b48a573623b6dcedf29d2ad81b346523afd6673a07124e93850376f606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8a76b48a573623b6dcedf29d2ad81b346523afd6673a07124e93850376f606->enter($__internal_da8a76b48a573623b6dcedf29d2ad81b346523afd6673a07124e93850376f606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2daf391393eeff808d6523780c8588a676e0cf44c380087dd08808fd6056c00b->leave($__internal_2daf391393eeff808d6523780c8588a676e0cf44c380087dd08808fd6056c00b_prof);

        
        $__internal_da8a76b48a573623b6dcedf29d2ad81b346523afd6673a07124e93850376f606->leave($__internal_da8a76b48a573623b6dcedf29d2ad81b346523afd6673a07124e93850376f606_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04205f03e3116ce343725ac630e8816045391c7b3053662df55e900b55e2e046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04205f03e3116ce343725ac630e8816045391c7b3053662df55e900b55e2e046->enter($__internal_04205f03e3116ce343725ac630e8816045391c7b3053662df55e900b55e2e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_59d496563ab2e01ae5828d887075e8e6561ec42d835fc89031f5f3b107754335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d496563ab2e01ae5828d887075e8e6561ec42d835fc89031f5f3b107754335->enter($__internal_59d496563ab2e01ae5828d887075e8e6561ec42d835fc89031f5f3b107754335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_59d496563ab2e01ae5828d887075e8e6561ec42d835fc89031f5f3b107754335->leave($__internal_59d496563ab2e01ae5828d887075e8e6561ec42d835fc89031f5f3b107754335_prof);

        
        $__internal_04205f03e3116ce343725ac630e8816045391c7b3053662df55e900b55e2e046->leave($__internal_04205f03e3116ce343725ac630e8816045391c7b3053662df55e900b55e2e046_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5c2679a6dcecaf012ef7abf22323d770c658c976ad4d44a688192712bfff15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c2679a6dcecaf012ef7abf22323d770c658c976ad4d44a688192712bfff15a->enter($__internal_d5c2679a6dcecaf012ef7abf22323d770c658c976ad4d44a688192712bfff15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_17acc65f67af1a19923dd15e1e8b64ead3f2faf7399d3d91586268f017f5f84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17acc65f67af1a19923dd15e1e8b64ead3f2faf7399d3d91586268f017f5f84f->enter($__internal_17acc65f67af1a19923dd15e1e8b64ead3f2faf7399d3d91586268f017f5f84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_17acc65f67af1a19923dd15e1e8b64ead3f2faf7399d3d91586268f017f5f84f->leave($__internal_17acc65f67af1a19923dd15e1e8b64ead3f2faf7399d3d91586268f017f5f84f_prof);

        
        $__internal_d5c2679a6dcecaf012ef7abf22323d770c658c976ad4d44a688192712bfff15a->leave($__internal_d5c2679a6dcecaf012ef7abf22323d770c658c976ad4d44a688192712bfff15a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c8316686ec5ec2b4028480873675be4dbceff2a671dc3ddf612fe763397238cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8316686ec5ec2b4028480873675be4dbceff2a671dc3ddf612fe763397238cf->enter($__internal_c8316686ec5ec2b4028480873675be4dbceff2a671dc3ddf612fe763397238cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b1512e2eddfd322181d7484cf439046c0e0d1f7c2cfd720dc49f9aa7b4483a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1512e2eddfd322181d7484cf439046c0e0d1f7c2cfd720dc49f9aa7b4483a1f->enter($__internal_b1512e2eddfd322181d7484cf439046c0e0d1f7c2cfd720dc49f9aa7b4483a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1512e2eddfd322181d7484cf439046c0e0d1f7c2cfd720dc49f9aa7b4483a1f->leave($__internal_b1512e2eddfd322181d7484cf439046c0e0d1f7c2cfd720dc49f9aa7b4483a1f_prof);

        
        $__internal_c8316686ec5ec2b4028480873675be4dbceff2a671dc3ddf612fe763397238cf->leave($__internal_c8316686ec5ec2b4028480873675be4dbceff2a671dc3ddf612fe763397238cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
