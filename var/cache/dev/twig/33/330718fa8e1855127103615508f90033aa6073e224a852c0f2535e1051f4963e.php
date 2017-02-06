<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_abbac8173938de0422f473339be9168771c6ed3fe1d17e0e01cf69ddc3fa5999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71f1177a93a53911b86c79efeb31c73fa131580f78a03a5bf605e0220a005f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f1177a93a53911b86c79efeb31c73fa131580f78a03a5bf605e0220a005f2d->enter($__internal_71f1177a93a53911b86c79efeb31c73fa131580f78a03a5bf605e0220a005f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        $__internal_38ebd54b5e67a464ee428b9a43fbf49dd53631b69978ede24ccd0bbf40e4b1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ebd54b5e67a464ee428b9a43fbf49dd53631b69978ede24ccd0bbf40e4b1cf->enter($__internal_38ebd54b5e67a464ee428b9a43fbf49dd53631b69978ede24ccd0bbf40e4b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Interface Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Fami</b>city</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Alexander Pierce</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templateAdmin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" data-toggle=\"control-sidebar\">se deconnecter</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Recherche...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">NAVIGATION</li>
                <li><a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdmin");
        echo "\"><i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                <li><a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionCompte");
        echo "\"><i class=\"fa fa-pie-chart\"></i><span>Compte</span></a></li>
                <li><a href=\"";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionActualite");
        echo "\"><i class=\"fa fa-laptop\"></i><span>Actualite</span></a></li>
                <li><a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionService");
        echo "\"><i class=\"fa fa-edit\"></i> <span>Services</span></a></li>
                <li><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionEvaluation");
        echo "\"><i class=\"fa fa-table\"></i> <span>Evaluation</span></a></li>
                <li><a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionReservation");
        echo "\"><i class=\"fa fa-folder\"></i> <span>Reservation</span></a></li>
                <li><a href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionPromotion");
        echo "\"><i class=\"fa fa-share\"></i> <span>Promotion</span></a></li>
                <li><a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionArbre");
        echo "\"><i class=\"fa fa-book\"></i> <span>Arbre</span></a></li>
                <li class=\"header\">Notification</li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        ";
        // line 220
        $this->displayBlock('content', $context, $blocks);
        // line 222
        echo "    </div>
    <!-- /.content-wrapper -->
    <!--
    <aside class=\"control-sidebar control-sidebar-dark\">
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class=\"control-sidebar-bg\"></div>
</div>
-->
    <script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"../../plugins/chartjs/Chart.min.js\"></script>
    <!-- FastClick -->
    <script src=\"../../plugins/fastclick/fastclick.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"../../dist/js/app.min.js\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"../../dist/js/demo.js\"></script>
    <!-- page script -->
    <script>
        \$(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = \$(\"#areaChart\").get(0).getContext(\"2d\");
            // This will get the first returned node in the jQuery collection.
            var areaChart = new Chart(areaChartCanvas);

            var areaChartData = {
                labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                datasets: [
                    {
                        label: \"Electronics\",
                        fillColor: \"rgba(210, 214, 222, 1)\",
                        strokeColor: \"rgba(210, 214, 222, 1)\",
                        pointColor: \"rgba(210, 214, 222, 1)\",
                        pointStrokeColor: \"#c1c7d1\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(220,220,220,1)\",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: \"Digital Goods\",
                        fillColor: \"rgba(60,141,188,0.9)\",
                        strokeColor: \"rgba(60,141,188,0.8)\",
                        pointColor: \"#3b8bba\",
                        pointStrokeColor: \"rgba(60,141,188,1)\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(60,141,188,1)\",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions);

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = \$(\"#lineChart\").get(0).getContext(\"2d\");
            var lineChart = new Chart(lineChartCanvas);
            var lineChartOptions = areaChartOptions;
            lineChartOptions.datasetFill = false;
            lineChart.Line(areaChartData, lineChartOptions);

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = \$(\"#pieChart\").get(0).getContext(\"2d\");
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [
                {
                    value: 700,
                    color: \"#f56954\",
                    highlight: \"#f56954\",
                    label: \"Chrome\"
                },
                {
                    value: 500,
                    color: \"#00a65a\",
                    highlight: \"#00a65a\",
                    label: \"IE\"
                },
                {
                    value: 400,
                    color: \"#f39c12\",
                    highlight: \"#f39c12\",
                    label: \"FireFox\"
                },
                {
                    value: 600,
                    color: \"#00c0ef\",
                    highlight: \"#00c0ef\",
                    label: \"Safari\"
                },
                {
                    value: 300,
                    color: \"#3c8dbc\",
                    highlight: \"#3c8dbc\",
                    label: \"Opera\"
                },
                {
                    value: 100,
                    color: \"#d2d6de\",
                    highlight: \"#d2d6de\",
                    label: \"Navigator\"
                }
            ];
            var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                //String - The colour of each segment stroke
                segmentStrokeColor: \"#fff\",
                //Number - The width of each segment stroke
                segmentStrokeWidth: 2,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps: 100,
                //String - Animation easing effect
                animationEasing: \"easeOutBounce\",
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //String - A legend template
            };
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart.Doughnut(PieData, pieOptions);

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = \$(\"#barChart\").get(0).getContext(\"2d\");
            var barChart = new Chart(barChartCanvas);
            var barChartData = areaChartData;
            barChartData.datasets[1].fillColor = \"#00a65a\";
            barChartData.datasets[1].strokeColor = \"#00a65a\";
            barChartData.datasets[1].pointColor = \"#00a65a\";
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            };

            barChartOptions.datasetFill = false;
            barChart.Bar(barChartData, barChartOptions);
        });
    </script>
    </div>
</body>

</html>
";
        
        $__internal_71f1177a93a53911b86c79efeb31c73fa131580f78a03a5bf605e0220a005f2d->leave($__internal_71f1177a93a53911b86c79efeb31c73fa131580f78a03a5bf605e0220a005f2d_prof);

        
        $__internal_38ebd54b5e67a464ee428b9a43fbf49dd53631b69978ede24ccd0bbf40e4b1cf->leave($__internal_38ebd54b5e67a464ee428b9a43fbf49dd53631b69978ede24ccd0bbf40e4b1cf_prof);

    }

    // line 220
    public function block_content($context, array $blocks = array())
    {
        $__internal_1305dc8b8aae1dc295dcf7824efe5f503d3ee1ee7d5f32a922a8e1e51e2b25f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1305dc8b8aae1dc295dcf7824efe5f503d3ee1ee7d5f32a922a8e1e51e2b25f9->enter($__internal_1305dc8b8aae1dc295dcf7824efe5f503d3ee1ee7d5f32a922a8e1e51e2b25f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_262428d67d50e2eb27af829602dddeb71791c8a0e8a4fa5424743423501977ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262428d67d50e2eb27af829602dddeb71791c8a0e8a4fa5424743423501977ca->enter($__internal_262428d67d50e2eb27af829602dddeb71791c8a0e8a4fa5424743423501977ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 221
        echo "        ";
        
        $__internal_262428d67d50e2eb27af829602dddeb71791c8a0e8a4fa5424743423501977ca->leave($__internal_262428d67d50e2eb27af829602dddeb71791c8a0e8a4fa5424743423501977ca_prof);

        
        $__internal_1305dc8b8aae1dc295dcf7824efe5f503d3ee1ee7d5f32a922a8e1e51e2b25f9->leave($__internal_1305dc8b8aae1dc295dcf7824efe5f503d3ee1ee7d5f32a922a8e1e51e2b25f9_prof);

    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 221,  699 => 220,  297 => 222,  295 => 220,  279 => 207,  275 => 206,  271 => 205,  267 => 204,  263 => 203,  259 => 202,  255 => 201,  251 => 200,  225 => 177,  187 => 142,  178 => 136,  104 => 65,  69 => 33,  52 => 19,  46 => 16,  37 => 10,  26 => 1,);
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Interface Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.6 -->
    <link rel=\"stylesheet\" href=\"{{ asset('templateAdmin/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('templateAdmin/dist/css/AdminLTE.min.css')}}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ asset('templateAdmin/dist/css/skins/_all-skins.min.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"{{ path(\"indexAdmin\") }}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Fami</b>city</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{ asset('templateAdmin/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('templateAdmin/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Alexander Pierce</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('templateAdmin/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"{{ path('fos_user_security_logout') }}\" data-toggle=\"control-sidebar\">se deconnecter</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Recherche...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">NAVIGATION</li>
                <li><a href=\"{{ path(\"indexAdmin\") }}\"><i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                <li><a href=\"{{ path(\"gestionCompte\") }}\"><i class=\"fa fa-pie-chart\"></i><span>Compte</span></a></li>
                <li><a href=\"{{ path(\"gestionActualite\") }}\"><i class=\"fa fa-laptop\"></i><span>Actualite</span></a></li>
                <li><a href=\"{{ path(\"gestionService\") }}\"><i class=\"fa fa-edit\"></i> <span>Services</span></a></li>
                <li><a href=\"{{ path(\"gestionEvaluation\") }}\"><i class=\"fa fa-table\"></i> <span>Evaluation</span></a></li>
                <li><a href=\"{{ path(\"gestionReservation\") }}\"><i class=\"fa fa-folder\"></i> <span>Reservation</span></a></li>
                <li><a href=\"{{ path(\"gestionPromotion\") }}\"><i class=\"fa fa-share\"></i> <span>Promotion</span></a></li>
                <li><a href=\"{{ path('gestionArbre') }}\"><i class=\"fa fa-book\"></i> <span>Arbre</span></a></li>
                <li class=\"header\">Notification</li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        {% block content %}
        {% endblock %}
    </div>
    <!-- /.content-wrapper -->
    <!--
    <aside class=\"control-sidebar control-sidebar-dark\">
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class=\"control-sidebar-bg\"></div>
</div>
-->
    <script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"../../plugins/chartjs/Chart.min.js\"></script>
    <!-- FastClick -->
    <script src=\"../../plugins/fastclick/fastclick.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"../../dist/js/app.min.js\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"../../dist/js/demo.js\"></script>
    <!-- page script -->
    <script>
        \$(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = \$(\"#areaChart\").get(0).getContext(\"2d\");
            // This will get the first returned node in the jQuery collection.
            var areaChart = new Chart(areaChartCanvas);

            var areaChartData = {
                labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                datasets: [
                    {
                        label: \"Electronics\",
                        fillColor: \"rgba(210, 214, 222, 1)\",
                        strokeColor: \"rgba(210, 214, 222, 1)\",
                        pointColor: \"rgba(210, 214, 222, 1)\",
                        pointStrokeColor: \"#c1c7d1\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(220,220,220,1)\",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: \"Digital Goods\",
                        fillColor: \"rgba(60,141,188,0.9)\",
                        strokeColor: \"rgba(60,141,188,0.8)\",
                        pointColor: \"#3b8bba\",
                        pointStrokeColor: \"rgba(60,141,188,1)\",
                        pointHighlightFill: \"#fff\",
                        pointHighlightStroke: \"rgba(60,141,188,1)\",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            };

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions);

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = \$(\"#lineChart\").get(0).getContext(\"2d\");
            var lineChart = new Chart(lineChartCanvas);
            var lineChartOptions = areaChartOptions;
            lineChartOptions.datasetFill = false;
            lineChart.Line(areaChartData, lineChartOptions);

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = \$(\"#pieChart\").get(0).getContext(\"2d\");
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [
                {
                    value: 700,
                    color: \"#f56954\",
                    highlight: \"#f56954\",
                    label: \"Chrome\"
                },
                {
                    value: 500,
                    color: \"#00a65a\",
                    highlight: \"#00a65a\",
                    label: \"IE\"
                },
                {
                    value: 400,
                    color: \"#f39c12\",
                    highlight: \"#f39c12\",
                    label: \"FireFox\"
                },
                {
                    value: 600,
                    color: \"#00c0ef\",
                    highlight: \"#00c0ef\",
                    label: \"Safari\"
                },
                {
                    value: 300,
                    color: \"#3c8dbc\",
                    highlight: \"#3c8dbc\",
                    label: \"Opera\"
                },
                {
                    value: 100,
                    color: \"#d2d6de\",
                    highlight: \"#d2d6de\",
                    label: \"Navigator\"
                }
            ];
            var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                //String - The colour of each segment stroke
                segmentStrokeColor: \"#fff\",
                //Number - The width of each segment stroke
                segmentStrokeWidth: 2,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps: 100,
                //String - Animation easing effect
                animationEasing: \"easeOutBounce\",
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //String - A legend template
            };
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart.Doughnut(PieData, pieOptions);

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = \$(\"#barChart\").get(0).getContext(\"2d\");
            var barChart = new Chart(barChartCanvas);
            var barChartData = areaChartData;
            barChartData.datasets[1].fillColor = \"#00a65a\";
            barChartData.datasets[1].strokeColor = \"#00a65a\";
            barChartData.datasets[1].pointColor = \"#00a65a\";
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            };

            barChartOptions.datasetFill = false;
            barChart.Bar(barChartData, barChartOptions);
        });
    </script>
    </div>
</body>

</html>
", "::baseAdmin.html.twig", "C:\\wamp\\www\\pidev\\app/Resources\\views/baseAdmin.html.twig");
    }
}