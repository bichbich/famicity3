<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6ca3462a3162faf0bbe47746061f4a7786f1449bb36de5531cf4525c18a2d74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06e752a0aeb7ba00e795a06dfe86c5e8e12d21ce4a563b3cf2d500e845457e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06e752a0aeb7ba00e795a06dfe86c5e8e12d21ce4a563b3cf2d500e845457e3->enter($__internal_a06e752a0aeb7ba00e795a06dfe86c5e8e12d21ce4a563b3cf2d500e845457e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_410109cd9c259233f19c7c10a5615bc29de89d9bb5f42eebd4c9c2cd88d29b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410109cd9c259233f19c7c10a5615bc29de89d9bb5f42eebd4c9c2cd88d29b93->enter($__internal_410109cd9c259233f19c7c10a5615bc29de89d9bb5f42eebd4c9c2cd88d29b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06e752a0aeb7ba00e795a06dfe86c5e8e12d21ce4a563b3cf2d500e845457e3->leave($__internal_a06e752a0aeb7ba00e795a06dfe86c5e8e12d21ce4a563b3cf2d500e845457e3_prof);

        
        $__internal_410109cd9c259233f19c7c10a5615bc29de89d9bb5f42eebd4c9c2cd88d29b93->leave($__internal_410109cd9c259233f19c7c10a5615bc29de89d9bb5f42eebd4c9c2cd88d29b93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37a1fb1602482fefa0f265db9e38efc9e7c04bba74520080104e239d7d2c4791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a1fb1602482fefa0f265db9e38efc9e7c04bba74520080104e239d7d2c4791->enter($__internal_37a1fb1602482fefa0f265db9e38efc9e7c04bba74520080104e239d7d2c4791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffbbe0804f6b7288e7d3d8bbbc7551af03e923bf15fe437ba810713c01d19278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbbe0804f6b7288e7d3d8bbbc7551af03e923bf15fe437ba810713c01d19278->enter($__internal_ffbbe0804f6b7288e7d3d8bbbc7551af03e923bf15fe437ba810713c01d19278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ffbbe0804f6b7288e7d3d8bbbc7551af03e923bf15fe437ba810713c01d19278->leave($__internal_ffbbe0804f6b7288e7d3d8bbbc7551af03e923bf15fe437ba810713c01d19278_prof);

        
        $__internal_37a1fb1602482fefa0f265db9e38efc9e7c04bba74520080104e239d7d2c4791->leave($__internal_37a1fb1602482fefa0f265db9e38efc9e7c04bba74520080104e239d7d2c4791_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}

    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
