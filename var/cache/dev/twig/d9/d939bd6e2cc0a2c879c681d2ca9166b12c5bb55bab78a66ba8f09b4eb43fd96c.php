<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4dcba22589f30a644501bb35a0ad6bd96a0b1c0facdc8e31b3d55ced51fd8f3 extends Twig_Template
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
        $__internal_116e92278f632dd347e8e770aa12aeaa888645b96167453c881d8f8dd89fc5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116e92278f632dd347e8e770aa12aeaa888645b96167453c881d8f8dd89fc5f5->enter($__internal_116e92278f632dd347e8e770aa12aeaa888645b96167453c881d8f8dd89fc5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_66678f81dc3fa60e17bf2bd82011434e3632c6ac6ba238e5d69b928023792e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66678f81dc3fa60e17bf2bd82011434e3632c6ac6ba238e5d69b928023792e8e->enter($__internal_66678f81dc3fa60e17bf2bd82011434e3632c6ac6ba238e5d69b928023792e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_116e92278f632dd347e8e770aa12aeaa888645b96167453c881d8f8dd89fc5f5->leave($__internal_116e92278f632dd347e8e770aa12aeaa888645b96167453c881d8f8dd89fc5f5_prof);

        
        $__internal_66678f81dc3fa60e17bf2bd82011434e3632c6ac6ba238e5d69b928023792e8e->leave($__internal_66678f81dc3fa60e17bf2bd82011434e3632c6ac6ba238e5d69b928023792e8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
