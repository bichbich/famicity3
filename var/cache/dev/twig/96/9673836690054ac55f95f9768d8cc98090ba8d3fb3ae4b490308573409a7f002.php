<?php

/* MyAppBundle:Default:register.html.twig */
class __TwigTemplate_65ba07ea547ef4024453103c57d8e9d9925e987f8cc8f8ab21b3a4e194e821dd extends Twig_Template
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
        $__internal_90a0cad3c2900f407847e868e473062b0a586b9f3a56ef782cdc7475ca0ce0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a0cad3c2900f407847e868e473062b0a586b9f3a56ef782cdc7475ca0ce0d9->enter($__internal_90a0cad3c2900f407847e868e473062b0a586b9f3a56ef782cdc7475ca0ce0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:register.html.twig"));

        $__internal_1b1d022c38e7f8c2f9f4497519fd0220fbaa1a7f53c78a94cf400e1054f912b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1d022c38e7f8c2f9f4497519fd0220fbaa1a7f53c78a94cf400e1054f912b3->enter($__internal_1b1d022c38e7f8c2f9f4497519fd0220fbaa1a7f53c78a94cf400e1054f912b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:register.html.twig"));

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
                        <ul class=\"nav\" id=\"nav\">
                            <li><a href=\"shop.html\">Shop</a></li>
                            <li><a href=\"team.html\">Team</a></li>
                            <li><a href=\"shop.html\">Events</a></li>
                            <li><a href=\"experiance.html\">Experiance</a></li>
                            <li><a href=\"shop.html\">Company</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <div class=\"clear\"></div>
                        </ul>
                        <script type=\"text/javascript\" src=\"";
        // line 72
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/classie.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 89
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
            <form>
                <div class=\"register-top-grid\">
                    <h3>PERSONAL INFORMATION</h3>
                    <div>
                        <span>First Name<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Last Name<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div class=\"clear\"> </div>
                    <a class=\"news-letter\" href=\"#\">
                        <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i> </i>Sign Up for Newsletter</label>
                    </a>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"clear\"> </div>
                <div class=\"register-bottom-grid\">
                    <h3>LOGIN INFORMATION</h3>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Confirm Password<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"clear\"> </div>
                <input type=\"submit\" value=\"submit\">
            </form>
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
        
        $__internal_90a0cad3c2900f407847e868e473062b0a586b9f3a56ef782cdc7475ca0ce0d9->leave($__internal_90a0cad3c2900f407847e868e473062b0a586b9f3a56ef782cdc7475ca0ce0d9_prof);

        
        $__internal_1b1d022c38e7f8c2f9f4497519fd0220fbaa1a7f53c78a94cf400e1054f912b3->leave($__internal_1b1d022c38e7f8c2f9f4497519fd0220fbaa1a7f53c78a94cf400e1054f912b3_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 89,  129 => 88,  110 => 72,  54 => 19,  46 => 14,  42 => 13,  37 => 11,  25 => 1,);
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
                        <ul class=\"nav\" id=\"nav\">
                            <li><a href=\"shop.html\">Shop</a></li>
                            <li><a href=\"team.html\">Team</a></li>
                            <li><a href=\"shop.html\">Events</a></li>
                            <li><a href=\"experiance.html\">Experiance</a></li>
                            <li><a href=\"shop.html\">Company</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <div class=\"clear\"></div>
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
            <form>
                <div class=\"register-top-grid\">
                    <h3>PERSONAL INFORMATION</h3>
                    <div>
                        <span>First Name<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Last Name<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div class=\"clear\"> </div>
                    <a class=\"news-letter\" href=\"#\">
                        <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i> </i>Sign Up for Newsletter</label>
                    </a>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"clear\"> </div>
                <div class=\"register-bottom-grid\">
                    <h3>LOGIN INFORMATION</h3>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div>
                        <span>Confirm Password<label>*</label></span>
                        <input type=\"text\">
                    </div>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"clear\"> </div>
                <input type=\"submit\" value=\"submit\">
            </form>
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
</html>", "MyAppBundle:Default:register.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/register.html.twig");
    }
}
