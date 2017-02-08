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
        $__internal_cf7aa13d22dd86b45211d755b552ba37c3272b10461a5c6fe98ebe952011ab36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7aa13d22dd86b45211d755b552ba37c3272b10461a5c6fe98ebe952011ab36->enter($__internal_cf7aa13d22dd86b45211d755b552ba37c3272b10461a5c6fe98ebe952011ab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_06575beb544be16c7163569096027a64e23219489e0838292bf3a149d93da79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06575beb544be16c7163569096027a64e23219489e0838292bf3a149d93da79f->enter($__internal_06575beb544be16c7163569096027a64e23219489e0838292bf3a149d93da79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 114
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 115
            echo "                                <li class=\"profile-pic\">
                                    <a href=\"javascript:void(0)\"> <img src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/user.png"), "html", null, true);
            echo "\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                ";
        }
        // line 119
        echo "                                </a></h4><span class=\"actual\">
                         </span></li>
                                <div class=\"login_buttons\">
                                    <div class=\"login_button\"><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></div>
                                    <div class=\"check_button\"><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Se deconnecter</a></div>
                                    <div class=\"login_button\"><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></div>

                                    <div class=\"img-responsive\"><a herf=\"";
        // line 126
        echo "fos_user_profile_edit";
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/edit.png"), "html", null, true);
        echo "\"  alt=\"\"/></a></div>
</div>


                                    <div class=\"clear\"></div>
                                <div class=\"clear\"></div>
                            </ul>
                        </li>
                    </ul>



                    <ul class=\"icon1 sub-icon1 profile_img\">
                                <li class=\"list_desc\"><h4><a href=\"#\">
                                            ";
        // line 140
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 141
            echo "                                <li class=\"profile-pic\">
                            <a href=\"javascript:void(0)\"> <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/user.png"), "html", null, true);
            echo "\"  class=\"img-circle\" width=\"36\"><span class=\"hidden-xs hidden-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span><i class=\"fa fa-angle-down fa-indicator\"></i> </a>
                                </li>
                                ";
        }
        // line 145
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
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "</div>
<div class=\"footer\">
    ";
        // line 162
        $this->displayBlock('footer', $context, $blocks);
        // line 190
        echo "</div>
</body>
</html>

";
        
        $__internal_cf7aa13d22dd86b45211d755b552ba37c3272b10461a5c6fe98ebe952011ab36->leave($__internal_cf7aa13d22dd86b45211d755b552ba37c3272b10461a5c6fe98ebe952011ab36_prof);

        
        $__internal_06575beb544be16c7163569096027a64e23219489e0838292bf3a149d93da79f->leave($__internal_06575beb544be16c7163569096027a64e23219489e0838292bf3a149d93da79f_prof);

    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
        $__internal_a586262e6c5901c81f8f3bb7c5286f069b84b802f7f742b8099aae6a5115db40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a586262e6c5901c81f8f3bb7c5286f069b84b802f7f742b8099aae6a5115db40->enter($__internal_a586262e6c5901c81f8f3bb7c5286f069b84b802f7f742b8099aae6a5115db40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e828ec40091902f8785d886af72131da0aceec5daadc9802a14da045d4f6b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e828ec40091902f8785d886af72131da0aceec5daadc9802a14da045d4f6b79->enter($__internal_6e828ec40091902f8785d886af72131da0aceec5daadc9802a14da045d4f6b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "    ";
        
        $__internal_6e828ec40091902f8785d886af72131da0aceec5daadc9802a14da045d4f6b79->leave($__internal_6e828ec40091902f8785d886af72131da0aceec5daadc9802a14da045d4f6b79_prof);

        
        $__internal_a586262e6c5901c81f8f3bb7c5286f069b84b802f7f742b8099aae6a5115db40->leave($__internal_a586262e6c5901c81f8f3bb7c5286f069b84b802f7f742b8099aae6a5115db40_prof);

    }

    // line 162
    public function block_footer($context, array $blocks = array())
    {
        $__internal_22e312e40f7005c33570745bd027f8617c4503516bf450fc180966fa6918188d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e312e40f7005c33570745bd027f8617c4503516bf450fc180966fa6918188d->enter($__internal_22e312e40f7005c33570745bd027f8617c4503516bf450fc180966fa6918188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_53524a6f6e721432b6e5601f13dd3ca3aa690154588b1d88f78e2366eff684ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53524a6f6e721432b6e5601f13dd3ca3aa690154588b1d88f78e2366eff684ec->enter($__internal_53524a6f6e721432b6e5601f13dd3ca3aa690154588b1d88f78e2366eff684ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 163
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Famicity Support</h4>
                        <li><a href=\"#\">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Entez votre email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Entez votre email';}\">
                                <input type=\"submit\" value=\"Valider\">
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
        
        $__internal_53524a6f6e721432b6e5601f13dd3ca3aa690154588b1d88f78e2366eff684ec->leave($__internal_53524a6f6e721432b6e5601f13dd3ca3aa690154588b1d88f78e2366eff684ec_prof);

        
        $__internal_22e312e40f7005c33570745bd027f8617c4503516bf450fc180966fa6918188d->leave($__internal_22e312e40f7005c33570745bd027f8617c4503516bf450fc180966fa6918188d_prof);

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
        return array (  324 => 163,  315 => 162,  305 => 159,  296 => 158,  282 => 190,  280 => 162,  276 => 160,  274 => 158,  259 => 145,  251 => 142,  248 => 141,  246 => 140,  227 => 126,  222 => 124,  218 => 123,  214 => 122,  209 => 119,  201 => 116,  198 => 115,  196 => 114,  182 => 103,  178 => 102,  156 => 83,  147 => 77,  143 => 76,  138 => 74,  134 => 73,  130 => 72,  126 => 71,  120 => 68,  73 => 24,  69 => 23,  65 => 22,  60 => 20,  56 => 19,  48 => 14,  44 => 13,  39 => 11,  27 => 1,);
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

                                    <div class=\"img-responsive\"><a herf=\"{{ (\"fos_user_profile_edit\") }}\"> <img src=\"{{ asset ('templates/images/edit.png') }}\"  alt=\"\"/></a></div>
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
                        <li><a href=\"#\">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Entez votre email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Entez votre email';}\">
                                <input type=\"submit\" value=\"Valider\">
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

", "::base.html.twig", "C:\\wamp\\www\\famicity3\\app/Resources\\views/base.html.twig");
    }
}
