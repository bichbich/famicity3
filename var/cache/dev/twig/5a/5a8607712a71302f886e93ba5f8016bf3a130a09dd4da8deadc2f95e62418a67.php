<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1c73c97b3647e6acff8ea6e7c42b140cfefcb881c60c757b747f1746f014b5ef extends Twig_Template
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
        $__internal_25faf7d97a2c042d8cbb42006b521e70e064807b1688282985f556855790d2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25faf7d97a2c042d8cbb42006b521e70e064807b1688282985f556855790d2fc->enter($__internal_25faf7d97a2c042d8cbb42006b521e70e064807b1688282985f556855790d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cd4e4e0d2789f5bbac9769f6dd69d028b449bbc61712cec919b53638c05565f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4e4e0d2789f5bbac9769f6dd69d028b449bbc61712cec919b53638c05565f5->enter($__internal_cd4e4e0d2789f5bbac9769f6dd69d028b449bbc61712cec919b53638c05565f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25faf7d97a2c042d8cbb42006b521e70e064807b1688282985f556855790d2fc->leave($__internal_25faf7d97a2c042d8cbb42006b521e70e064807b1688282985f556855790d2fc_prof);

        
        $__internal_cd4e4e0d2789f5bbac9769f6dd69d028b449bbc61712cec919b53638c05565f5->leave($__internal_cd4e4e0d2789f5bbac9769f6dd69d028b449bbc61712cec919b53638c05565f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64f5a757904cdc5c5bdebc655a9910aead013ef271b9fb956486f95c9dd2372d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f5a757904cdc5c5bdebc655a9910aead013ef271b9fb956486f95c9dd2372d->enter($__internal_64f5a757904cdc5c5bdebc655a9910aead013ef271b9fb956486f95c9dd2372d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f68317a3590757f2cc2970b0008e39aa9b5cde8f847dfeaba3c2e32f02b53700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68317a3590757f2cc2970b0008e39aa9b5cde8f847dfeaba3c2e32f02b53700->enter($__internal_f68317a3590757f2cc2970b0008e39aa9b5cde8f847dfeaba3c2e32f02b53700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f68317a3590757f2cc2970b0008e39aa9b5cde8f847dfeaba3c2e32f02b53700->leave($__internal_f68317a3590757f2cc2970b0008e39aa9b5cde8f847dfeaba3c2e32f02b53700_prof);

        
        $__internal_64f5a757904cdc5c5bdebc655a9910aead013ef271b9fb956486f95c9dd2372d->leave($__internal_64f5a757904cdc5c5bdebc655a9910aead013ef271b9fb956486f95c9dd2372d_prof);

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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
