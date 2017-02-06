<?php

/* base.html.twig */
class __TwigTemplate_97ad37b275166cc4c5cb94d70b94c48618c5d06d63bfb3687da9bc03b8a359ad extends Twig_Template
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
        $__internal_5d410ee59ced8a5152778c3bdd2793d681733a681a7793d8a1c65c8cbbf9456e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d410ee59ced8a5152778c3bdd2793d681733a681a7793d8a1c65c8cbbf9456e->enter($__internal_5d410ee59ced8a5152778c3bdd2793d681733a681a7793d8a1c65c8cbbf9456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1a8c79b5061a1e6dd2b329c8205ed17972b9c216ed7487ac9caeb664b30a8759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8c79b5061a1e6dd2b329c8205ed17972b9c216ed7487ac9caeb664b30a8759->enter($__internal_1a8c79b5061a1e6dd2b329c8205ed17972b9c216ed7487ac9caeb664b30a8759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html >
<head>
    <meta charset=\"UTF-8\">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">


    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/style.css"), "html", null, true);
        echo "\">


</head>

<body>
<div class=\"form\">

    <ul class=\"tab-group\">
        <li class=\"tab\"><a href=\"#login\">Log In</a></li>
    </ul>







        <div id=\"login\">
            <h1>Welcome Back!</h1>

            <form action=\"/\" method=\"post\">

                <div class=\"field-wrap\">
                    <label>
                        Email Address<span class=\"req\">*</span>
                    </label>
                    <input type=\"email\"required autocomplete=\"off\"/>
                </div>

                <div class=\"field-wrap\">
                    <label>
                        Password<span class=\"req\">*</span>
                    </label>
                    <input type=\"password\"required autocomplete=\"off\"/>
                </div>

                <p class=\"forgot\"><a href=\"#\">Forgot Password?</a></p>

                <button class=\"button button-block\"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/index.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_5d410ee59ced8a5152778c3bdd2793d681733a681a7793d8a1c65c8cbbf9456e->leave($__internal_5d410ee59ced8a5152778c3bdd2793d681733a681a7793d8a1c65c8cbbf9456e_prof);

        
        $__internal_1a8c79b5061a1e6dd2b329c8205ed17972b9c216ed7487ac9caeb664b30a8759->leave($__internal_1a8c79b5061a1e6dd2b329c8205ed17972b9c216ed7487ac9caeb664b30a8759_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 60,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html >
<head>
    <meta charset=\"UTF-8\">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">


    <link rel=\"stylesheet\" href=\"{{ asset('templates/css/style.css')}}\">


</head>

<body>
<div class=\"form\">

    <ul class=\"tab-group\">
        <li class=\"tab\"><a href=\"#login\">Log In</a></li>
    </ul>







        <div id=\"login\">
            <h1>Welcome Back!</h1>

            <form action=\"/\" method=\"post\">

                <div class=\"field-wrap\">
                    <label>
                        Email Address<span class=\"req\">*</span>
                    </label>
                    <input type=\"email\"required autocomplete=\"off\"/>
                </div>

                <div class=\"field-wrap\">
                    <label>
                        Password<span class=\"req\">*</span>
                    </label>
                    <input type=\"password\"required autocomplete=\"off\"/>
                </div>

                <p class=\"forgot\"><a href=\"#\">Forgot Password?</a></p>

                <button class=\"button button-block\"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src=\"{{   asset('templates/js/index.js')}}\"></script>

</body>
</html>
", "base.html.twig", "C:\\wamp\\www\\pidev\\app\\Resources\\views\\base.html.twig");
    }
}
