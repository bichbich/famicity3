<?php

/* MyAppBundle:Default:layout.html.twig */
class __TwigTemplate_963367f8c1b904b127a3aa4639c2b4cfb2f379709366f64ab7d0fd4e4ad24b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13ff3eab38518c9a725d65123e265554ddbc28a3ac79e45c090fe8352fcb73bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ff3eab38518c9a725d65123e265554ddbc28a3ac79e45c090fe8352fcb73bf->enter($__internal_13ff3eab38518c9a725d65123e265554ddbc28a3ac79e45c090fe8352fcb73bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:layout.html.twig"));

        $__internal_c09ddc3689391e2fc6a8c1b7d0dfacb16ce77b6fe7efe49fa576c623b0afbe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09ddc3689391e2fc6a8c1b7d0dfacb16ce77b6fe7efe49fa576c623b0afbe1b->enter($__internal_c09ddc3689391e2fc6a8c1b7d0dfacb16ce77b6fe7efe49fa576c623b0afbe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ff3eab38518c9a725d65123e265554ddbc28a3ac79e45c090fe8352fcb73bf->leave($__internal_13ff3eab38518c9a725d65123e265554ddbc28a3ac79e45c090fe8352fcb73bf_prof);

        
        $__internal_c09ddc3689391e2fc6a8c1b7d0dfacb16ce77b6fe7efe49fa576c623b0afbe1b->leave($__internal_c09ddc3689391e2fc6a8c1b7d0dfacb16ce77b6fe7efe49fa576c623b0afbe1b_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "MyAppBundle:Default:layout.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/layout.html.twig");
    }
}
