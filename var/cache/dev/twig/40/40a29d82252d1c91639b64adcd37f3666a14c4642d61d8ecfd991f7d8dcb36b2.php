<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_eca8602480a261721a10e836793757675ad55592a543712d2b93853d255455c3 extends Twig_Template
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
        $__internal_94454eab6b6c45d44214cada85d71b122c8960e852a47ada23ac6e3aeaef39e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94454eab6b6c45d44214cada85d71b122c8960e852a47ada23ac6e3aeaef39e2->enter($__internal_94454eab6b6c45d44214cada85d71b122c8960e852a47ada23ac6e3aeaef39e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_aacb133cb557c947cd69d088cc7946186ba9fc2db72f40851e20ccad392d9db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb133cb557c947cd69d088cc7946186ba9fc2db72f40851e20ccad392d9db8->enter($__internal_aacb133cb557c947cd69d088cc7946186ba9fc2db72f40851e20ccad392d9db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<script>
    function testMail() {
        var n=document.form.email.value;
        if (filter_var(\$n, FILTER_VALIDATE_EMAIL)) {
            document.getElementById('email').innerHTML = \"<img src='templates/images/vrai.jpg'/>\";
        }
        else
            document.getElementById('email').innerHTML = \"<img src='templates/images/vrai.jpg'/>\";
    }
</script>
<div class=\"shop_top\">
    <div class=\"container\">
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

        <div class=\"register-top-grid\">
                <h3>INFORMATION PERSONNELLE</h3>

                <div>
                    <span>";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom"));
        echo "<label>*</label></span>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                </div>


                <div>
                    <span>";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "<label>*</label></span>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                        </div>

                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
            <div class=\"register-bottom-grid\">

                <h3>INFORMATION DE CONNEXION</h3>
                <div>
                    <span>";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "<label>*</label></span>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                </div>
                <div>
                    <span>";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmer mot de passe"));
        echo "<label>*</label></span>
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                </div>
                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
<div>
            <input type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>









";
        
        $__internal_94454eab6b6c45d44214cada85d71b122c8960e852a47ada23ac6e3aeaef39e2->leave($__internal_94454eab6b6c45d44214cada85d71b122c8960e852a47ada23ac6e3aeaef39e2_prof);

        
        $__internal_aacb133cb557c947cd69d088cc7946186ba9fc2db72f40851e20ccad392d9db8->leave($__internal_aacb133cb557c947cd69d088cc7946186ba9fc2db72f40851e20ccad392d9db8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  100 => 48,  91 => 42,  87 => 41,  81 => 38,  77 => 37,  64 => 27,  60 => 26,  52 => 21,  48 => 20,  39 => 14,  25 => 2,);
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
<script>
    function testMail() {
        var n=document.form.email.value;
        if (filter_var(\$n, FILTER_VALIDATE_EMAIL)) {
            document.getElementById('email').innerHTML = \"<img src='templates/images/vrai.jpg'/>\";
        }
        else
            document.getElementById('email').innerHTML = \"<img src='templates/images/vrai.jpg'/>\";
    }
</script>
<div class=\"shop_top\">
    <div class=\"container\">
        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

        <div class=\"register-top-grid\">
                <h3>INFORMATION PERSONNELLE</h3>

                <div>
                    <span>{{ form_label(form.username, \"Nom\") }}<label>*</label></span>
                    {{ form_widget(form.username) }}
                </div>


                <div>
                    <span>{{ form_label(form.email, \"Email\") }}<label>*</label></span>
                    {{ form_widget(form.email) }}
                        </div>

                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
            <div class=\"register-bottom-grid\">

                <h3>INFORMATION DE CONNEXION</h3>
                <div>
                    <span>{{ form_label(form.plainPassword.first, \"Mot de passe\") }}<label>*</label></span>
                    {{ form_widget(form.plainPassword.first) }}
                </div>
                <div>
                    <span>{{ form_label(form.plainPassword.second, \"Confirmer mot de passe\") }}<label>*</label></span>
                    {{ form_widget(form.plainPassword.second) }}
                </div>
                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
<div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
        {{ form_end(form) }}
    </div>
</div>









", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\famicity3\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
