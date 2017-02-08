<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20ab53fd590c63c152a057b50391bba3c140fa8643b4c281212f53dc70999c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3fcab26735f16117cc25a7d7cd2308a26a357b141d8686a1df06c845321dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3fcab26735f16117cc25a7d7cd2308a26a357b141d8686a1df06c845321dd3->enter($__internal_2b3fcab26735f16117cc25a7d7cd2308a26a357b141d8686a1df06c845321dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_af47c134ec40523fc1b7105ad89bb241b56f03be3cb1744342867d93aab83cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47c134ec40523fc1b7105ad89bb241b56f03be3cb1744342867d93aab83cd1->enter($__internal_af47c134ec40523fc1b7105ad89bb241b56f03be3cb1744342867d93aab83cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3fcab26735f16117cc25a7d7cd2308a26a357b141d8686a1df06c845321dd3->leave($__internal_2b3fcab26735f16117cc25a7d7cd2308a26a357b141d8686a1df06c845321dd3_prof);

        
        $__internal_af47c134ec40523fc1b7105ad89bb241b56f03be3cb1744342867d93aab83cd1->leave($__internal_af47c134ec40523fc1b7105ad89bb241b56f03be3cb1744342867d93aab83cd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f21c0123c1347477035ee5ccdb4ae1776cd16460e032d20f860f928775e97eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21c0123c1347477035ee5ccdb4ae1776cd16460e032d20f860f928775e97eaf->enter($__internal_f21c0123c1347477035ee5ccdb4ae1776cd16460e032d20f860f928775e97eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45a6b72b82d5a2f8122b3e77dd8cb6fb90036218d6f71ec7efa05b5d5039d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a6b72b82d5a2f8122b3e77dd8cb6fb90036218d6f71ec7efa05b5d5039d4fb->enter($__internal_45a6b72b82d5a2f8122b3e77dd8cb6fb90036218d6f71ec7efa05b5d5039d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45a6b72b82d5a2f8122b3e77dd8cb6fb90036218d6f71ec7efa05b5d5039d4fb->leave($__internal_45a6b72b82d5a2f8122b3e77dd8cb6fb90036218d6f71ec7efa05b5d5039d4fb_prof);

        
        $__internal_f21c0123c1347477035ee5ccdb4ae1776cd16460e032d20f860f928775e97eaf->leave($__internal_f21c0123c1347477035ee5ccdb4ae1776cd16460e032d20f860f928775e97eaf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78f17359123529fc8355f3b68de4e45bfe67ad7a6c1eb83536104fbe3d31846e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f17359123529fc8355f3b68de4e45bfe67ad7a6c1eb83536104fbe3d31846e->enter($__internal_78f17359123529fc8355f3b68de4e45bfe67ad7a6c1eb83536104fbe3d31846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_75cf64ee9e0893d1b538d5fc87245a30ecef4648ff40fc0bff4a421b886fad7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cf64ee9e0893d1b538d5fc87245a30ecef4648ff40fc0bff4a421b886fad7e->enter($__internal_75cf64ee9e0893d1b538d5fc87245a30ecef4648ff40fc0bff4a421b886fad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75cf64ee9e0893d1b538d5fc87245a30ecef4648ff40fc0bff4a421b886fad7e->leave($__internal_75cf64ee9e0893d1b538d5fc87245a30ecef4648ff40fc0bff4a421b886fad7e_prof);

        
        $__internal_78f17359123529fc8355f3b68de4e45bfe67ad7a6c1eb83536104fbe3d31846e->leave($__internal_78f17359123529fc8355f3b68de4e45bfe67ad7a6c1eb83536104fbe3d31846e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6bfe36c3757084261e2d742f4ab25b8e5d2ac592b86c925c18f5dbed3ad679f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bfe36c3757084261e2d742f4ab25b8e5d2ac592b86c925c18f5dbed3ad679f->enter($__internal_e6bfe36c3757084261e2d742f4ab25b8e5d2ac592b86c925c18f5dbed3ad679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84ac55f1fa95ed3b65bd06990819422094f0bb8a2c28c7e444c4a812445493c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ac55f1fa95ed3b65bd06990819422094f0bb8a2c28c7e444c4a812445493c5->enter($__internal_84ac55f1fa95ed3b65bd06990819422094f0bb8a2c28c7e444c4a812445493c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84ac55f1fa95ed3b65bd06990819422094f0bb8a2c28c7e444c4a812445493c5->leave($__internal_84ac55f1fa95ed3b65bd06990819422094f0bb8a2c28c7e444c4a812445493c5_prof);

        
        $__internal_e6bfe36c3757084261e2d742f4ab25b8e5d2ac592b86c925c18f5dbed3ad679f->leave($__internal_e6bfe36c3757084261e2d742f4ab25b8e5d2ac592b86c925c18f5dbed3ad679f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
