<?php

/* MyAppBundle:Default:shop.html.twig */
class __TwigTemplate_91335340f324b50b26d6c1802ff306dac3346e49b57455a0931efe3b519975d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:shop.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b154ab2def82a9d2ed71192b229c3c15d84a034c84ff8f6a98a5963fe1f26d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b154ab2def82a9d2ed71192b229c3c15d84a034c84ff8f6a98a5963fe1f26d93->enter($__internal_b154ab2def82a9d2ed71192b229c3c15d84a034c84ff8f6a98a5963fe1f26d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:shop.html.twig"));

        $__internal_b2b5dc9711c64fb95326c79c22448c309247cc470840572ec62a33d0c776ba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b5dc9711c64fb95326c79c22448c309247cc470840572ec62a33d0c776ba76->enter($__internal_b2b5dc9711c64fb95326c79c22448c309247cc470840572ec62a33d0c776ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:shop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b154ab2def82a9d2ed71192b229c3c15d84a034c84ff8f6a98a5963fe1f26d93->leave($__internal_b154ab2def82a9d2ed71192b229c3c15d84a034c84ff8f6a98a5963fe1f26d93_prof);

        
        $__internal_b2b5dc9711c64fb95326c79c22448c309247cc470840572ec62a33d0c776ba76->leave($__internal_b2b5dc9711c64fb95326c79c22448c309247cc470840572ec62a33d0c776ba76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_652977a9386c29f6b35d8eba84bef19c092797b34daaca41d57cfe9a704b6123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652977a9386c29f6b35d8eba84bef19c092797b34daaca41d57cfe9a704b6123->enter($__internal_652977a9386c29f6b35d8eba84bef19c092797b34daaca41d57cfe9a704b6123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97b4a869550683cb31f2f5a7c2cec0c4d51722e3c0fff63623528ed618e852e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b4a869550683cb31f2f5a7c2cec0c4d51722e3c0fff63623528ed618e852e4->enter($__internal_97b4a869550683cb31f2f5a7c2cec0c4d51722e3c0fff63623528ed618e852e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"row shop_box-top\">
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic001.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>

                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic002.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic003.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Reduction</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic007.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic005.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>

                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic008.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic009.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">REDUCTION</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html.twig\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/sortie000.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">REDUCTION</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_97b4a869550683cb31f2f5a7c2cec0c4d51722e3c0fff63623528ed618e852e4->leave($__internal_97b4a869550683cb31f2f5a7c2cec0c4d51722e3c0fff63623528ed618e852e4_prof);

        
        $__internal_652977a9386c29f6b35d8eba84bef19c092797b34daaca41d57cfe9a704b6123->leave($__internal_652977a9386c29f6b35d8eba84bef19c092797b34daaca41d57cfe9a704b6123_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 136,  181 => 116,  161 => 99,  141 => 82,  119 => 63,  96 => 43,  77 => 27,  56 => 9,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}
{% block body %}
<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"row shop_box-top\">
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic001.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>

                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic002.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic003.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Reduction</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic007.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic005.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>

                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic008.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"#\">
                        <img src=\"{{ asset('templates/images/pic009.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">REDUCTION</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html.twig\">
                        <img src=\"{{ asset('templates/images/sortie000.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">PARC</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">REDUCTION</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <!--h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br-->
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Reserver</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Voir plus</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "MyAppBundle:Default:shop.html.twig", "C:\\wamp\\www\\famicity3\\src\\MyAppBundle/Resources/views/Default/shop.html.twig");
    }
}
