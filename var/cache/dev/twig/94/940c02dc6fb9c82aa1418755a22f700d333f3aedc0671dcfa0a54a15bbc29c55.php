<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0c768eefab93ef91cef5a0fd49590916e62a8c2cebdfe57c83c0ccb5db2b923f extends Twig_Template
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
        $__internal_400434b422b4fbaa1159db142ee2c5966cf5166d11be13232fdf7dc3ace60898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400434b422b4fbaa1159db142ee2c5966cf5166d11be13232fdf7dc3ace60898->enter($__internal_400434b422b4fbaa1159db142ee2c5966cf5166d11be13232fdf7dc3ace60898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_6817281620758fce6320b6b4bb445754560a0500ec54526c1dc67b7b78ddb085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6817281620758fce6320b6b4bb445754560a0500ec54526c1dc67b7b78ddb085->enter($__internal_6817281620758fce6320b6b4bb445754560a0500ec54526c1dc67b7b78ddb085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
                    <h4 class=\"title\">New Customers</h4>
                    <div class=\"button1\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Create an Account\"></a>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
<div class=\"col-md-6\">

    <div class=\"login-title\">
        <h4 class=\"title\">Registered Customers</h4>
        <div id=\"loginbox\" class=\"loginbox\">

                ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 23
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  name=\"login\" id=\"login-form\">
                    ";
        // line 24
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 25
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 27
        echo "                <fieldset class=\"input\">
                    <p id=\"login-form-username\">
                        <label for=\"modlgn_username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input id=\"username\"  type=\"text\"  name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                    </p>
                    <p id=\"login-form-password\">
                        <label for=\"modlgn_passwd\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input id=\"modlgn_passwd\" type=\"password\"  name=\"_password\" required=\"required\">
                    </p>
                    <div class=\"remember\">
                        <p id=\"login-form-remember\">

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"modlgn_remember\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </p>

                        <input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div></div></div></div></div>";
        
        $__internal_400434b422b4fbaa1159db142ee2c5966cf5166d11be13232fdf7dc3ace60898->leave($__internal_400434b422b4fbaa1159db142ee2c5966cf5166d11be13232fdf7dc3ace60898_prof);

        
        $__internal_6817281620758fce6320b6b4bb445754560a0500ec54526c1dc67b7b78ddb085->leave($__internal_6817281620758fce6320b6b4bb445754560a0500ec54526c1dc67b7b78ddb085_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  93 => 40,  83 => 33,  77 => 30,  73 => 29,  69 => 27,  63 => 25,  61 => 24,  56 => 23,  50 => 21,  48 => 20,  34 => 9,  25 => 2,);
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
<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
                    <h4 class=\"title\">New Customers</h4>
                    <div class=\"button1\">
                        <a href=\"{{ path(\"fos_user_registration_register\") }}\"><input type=\"submit\" name=\"Submit\" value=\"Create an Account\"></a>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
<div class=\"col-md-6\">

    <div class=\"login-title\">
        <h4 class=\"title\">Registered Customers</h4>
        <div id=\"loginbox\" class=\"loginbox\">

                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\"  name=\"login\" id=\"login-form\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                <fieldset class=\"input\">
                    <p id=\"login-form-username\">
                        <label for=\"modlgn_username\">{{ 'security.login.username'|trans }}</label>
                        <input id=\"username\"  type=\"text\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
                    </p>
                    <p id=\"login-form-password\">
                        <label for=\"modlgn_passwd\">{{ 'security.login.password'|trans }}</label>
                        <input id=\"modlgn_passwd\" type=\"password\"  name=\"_password\" required=\"required\">
                    </p>
                    <div class=\"remember\">
                        <p id=\"login-form-remember\">

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"modlgn_remember\">{{ 'security.login.remember_me'|trans }}</label>
                        </p>

                        <input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div></div></div></div></div>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
