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
        $__internal_149318f7b8fa6ba812b58b9b32e6e5b9f9f1606c5ab10f83834035af6b659192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149318f7b8fa6ba812b58b9b32e6e5b9f9f1606c5ab10f83834035af6b659192->enter($__internal_149318f7b8fa6ba812b58b9b32e6e5b9f9f1606c5ab10f83834035af6b659192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b4661c07cba26970d5e9e3f5f458cc278cb96cb695b0d88470c9a03e95581828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4661c07cba26970d5e9e3f5f458cc278cb96cb695b0d88470c9a03e95581828->enter($__internal_b4661c07cba26970d5e9e3f5f458cc278cb96cb695b0d88470c9a03e95581828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149318f7b8fa6ba812b58b9b32e6e5b9f9f1606c5ab10f83834035af6b659192->leave($__internal_149318f7b8fa6ba812b58b9b32e6e5b9f9f1606c5ab10f83834035af6b659192_prof);

        
        $__internal_b4661c07cba26970d5e9e3f5f458cc278cb96cb695b0d88470c9a03e95581828->leave($__internal_b4661c07cba26970d5e9e3f5f458cc278cb96cb695b0d88470c9a03e95581828_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a99a2b4cbcb415f1a001dc813b2ea1ded3a2a73266b40aef01a2badd9aedcc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99a2b4cbcb415f1a001dc813b2ea1ded3a2a73266b40aef01a2badd9aedcc9b->enter($__internal_a99a2b4cbcb415f1a001dc813b2ea1ded3a2a73266b40aef01a2badd9aedcc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0de46c18894765a096ef9e835622b9a5d44accc66df71c611b98f2d2f8774013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de46c18894765a096ef9e835622b9a5d44accc66df71c611b98f2d2f8774013->enter($__internal_0de46c18894765a096ef9e835622b9a5d44accc66df71c611b98f2d2f8774013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0de46c18894765a096ef9e835622b9a5d44accc66df71c611b98f2d2f8774013->leave($__internal_0de46c18894765a096ef9e835622b9a5d44accc66df71c611b98f2d2f8774013_prof);

        
        $__internal_a99a2b4cbcb415f1a001dc813b2ea1ded3a2a73266b40aef01a2badd9aedcc9b->leave($__internal_a99a2b4cbcb415f1a001dc813b2ea1ded3a2a73266b40aef01a2badd9aedcc9b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0ca647d093dcfd84899a6ae9a8759d2073cd8d9346ba811a4a60c0abbe62f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ca647d093dcfd84899a6ae9a8759d2073cd8d9346ba811a4a60c0abbe62f15->enter($__internal_c0ca647d093dcfd84899a6ae9a8759d2073cd8d9346ba811a4a60c0abbe62f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f51eb8a49af2aabb48477d55c0766a6bf28e43eb0b894476ff22bad04e503d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51eb8a49af2aabb48477d55c0766a6bf28e43eb0b894476ff22bad04e503d88->enter($__internal_f51eb8a49af2aabb48477d55c0766a6bf28e43eb0b894476ff22bad04e503d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f51eb8a49af2aabb48477d55c0766a6bf28e43eb0b894476ff22bad04e503d88->leave($__internal_f51eb8a49af2aabb48477d55c0766a6bf28e43eb0b894476ff22bad04e503d88_prof);

        
        $__internal_c0ca647d093dcfd84899a6ae9a8759d2073cd8d9346ba811a4a60c0abbe62f15->leave($__internal_c0ca647d093dcfd84899a6ae9a8759d2073cd8d9346ba811a4a60c0abbe62f15_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_663ac77549db922e663f51742b41848973a86714f080f886a5d91b681d5dfa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663ac77549db922e663f51742b41848973a86714f080f886a5d91b681d5dfa94->enter($__internal_663ac77549db922e663f51742b41848973a86714f080f886a5d91b681d5dfa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b8b3116b34ad2c9ca7f240179609e116b99b0c230ea7891f8b15465b530642d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b3116b34ad2c9ca7f240179609e116b99b0c230ea7891f8b15465b530642d->enter($__internal_4b8b3116b34ad2c9ca7f240179609e116b99b0c230ea7891f8b15465b530642d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b8b3116b34ad2c9ca7f240179609e116b99b0c230ea7891f8b15465b530642d->leave($__internal_4b8b3116b34ad2c9ca7f240179609e116b99b0c230ea7891f8b15465b530642d_prof);

        
        $__internal_663ac77549db922e663f51742b41848973a86714f080f886a5d91b681d5dfa94->leave($__internal_663ac77549db922e663f51742b41848973a86714f080f886a5d91b681d5dfa94_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
