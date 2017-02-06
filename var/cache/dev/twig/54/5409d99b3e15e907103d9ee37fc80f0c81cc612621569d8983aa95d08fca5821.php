<?php

/* ::loginsuccess.html.twig */
class __TwigTemplate_b43fb8b74b5e0943622c0d126f3bb12f5a7cc4608e786c324362fbf2f13eeeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::loginsuccess.html.twig", 1);
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
        $__internal_ee233a85016e66ee8cfd6f25a6073a53475771024ca4bf68e6eade1f65c5c8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee233a85016e66ee8cfd6f25a6073a53475771024ca4bf68e6eade1f65c5c8ff->enter($__internal_ee233a85016e66ee8cfd6f25a6073a53475771024ca4bf68e6eade1f65c5c8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::loginsuccess.html.twig"));

        $__internal_c8d732ded7fc48a4b649ac5b7e8bb3db4475392417d3670f5279cd9af30e61d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d732ded7fc48a4b649ac5b7e8bb3db4475392417d3670f5279cd9af30e61d4->enter($__internal_c8d732ded7fc48a4b649ac5b7e8bb3db4475392417d3670f5279cd9af30e61d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::loginsuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee233a85016e66ee8cfd6f25a6073a53475771024ca4bf68e6eade1f65c5c8ff->leave($__internal_ee233a85016e66ee8cfd6f25a6073a53475771024ca4bf68e6eade1f65c5c8ff_prof);

        
        $__internal_c8d732ded7fc48a4b649ac5b7e8bb3db4475392417d3670f5279cd9af30e61d4->leave($__internal_c8d732ded7fc48a4b649ac5b7e8bb3db4475392417d3670f5279cd9af30e61d4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f9c3531ea55ec658d4d067aac0daf904b88249ba66a6d1ffde37d112cb353cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9c3531ea55ec658d4d067aac0daf904b88249ba66a6d1ffde37d112cb353cd->enter($__internal_5f9c3531ea55ec658d4d067aac0daf904b88249ba66a6d1ffde37d112cb353cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4503f41b0acc81b5d3fc04b7b5fcd170d51ec7e9527ea705850ea9727770768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4503f41b0acc81b5d3fc04b7b5fcd170d51ec7e9527ea705850ea9727770768->enter($__internal_b4503f41b0acc81b5d3fc04b7b5fcd170d51ec7e9527ea705850ea9727770768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    vous etes correctement connecté

    <p><a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_page");
        echo "\" >acceder a l'espace resérvé au client </a></p>
    <p><a href=\" ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
        echo "\" >acceder a l'espace resérvé au administrateur </a></p>


";
        
        $__internal_b4503f41b0acc81b5d3fc04b7b5fcd170d51ec7e9527ea705850ea9727770768->leave($__internal_b4503f41b0acc81b5d3fc04b7b5fcd170d51ec7e9527ea705850ea9727770768_prof);

        
        $__internal_5f9c3531ea55ec658d4d067aac0daf904b88249ba66a6d1ffde37d112cb353cd->leave($__internal_5f9c3531ea55ec658d4d067aac0daf904b88249ba66a6d1ffde37d112cb353cd_prof);

    }

    public function getTemplateName()
    {
        return "::loginsuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    vous etes correctement connecté

    <p><a href=\" {{ path('client_page') }}\" >acceder a l'espace resérvé au client </a></p>
    <p><a href=\" {{ path('admin_page') }}\" >acceder a l'espace resérvé au administrateur </a></p>


{% endblock %}", "::loginsuccess.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/loginsuccess.html.twig");
    }
}
