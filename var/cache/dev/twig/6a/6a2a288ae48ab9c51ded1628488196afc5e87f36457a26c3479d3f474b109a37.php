<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_d928b73dc6c2067cbe2facf6e041418a354a593b47a4228e7c51607bf4060d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_796cee5806bdbbff162d515b5aed4db6d00c8c3c626ff2db77da240677d8d06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796cee5806bdbbff162d515b5aed4db6d00c8c3c626ff2db77da240677d8d06d->enter($__internal_796cee5806bdbbff162d515b5aed4db6d00c8c3c626ff2db77da240677d8d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_c7479c2c5534e325adf579e21b91514224ae69c88cdf4b551d5b1e652085a3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7479c2c5534e325adf579e21b91514224ae69c88cdf4b551d5b1e652085a3f1->enter($__internal_c7479c2c5534e325adf579e21b91514224ae69c88cdf4b551d5b1e652085a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9->enter($__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587->enter($__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> Stashed changes
=======
        $__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9->enter($__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587->enter($__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> Stashed changes

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_796cee5806bdbbff162d515b5aed4db6d00c8c3c626ff2db77da240677d8d06d->leave($__internal_796cee5806bdbbff162d515b5aed4db6d00c8c3c626ff2db77da240677d8d06d_prof);

        
        $__internal_c7479c2c5534e325adf579e21b91514224ae69c88cdf4b551d5b1e652085a3f1->leave($__internal_c7479c2c5534e325adf579e21b91514224ae69c88cdf4b551d5b1e652085a3f1_prof);
=======
=======
>>>>>>> Stashed changes
        $__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9->leave($__internal_447ae370f5e614fb132097088cb94ff6b886fd268f95c1b40e08245e61f1ece9_prof);

        
        $__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587->leave($__internal_084036bb063207b5189198a8c426f3f973b6105f6e5df865e605bcc6da440587_prof);
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 3,  34 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
