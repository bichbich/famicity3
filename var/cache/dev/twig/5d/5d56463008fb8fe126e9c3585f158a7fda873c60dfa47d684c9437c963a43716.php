<?php

/* MyAppBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_337f8ffb4d4ce511ac87dcc54ad6ca4ebcbaa5233f0bb4e5e9a75a9afa9d32b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:indexAdmin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48d5a9b2794b3911845f17509217c6f1798ea4dc2d27464900b79e1bcb6faf35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d5a9b2794b3911845f17509217c6f1798ea4dc2d27464900b79e1bcb6faf35->enter($__internal_48d5a9b2794b3911845f17509217c6f1798ea4dc2d27464900b79e1bcb6faf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:indexAdmin.html.twig"));

        $__internal_f3fdac47edaa4efa2cbac3f2d3f86ea4d689f1f587e692eded93e868c6a9fad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fdac47edaa4efa2cbac3f2d3f86ea4d689f1f587e692eded93e868c6a9fad0->enter($__internal_f3fdac47edaa4efa2cbac3f2d3f86ea4d689f1f587e692eded93e868c6a9fad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d5a9b2794b3911845f17509217c6f1798ea4dc2d27464900b79e1bcb6faf35->leave($__internal_48d5a9b2794b3911845f17509217c6f1798ea4dc2d27464900b79e1bcb6faf35_prof);

        
        $__internal_f3fdac47edaa4efa2cbac3f2d3f86ea4d689f1f587e692eded93e868c6a9fad0->leave($__internal_f3fdac47edaa4efa2cbac3f2d3f86ea4d689f1f587e692eded93e868c6a9fad0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b63b8e9fc72f5b55bf92597b7ce230db2374df4a14221b596dd6d7a3a12efab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63b8e9fc72f5b55bf92597b7ce230db2374df4a14221b596dd6d7a3a12efab6->enter($__internal_b63b8e9fc72f5b55bf92597b7ce230db2374df4a14221b596dd6d7a3a12efab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b49807470c87489de0059b789c2a83a5329c9fdcf48a37381894ad94c9c570d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49807470c87489de0059b789c2a83a5329c9fdcf48a37381894ad94c9c570d6->enter($__internal_b49807470c87489de0059b789c2a83a5329c9fdcf48a37381894ad94c9c570d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "            <section class=\"content-header\">
                <h1>
                    Accueil
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion compte</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>Reservation</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Famille</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\"> Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p> Invitation</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Visiteurs</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\"> Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- /.nav-tabs-custom -->

                        <!-- Chat box -->
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <i class=\"fa fa-comments-o\"></i>

                                <h3 class=\"box-title\">Chat</h3>

                                <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                                    <div class=\"btn-group\" data-toggle=\"btn-toggle\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"box-body chat\" id=\"chat-box\">
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"online\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                                            Mike Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                    <div class=\"attachment\">
                                        <h4>Attachments:</h4>

                                        <p class=\"filename\">
                                            Theme-thumbnail-image.jpg
                                        </p>

                                        <div class=\"pull-right\">
                                            <button type=\"button\" class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                                        </div>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                            Alexander Pierce
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" alt=\"user image\" class=\"offline\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                                            Susan Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.chat -->
                            <div class=\"box-footer\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" placeholder=\"Type message...\">

                                    <div class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- right col -->
                    <div class=\"col-md-4\">
                        <!-- Info Boxes Style 2 -->
                        <div class=\"info-box bg-yellow\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-pricetag-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Inventory</span>
                                <span class=\"info-box-number\">5,200</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 50%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    50% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-green\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-heart-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Mentions</span>
                                <span class=\"info-box-number\">92,050</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 20%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    20% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-red\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-cloud-download-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Downloads</span>
                                <span class=\"info-box-number\">114,381</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 70%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    70% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-aqua\">
                            <span class=\"info-box-icon\"><i class=\"ion-ios-chatbubble-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Direct Messages</span>
                                <span class=\"info-box-number\">163,921</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 40%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    40% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Browser Usage</h3>

                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                            <!-- /.
                            </div>
                            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
        ";
        
        $__internal_b49807470c87489de0059b789c2a83a5329c9fdcf48a37381894ad94c9c570d6->leave($__internal_b49807470c87489de0059b789c2a83a5329c9fdcf48a37381894ad94c9c570d6_prof);

        
        $__internal_b63b8e9fc72f5b55bf92597b7ce230db2374df4a14221b596dd6d7a3a12efab6->leave($__internal_b63b8e9fc72f5b55bf92597b7ce230db2374df4a14221b596dd6d7a3a12efab6_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 144,  180 => 129,  150 => 102,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::baseAdmin.html.twig' %}
        {% block content %}
            <section class=\"content-header\">
                <h1>
                    Accueil
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion compte</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>Reservation</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Famille</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\"> Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p> Invitation</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-xs-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Visiteurs</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\"> Plus d'info <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- /.nav-tabs-custom -->

                        <!-- Chat box -->
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <i class=\"fa fa-comments-o\"></i>

                                <h3 class=\"box-title\">Chat</h3>

                                <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                                    <div class=\"btn-group\" data-toggle=\"btn-toggle\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"box-body chat\" id=\"chat-box\">
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"{{ asset('templateAdmin/dist/img/user4-128x128.jpg')}}\" alt=\"user image\" class=\"online\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                                            Mike Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                    <div class=\"attachment\">
                                        <h4>Attachments:</h4>

                                        <p class=\"filename\">
                                            Theme-thumbnail-image.jpg
                                        </p>

                                        <div class=\"pull-right\">
                                            <button type=\"button\" class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                                        </div>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"{{ asset('templateAdmin/dist/img/user3-128x128.jpg')}}\" alt=\"user image\" class=\"offline\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                            Alexander Pierce
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                                <!-- chat item -->
                                <div class=\"item\">
                                    <img src=\"{{ asset('templateAdmin/dist/img/user2-160x160.jpg')}}\" alt=\"user image\" class=\"offline\">

                                    <p class=\"message\">
                                        <a href=\"#\" class=\"name\">
                                            <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                                            Susan Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.chat -->
                            <div class=\"box-footer\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" placeholder=\"Type message...\">

                                    <div class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- right col -->
                    <div class=\"col-md-4\">
                        <!-- Info Boxes Style 2 -->
                        <div class=\"info-box bg-yellow\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-pricetag-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Inventory</span>
                                <span class=\"info-box-number\">5,200</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 50%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    50% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-green\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-heart-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Mentions</span>
                                <span class=\"info-box-number\">92,050</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 20%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    20% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-red\">
                            <span class=\"info-box-icon\"><i class=\"ion ion-ios-cloud-download-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Downloads</span>
                                <span class=\"info-box-number\">114,381</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 70%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    70% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class=\"info-box bg-aqua\">
                            <span class=\"info-box-icon\"><i class=\"ion-ios-chatbubble-outline\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Direct Messages</span>
                                <span class=\"info-box-number\">163,921</span>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 40%\"></div>
                                </div>
                                <span class=\"progress-description\">
                    40% Increase in 30 Days
                  </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Browser Usage</h3>

                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                            <!-- /.
                            </div>
                            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
        {% endblock %}", "MyAppBundle:Default:indexAdmin.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/indexAdmin.html.twig");
    }
}
