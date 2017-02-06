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
        $__internal_29dbcd05cd5d8f1f96983ff1f248a1d889af3227ab45d39451b704b928002e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dbcd05cd5d8f1f96983ff1f248a1d889af3227ab45d39451b704b928002e29->enter($__internal_29dbcd05cd5d8f1f96983ff1f248a1d889af3227ab45d39451b704b928002e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_746b911333c89ca3c4e9fe773ed5b1f9ffe6b2761922f0cd1efa50324eacc8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746b911333c89ca3c4e9fe773ed5b1f9ffe6b2761922f0cd1efa50324eacc8d8->enter($__internal_746b911333c89ca3c4e9fe773ed5b1f9ffe6b2761922f0cd1efa50324eacc8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "<label>*</label></span>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                </div>

                <div>
                    <span>";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "<label>*</label></span>
                    ";
        // line 25
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
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "<label>*</label></span>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                </div>
                <div>
                    <span>";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "<label>*</label></span>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                </div>
                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
<div>
            <input type=\"submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>









";
        
        $__internal_29dbcd05cd5d8f1f96983ff1f248a1d889af3227ab45d39451b704b928002e29->leave($__internal_29dbcd05cd5d8f1f96983ff1f248a1d889af3227ab45d39451b704b928002e29_prof);

        
        $__internal_746b911333c89ca3c4e9fe773ed5b1f9ffe6b2761922f0cd1efa50324eacc8d8->leave($__internal_746b911333c89ca3c4e9fe773ed5b1f9ffe6b2761922f0cd1efa50324eacc8d8_prof);

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
        return array (  102 => 47,  97 => 45,  88 => 39,  84 => 38,  78 => 35,  74 => 34,  62 => 25,  58 => 24,  51 => 20,  47 => 19,  39 => 14,  25 => 2,);
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
                    <span>{{ form_label(form.username) }}<label>*</label></span>
                    {{ form_widget(form.username) }}
                </div>

                <div>
                    <span>{{ form_label(form.email) }}<label>*</label></span>
                    {{ form_widget(form.email) }}
                        </div>

                <div class=\"clear\"> </div>
            </div>
            <div class=\"clear\"> </div>
            <div class=\"register-bottom-grid\">
                <h3>INFORMATION DE CONNEXION</h3>
                <div>
                    <span>{{ form_label(form.plainPassword.first) }}<label>*</label></span>
                    {{ form_widget(form.plainPassword.first) }}
                </div>
                <div>
                    <span>{{ form_label(form.plainPassword.second) }}<label>*</label></span>
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









", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
