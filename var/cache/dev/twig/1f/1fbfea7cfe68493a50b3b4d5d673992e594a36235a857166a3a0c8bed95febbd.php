<?php

/* MyAppBundle:Default:index.html.twig */
class __TwigTemplate_131ab2d2c1ff7fc8642fab6ca9e718940ad8f6d78cb7fdc17eda4aa19e699e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppBundle:Default:index.html.twig", 2);
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
        $__internal_af8e9a2a334a162eeb20023e92b0b716c5b4345d848a1b39001f0b012a971bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8e9a2a334a162eeb20023e92b0b716c5b4345d848a1b39001f0b012a971bc7->enter($__internal_af8e9a2a334a162eeb20023e92b0b716c5b4345d848a1b39001f0b012a971bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $__internal_b96947f2a45182eaf9f08745fca60a884f3def2428dca1deb35a648cc9908ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96947f2a45182eaf9f08745fca60a884f3def2428dca1deb35a648cc9908ad0->enter($__internal_b96947f2a45182eaf9f08745fca60a884f3def2428dca1deb35a648cc9908ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8e9a2a334a162eeb20023e92b0b716c5b4345d848a1b39001f0b012a971bc7->leave($__internal_af8e9a2a334a162eeb20023e92b0b716c5b4345d848a1b39001f0b012a971bc7_prof);

        
        $__internal_b96947f2a45182eaf9f08745fca60a884f3def2428dca1deb35a648cc9908ad0->leave($__internal_b96947f2a45182eaf9f08745fca60a884f3def2428dca1deb35a648cc9908ad0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63f9f0abc60fc30c99146d95c53b4a85d826e595b25c0518ea4cd8df74b00d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63f9f0abc60fc30c99146d95c53b4a85d826e595b25c0518ea4cd8df74b00d6->enter($__internal_e63f9f0abc60fc30c99146d95c53b4a85d826e595b25c0518ea4cd8df74b00d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6431ad83636fc18a017597eeb1335997170c71fa55da2cf23356336085c80e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6431ad83636fc18a017597eeb1335997170c71fa55da2cf23356336085c80e85->enter($__internal_6431ad83636fc18a017597eeb1335997170c71fa55da2cf23356336085c80e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>
    <div class=\"banner\">
        <!-- start slider -->
        <div id=\"fwslider\">
            <div class=\"slider_container\">
                <div class=\"slide\">
                    <!-- Slide image -->
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/slide01.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!-- Text title -->
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!-- /Text title -->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class=\"slide\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/slide04.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                </div>
                <!--/slide -->
                <!-- /Duplicate to create more slides -->
                <div class=\"slide\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/slide05.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class=\"timers\"></div>
            <div class=\"slidePrev\"><span></span></div>
            <div class=\"slideNext\"><span></span></div>
        </div>
        <!--/slider -->
    </div>
    <div class=\"main\">
        <div class=\"content-top\">
            <h2>SPECIAL WEEKEND</h2>
            <div class=\"row\">
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\">
                        <a href=\"#\">
                            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/sortie11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2> DIMANCHE 5 FEVRIER</h2>
                                <p> PARC NATUREL RÉGIONAL DU DOUBS</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Une rivière de loisirs</a></h4>
                    <p-- class=\"m_5\">Des Brenets au Saut-du-Doubs, en passant par les Franches-Montagne, le Parc du Doubs et son écrin de nature sauvage offrent un vaste terrain de jeu pour les randonneurs et les amateurs de loisirs en plein air. Et au milieu coule une rivière sauvage..</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/sortie12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>Une promotion exceptionnel pour les vacances !</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Profitez de 20% de reduction</a></h4>
                    <p class=\"m_5\">A l'heure des bilans de l'année écoulée et de l'enthousiasme tout frais des premiers jours de la nouvelle, voici 5 bonnes résolutions et 20 idées pour sortir du train-train et commencer 2017 sous les meilleurs auspices.</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/sortie13.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>Parc d'attractions dédié au Petit Prince de St-Exupéry</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Cette année, je le fais !</a></h4>
                    <p class=\"m_5\">A Prince-Park, le tour de l’Europe se vit également dans l’assiette grâce à une offre culinaire qui se décline au gré des quartiers thématiques. Avec une septantaine d’adresses (seize dans le Resort), des fast-foods aux restaurants à la carte en passant par la restauration à l’emporter, il y en a pour toutes les bourses et tous les goûts.</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/sortie4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>L'aventure, c'est l'aventure !</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Le parc d'attractions familial préféré d'Europe</a></h4>
                    <p class=\"m_5\">Entre Bâle et Strasbourg - à 3 heures en voiture depuis Lausanne - le parc de loisirs Europa-Park propose des attractions et du divertissement pour toute la famille en recréant la carte de l'Europe, façon fun et frissons.</p-->
                </div>
            </div>
            <br>
            <br>
            <br>
            <h2>SORTIR EN FAMILLE</h2>
        </div>
    </div>
    <div class=\"content-bottom\">
        <div class=\"container\">
            <div class=\"row content_bottom-text\">
                <div class=\"col-md-7\">
                    <h3>TOP 100 DES ACTIVITÉS GRATUITES <br>EN SUISSE ROMANDE</h3>
                    <p class=\"m_1\"> Qui ne rêve pas de passer du bon temps dans notre (pas si) chère Suisse romande sans bourse délier? Sites naturels d’exception, balades ludiques, musées, animaux de la ferme, jeux… </p>
                    <p class=\"m_2\">Famicity vous livre ses bons plans pour se détendre en famille sans se ruiner. Sortez malin !</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"features\">
        <div class=\"container\">
            <h3 class=\"m_3\">BON PLAN</h3>
            <div class=\"row\">
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\">
                        <a href=\"#\">
                            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/bp2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>OFFRE SPECIAL</h2>
                                <p> PARC NATUREL RÉGIONAL DU DOUBS</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Une rivière de loisirs</a></h4>
                    <p class=\"m_5\">Des Brenets au Saut-du-Doubs, en passant par les Franches-Montagne, le Parc du Doubs et son écrin de nature sauvage offrent un vaste terrain de jeu pour les randonneurs et les amateurs de loisirs en plein air. Et au milieu coule une rivière sauvage..</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/bp03.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>Parc Sousse</h2>
                                <p>Une promotion exceptionnel pour les vacances !</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Profitez de 20% de reduction</a></h4>
                    <p class=\"m_5\">A l'heure des bilans de l'année écoulée et de l'enthousiasme tout frais des premiers jours de la nouvelle, voici 5 bonnes résolutions et 20 idées pour sortir du train-train et commencer 2017 sous les meilleurs auspices.</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/cinema01.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>BONNES RÉSOLUTIONS 2017</h2>
                                <p>Parc d'attractions dédié au Petit Prince de St-Exupéry</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Cette année, je le fais !</a></h4>
                    <p class=\"m_5\">A Prince-Park, le tour de l’Europe se vit également dans l’assiette grâce à une offre culinaire qui se décline au gré des quartiers thématiques. Avec une septantaine d’adresses (seize dans le Resort), des fast-foods aux restaurants à la carte en passant par la restauration à l’emporter, il y en a pour toutes les bourses et tous les goûts.</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/bp04.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>EUROPA-PARK</h2>
                                <p>L'aventure, c'est l'aventure !</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Le parc d'attractions familial préféré d'Europe</a></h4>
                    <p class=\"m_5\">Entre Bâle et Strasbourg - à 3 heures en voiture depuis Lausanne - le parc de loisirs Europa-Park propose des attractions et du divertissement pour toute la famille en recréant la carte de l'Europe, façon fun et frissons.</p>
                </div>
            </div>
        </div>
    </div>


    </body>
";
        
        $__internal_6431ad83636fc18a017597eeb1335997170c71fa55da2cf23356336085c80e85->leave($__internal_6431ad83636fc18a017597eeb1335997170c71fa55da2cf23356336085c80e85_prof);

        
        $__internal_e63f9f0abc60fc30c99146d95c53b4a85d826e595b25c0518ea4cd8df74b00d6->leave($__internal_e63f9f0abc60fc30c99146d95c53b4a85d826e595b25c0518ea4cd8df74b00d6_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 174,  235 => 161,  219 => 148,  203 => 135,  164 => 99,  148 => 86,  132 => 73,  116 => 60,  90 => 37,  76 => 26,  58 => 11,  49 => 4,  40 => 3,  11 => 2,);
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
    <body>
    <div class=\"banner\">
        <!-- start slider -->
        <div id=\"fwslider\">
            <div class=\"slider_container\">
                <div class=\"slide\">
                    <!-- Slide image -->
                    <img src=\"{{ asset('templates/images/slide01.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!-- Text title -->
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!-- /Text title -->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class=\"slide\">
                    <img src=\"{{ asset('templates/images/slide04.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                </div>
                <!--/slide -->
                <!-- /Duplicate to create more slides -->
                <div class=\"slide\">
                    <img src=\"{{ asset('templates/images/slide05.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    <div class=\"slide_content\">
                        <div class=\"slide_content_wrap\">
                            <!--h1 class=\"title\">Run Over<br>Everything</h1-->
                            <!--div class=\"button\"><a href=\"#\">See Details</a></div-->
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class=\"timers\"></div>
            <div class=\"slidePrev\"><span></span></div>
            <div class=\"slideNext\"><span></span></div>
        </div>
        <!--/slider -->
    </div>
    <div class=\"main\">
        <div class=\"content-top\">
            <h2>SPECIAL WEEKEND</h2>
            <div class=\"row\">
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\">
                        <a href=\"#\">
                            <img src=\"{{ asset('templates/images/sortie11.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2> DIMANCHE 5 FEVRIER</h2>
                                <p> PARC NATUREL RÉGIONAL DU DOUBS</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Une rivière de loisirs</a></h4>
                    <p-- class=\"m_5\">Des Brenets au Saut-du-Doubs, en passant par les Franches-Montagne, le Parc du Doubs et son écrin de nature sauvage offrent un vaste terrain de jeu pour les randonneurs et les amateurs de loisirs en plein air. Et au milieu coule une rivière sauvage..</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/sortie12.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>Une promotion exceptionnel pour les vacances !</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Profitez de 20% de reduction</a></h4>
                    <p class=\"m_5\">A l'heure des bilans de l'année écoulée et de l'enthousiasme tout frais des premiers jours de la nouvelle, voici 5 bonnes résolutions et 20 idées pour sortir du train-train et commencer 2017 sous les meilleurs auspices.</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/sortie13.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>Parc d'attractions dédié au Petit Prince de St-Exupéry</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Cette année, je le fais !</a></h4>
                    <p class=\"m_5\">A Prince-Park, le tour de l’Europe se vit également dans l’assiette grâce à une offre culinaire qui se décline au gré des quartiers thématiques. Avec une septantaine d’adresses (seize dans le Resort), des fast-foods aux restaurants à la carte en passant par la restauration à l’emporter, il y en a pour toutes les bourses et tous les goûts.</p-->
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/sortie4.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>DIMANCHE 5 FEVRIER</h2>
                                <p>L'aventure, c'est l'aventure !</p>
                            </div>
                        </a> </div>
                    <!--h4 class=\"m_4\"><a href=\"#\">Le parc d'attractions familial préféré d'Europe</a></h4>
                    <p class=\"m_5\">Entre Bâle et Strasbourg - à 3 heures en voiture depuis Lausanne - le parc de loisirs Europa-Park propose des attractions et du divertissement pour toute la famille en recréant la carte de l'Europe, façon fun et frissons.</p-->
                </div>
            </div>
            <br>
            <br>
            <br>
            <h2>SORTIR EN FAMILLE</h2>
        </div>
    </div>
    <div class=\"content-bottom\">
        <div class=\"container\">
            <div class=\"row content_bottom-text\">
                <div class=\"col-md-7\">
                    <h3>TOP 100 DES ACTIVITÉS GRATUITES <br>EN SUISSE ROMANDE</h3>
                    <p class=\"m_1\"> Qui ne rêve pas de passer du bon temps dans notre (pas si) chère Suisse romande sans bourse délier? Sites naturels d’exception, balades ludiques, musées, animaux de la ferme, jeux… </p>
                    <p class=\"m_2\">Famicity vous livre ses bons plans pour se détendre en famille sans se ruiner. Sortez malin !</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"features\">
        <div class=\"container\">
            <h3 class=\"m_3\">BON PLAN</h3>
            <div class=\"row\">
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\">
                        <a href=\"#\">
                            <img src=\"{{ asset('templates/images/bp2.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>OFFRE SPECIAL</h2>
                                <p> PARC NATUREL RÉGIONAL DU DOUBS</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Une rivière de loisirs</a></h4>
                    <p class=\"m_5\">Des Brenets au Saut-du-Doubs, en passant par les Franches-Montagne, le Parc du Doubs et son écrin de nature sauvage offrent un vaste terrain de jeu pour les randonneurs et les amateurs de loisirs en plein air. Et au milieu coule une rivière sauvage..</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/bp03.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>Parc Sousse</h2>
                                <p>Une promotion exceptionnel pour les vacances !</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Profitez de 20% de reduction</a></h4>
                    <p class=\"m_5\">A l'heure des bilans de l'année écoulée et de l'enthousiasme tout frais des premiers jours de la nouvelle, voici 5 bonnes résolutions et 20 idées pour sortir du train-train et commencer 2017 sous les meilleurs auspices.</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/cinema01.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>BONNES RÉSOLUTIONS 2017</h2>
                                <p>Parc d'attractions dédié au Petit Prince de St-Exupéry</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Cette année, je le fais !</a></h4>
                    <p class=\"m_5\">A Prince-Park, le tour de l’Europe se vit également dans l’assiette grâce à une offre culinaire qui se décline au gré des quartiers thématiques. Avec une septantaine d’adresses (seize dans le Resort), des fast-foods aux restaurants à la carte en passant par la restauration à l’emporter, il y en a pour toutes les bourses et tous les goûts.</p>
                </div>
                <div class=\"col-md-3 top_box\">
                    <div class=\"view view-ninth\"><a href=\"#\">
                            <img src=\"{{ asset('templates/images/bp04.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                            <div class=\"mask mask-1\"> </div>
                            <div class=\"mask mask-2\"> </div>
                            <div class=\"content\">
                                <h2>EUROPA-PARK</h2>
                                <p>L'aventure, c'est l'aventure !</p>
                            </div>
                        </a> </div>
                    <h4 class=\"m_4\"><a href=\"#\">Le parc d'attractions familial préféré d'Europe</a></h4>
                    <p class=\"m_5\">Entre Bâle et Strasbourg - à 3 heures en voiture depuis Lausanne - le parc de loisirs Europa-Park propose des attractions et du divertissement pour toute la famille en recréant la carte de l'Europe, façon fun et frissons.</p>
                </div>
            </div>
        </div>
    </div>


    </body>
{% endblock %}

", "MyAppBundle:Default:index.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/index.html.twig");
    }
}
