<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_61ffe6660065aca5f0f83c39be8fe7e53746a469e0fad7f580e6cc39c272883a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyApp/Default/login.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyApp/Default/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1cfd1659777ee01fe52f64c41b0f14496921d56bb5015c5d1790f9a429d3e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1cfd1659777ee01fe52f64c41b0f14496921d56bb5015c5d1790f9a429d3e9a->enter($__internal_f1cfd1659777ee01fe52f64c41b0f14496921d56bb5015c5d1790f9a429d3e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e2921437394552982402291fbb6a5d1c1eecc63401d5836829b0d72ceacae3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2921437394552982402291fbb6a5d1c1eecc63401d5836829b0d72ceacae3b7->enter($__internal_e2921437394552982402291fbb6a5d1c1eecc63401d5836829b0d72ceacae3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1cfd1659777ee01fe52f64c41b0f14496921d56bb5015c5d1790f9a429d3e9a->leave($__internal_f1cfd1659777ee01fe52f64c41b0f14496921d56bb5015c5d1790f9a429d3e9a_prof);

        
        $__internal_e2921437394552982402291fbb6a5d1c1eecc63401d5836829b0d72ceacae3b7->leave($__internal_e2921437394552982402291fbb6a5d1c1eecc63401d5836829b0d72ceacae3b7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_259c806435dbc91a0cc37893dcd0fd342e544e843b54a5be5b306e54ca3ec40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259c806435dbc91a0cc37893dcd0fd342e544e843b54a5be5b306e54ca3ec40f->enter($__internal_259c806435dbc91a0cc37893dcd0fd342e544e843b54a5be5b306e54ca3ec40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e71ec94eb4a36d6ea18fb11b905cdd04481f3ebae5cf3b1bf7b6a03ebe711469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71ec94eb4a36d6ea18fb11b905cdd04481f3ebae5cf3b1bf7b6a03ebe711469->enter($__internal_e71ec94eb4a36d6ea18fb11b905cdd04481f3ebae5cf3b1bf7b6a03ebe711469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <div>

            ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "        </div>
</div>
";
        
        $__internal_e71ec94eb4a36d6ea18fb11b905cdd04481f3ebae5cf3b1bf7b6a03ebe711469->leave($__internal_e71ec94eb4a36d6ea18fb11b905cdd04481f3ebae5cf3b1bf7b6a03ebe711469_prof);

        
        $__internal_259c806435dbc91a0cc37893dcd0fd342e544e843b54a5be5b306e54ca3ec40f->leave($__internal_259c806435dbc91a0cc37893dcd0fd342e544e843b54a5be5b306e54ca3ec40f_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55da2dbdaddd734976bc4fd6fc4426ddc25ee23bc1812f0322c52804026951c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55da2dbdaddd734976bc4fd6fc4426ddc25ee23bc1812f0322c52804026951c8->enter($__internal_55da2dbdaddd734976bc4fd6fc4426ddc25ee23bc1812f0322c52804026951c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4338daf1a98b1b69c516b74636e4b6f360d5a610fd22d056263a5bbad2530c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4338daf1a98b1b69c516b74636e4b6f360d5a610fd22d056263a5bbad2530c18->enter($__internal_4338daf1a98b1b69c516b74636e4b6f360d5a610fd22d056263a5bbad2530c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_4338daf1a98b1b69c516b74636e4b6f360d5a610fd22d056263a5bbad2530c18->leave($__internal_4338daf1a98b1b69c516b74636e4b6f360d5a610fd22d056263a5bbad2530c18_prof);

        
        $__internal_55da2dbdaddd734976bc4fd6fc4426ddc25ee23bc1812f0322c52804026951c8->leave($__internal_55da2dbdaddd734976bc4fd6fc4426ddc25ee23bc1812f0322c52804026951c8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  102 => 15,  90 => 17,  88 => 15,  83 => 12,  77 => 11,  68 => 8,  63 => 7,  58 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@MyApp/Default/login.html.twig\" %}
{% block body %}

<div class=\"container\">
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

        <div>

            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
</div>
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
