<?php

/* ::client.html.twig */
class __TwigTemplate_e6b91298c92804f4c02d610b4fd35fac91d336a3268117e1e8d2ba09eee8b01c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::client.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fba204e604cd6ca35cf197e08398a8870552f327172ccb5b7be9e8f47ff79b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba204e604cd6ca35cf197e08398a8870552f327172ccb5b7be9e8f47ff79b9e->enter($__internal_fba204e604cd6ca35cf197e08398a8870552f327172ccb5b7be9e8f47ff79b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::client.html.twig"));

        $__internal_35f19f3fd3e95b7404200c14bcfc492f54b938aa944549bceca1755f4f4373be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f19f3fd3e95b7404200c14bcfc492f54b938aa944549bceca1755f4f4373be->enter($__internal_35f19f3fd3e95b7404200c14bcfc492f54b938aa944549bceca1755f4f4373be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fba204e604cd6ca35cf197e08398a8870552f327172ccb5b7be9e8f47ff79b9e->leave($__internal_fba204e604cd6ca35cf197e08398a8870552f327172ccb5b7be9e8f47ff79b9e_prof);

        
        $__internal_35f19f3fd3e95b7404200c14bcfc492f54b938aa944549bceca1755f4f4373be->leave($__internal_35f19f3fd3e95b7404200c14bcfc492f54b938aa944549bceca1755f4f4373be_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b4e2c1b4c039b7e93263109c9e167bf10d0347433def1f3ec2d4a85005a7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b4e2c1b4c039b7e93263109c9e167bf10d0347433def1f3ec2d4a85005a7bb->enter($__internal_33b4e2c1b4c039b7e93263109c9e167bf10d0347433def1f3ec2d4a85005a7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc6773feb472635518013b4f738af9761e61553f45167e822c5285216fd63088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6773feb472635518013b4f738af9761e61553f45167e822c5285216fd63088->enter($__internal_bc6773feb472635518013b4f738af9761e61553f45167e822c5285216fd63088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>  page client</h1>

    <p><a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" >se deconnecter   </a></p>

";
        
        $__internal_bc6773feb472635518013b4f738af9761e61553f45167e822c5285216fd63088->leave($__internal_bc6773feb472635518013b4f738af9761e61553f45167e822c5285216fd63088_prof);

        
        $__internal_33b4e2c1b4c039b7e93263109c9e167bf10d0347433def1f3ec2d4a85005a7bb->leave($__internal_33b4e2c1b4c039b7e93263109c9e167bf10d0347433def1f3ec2d4a85005a7bb_prof);

    }

    public function getTemplateName()
    {
        return "::client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<h1>  page client</h1>

    <p><a href=\" {{ path('fos_user_security_logout') }}\" >se deconnecter   </a></p>

{% endblock %}", "::client.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/client.html.twig");
    }
}
