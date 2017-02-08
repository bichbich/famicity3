<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_b3c53cef99932c54990295bb6c6796c2c296db9a7ddf4b924d5fd91182c0e491 extends Twig_Template
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
        $__internal_362de354e30d5621e84b356f2635abf6bf64476ffcb54ac6ee39d94dbd0b08bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362de354e30d5621e84b356f2635abf6bf64476ffcb54ac6ee39d94dbd0b08bf->enter($__internal_362de354e30d5621e84b356f2635abf6bf64476ffcb54ac6ee39d94dbd0b08bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_d6ffa43186c9547faeedeeb0e4a773964afa997097179436b8421883c177a2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ffa43186c9547faeedeeb0e4a773964afa997097179436b8421883c177a2b5->enter($__internal_d6ffa43186c9547faeedeeb0e4a773964afa997097179436b8421883c177a2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79->enter($__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4->enter($__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> Stashed changes
=======
        $__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79->enter($__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4->enter($__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> Stashed changes

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_362de354e30d5621e84b356f2635abf6bf64476ffcb54ac6ee39d94dbd0b08bf->leave($__internal_362de354e30d5621e84b356f2635abf6bf64476ffcb54ac6ee39d94dbd0b08bf_prof);

        
        $__internal_d6ffa43186c9547faeedeeb0e4a773964afa997097179436b8421883c177a2b5->leave($__internal_d6ffa43186c9547faeedeeb0e4a773964afa997097179436b8421883c177a2b5_prof);
=======
=======
>>>>>>> Stashed changes
        $__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79->leave($__internal_2a50e1a0a7bde06ef395842549cd1e37591d04d92707c8b2c10851d19c4cae79_prof);

        
        $__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4->leave($__internal_23fd72be66f882ca4a6856575bef837e1f71fdb4b37eb55a71ab2d27f46908d4_prof);
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
