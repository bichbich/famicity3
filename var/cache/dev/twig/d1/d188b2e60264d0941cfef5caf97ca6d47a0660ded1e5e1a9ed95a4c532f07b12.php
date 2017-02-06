<?php

/* @MyApp/Default/login.html.twig */
class __TwigTemplate_d8941f8f8cfd5ea3f65fb67e54590c0f83c2da3a240a20f48d08222a52ba6d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MyApp/Default/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b66e3b43d5ba7cc7148f928393b36d1df8389cc1cc3506602907f9df7cc064f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b66e3b43d5ba7cc7148f928393b36d1df8389cc1cc3506602907f9df7cc064f->enter($__internal_5b66e3b43d5ba7cc7148f928393b36d1df8389cc1cc3506602907f9df7cc064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/Default/login.html.twig"));

        $__internal_54d84d6e7faa7502ce0d05729d20a5c63e1a84b7b8f4eb1291e67c24f0ffd9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d84d6e7faa7502ce0d05729d20a5c63e1a84b7b8f4eb1291e67c24f0ffd9cd->enter($__internal_54d84d6e7faa7502ce0d05729d20a5c63e1a84b7b8f4eb1291e67c24f0ffd9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyApp/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b66e3b43d5ba7cc7148f928393b36d1df8389cc1cc3506602907f9df7cc064f->leave($__internal_5b66e3b43d5ba7cc7148f928393b36d1df8389cc1cc3506602907f9df7cc064f_prof);

        
        $__internal_54d84d6e7faa7502ce0d05729d20a5c63e1a84b7b8f4eb1291e67c24f0ffd9cd->leave($__internal_54d84d6e7faa7502ce0d05729d20a5c63e1a84b7b8f4eb1291e67c24f0ffd9cd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5b6c18b2d54c36948bd6d19fe1f6b2efb34fe3f92f0f8a71bec0251d211a6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b6c18b2d54c36948bd6d19fe1f6b2efb34fe3f92f0f8a71bec0251d211a6dc->enter($__internal_b5b6c18b2d54c36948bd6d19fe1f6b2efb34fe3f92f0f8a71bec0251d211a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_66742832caf9368d655cc46804e33fadbdf5de5d917b16158e1ba0e631265e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66742832caf9368d655cc46804e33fadbdf5de5d917b16158e1ba0e631265e3e->enter($__internal_66742832caf9368d655cc46804e33fadbdf5de5d917b16158e1ba0e631265e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_66742832caf9368d655cc46804e33fadbdf5de5d917b16158e1ba0e631265e3e->leave($__internal_66742832caf9368d655cc46804e33fadbdf5de5d917b16158e1ba0e631265e3e_prof);

        
        $__internal_b5b6c18b2d54c36948bd6d19fe1f6b2efb34fe3f92f0f8a71bec0251d211a6dc->leave($__internal_b5b6c18b2d54c36948bd6d19fe1f6b2efb34fe3f92f0f8a71bec0251d211a6dc_prof);

    }

    public function getTemplateName()
    {
        return "@MyApp/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock %}", "@MyApp/Default/login.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
