<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b0e528d80e023a1062742ceabfa81bdf0b49f381ed15c4eaf2c3d7db86884e9a extends Twig_Template
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
        $__internal_92c61a61d420ff05d0f0b26aaed44a354ae5c92bbd0ace9265732f6aa2a6dc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c61a61d420ff05d0f0b26aaed44a354ae5c92bbd0ace9265732f6aa2a6dc77->enter($__internal_92c61a61d420ff05d0f0b26aaed44a354ae5c92bbd0ace9265732f6aa2a6dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_8dc8e6b997ac83f4b73596bc46e90a272905351ddc1004b5909e889c7be13c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc8e6b997ac83f4b73596bc46e90a272905351ddc1004b5909e889c7be13c44->enter($__internal_8dc8e6b997ac83f4b73596bc46e90a272905351ddc1004b5909e889c7be13c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_92c61a61d420ff05d0f0b26aaed44a354ae5c92bbd0ace9265732f6aa2a6dc77->leave($__internal_92c61a61d420ff05d0f0b26aaed44a354ae5c92bbd0ace9265732f6aa2a6dc77_prof);

        
        $__internal_8dc8e6b997ac83f4b73596bc46e90a272905351ddc1004b5909e889c7be13c44->leave($__internal_8dc8e6b997ac83f4b73596bc46e90a272905351ddc1004b5909e889c7be13c44_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
