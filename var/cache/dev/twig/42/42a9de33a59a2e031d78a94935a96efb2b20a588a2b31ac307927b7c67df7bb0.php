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
        $__internal_117ca6a49ec1201609198241ff02dc21b164fb9727cc750f35e01d5b2ad4473d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117ca6a49ec1201609198241ff02dc21b164fb9727cc750f35e01d5b2ad4473d->enter($__internal_117ca6a49ec1201609198241ff02dc21b164fb9727cc750f35e01d5b2ad4473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_572d8776672b568e7e333cb562c08224fc75f2fd993b7c9e27f3684e4b6a1f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572d8776672b568e7e333cb562c08224fc75f2fd993b7c9e27f3684e4b6a1f6d->enter($__internal_572d8776672b568e7e333cb562c08224fc75f2fd993b7c9e27f3684e4b6a1f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117ca6a49ec1201609198241ff02dc21b164fb9727cc750f35e01d5b2ad4473d->leave($__internal_117ca6a49ec1201609198241ff02dc21b164fb9727cc750f35e01d5b2ad4473d_prof);

        
        $__internal_572d8776672b568e7e333cb562c08224fc75f2fd993b7c9e27f3684e4b6a1f6d->leave($__internal_572d8776672b568e7e333cb562c08224fc75f2fd993b7c9e27f3684e4b6a1f6d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45284bb1395ae13aed2d7e8452966bef4f517d32343eee0fe6b24397ff8b40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45284bb1395ae13aed2d7e8452966bef4f517d32343eee0fe6b24397ff8b40a->enter($__internal_f45284bb1395ae13aed2d7e8452966bef4f517d32343eee0fe6b24397ff8b40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4158f42a8192dd980078076e468d3f43187e69bf89587cb478503100a9247078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4158f42a8192dd980078076e468d3f43187e69bf89587cb478503100a9247078->enter($__internal_4158f42a8192dd980078076e468d3f43187e69bf89587cb478503100a9247078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4158f42a8192dd980078076e468d3f43187e69bf89587cb478503100a9247078->leave($__internal_4158f42a8192dd980078076e468d3f43187e69bf89587cb478503100a9247078_prof);

        
        $__internal_f45284bb1395ae13aed2d7e8452966bef4f517d32343eee0fe6b24397ff8b40a->leave($__internal_f45284bb1395ae13aed2d7e8452966bef4f517d32343eee0fe6b24397ff8b40a_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2487ddfb53b71a98b9eed51f1cecccb34e96ea928bc44ac9a572875b99509bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2487ddfb53b71a98b9eed51f1cecccb34e96ea928bc44ac9a572875b99509bf1->enter($__internal_2487ddfb53b71a98b9eed51f1cecccb34e96ea928bc44ac9a572875b99509bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7bfb4cd26b26ed3d87a645bfb7e0cae9939d1d62ffced481d1d50891796a10ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfb4cd26b26ed3d87a645bfb7e0cae9939d1d62ffced481d1d50891796a10ee->enter($__internal_7bfb4cd26b26ed3d87a645bfb7e0cae9939d1d62ffced481d1d50891796a10ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_7bfb4cd26b26ed3d87a645bfb7e0cae9939d1d62ffced481d1d50891796a10ee->leave($__internal_7bfb4cd26b26ed3d87a645bfb7e0cae9939d1d62ffced481d1d50891796a10ee_prof);

        
        $__internal_2487ddfb53b71a98b9eed51f1cecccb34e96ea928bc44ac9a572875b99509bf1->leave($__internal_2487ddfb53b71a98b9eed51f1cecccb34e96ea928bc44ac9a572875b99509bf1_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
