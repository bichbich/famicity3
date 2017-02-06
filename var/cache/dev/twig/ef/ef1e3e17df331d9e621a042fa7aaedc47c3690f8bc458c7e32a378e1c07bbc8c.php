<?php

/* ::base.html.twig */
class __TwigTemplate_b976f460ddc8cffce8c268c3ece254eda36ce735938fecf191e7a5d3301c746c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12dbdd39b11157be7907cca1094eb13dd66bed2a9b0530c9988b38161cd8d2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dbdd39b11157be7907cca1094eb13dd66bed2a9b0530c9988b38161cd8d2dd->enter($__internal_12dbdd39b11157be7907cca1094eb13dd66bed2a9b0530c9988b38161cd8d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7f7c60184b39c03dd5db9d979fe9c1ad7de472613c1f016b275546b01cb354fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7c60184b39c03dd5db9d979fe9c1ad7de472613c1f016b275546b01cb354fb->enter($__internal_7f7c60184b39c03dd5db9d979fe9c1ad7de472613c1f016b275546b01cb354fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Famicity</title>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/menu.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>-->
    <!--start slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/fwslider.css"), "html", null, true);
        echo "\" media=\"all\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/fwslider.js"), "html", null, true);
        echo "\"></script>
    <!--end slider -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".dropdown img.flag\").addClass(\"flagvisibility\");

            \$(\".dropdown dt a\").click(function() {
                \$(\".dropdown dd ul\").toggle();
            });

            \$(\".dropdown dd ul li a\").click(function() {
                var text = \$(this).html();
                \$(\".dropdown dt a span\").html(text);
                \$(\".dropdown dd ul\").hide();
                \$(\"#result\").html(\"Selected value is: \" + getSelectedValue(\"sample\"));
            });

            function getSelectedValue(id) {
                return \$(\"#\" + id).find(\"dt a span.value\").html();
            }

            \$(document).bind('click', function(e) {
                var \$clicked = \$(e.target);
                if (! \$clicked.parents().hasClass(\"dropdown\"))
                    \$(\".dropdown dd ul\").hide();
            });

            \$(\"#flagSwitcher\").click(function() {
                \$(\".dropdown img.flag\").toggleClass(\"flagvisibility\");
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"header-left\">
                    <!--div class=\"logo\">
                       <a href=\"index.html\"><img src=\"\" alt=\"\"/></a>
                     </div-->
                    <div class=\"menu\">
                        <ul id=\"menu-deroulant\">
                            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">accueil</a>
                            <li><a href=\"#\">sortir en famille</a>
                                <ul>
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">parc</a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">restauration</a></li>
                                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">Gastronomie</a></li>
                                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">cinema</a></li>
                                </ul>
                            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teamm");
        echo "\">spéciale weekend</a>
                            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exp");
        echo "\">bon plan</a>
                            <li><a href=\"#\">promotions</a>
                        </ul>



                        <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/responsive-nav.js"), "html", null, true);
        echo "\"></script>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"header_right\">


                    <!-- start search-->
                    <div class=\"search-box\">
                        <div id=\"sb-search\" class=\"sb-search\">
                            <form>
                                <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\" name=\"search\" id=\"search\">
                                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                <span class=\"sb-icon-search\"> </span>
                            </form>

                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/classie.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/uisearch.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!----//search-scripts---->
                    <ul class=\"icon1 sub-icon1 profile_img\">
                        <li><a class=\"active-icon c1\" href=\"#\"> </a>
                            <ul class=\"sub-icon1 list\">
                                <div class=\"clear\"></div>
                                <li class=\"list_desc\"><h4><a href=\"#\">
                                            ";
        // line 113
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 114
            echo "                                <li class=\"profile-pic\">
                                    <a href=\"javascript:void(0)\"> <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/user.png"), "html", null, true);
            echo "\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                ";
        }
        // line 118
        echo "                                </a></h4><span class=\"actual\">
                         </span></li>
                                <div class=\"login_buttons\">
                                    <div class=\"login_button\"><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></div>
                                    <div class=\"check_button\"><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Se deconnecter</a></div>
                                    <div class=\"login_button\"><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></div>
</div>


                                    <div class=\"clear\"></div>
                                <div class=\"clear\"></div>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"icon1 sub-icon1 profile_img\">

                                <li class=\"list_desc\"><h4><a href=\"#\">
                                            ";
        // line 135
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 136
            echo "                                <li class=\"profile-pic\">
                            <a href=\"javascript:void(0)\"> <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/user.png"), "html", null, true);
            echo "\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                ";
        }
        // line 140
        echo "                                </a></h4><span class=\"actual\">
                         </span></li>



                            </ul>
                        </li>
                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    ";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        // line 157
        echo "</div>
<div class=\"footer\">
    ";
        // line 159
        $this->displayBlock('footer', $context, $blocks);
        // line 187
        echo "</div>
</body>
</html>

";
        
        $__internal_12dbdd39b11157be7907cca1094eb13dd66bed2a9b0530c9988b38161cd8d2dd->leave($__internal_12dbdd39b11157be7907cca1094eb13dd66bed2a9b0530c9988b38161cd8d2dd_prof);

        
        $__internal_7f7c60184b39c03dd5db9d979fe9c1ad7de472613c1f016b275546b01cb354fb->leave($__internal_7f7c60184b39c03dd5db9d979fe9c1ad7de472613c1f016b275546b01cb354fb_prof);

    }

    // line 155
    public function block_body($context, array $blocks = array())
    {
        $__internal_f55e6d7e8e911e24c1fd40a2b018d6b3f75b14b7fe4e5fa4a67df6bda044be83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55e6d7e8e911e24c1fd40a2b018d6b3f75b14b7fe4e5fa4a67df6bda044be83->enter($__internal_f55e6d7e8e911e24c1fd40a2b018d6b3f75b14b7fe4e5fa4a67df6bda044be83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ef550e5958719402b8dddd8cef1cd59398c396c1131d09af14181416cf50d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef550e5958719402b8dddd8cef1cd59398c396c1131d09af14181416cf50d8b->enter($__internal_9ef550e5958719402b8dddd8cef1cd59398c396c1131d09af14181416cf50d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 156
        echo "    ";
        
        $__internal_9ef550e5958719402b8dddd8cef1cd59398c396c1131d09af14181416cf50d8b->leave($__internal_9ef550e5958719402b8dddd8cef1cd59398c396c1131d09af14181416cf50d8b_prof);

        
        $__internal_f55e6d7e8e911e24c1fd40a2b018d6b3f75b14b7fe4e5fa4a67df6bda044be83->leave($__internal_f55e6d7e8e911e24c1fd40a2b018d6b3f75b14b7fe4e5fa4a67df6bda044be83_prof);

    }

    // line 159
    public function block_footer($context, array $blocks = array())
    {
        $__internal_75fb993cd52e1e880849a63ae9a6bc88af979238104d4055b61fdadcf560fcd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fb993cd52e1e880849a63ae9a6bc88af979238104d4055b61fdadcf560fcd8->enter($__internal_75fb993cd52e1e880849a63ae9a6bc88af979238104d4055b61fdadcf560fcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b85b6ca8a55bf20f607e047cbb409ebbc2340cdb9a6386bf19ef566a71c85fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85b6ca8a55bf20f607e047cbb409ebbc2340cdb9a6386bf19ef566a71c85fb1->enter($__internal_b85b6ca8a55bf20f607e047cbb409ebbc2340cdb9a6386bf19ef566a71c85fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 160
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Famicity Support</h4>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Enter your email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter your email';}\">
                                <input type=\"submit\" value=\"Go\">
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
            <div class=\"row footer_bottom\">
                <div class=\"copy\">
                    <p>© 2017 Template by meet your makers</p>
                </div>
            </div>
        </div>
    ";
        
        $__internal_b85b6ca8a55bf20f607e047cbb409ebbc2340cdb9a6386bf19ef566a71c85fb1->leave($__internal_b85b6ca8a55bf20f607e047cbb409ebbc2340cdb9a6386bf19ef566a71c85fb1_prof);

        
        $__internal_75fb993cd52e1e880849a63ae9a6bc88af979238104d4055b61fdadcf560fcd8->leave($__internal_75fb993cd52e1e880849a63ae9a6bc88af979238104d4055b61fdadcf560fcd8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 160,  307 => 159,  297 => 156,  288 => 155,  274 => 187,  272 => 159,  268 => 157,  266 => 155,  249 => 140,  241 => 137,  238 => 136,  236 => 135,  221 => 123,  217 => 122,  213 => 121,  208 => 118,  200 => 115,  197 => 114,  195 => 113,  182 => 103,  178 => 102,  156 => 83,  147 => 77,  143 => 76,  138 => 74,  134 => 73,  130 => 72,  126 => 71,  120 => 68,  73 => 24,  69 => 23,  65 => 22,  60 => 20,  56 => 19,  48 => 14,  44 => 13,  39 => 11,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Famicity</title>
    <link href=\"{{ asset('templates/css/menu.css')}}\" rel='stylesheet' type='text/css' />

    <link href=\"{{ asset('templates/css/bootstrap.css')}}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('templates/css/style.css')}}\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"{{ asset('templates/js/jquery.min.js')}}\"></script>
    <!--<script src=\"{{ asset('templates/js/jquery.easydropdown.js')}}\"></script>-->
    <!--start slider -->
    <link rel=\"stylesheet\" href=\"{{ asset('templates/css/fwslider.css')}}\" media=\"all\">
    <script src=\"{{ asset('templates/js/jquery-ui.min.js')}}\"></script>
    <script src=\"{{ asset('templates/js/fwslider.js')}}\"></script>
    <!--end slider -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".dropdown img.flag\").addClass(\"flagvisibility\");

            \$(\".dropdown dt a\").click(function() {
                \$(\".dropdown dd ul\").toggle();
            });

            \$(\".dropdown dd ul li a\").click(function() {
                var text = \$(this).html();
                \$(\".dropdown dt a span\").html(text);
                \$(\".dropdown dd ul\").hide();
                \$(\"#result\").html(\"Selected value is: \" + getSelectedValue(\"sample\"));
            });

            function getSelectedValue(id) {
                return \$(\"#\" + id).find(\"dt a span.value\").html();
            }

            \$(document).bind('click', function(e) {
                var \$clicked = \$(e.target);
                if (! \$clicked.parents().hasClass(\"dropdown\"))
                    \$(\".dropdown dd ul\").hide();
            });

            \$(\"#flagSwitcher\").click(function() {
                \$(\".dropdown img.flag\").toggleClass(\"flagvisibility\");
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"header-left\">
                    <!--div class=\"logo\">
                       <a href=\"index.html\"><img src=\"\" alt=\"\"/></a>
                     </div-->
                    <div class=\"menu\">
                        <ul id=\"menu-deroulant\">
                            <li><a href=\"{{  path('index')}}\">accueil</a>
                            <li><a href=\"#\">sortir en famille</a>
                                <ul>
                                    <li><a href=\"{{  path('shop')}}\">parc</a></li>
                                    <li><a href=\"{{  path('shop')}}\">restauration</a></li>
                                    <li><a href=\"{{ path('shop')}}\">Gastronomie</a></li>
                                    <li><a href=\"{{ path('shop')}}\">cinema</a></li>
                                </ul>
                            <li><a href=\"{{  path('teamm')}}\">spéciale weekend</a>
                            <li><a href=\"{{  path('exp')}}\">bon plan</a>
                            <li><a href=\"#\">promotions</a>
                        </ul>



                        <script type=\"text/javascript\" src=\"{{ asset('templates/js/responsive-nav.js')}}\"></script>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"header_right\">


                    <!-- start search-->
                    <div class=\"search-box\">
                        <div id=\"sb-search\" class=\"sb-search\">
                            <form>
                                <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\" name=\"search\" id=\"search\">
                                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                                <span class=\"sb-icon-search\"> </span>
                            </form>

                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src=\"{{ asset('templates/js/classie.js')}}\"></script>
                    <script src=\"{{ asset('templates/js/uisearch.js')}}\"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!----//search-scripts---->
                    <ul class=\"icon1 sub-icon1 profile_img\">
                        <li><a class=\"active-icon c1\" href=\"#\"> </a>
                            <ul class=\"sub-icon1 list\">
                                <div class=\"clear\"></div>
                                <li class=\"list_desc\"><h4><a href=\"#\">
                                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <li class=\"profile-pic\">
                                    <a href=\"javascript:void(0)\"> <img src=\"{{asset ('templates/images/user.png')}}\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{ app.user.username|trans({'%username%': app.user.username}, 'FOSUserBundle') }} </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                {% endif %}
                                </a></h4><span class=\"actual\">
                         </span></li>
                                <div class=\"login_buttons\">
                                    <div class=\"login_button\"><a href=\"{{ path(\"fos_user_security_login\") }}\">Se connecter</a></div>
                                    <div class=\"check_button\"><a href=\"{{ path(\"fos_user_security_logout\") }}\">Se deconnecter</a></div>
                                    <div class=\"login_button\"><a href=\"{{ path(\"fos_user_registration_register\") }}\">S'inscrire</a></div>
</div>


                                    <div class=\"clear\"></div>
                                <div class=\"clear\"></div>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"icon1 sub-icon1 profile_img\">

                                <li class=\"list_desc\"><h4><a href=\"#\">
                                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <li class=\"profile-pic\">
                            <a href=\"javascript:void(0)\"> <img src=\"{{asset ('templates/images/user.png')}}\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">{{ app.user.username|trans({'%username%': app.user.username}, 'FOSUserBundle') }} </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                {% endif %}
                                </a></h4><span class=\"actual\">
                         </span></li>



                            </ul>
                        </li>
                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    {% block body %}
    {% endblock %}
</div>
<div class=\"footer\">
    {% block footer %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Famicity Support</h4>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Enter your email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter your email';}\">
                                <input type=\"submit\" value=\"Go\">
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
            <div class=\"row footer_bottom\">
                <div class=\"copy\">
                    <p>© 2017 Template by meet your makers</p>
                </div>
            </div>
        </div>
    {% endblock %}
</div>
</body>
</html>

", "::base.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/base.html.twig");
    }
}
