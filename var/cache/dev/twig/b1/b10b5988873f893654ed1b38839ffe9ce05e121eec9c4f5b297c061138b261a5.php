<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_41ec4f9c6b76fb2778637341f051278f80a688a735be149561ee700019cc3edb extends Twig_Template
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
        $__internal_3d3d3eeef621543673db74577de280120618e10e2cad9f43c82d079e3b02c3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3d3eeef621543673db74577de280120618e10e2cad9f43c82d079e3b02c3b6->enter($__internal_3d3d3eeef621543673db74577de280120618e10e2cad9f43c82d079e3b02c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_6cb720fb43a6fa29c34d0355e741edf6ab65ba149eaef84f6c1c832039c9c559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb720fb43a6fa29c34d0355e741edf6ab65ba149eaef84f6c1c832039c9c559->enter($__internal_6cb720fb43a6fa29c34d0355e741edf6ab65ba149eaef84f6c1c832039c9c559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3d3d3eeef621543673db74577de280120618e10e2cad9f43c82d079e3b02c3b6->leave($__internal_3d3d3eeef621543673db74577de280120618e10e2cad9f43c82d079e3b02c3b6_prof);

        
        $__internal_6cb720fb43a6fa29c34d0355e741edf6ab65ba149eaef84f6c1c832039c9c559->leave($__internal_6cb720fb43a6fa29c34d0355e741edf6ab65ba149eaef84f6c1c832039c9c559_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>

{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
