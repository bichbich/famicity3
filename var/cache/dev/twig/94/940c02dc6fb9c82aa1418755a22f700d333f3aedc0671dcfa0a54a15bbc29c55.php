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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_b28650667933b793f46911ea3116c4696ca10140be9f0ffbf422b35652ad8ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28650667933b793f46911ea3116c4696ca10140be9f0ffbf422b35652ad8ec8->enter($__internal_b28650667933b793f46911ea3116c4696ca10140be9f0ffbf422b35652ad8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_8c6332910bc44d3201b33310f14844dc75355f0083312022f5dc30fc13581332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6332910bc44d3201b33310f14844dc75355f0083312022f5dc30fc13581332->enter($__internal_8c6332910bc44d3201b33310f14844dc75355f0083312022f5dc30fc13581332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));
=======
        $__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93->enter($__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d->enter($__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));
>>>>>>> Stashed changes
=======
        $__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93->enter($__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d->enter($__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));
>>>>>>> Stashed changes

        // line 2
        echo "<div class=\"main\">
    <div class=\"shop_top\">
        <!--div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    <h4 class=\"title\">S'inscrire</h4>
=======
                    <h4 class=\"title\">NOUVEAU UTILISATEUR</h4>
>>>>>>> Stashed changes
=======
                    <h4 class=\"title\">NOUVEAU UTILISATEUR</h4>
>>>>>>> Stashed changes
                    <div class=\"button1\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Créer un compte\"></a>
=======
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Crée un nouveau acompte\"></a>
>>>>>>> Stashed changes
=======
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Crée un nouveau acompte\"></a>
>>>>>>> Stashed changes
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div-->
<div class=\"col-md-6\">
    <div class=\"login-title\">
        <h4 class=\"title\">Vous êtes inscrits</h4>
        <div id=\"loginbox\" class=\"loginbox\">

                ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  name=\"login\" id=\"login-form\">
                    ";
        // line 23
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 24
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 26
        echo "                <fieldset class=\"input\">
                    <p id=\"login-form-username\">
<<<<<<< Updated upstream
                        <label for=\"modlgn_username\">Nom</label>
=======
                        <label for=\"modlgn_username\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
>>>>>>> Stashed changes
                        <input id=\"username\"  type=\"text\"  name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p id=\"login-form-password\">
<<<<<<< Updated upstream
                        <label for=\"modlgn_passwd\">Mot de passe</label>
=======
                        <label for=\"modlgn_passwd\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
>>>>>>> Stashed changes
                        <input id=\"modlgn_passwd\" type=\"password\"  name=\"_password\" required=\"required\">
                    </p>
                    <div class=\"remember\">
                        <p id=\"login-form-remember\">

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
<<<<<<< Updated upstream
                            <label for=\"modlgn_remember\">Rester connecter</label>
                        </p>

                        <input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"Se connecter\" />
=======
                            <label for=\"modlgn_remember\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </p>

                        <input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
>>>>>>> Stashed changes

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div></div></div></div></div>";
        
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $__internal_b28650667933b793f46911ea3116c4696ca10140be9f0ffbf422b35652ad8ec8->leave($__internal_b28650667933b793f46911ea3116c4696ca10140be9f0ffbf422b35652ad8ec8_prof);

        
        $__internal_8c6332910bc44d3201b33310f14844dc75355f0083312022f5dc30fc13581332->leave($__internal_8c6332910bc44d3201b33310f14844dc75355f0083312022f5dc30fc13581332_prof);
=======
=======
>>>>>>> Stashed changes
        $__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93->leave($__internal_0456009c84ace8a08263ee8d2608fac9228286f58b6f69aa0726b6ae18232b93_prof);

        
        $__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d->leave($__internal_2b400cb2434b0da5897ac5a1379f993d40ff0ff85a0cbf17b5eeda96553d627d_prof);
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        return array (  74 => 30,  69 => 27,  63 => 25,  61 => 24,  56 => 23,  50 => 21,  48 => 20,  34 => 9,  25 => 2,);
=======
        return array (  98 => 42,  92 => 39,  82 => 32,  76 => 29,  72 => 28,  68 => 26,  62 => 24,  60 => 23,  55 => 22,  49 => 20,  47 => 19,  34 => 9,  25 => 2,);
>>>>>>> Stashed changes
=======
        return array (  98 => 42,  92 => 39,  82 => 32,  76 => 29,  72 => 28,  68 => 26,  62 => 24,  60 => 23,  55 => 22,  49 => 20,  47 => 19,  34 => 9,  25 => 2,);
>>>>>>> Stashed changes
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
        <!--div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    <h4 class=\"title\">S'inscrire</h4>
                    <div class=\"button1\">
                        <a href=\"{{ path(\"fos_user_registration_register\") }}\"><input type=\"submit\" name=\"Submit\" value=\"Créer un compte\"></a>
=======
                    <h4 class=\"title\">NOUVEAU UTILISATEUR</h4>
                    <div class=\"button1\">
                        <a href=\"{{ path(\"fos_user_registration_register\") }}\"><input type=\"submit\" name=\"Submit\" value=\"Crée un nouveau acompte\"></a>
>>>>>>> Stashed changes
=======
                    <h4 class=\"title\">NOUVEAU UTILISATEUR</h4>
                    <div class=\"button1\">
                        <a href=\"{{ path(\"fos_user_registration_register\") }}\"><input type=\"submit\" name=\"Submit\" value=\"Crée un nouveau acompte\"></a>
>>>>>>> Stashed changes
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div-->
<div class=\"col-md-6\">
    <div class=\"login-title\">
        <h4 class=\"title\">Vous êtes inscrits</h4>
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
                        <label for=\"modlgn_username\">Nom</label>
                        <input id=\"username\"  type=\"text\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
                    </p>

                    <p id=\"login-form-password\">
                        <label for=\"modlgn_passwd\">Mot de passe</label>
                        <input id=\"modlgn_passwd\" type=\"password\"  name=\"_password\" required=\"required\">
                    </p>
                    <div class=\"remember\">
                        <p id=\"login-form-remember\">

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"modlgn_remember\">Rester connecter</label>
                        </p>

                        <input type=\"submit\" id=\"_submit\" class=\"button\" name=\"_submit\" value=\"Se connecter\" />

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div></div></div></div></div>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
