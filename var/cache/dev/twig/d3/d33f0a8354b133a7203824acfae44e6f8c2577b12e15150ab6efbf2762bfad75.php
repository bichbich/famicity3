<?php

/* MyAppBundle:Default:gestionService.html.twig */
class __TwigTemplate_61acaa436b39f7e133a5c6276a2e8cb7df2bb9d7b695f2d9967d0292407177b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionService.html.twig", 1);
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
        $__internal_31118fda34e4f0d886b7e7ad94c9db66c45e1f061bc6eb71da50450a115067a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31118fda34e4f0d886b7e7ad94c9db66c45e1f061bc6eb71da50450a115067a2->enter($__internal_31118fda34e4f0d886b7e7ad94c9db66c45e1f061bc6eb71da50450a115067a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionService.html.twig"));

        $__internal_dadd099ac097a701e08ed9cb5d074b881a959e807e31962b63d85d5232754bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd099ac097a701e08ed9cb5d074b881a959e807e31962b63d85d5232754bf7->enter($__internal_dadd099ac097a701e08ed9cb5d074b881a959e807e31962b63d85d5232754bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31118fda34e4f0d886b7e7ad94c9db66c45e1f061bc6eb71da50450a115067a2->leave($__internal_31118fda34e4f0d886b7e7ad94c9db66c45e1f061bc6eb71da50450a115067a2_prof);

        
        $__internal_dadd099ac097a701e08ed9cb5d074b881a959e807e31962b63d85d5232754bf7->leave($__internal_dadd099ac097a701e08ed9cb5d074b881a959e807e31962b63d85d5232754bf7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0f18dff123d2cd29faf929fb5556d4029249a3761ad82cdc71e8f0c14ec0c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f18dff123d2cd29faf929fb5556d4029249a3761ad82cdc71e8f0c14ec0c95->enter($__internal_c0f18dff123d2cd29faf929fb5556d4029249a3761ad82cdc71e8f0c14ec0c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0daf5d45b051927b97978ce032dea7fdddee3ed444a3daa8a26b03a3e6a4f3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0daf5d45b051927b97978ce032dea7fdddee3ed444a3daa8a26b03a3e6a4f3a7->enter($__internal_0daf5d45b051927b97978ce032dea7fdddee3ed444a3daa8a26b03a3e6a4f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion services
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion services</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des services</h3>

                                <div class=\"box-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body table-responsive no-padding\">
                                <table class=\"table table-hover\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Date fin</th>
                                        <th>Etat</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.content -->
                </div>
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-lg-12\">
                        <!-- general form elements -->
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Ajouter un nouveau service</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role=\"form\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Nom</label>
                                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Nom du plan\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\">Lieux</label>
                                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Lieux\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Description</label>
                                        <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">\$</span>
                                        <input type=\"text\"  class=\"form-control\" placeholder=\"Prix\">
                                        <span class=\"input-group-addon\">.00</span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputFile\"></label>
                                        <input type=\"file\" id=\"exampleInputFile\">

                                    </div>
                                    <!-- /.box-body -->

                                    <div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                    </div>
                                    <!-- /.row -->
            </section>
        ";
        
        $__internal_0daf5d45b051927b97978ce032dea7fdddee3ed444a3daa8a26b03a3e6a4f3a7->leave($__internal_0daf5d45b051927b97978ce032dea7fdddee3ed444a3daa8a26b03a3e6a4f3a7_prof);

        
        $__internal_c0f18dff123d2cd29faf929fb5556d4029249a3761ad82cdc71e8f0c14ec0c95->leave($__internal_c0f18dff123d2cd29faf929fb5556d4029249a3761ad82cdc71e8f0c14ec0c95_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
                    Gestion services
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion services</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des services</h3>

                                <div class=\"box-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body table-responsive no-padding\">
                                <table class=\"table table-hover\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Date fin</th>
                                        <th>Etat</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.content -->
                </div>
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-lg-12\">
                        <!-- general form elements -->
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Ajouter un nouveau service</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role=\"form\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Nom</label>
                                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Nom du plan\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\">Lieux</label>
                                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Lieux\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Description</label>
                                        <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea>
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">\$</span>
                                        <input type=\"text\"  class=\"form-control\" placeholder=\"Prix\">
                                        <span class=\"input-group-addon\">.00</span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputFile\"></label>
                                        <input type=\"file\" id=\"exampleInputFile\">

                                    </div>
                                    <!-- /.box-body -->

                                    <div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                    </div>
                                    <!-- /.row -->
            </section>
        {% endblock %}", "MyAppBundle:Default:gestionService.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionService.html.twig");
    }
}
