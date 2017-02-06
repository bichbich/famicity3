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
        $__internal_49570aed19545381f025b30ee6c19893e8133342dfceec9de972704037644233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49570aed19545381f025b30ee6c19893e8133342dfceec9de972704037644233->enter($__internal_49570aed19545381f025b30ee6c19893e8133342dfceec9de972704037644233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:shop.html.twig"));

        $__internal_28c133c3ce3c61978ff3fa3db17fe1b5d72b6c706c9081664f73b0005e00a6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c133c3ce3c61978ff3fa3db17fe1b5d72b6c706c9081664f73b0005e00a6a1->enter($__internal_28c133c3ce3c61978ff3fa3db17fe1b5d72b6c706c9081664f73b0005e00a6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:shop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49570aed19545381f025b30ee6c19893e8133342dfceec9de972704037644233->leave($__internal_49570aed19545381f025b30ee6c19893e8133342dfceec9de972704037644233_prof);

        
        $__internal_28c133c3ce3c61978ff3fa3db17fe1b5d72b6c706c9081664f73b0005e00a6a1->leave($__internal_28c133c3ce3c61978ff3fa3db17fe1b5d72b6c706c9081664f73b0005e00a6a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c4a3fe09daad4ce7ad248f9cfe49861735f41e6fcc479cff0274e6d6454230f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4a3fe09daad4ce7ad248f9cfe49861735f41e6fcc479cff0274e6d6454230f->enter($__internal_2c4a3fe09daad4ce7ad248f9cfe49861735f41e6fcc479cff0274e6d6454230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_442310479560780c5cf6b406e596f99a1be53a8990010feae8e390f66bf9f6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442310479560780c5cf6b406e596f99a1be53a8990010feae8e390f66bf9f6fc->enter($__internal_442310479560780c5cf6b406e596f99a1be53a8990010feae8e390f66bf9f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"row shop_box-top\">
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/fam.jpeg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_442310479560780c5cf6b406e596f99a1be53a8990010feae8e390f66bf9f6fc->leave($__internal_442310479560780c5cf6b406e596f99a1be53a8990010feae8e390f66bf9f6fc_prof);

        
        $__internal_2c4a3fe09daad4ce7ad248f9cfe49861735f41e6fcc479cff0274e6d6454230f->leave($__internal_2c4a3fe09daad4ce7ad248f9cfe49861735f41e6fcc479cff0274e6d6454230f_prof);

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
        return array (  204 => 136,  184 => 119,  162 => 100,  143 => 84,  121 => 65,  98 => 45,  79 => 29,  56 => 9,  49 => 4,  40 => 3,  11 => 2,);
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
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic5.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic6.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic7.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic8.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic9.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/fam.jpeg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic11.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
                <div class=\"col-md-3 shop_box\"><a href=\"single.html\">
                        <img src=\"{{ asset('templates/images/pic12.jpg')}}\" class=\"img-responsive\" alt=\"\"/>
                        <span class=\"new-box\">
\t\t\t\t\t\t<span class=\"new-label\">New</span>
\t\t\t\t\t</span>
                        <span class=\"sale-box\">
\t\t\t\t\t\t<span class=\"sale-label\">Sale!</span>
\t\t\t\t\t</span>
                        <div class=\"shop_desc\">
                            <h3><a href=\"#\">aliquam volutp</a></h3>
                            <p>Lorem ipsum consectetuer adipiscing </p>
                            <span class=\"reducedfrom\">\$66.00</span>
                            <span class=\"actual\">\$12.00</span><br>
                            <ul class=\"buttons\">
                                <li class=\"cart\"><a href=\"#\">Add To Cart</a></li>
                                <li class=\"shop_btn\"><a href=\"#\">Read More</a></li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "MyAppBundle:Default:shop.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/shop.html.twig");
    }
}
