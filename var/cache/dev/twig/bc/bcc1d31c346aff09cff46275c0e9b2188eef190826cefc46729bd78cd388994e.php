<?php

/* MyAppBundle:Default:gestionPromotion.html.twig */
class __TwigTemplate_1279e179f6b192976d9c58b5ef3202c5961f802afec23d5128ca4ecdc2fc618a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionPromotion.html.twig", 1);
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
        $__internal_fbcf05c8cd7d125c17c402898dd5676ffe18ceaa11c8628735151d1310a7ffb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcf05c8cd7d125c17c402898dd5676ffe18ceaa11c8628735151d1310a7ffb2->enter($__internal_fbcf05c8cd7d125c17c402898dd5676ffe18ceaa11c8628735151d1310a7ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionPromotion.html.twig"));

        $__internal_0f67ca05d12b1fb0c8326d255e3244ea65a5f667612bbfdf61537a1fcaf9a54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f67ca05d12b1fb0c8326d255e3244ea65a5f667612bbfdf61537a1fcaf9a54d->enter($__internal_0f67ca05d12b1fb0c8326d255e3244ea65a5f667612bbfdf61537a1fcaf9a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionPromotion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcf05c8cd7d125c17c402898dd5676ffe18ceaa11c8628735151d1310a7ffb2->leave($__internal_fbcf05c8cd7d125c17c402898dd5676ffe18ceaa11c8628735151d1310a7ffb2_prof);

        
        $__internal_0f67ca05d12b1fb0c8326d255e3244ea65a5f667612bbfdf61537a1fcaf9a54d->leave($__internal_0f67ca05d12b1fb0c8326d255e3244ea65a5f667612bbfdf61537a1fcaf9a54d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e656e991119cd351ab3ee7972bb5a0d7a166fab58ac85a3c38cc88c44de09f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e656e991119cd351ab3ee7972bb5a0d7a166fab58ac85a3c38cc88c44de09f9->enter($__internal_1e656e991119cd351ab3ee7972bb5a0d7a166fab58ac85a3c38cc88c44de09f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5829e703d7f5b54b49a3c12a23281378dad4120aef19f1420ee3daf2ac3d398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5829e703d7f5b54b49a3c12a23281378dad4120aef19f1420ee3daf2ac3d398b->enter($__internal_5829e703d7f5b54b49a3c12a23281378dad4120aef19f1420ee3daf2ac3d398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion promotion
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion promotion</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des promotions</h3>

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
                                        <th><i class=\"icon_cogs\"></i> Action</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
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
                                <h3 class=\"box-title\">Ajouter une nouvelle promotion</h3>
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
            <!-- /.row -->
        ";
        
        $__internal_5829e703d7f5b54b49a3c12a23281378dad4120aef19f1420ee3daf2ac3d398b->leave($__internal_5829e703d7f5b54b49a3c12a23281378dad4120aef19f1420ee3daf2ac3d398b_prof);

        
        $__internal_1e656e991119cd351ab3ee7972bb5a0d7a166fab58ac85a3c38cc88c44de09f9->leave($__internal_1e656e991119cd351ab3ee7972bb5a0d7a166fab58ac85a3c38cc88c44de09f9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionPromotion.html.twig";
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
                    Gestion promotion
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion promotion</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des promotions</h3>

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
                                        <th><i class=\"icon_cogs\"></i> Action</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-success\">Disponible</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class=\"label label-danger\">Epuise</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                                <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                            </div>
                                        </td>
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
                                <h3 class=\"box-title\">Ajouter une nouvelle promotion</h3>
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
            <!-- /.row -->
        {% endblock %}", "MyAppBundle:Default:gestionPromotion.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionPromotion.html.twig");
    }
}
