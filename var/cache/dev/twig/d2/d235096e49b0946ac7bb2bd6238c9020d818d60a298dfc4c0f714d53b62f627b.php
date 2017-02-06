<?php

/* ::home.html.twig */
class __TwigTemplate_bbca4c970bae11c9991e1bc5ed5acee0f4651e20495b1c3c0fc3251ab1c3a8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2800cd0b177225ca44414758e8b1a07308885e96df3bd2857f3bc0ec4d882dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2800cd0b177225ca44414758e8b1a07308885e96df3bd2857f3bc0ec4d882dbe->enter($__internal_2800cd0b177225ca44414758e8b1a07308885e96df3bd2857f3bc0ec4d882dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        $__internal_cc655842840d8405c64bf7ecf5861f98a353c404875cc4e2ffd02faffc8881b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc655842840d8405c64bf7ecf5861f98a353c404875cc4e2ffd02faffc8881b4->enter($__internal_cc655842840d8405c64bf7ecf5861f98a353c404875cc4e2ffd02faffc8881b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2800cd0b177225ca44414758e8b1a07308885e96df3bd2857f3bc0ec4d882dbe->leave($__internal_2800cd0b177225ca44414758e8b1a07308885e96df3bd2857f3bc0ec4d882dbe_prof);

        
        $__internal_cc655842840d8405c64bf7ecf5861f98a353c404875cc4e2ffd02faffc8881b4->leave($__internal_cc655842840d8405c64bf7ecf5861f98a353c404875cc4e2ffd02faffc8881b4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_16236f470e0dabf02ea599baa91463b8f302a7bcc60670a991d81f5ce885ba3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16236f470e0dabf02ea599baa91463b8f302a7bcc60670a991d81f5ce885ba3a->enter($__internal_16236f470e0dabf02ea599baa91463b8f302a7bcc60670a991d81f5ce885ba3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7d7545208bec48d1a05193ea56d877dcca4fbcfdf65931370ec1706d7edeacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d7545208bec48d1a05193ea56d877dcca4fbcfdf65931370ec1706d7edeacd->enter($__internal_d7d7545208bec48d1a05193ea56d877dcca4fbcfdf65931370ec1706d7edeacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>page d'accueil</h1>

<p><a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" >se connecter   </a></p>

";
        
        $__internal_d7d7545208bec48d1a05193ea56d877dcca4fbcfdf65931370ec1706d7edeacd->leave($__internal_d7d7545208bec48d1a05193ea56d877dcca4fbcfdf65931370ec1706d7edeacd_prof);

        
        $__internal_16236f470e0dabf02ea599baa91463b8f302a7bcc60670a991d81f5ce885ba3a->leave($__internal_16236f470e0dabf02ea599baa91463b8f302a7bcc60670a991d81f5ce885ba3a_prof);

    }

    public function getTemplateName()
    {
        return "::home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
<h1>page d'accueil</h1>

<p><a href=\" {{ path('fos_user_security_login') }}\" >se connecter   </a></p>

{% endblock %}", "::home.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/home.html.twig");
    }
}
