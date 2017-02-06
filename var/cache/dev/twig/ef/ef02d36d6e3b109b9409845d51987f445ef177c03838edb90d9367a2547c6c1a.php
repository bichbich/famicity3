<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b570550bdcdbd5dccaedc9d8e12be851cb7570b332baba0d7e6e81fed88d236c extends Twig_Template
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
        $__internal_4577ccb61d757887998a3816dae8c9f237ebef401055e76c82601075252cf9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4577ccb61d757887998a3816dae8c9f237ebef401055e76c82601075252cf9f6->enter($__internal_4577ccb61d757887998a3816dae8c9f237ebef401055e76c82601075252cf9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_9ef319a280121923e2fda06cad83333361b26bd998d5ac62b8cf0a229dee5e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef319a280121923e2fda06cad83333361b26bd998d5ac62b8cf0a229dee5e04->enter($__internal_9ef319a280121923e2fda06cad83333361b26bd998d5ac62b8cf0a229dee5e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4577ccb61d757887998a3816dae8c9f237ebef401055e76c82601075252cf9f6->leave($__internal_4577ccb61d757887998a3816dae8c9f237ebef401055e76c82601075252cf9f6_prof);

        
        $__internal_9ef319a280121923e2fda06cad83333361b26bd998d5ac62b8cf0a229dee5e04->leave($__internal_9ef319a280121923e2fda06cad83333361b26bd998d5ac62b8cf0a229dee5e04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e507c850303e1a26f262af9cd986a52db8021b1fbf20667d1ead3db1d47638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e507c850303e1a26f262af9cd986a52db8021b1fbf20667d1ead3db1d47638->enter($__internal_70e507c850303e1a26f262af9cd986a52db8021b1fbf20667d1ead3db1d47638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6cfceede85f2c5695037de8d2084a09d0b8319f7ea11e32393e84ebef551b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cfceede85f2c5695037de8d2084a09d0b8319f7ea11e32393e84ebef551b7b->enter($__internal_b6cfceede85f2c5695037de8d2084a09d0b8319f7ea11e32393e84ebef551b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b6cfceede85f2c5695037de8d2084a09d0b8319f7ea11e32393e84ebef551b7b->leave($__internal_b6cfceede85f2c5695037de8d2084a09d0b8319f7ea11e32393e84ebef551b7b_prof);

        
        $__internal_70e507c850303e1a26f262af9cd986a52db8021b1fbf20667d1ead3db1d47638->leave($__internal_70e507c850303e1a26f262af9cd986a52db8021b1fbf20667d1ead3db1d47638_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\pidev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
