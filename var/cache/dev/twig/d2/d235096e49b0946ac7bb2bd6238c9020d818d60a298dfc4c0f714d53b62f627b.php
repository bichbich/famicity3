<?php

/* ::home.html.twig */
class __TwigTemplate_bbca4c970bae11c9991e1bc5ed5acee0f4651e20495b1c3c0fc3251ab1c3a8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::home.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22e66c7eaf32d9ba2f477f53ed3934983550a356288efca44ecad35ffdd8b127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e66c7eaf32d9ba2f477f53ed3934983550a356288efca44ecad35ffdd8b127->enter($__internal_22e66c7eaf32d9ba2f477f53ed3934983550a356288efca44ecad35ffdd8b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        $__internal_42eca2f95c1e3c45f63947063a7d50618306458f6bdb5c3b4b8688cd83cbef5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42eca2f95c1e3c45f63947063a7d50618306458f6bdb5c3b4b8688cd83cbef5f->enter($__internal_42eca2f95c1e3c45f63947063a7d50618306458f6bdb5c3b4b8688cd83cbef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e66c7eaf32d9ba2f477f53ed3934983550a356288efca44ecad35ffdd8b127->leave($__internal_22e66c7eaf32d9ba2f477f53ed3934983550a356288efca44ecad35ffdd8b127_prof);

        
        $__internal_42eca2f95c1e3c45f63947063a7d50618306458f6bdb5c3b4b8688cd83cbef5f->leave($__internal_42eca2f95c1e3c45f63947063a7d50618306458f6bdb5c3b4b8688cd83cbef5f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_c0b703cbcb5d589c3fb6ec80d14157d6b08bf078f17395a2b0154ae6e2e75772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b703cbcb5d589c3fb6ec80d14157d6b08bf078f17395a2b0154ae6e2e75772->enter($__internal_c0b703cbcb5d589c3fb6ec80d14157d6b08bf078f17395a2b0154ae6e2e75772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_18b30f4d1aee85041bc0c9c73e33790b504a8ab10dfd12e2d5c345ffd1dd9544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b30f4d1aee85041bc0c9c73e33790b504a8ab10dfd12e2d5c345ffd1dd9544->enter($__internal_18b30f4d1aee85041bc0c9c73e33790b504a8ab10dfd12e2d5c345ffd1dd9544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_18b30f4d1aee85041bc0c9c73e33790b504a8ab10dfd12e2d5c345ffd1dd9544->leave($__internal_18b30f4d1aee85041bc0c9c73e33790b504a8ab10dfd12e2d5c345ffd1dd9544_prof);

        
        $__internal_c0b703cbcb5d589c3fb6ec80d14157d6b08bf078f17395a2b0154ae6e2e75772->leave($__internal_c0b703cbcb5d589c3fb6ec80d14157d6b08bf078f17395a2b0154ae6e2e75772_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_91fe148dbcf1173544c51fde0466741775ac506ea34b9e52ac9143767e1f89b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fe148dbcf1173544c51fde0466741775ac506ea34b9e52ac9143767e1f89b2->enter($__internal_91fe148dbcf1173544c51fde0466741775ac506ea34b9e52ac9143767e1f89b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6bde400799225aa479f3a9e35c3e6bc67d89d4a41d5d2ef5597b5053061bc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bde400799225aa479f3a9e35c3e6bc67d89d4a41d5d2ef5597b5053061bc6c->enter($__internal_a6bde400799225aa479f3a9e35c3e6bc67d89d4a41d5d2ef5597b5053061bc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body>
    <div class=\"banner\">
        <!-- start slider -->
        <div id=\"fwslider\">
            <div class=\"slider_container\">
                <div class=\"slide\">
                    <!-- Slide image -->
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/h0.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!-- Text title -->
                            <h1 class=\"title\"> FAMICITY</h1>
                            <!-- /Text title -->
                            <div class=\"button1\">
                            <a href=\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">
                            <input type=\"submit\" value=\"Se connecter\"></a>
                        </div>
                            <div class=\"button1\">
                                <a href=\" ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                                    <input type=\"submit\" value=\"Crée un nouveau compte\"></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
            </div>

        </div>
        <!--/slider -->
    </div>
</body>

";
        
        $__internal_a6bde400799225aa479f3a9e35c3e6bc67d89d4a41d5d2ef5597b5053061bc6c->leave($__internal_a6bde400799225aa479f3a9e35c3e6bc67d89d4a41d5d2ef5597b5053061bc6c_prof);

        
        $__internal_91fe148dbcf1173544c51fde0466741775ac506ea34b9e52ac9143767e1f89b2->leave($__internal_91fe148dbcf1173544c51fde0466741775ac506ea34b9e52ac9143767e1f89b2_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7daf9294e3f86efd4630b3eae1f03b74ec983c9f2b8ea466e42fb545be172b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daf9294e3f86efd4630b3eae1f03b74ec983c9f2b8ea466e42fb545be172b21->enter($__internal_7daf9294e3f86efd4630b3eae1f03b74ec983c9f2b8ea466e42fb545be172b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5a5f03c77cbb68e02e4036b8c9dfa97577e961f646b5557c9e362bf694b90315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5f03c77cbb68e02e4036b8c9dfa97577e961f646b5557c9e362bf694b90315->enter($__internal_5a5f03c77cbb68e02e4036b8c9dfa97577e961f646b5557c9e362bf694b90315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "  ";
        
        $__internal_5a5f03c77cbb68e02e4036b8c9dfa97577e961f646b5557c9e362bf694b90315->leave($__internal_5a5f03c77cbb68e02e4036b8c9dfa97577e961f646b5557c9e362bf694b90315_prof);

        
        $__internal_7daf9294e3f86efd4630b3eae1f03b74ec983c9f2b8ea466e42fb545be172b21->leave($__internal_7daf9294e3f86efd4630b3eae1f03b74ec983c9f2b8ea466e42fb545be172b21_prof);

    }

    public function getTemplateName()
    {
        return "::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  121 => 40,  96 => 25,  89 => 21,  77 => 12,  68 => 5,  59 => 4,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block header %}
{% endblock %}
{% block body %}
<body>
    <div class=\"banner\">
        <!-- start slider -->
        <div id=\"fwslider\">
            <div class=\"slider_container\">
                <div class=\"slide\">
                    <!-- Slide image -->
                    <img src=\"{{ asset('templates/images/h0.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!-- Text title -->
                            <h1 class=\"title\"> FAMICITY</h1>
                            <!-- /Text title -->
                            <div class=\"button1\">
                            <a href=\" {{ path('fos_user_security_login') }}\">
                            <input type=\"submit\" value=\"Se connecter\"></a>
                        </div>
                            <div class=\"button1\">
                                <a href=\" {{ path('fos_user_registration_register') }}\">
                                    <input type=\"submit\" value=\"Crée un nouveau compte\"></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
            </div>

        </div>
        <!--/slider -->
    </div>
</body>

{% endblock %}
  {% block footer %}
  {% endblock %}", "::home.html.twig", "C:\\wamp\\www\\famicity3\\app/Resources\\views/home.html.twig");
    }
}
