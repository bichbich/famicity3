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
        $__internal_b5ea1960c102816297319dd595ad7420b3aaf039a8c4647b092548d321d25d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ea1960c102816297319dd595ad7420b3aaf039a8c4647b092548d321d25d22->enter($__internal_b5ea1960c102816297319dd595ad7420b3aaf039a8c4647b092548d321d25d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4bdeac16c06e00045e7826f85a9b57267a2795fecc8b7db0c32e21fbf606d55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdeac16c06e00045e7826f85a9b57267a2795fecc8b7db0c32e21fbf606d55a->enter($__internal_4bdeac16c06e00045e7826f85a9b57267a2795fecc8b7db0c32e21fbf606d55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ea1960c102816297319dd595ad7420b3aaf039a8c4647b092548d321d25d22->leave($__internal_b5ea1960c102816297319dd595ad7420b3aaf039a8c4647b092548d321d25d22_prof);

        
        $__internal_4bdeac16c06e00045e7826f85a9b57267a2795fecc8b7db0c32e21fbf606d55a->leave($__internal_4bdeac16c06e00045e7826f85a9b57267a2795fecc8b7db0c32e21fbf606d55a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51cd41476bf295d879371a50dd4b1d7499010cfa858af127d502fceaf37e298b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51cd41476bf295d879371a50dd4b1d7499010cfa858af127d502fceaf37e298b->enter($__internal_51cd41476bf295d879371a50dd4b1d7499010cfa858af127d502fceaf37e298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9e61f857bd96a1f5396097a27f1bfe1cbfc0db129a23aadfe1c2dd3b721e86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e61f857bd96a1f5396097a27f1bfe1cbfc0db129a23aadfe1c2dd3b721e86d->enter($__internal_f9e61f857bd96a1f5396097a27f1bfe1cbfc0db129a23aadfe1c2dd3b721e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9e61f857bd96a1f5396097a27f1bfe1cbfc0db129a23aadfe1c2dd3b721e86d->leave($__internal_f9e61f857bd96a1f5396097a27f1bfe1cbfc0db129a23aadfe1c2dd3b721e86d_prof);

        
        $__internal_51cd41476bf295d879371a50dd4b1d7499010cfa858af127d502fceaf37e298b->leave($__internal_51cd41476bf295d879371a50dd4b1d7499010cfa858af127d502fceaf37e298b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc65f05da8eacb96512269db5068a612f66910d40ccc1b2d4031eb067b0b8a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc65f05da8eacb96512269db5068a612f66910d40ccc1b2d4031eb067b0b8a00->enter($__internal_bc65f05da8eacb96512269db5068a612f66910d40ccc1b2d4031eb067b0b8a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5835813e9edde30c4b0b60675aa5def25b9f637ef2d7f2aa3751879f1f15e293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5835813e9edde30c4b0b60675aa5def25b9f637ef2d7f2aa3751879f1f15e293->enter($__internal_5835813e9edde30c4b0b60675aa5def25b9f637ef2d7f2aa3751879f1f15e293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5835813e9edde30c4b0b60675aa5def25b9f637ef2d7f2aa3751879f1f15e293->leave($__internal_5835813e9edde30c4b0b60675aa5def25b9f637ef2d7f2aa3751879f1f15e293_prof);

        
        $__internal_bc65f05da8eacb96512269db5068a612f66910d40ccc1b2d4031eb067b0b8a00->leave($__internal_bc65f05da8eacb96512269db5068a612f66910d40ccc1b2d4031eb067b0b8a00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41a8525cddb25f7fc55848dcac73c32197f78a6d68798fd807381942f51bd62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a8525cddb25f7fc55848dcac73c32197f78a6d68798fd807381942f51bd62a->enter($__internal_41a8525cddb25f7fc55848dcac73c32197f78a6d68798fd807381942f51bd62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3cfce64eef0029a9071d33ab08789c94297eb509e8bd869ba57f5ceb32f05394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfce64eef0029a9071d33ab08789c94297eb509e8bd869ba57f5ceb32f05394->enter($__internal_3cfce64eef0029a9071d33ab08789c94297eb509e8bd869ba57f5ceb32f05394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cfce64eef0029a9071d33ab08789c94297eb509e8bd869ba57f5ceb32f05394->leave($__internal_3cfce64eef0029a9071d33ab08789c94297eb509e8bd869ba57f5ceb32f05394_prof);

        
        $__internal_41a8525cddb25f7fc55848dcac73c32197f78a6d68798fd807381942f51bd62a->leave($__internal_41a8525cddb25f7fc55848dcac73c32197f78a6d68798fd807381942f51bd62a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
