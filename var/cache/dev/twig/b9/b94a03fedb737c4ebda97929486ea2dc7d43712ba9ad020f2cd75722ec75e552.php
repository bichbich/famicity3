<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f695677720145e4a4e4963f6f9a9a80d16ab7ef6a14fa5386f0123454403ed5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc6f3ec68ad35f0c03fd7fe5913c808213804f9be3f6bcc2cf369cda3f06ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc6f3ec68ad35f0c03fd7fe5913c808213804f9be3f6bcc2cf369cda3f06ff9->enter($__internal_8dc6f3ec68ad35f0c03fd7fe5913c808213804f9be3f6bcc2cf369cda3f06ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1bb04de13dae5551c679d3965ca32d2537f1efa93b8e5a4f68e7e08e2f25aa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb04de13dae5551c679d3965ca32d2537f1efa93b8e5a4f68e7e08e2f25aa09->enter($__internal_1bb04de13dae5551c679d3965ca32d2537f1efa93b8e5a4f68e7e08e2f25aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc6f3ec68ad35f0c03fd7fe5913c808213804f9be3f6bcc2cf369cda3f06ff9->leave($__internal_8dc6f3ec68ad35f0c03fd7fe5913c808213804f9be3f6bcc2cf369cda3f06ff9_prof);

        
        $__internal_1bb04de13dae5551c679d3965ca32d2537f1efa93b8e5a4f68e7e08e2f25aa09->leave($__internal_1bb04de13dae5551c679d3965ca32d2537f1efa93b8e5a4f68e7e08e2f25aa09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c97a6ccf0214f56d707eeb8315331197d7a167838a26f6b9ee2b68df3cce689d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97a6ccf0214f56d707eeb8315331197d7a167838a26f6b9ee2b68df3cce689d->enter($__internal_c97a6ccf0214f56d707eeb8315331197d7a167838a26f6b9ee2b68df3cce689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ceb63581a58e3541b6708ad5474147b4fbf9a02985e383de0abe0b21a9d3d61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb63581a58e3541b6708ad5474147b4fbf9a02985e383de0abe0b21a9d3d61e->enter($__internal_ceb63581a58e3541b6708ad5474147b4fbf9a02985e383de0abe0b21a9d3d61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ceb63581a58e3541b6708ad5474147b4fbf9a02985e383de0abe0b21a9d3d61e->leave($__internal_ceb63581a58e3541b6708ad5474147b4fbf9a02985e383de0abe0b21a9d3d61e_prof);

        
        $__internal_c97a6ccf0214f56d707eeb8315331197d7a167838a26f6b9ee2b68df3cce689d->leave($__internal_c97a6ccf0214f56d707eeb8315331197d7a167838a26f6b9ee2b68df3cce689d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
