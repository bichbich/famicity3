<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a10401d86c2324aa7b0f62f33d45da6476e299b0bebfec10a4fda509159ea1bf extends Twig_Template
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
        $__internal_b696cf09a8a3fb5b6fda8abed53f73b635eee031b771fe1c0eaee69792f65f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b696cf09a8a3fb5b6fda8abed53f73b635eee031b771fe1c0eaee69792f65f66->enter($__internal_b696cf09a8a3fb5b6fda8abed53f73b635eee031b771fe1c0eaee69792f65f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ceb1bf71065c0ca4e66d56416302266f8bde50c3cac3f495e7fd50966b485859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb1bf71065c0ca4e66d56416302266f8bde50c3cac3f495e7fd50966b485859->enter($__internal_ceb1bf71065c0ca4e66d56416302266f8bde50c3cac3f495e7fd50966b485859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_8eb727bac0eb1e0475065c0b3d3a9d78a3b0e8c946a71cbef71a27a2fd64e469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb727bac0eb1e0475065c0b3d3a9d78a3b0e8c946a71cbef71a27a2fd64e469->enter($__internal_8eb727bac0eb1e0475065c0b3d3a9d78a3b0e8c946a71cbef71a27a2fd64e469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5625cac7e800208764386ab025676ca46bcfaa3fe20c8eb4b42152bff228420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5625cac7e800208764386ab025676ca46bcfaa3fe20c8eb4b42152bff228420f->enter($__internal_5625cac7e800208764386ab025676ca46bcfaa3fe20c8eb4b42152bff228420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> Stashed changes

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< Updated upstream
        $__internal_b696cf09a8a3fb5b6fda8abed53f73b635eee031b771fe1c0eaee69792f65f66->leave($__internal_b696cf09a8a3fb5b6fda8abed53f73b635eee031b771fe1c0eaee69792f65f66_prof);

        
        $__internal_ceb1bf71065c0ca4e66d56416302266f8bde50c3cac3f495e7fd50966b485859->leave($__internal_ceb1bf71065c0ca4e66d56416302266f8bde50c3cac3f495e7fd50966b485859_prof);
=======
        $__internal_8eb727bac0eb1e0475065c0b3d3a9d78a3b0e8c946a71cbef71a27a2fd64e469->leave($__internal_8eb727bac0eb1e0475065c0b3d3a9d78a3b0e8c946a71cbef71a27a2fd64e469_prof);

        
        $__internal_5625cac7e800208764386ab025676ca46bcfaa3fe20c8eb4b42152bff228420f->leave($__internal_5625cac7e800208764386ab025676ca46bcfaa3fe20c8eb4b42152bff228420f_prof);
>>>>>>> Stashed changes

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
