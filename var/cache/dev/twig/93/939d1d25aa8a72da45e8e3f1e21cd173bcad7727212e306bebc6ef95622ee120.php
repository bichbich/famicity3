<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_898f7db85f267ccc4ed1dc82b03581135a033dfa8744f42285f4a8fbf704b43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_75d4d9f885dd937063147def80075fe884f88fd61147e54b4720d3732188c66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d4d9f885dd937063147def80075fe884f88fd61147e54b4720d3732188c66d->enter($__internal_75d4d9f885dd937063147def80075fe884f88fd61147e54b4720d3732188c66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b16d7fe93b74991b2c85c99858dfd02ea7018c2352565f93f16d4aea113bacc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16d7fe93b74991b2c85c99858dfd02ea7018c2352565f93f16d4aea113bacc3->enter($__internal_b16d7fe93b74991b2c85c99858dfd02ea7018c2352565f93f16d4aea113bacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d4d9f885dd937063147def80075fe884f88fd61147e54b4720d3732188c66d->leave($__internal_75d4d9f885dd937063147def80075fe884f88fd61147e54b4720d3732188c66d_prof);

        
        $__internal_b16d7fe93b74991b2c85c99858dfd02ea7018c2352565f93f16d4aea113bacc3->leave($__internal_b16d7fe93b74991b2c85c99858dfd02ea7018c2352565f93f16d4aea113bacc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0f7b36762a21ab3d0d799ed3b9c5b35386c48ff52f1205c785a5d2bd7008329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f7b36762a21ab3d0d799ed3b9c5b35386c48ff52f1205c785a5d2bd7008329->enter($__internal_e0f7b36762a21ab3d0d799ed3b9c5b35386c48ff52f1205c785a5d2bd7008329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbbbd8c804a9d669c033680f5f710bb3c254a8bf0a4ac301f5175192dd3a9868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbbd8c804a9d669c033680f5f710bb3c254a8bf0a4ac301f5175192dd3a9868->enter($__internal_dbbbd8c804a9d669c033680f5f710bb3c254a8bf0a4ac301f5175192dd3a9868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dbbbd8c804a9d669c033680f5f710bb3c254a8bf0a4ac301f5175192dd3a9868->leave($__internal_dbbbd8c804a9d669c033680f5f710bb3c254a8bf0a4ac301f5175192dd3a9868_prof);

        
        $__internal_e0f7b36762a21ab3d0d799ed3b9c5b35386c48ff52f1205c785a5d2bd7008329->leave($__internal_e0f7b36762a21ab3d0d799ed3b9c5b35386c48ff52f1205c785a5d2bd7008329_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad5032eef56e0500d4ba95af5c0c0b2056cd14a3a2d01b5635f0d45fe6e225ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5032eef56e0500d4ba95af5c0c0b2056cd14a3a2d01b5635f0d45fe6e225ff->enter($__internal_ad5032eef56e0500d4ba95af5c0c0b2056cd14a3a2d01b5635f0d45fe6e225ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f84c4b8af3f03991add848a93528cf187a8f98eb9042e82a0dff126d73d4d262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84c4b8af3f03991add848a93528cf187a8f98eb9042e82a0dff126d73d4d262->enter($__internal_f84c4b8af3f03991add848a93528cf187a8f98eb9042e82a0dff126d73d4d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f84c4b8af3f03991add848a93528cf187a8f98eb9042e82a0dff126d73d4d262->leave($__internal_f84c4b8af3f03991add848a93528cf187a8f98eb9042e82a0dff126d73d4d262_prof);

        
        $__internal_ad5032eef56e0500d4ba95af5c0c0b2056cd14a3a2d01b5635f0d45fe6e225ff->leave($__internal_ad5032eef56e0500d4ba95af5c0c0b2056cd14a3a2d01b5635f0d45fe6e225ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a9c3459ad4593d40d0f0956dcb7bfab337496cddd7f07f0eeefd420dc225fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9c3459ad4593d40d0f0956dcb7bfab337496cddd7f07f0eeefd420dc225fbb->enter($__internal_9a9c3459ad4593d40d0f0956dcb7bfab337496cddd7f07f0eeefd420dc225fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d5ccf72a6a81e70add4569ba48dc2de6f9a4f22790c8c693e59f4c9b2c9eb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5ccf72a6a81e70add4569ba48dc2de6f9a4f22790c8c693e59f4c9b2c9eb58->enter($__internal_7d5ccf72a6a81e70add4569ba48dc2de6f9a4f22790c8c693e59f4c9b2c9eb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7d5ccf72a6a81e70add4569ba48dc2de6f9a4f22790c8c693e59f4c9b2c9eb58->leave($__internal_7d5ccf72a6a81e70add4569ba48dc2de6f9a4f22790c8c693e59f4c9b2c9eb58_prof);

        
        $__internal_9a9c3459ad4593d40d0f0956dcb7bfab337496cddd7f07f0eeefd420dc225fbb->leave($__internal_9a9c3459ad4593d40d0f0956dcb7bfab337496cddd7f07f0eeefd420dc225fbb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
