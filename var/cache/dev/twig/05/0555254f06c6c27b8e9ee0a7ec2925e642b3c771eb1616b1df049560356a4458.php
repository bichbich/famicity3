<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6ca3462a3162faf0bbe47746061f4a7786f1449bb36de5531cf4525c18a2d74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c5f6cfdffe863231f40571c55430c594e27c5b38fe3bf3a365de489dc44541ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f6cfdffe863231f40571c55430c594e27c5b38fe3bf3a365de489dc44541ce->enter($__internal_c5f6cfdffe863231f40571c55430c594e27c5b38fe3bf3a365de489dc44541ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_71c55faeca77a6fe8621f6bede9494a70eb2f6fc9daa796d7d7cd587c0dd5943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c55faeca77a6fe8621f6bede9494a70eb2f6fc9daa796d7d7cd587c0dd5943->enter($__internal_71c55faeca77a6fe8621f6bede9494a70eb2f6fc9daa796d7d7cd587c0dd5943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f6cfdffe863231f40571c55430c594e27c5b38fe3bf3a365de489dc44541ce->leave($__internal_c5f6cfdffe863231f40571c55430c594e27c5b38fe3bf3a365de489dc44541ce_prof);

        
        $__internal_71c55faeca77a6fe8621f6bede9494a70eb2f6fc9daa796d7d7cd587c0dd5943->leave($__internal_71c55faeca77a6fe8621f6bede9494a70eb2f6fc9daa796d7d7cd587c0dd5943_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebd6759e9e44c67c30f24f3a36e80fd813ef3eee564cf47c62925eba8304597f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd6759e9e44c67c30f24f3a36e80fd813ef3eee564cf47c62925eba8304597f->enter($__internal_ebd6759e9e44c67c30f24f3a36e80fd813ef3eee564cf47c62925eba8304597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c50d424433b382b0a167b30a76d043601d8921c7f624550bcb52187515aa29cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50d424433b382b0a167b30a76d043601d8921c7f624550bcb52187515aa29cb->enter($__internal_c50d424433b382b0a167b30a76d043601d8921c7f624550bcb52187515aa29cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c50d424433b382b0a167b30a76d043601d8921c7f624550bcb52187515aa29cb->leave($__internal_c50d424433b382b0a167b30a76d043601d8921c7f624550bcb52187515aa29cb_prof);

        
        $__internal_ebd6759e9e44c67c30f24f3a36e80fd813ef3eee564cf47c62925eba8304597f->leave($__internal_ebd6759e9e44c67c30f24f3a36e80fd813ef3eee564cf47c62925eba8304597f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
