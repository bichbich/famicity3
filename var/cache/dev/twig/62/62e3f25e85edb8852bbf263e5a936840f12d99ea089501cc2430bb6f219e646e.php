<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_c454783375896859fd2bca429cdba864b2bcfad1eb9e8cc2bbca29df31543810 extends Twig_Template
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
        $__internal_704427f7c68c220665eb1702c7bd6554de097e6cbc158a2c3447d2e4051784c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704427f7c68c220665eb1702c7bd6554de097e6cbc158a2c3447d2e4051784c5->enter($__internal_704427f7c68c220665eb1702c7bd6554de097e6cbc158a2c3447d2e4051784c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_ab7ddfca2c5569d822b5dee05a5d9fcc853b9319dd2980ad1cc89815df0dd76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7ddfca2c5569d822b5dee05a5d9fcc853b9319dd2980ad1cc89815df0dd76e->enter($__internal_ab7ddfca2c5569d822b5dee05a5d9fcc853b9319dd2980ad1cc89815df0dd76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222->enter($__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece->enter($__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> Stashed changes
=======
        $__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222->enter($__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece->enter($__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> Stashed changes

        // line 1
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "
";
            // line 15
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "@Twig/Exception/traces_text.html.twig", 15)->display(array("exception" => $context["e"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
        
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_704427f7c68c220665eb1702c7bd6554de097e6cbc158a2c3447d2e4051784c5->leave($__internal_704427f7c68c220665eb1702c7bd6554de097e6cbc158a2c3447d2e4051784c5_prof);

        
        $__internal_ab7ddfca2c5569d822b5dee05a5d9fcc853b9319dd2980ad1cc89815df0dd76e->leave($__internal_ab7ddfca2c5569d822b5dee05a5d9fcc853b9319dd2980ad1cc89815df0dd76e_prof);
=======
=======
>>>>>>> Stashed changes
        $__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222->leave($__internal_38406182e2a416a5d90fa274d58e50653dc349e8d94f64806823f648fd74e222_prof);

        
        $__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece->leave($__internal_bf8add7a50b92d3d3c4cd85e5110e776413581be957650b77a93e51cddd91ece_prof);
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 15,  48 => 14,  44 => 13,  39 => 10,  32 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        {% spaceless %}
        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        {% endspaceless %}
    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}
{% endfor %}</pre>
    </div>
</div>
", "@Twig/Exception/traces_text.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
