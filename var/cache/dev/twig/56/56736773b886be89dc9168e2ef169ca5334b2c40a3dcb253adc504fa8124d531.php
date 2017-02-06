<?php

/* ::login.html.twig */
class __TwigTemplate_2711b80d93542875f94ee332f4f7621b974f00ff2f940cf22515697cbd32ab7c extends Twig_Template
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
        $__internal_de0336a9a7e93b8eca3501428023ac54336d94bb7f3f7a5ea36a62b9d3e975d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0336a9a7e93b8eca3501428023ac54336d94bb7f3f7a5ea36a62b9d3e975d8->enter($__internal_de0336a9a7e93b8eca3501428023ac54336d94bb7f3f7a5ea36a62b9d3e975d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        $__internal_46f42f0d2d4c443ab8376851a396c0b93bc07eefed79469a597e4adba639f3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f42f0d2d4c443ab8376851a396c0b93bc07eefed79469a597e4adba639f3b8->enter($__internal_46f42f0d2d4c443ab8376851a396c0b93bc07eefed79469a597e4adba639f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

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
    <title>Free Snow Bootstrap Website Template | Checkout :: w3layouts</title>
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
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"/></a>
                    </div>
                    <div class=\"menu\">
                        <a class=\"toggleMenu\" href=\"#\"><img src=\"images/nav.png\" alt=\"\" /></a>
                        <ul id=\"menu-deroulant\">
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("layoutt");
        echo "\">accueil</a>
                            <li><a href=\"#\">sortir en famille</a>
                                <ul>
                                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">parc</a></li>
                                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">restauration</a></li>
                                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">Gastronomie</a></li>
                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shop");
        echo "\">cinema</a></li>
                                </ul>
                            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teamm");
        echo "\">spéciale weekend</a>
                            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exp");
        echo "\">bon plan</a>
                            <li><a href=\"#\">promotions</a>



                            </li>
                        </ul>
                        <script type=\"text/javascript\" src=\"";
        // line 80
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/classie.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/uisearch.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <ul class=\"icon1 sub-icon1 profile_img\">
                        <li><a class=\"active-icon c1\" href=\"#\"> </a>
                            <ul class=\"sub-icon1 list\">
                                <div class=\"product_control_buttons\">
                                    <a href=\"#\"><img src=\"images/edit.png\" alt=\"\"/></a>
                                    <a href=\"#\"><img src=\"images/close_edit.png\" alt=\"\"/></a>
                                </div>
                                <div class=\"clear\"></div>
                                <li class=\"list_img\"><img src=\"images/1.jpg\" alt=\"\"/></li>
                                <li class=\"list_desc\"><h4><a href=\"#\">velit esse molestie</a></h4><span class=\"actual\">1 x
                          \$12.00</span></li>
                                <div class=\"login_buttons\">
                                    <div class=\"check_button\"><a href=\"checkout.html\">Check out</a></div>
                                    <div class=\"login_button\"><a href=\"login.html\">Login</a></div>
                                    <div class=\"clear\"></div>
                                </div>
                                <div class=\"clear\"></div>
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
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
                    <h4 class=\"title\">New Customers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                    <div class=\"button1\">
                        <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Create an Account\"></a>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"login-title\">
                    <h4 class=\"title\">Registered Customers</h4>
                    <div id=\"loginbox\" class=\"loginbox\">
                        <form action=\"\" method=\"post\" name=\"login\" id=\"login-form\">
                            <fieldset class=\"input\">
                                <p id=\"login-form-username\">
                                    <label for=\"modlgn_username\">Email</label>
                                    <input id=\"modlgn_username\" type=\"text\" name=\"email\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
                                </p>
                                <p id=\"login-form-password\">
                                    <label for=\"modlgn_passwd\">Password</label>
                                    <input id=\"modlgn_passwd\" type=\"password\" name=\"password\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
                                </p>
                                <div class=\"remember\">
                                    <p id=\"login-form-remember\">
                                        <label for=\"modlgn_remember\"><a href=\"#\">Forget Your Password ? </a></label>
                                    </p>
                                    <input type=\"submit\" name=\"Submit\" class=\"button\" value=\"Login\"><div class=\"clear\"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>Products</h4>
                    <li><a href=\"#\">Mens</a></li>
                    <li><a href=\"#\">Womens</a></li>
                    <li><a href=\"#\">Youth</a></li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>About</h4>
                    <li><a href=\"#\">Careers and internships</a></li>
                    <li><a href=\"#\">Sponserships</a></li>
                    <li><a href=\"#\">team</a></li>
                    <li><a href=\"#\">Catalog Request/Download</a></li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>Customer Support</h4>
                    <li><a href=\"#\">Contact Us</a></li>
                    <li><a href=\"#\">Shipping and Order Tracking</a></li>
                    <li><a href=\"#\">Easy Returns</a></li>
                    <li><a href=\"#\">Warranty</a></li>
                    <li><a href=\"#\">Replacement Binding Parts</a></li>
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
                    <ul class=\"social\">
                        <li class=\"facebook\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"twitter\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"instagram\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"pinterest\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"youtube\"><a href=\"#\"><span> </span></a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class=\"row footer_bottom\">
            <div class=\"copy\">
                <p>© 2014 Template by <a href=\"http://w3layouts.com\" target=\"_blank\">w3layouts</a></p>
            </div>
            <dl id=\"sample\" class=\"dropdown\">
                <dt><a href=\"#\"><span>Change Region</span></a></dt>
                <dd>
                    <ul>
                        <li><a href=\"#\">Australia<img class=\"flag\" src=\"images/as.png\" alt=\"\" /><span class=\"value\">AS</span></a></li>
                        <li><a href=\"#\">Sri Lanka<img class=\"flag\" src=\"images/srl.png\" alt=\"\" /><span class=\"value\">SL</span></a></li>
                        <li><a href=\"#\">Newziland<img class=\"flag\" src=\"images/nz.png\" alt=\"\" /><span class=\"value\">NZ</span></a></li>
                        <li><a href=\"#\">Pakistan<img class=\"flag\" src=\"images/pk.png\" alt=\"\" /><span class=\"value\">Pk</span></a></li>
                        <li><a href=\"#\">United Kingdom<img class=\"flag\" src=\"images/uk.png\" alt=\"\" /><span class=\"value\">UK</span></a></li>
                        <li><a href=\"#\">United States<img class=\"flag\" src=\"images/us.png\" alt=\"\" /><span class=\"value\">US</span></a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_de0336a9a7e93b8eca3501428023ac54336d94bb7f3f7a5ea36a62b9d3e975d8->leave($__internal_de0336a9a7e93b8eca3501428023ac54336d94bb7f3f7a5ea36a62b9d3e975d8_prof);

        
        $__internal_46f42f0d2d4c443ab8376851a396c0b93bc07eefed79469a597e4adba639f3b8->leave($__internal_46f42f0d2d4c443ab8376851a396c0b93bc07eefed79469a597e4adba639f3b8_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 135,  162 => 97,  158 => 96,  139 => 80,  129 => 73,  125 => 72,  120 => 70,  116 => 69,  112 => 68,  108 => 67,  102 => 64,  54 => 19,  46 => 14,  42 => 13,  37 => 11,  25 => 1,);
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
    <title>Free Snow Bootstrap Website Template | Checkout :: w3layouts</title>
    <link href=\"{{ asset('templates/css/menu.css')}}\" rel='stylesheet' type='text/css' />

    <link href=\"{{ asset('templates/css/bootstrap.css')}}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('templates/css/style.css')}}\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"{{ asset('templates/js/jquery.min.js')}}\"></script>
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
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"/></a>
                    </div>
                    <div class=\"menu\">
                        <a class=\"toggleMenu\" href=\"#\"><img src=\"images/nav.png\" alt=\"\" /></a>
                        <ul id=\"menu-deroulant\">
                            <li><a href=\"{{  path('layoutt')}}\">accueil</a>
                            <li><a href=\"#\">sortir en famille</a>
                                <ul>
                                    <li><a href=\"{{  path('shop')}}\">parc</a></li>
                                    <li><a href=\"{{  path('shop') }}\">restauration</a></li>
                                    <li><a href=\"{{  path('shop') }}\">Gastronomie</a></li>
                                    <li><a href=\"{{  path('shop') }}\">cinema</a></li>
                                </ul>
                            <li><a href=\"{{  path('teamm')}}\">spéciale weekend</a>
                            <li><a href=\"{{  path('exp')}}\">bon plan</a>
                            <li><a href=\"#\">promotions</a>



                            </li>
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
                    <ul class=\"icon1 sub-icon1 profile_img\">
                        <li><a class=\"active-icon c1\" href=\"#\"> </a>
                            <ul class=\"sub-icon1 list\">
                                <div class=\"product_control_buttons\">
                                    <a href=\"#\"><img src=\"images/edit.png\" alt=\"\"/></a>
                                    <a href=\"#\"><img src=\"images/close_edit.png\" alt=\"\"/></a>
                                </div>
                                <div class=\"clear\"></div>
                                <li class=\"list_img\"><img src=\"images/1.jpg\" alt=\"\"/></li>
                                <li class=\"list_desc\"><h4><a href=\"#\">velit esse molestie</a></h4><span class=\"actual\">1 x
                          \$12.00</span></li>
                                <div class=\"login_buttons\">
                                    <div class=\"check_button\"><a href=\"checkout.html\">Check out</a></div>
                                    <div class=\"login_button\"><a href=\"login.html\">Login</a></div>
                                    <div class=\"clear\"></div>
                                </div>
                                <div class=\"clear\"></div>
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
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"col-md-6\">
                <div class=\"login-page\">
                    <h4 class=\"title\">New Customers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                    <div class=\"button1\">
                        <a href=\"{{ path('register') }}\"><input type=\"submit\" name=\"Submit\" value=\"Create an Account\"></a>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"login-title\">
                    <h4 class=\"title\">Registered Customers</h4>
                    <div id=\"loginbox\" class=\"loginbox\">
                        <form action=\"\" method=\"post\" name=\"login\" id=\"login-form\">
                            <fieldset class=\"input\">
                                <p id=\"login-form-username\">
                                    <label for=\"modlgn_username\">Email</label>
                                    <input id=\"modlgn_username\" type=\"text\" name=\"email\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
                                </p>
                                <p id=\"login-form-password\">
                                    <label for=\"modlgn_passwd\">Password</label>
                                    <input id=\"modlgn_passwd\" type=\"password\" name=\"password\" class=\"inputbox\" size=\"18\" autocomplete=\"off\">
                                </p>
                                <div class=\"remember\">
                                    <p id=\"login-form-remember\">
                                        <label for=\"modlgn_remember\"><a href=\"#\">Forget Your Password ? </a></label>
                                    </p>
                                    <input type=\"submit\" name=\"Submit\" class=\"button\" value=\"Login\"><div class=\"clear\"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>Products</h4>
                    <li><a href=\"#\">Mens</a></li>
                    <li><a href=\"#\">Womens</a></li>
                    <li><a href=\"#\">Youth</a></li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>About</h4>
                    <li><a href=\"#\">Careers and internships</a></li>
                    <li><a href=\"#\">Sponserships</a></li>
                    <li><a href=\"#\">team</a></li>
                    <li><a href=\"#\">Catalog Request/Download</a></li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"footer_box\">
                    <h4>Customer Support</h4>
                    <li><a href=\"#\">Contact Us</a></li>
                    <li><a href=\"#\">Shipping and Order Tracking</a></li>
                    <li><a href=\"#\">Easy Returns</a></li>
                    <li><a href=\"#\">Warranty</a></li>
                    <li><a href=\"#\">Replacement Binding Parts</a></li>
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
                    <ul class=\"social\">
                        <li class=\"facebook\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"twitter\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"instagram\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"pinterest\"><a href=\"#\"><span> </span></a></li>
                        <li class=\"youtube\"><a href=\"#\"><span> </span></a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class=\"row footer_bottom\">
            <div class=\"copy\">
                <p>© 2014 Template by <a href=\"http://w3layouts.com\" target=\"_blank\">w3layouts</a></p>
            </div>
            <dl id=\"sample\" class=\"dropdown\">
                <dt><a href=\"#\"><span>Change Region</span></a></dt>
                <dd>
                    <ul>
                        <li><a href=\"#\">Australia<img class=\"flag\" src=\"images/as.png\" alt=\"\" /><span class=\"value\">AS</span></a></li>
                        <li><a href=\"#\">Sri Lanka<img class=\"flag\" src=\"images/srl.png\" alt=\"\" /><span class=\"value\">SL</span></a></li>
                        <li><a href=\"#\">Newziland<img class=\"flag\" src=\"images/nz.png\" alt=\"\" /><span class=\"value\">NZ</span></a></li>
                        <li><a href=\"#\">Pakistan<img class=\"flag\" src=\"images/pk.png\" alt=\"\" /><span class=\"value\">Pk</span></a></li>
                        <li><a href=\"#\">United Kingdom<img class=\"flag\" src=\"images/uk.png\" alt=\"\" /><span class=\"value\">UK</span></a></li>
                        <li><a href=\"#\">United States<img class=\"flag\" src=\"images/us.png\" alt=\"\" /><span class=\"value\">US</span></a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div>
</body>
</html>", "::login.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/login.html.twig");
    }
}
