<?php

/* MyAppBundle:Default:gestionArbre.html.twig */
class __TwigTemplate_72796d2147111ebd610cb64aa7368600ba1cc7ed4636cc36092235c32636917f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionArbre.html.twig", 2);
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
        $__internal_fcab2f922c1cbbead6d42a662f586ea452d555b8df3855b49b9a9236bef9c4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcab2f922c1cbbead6d42a662f586ea452d555b8df3855b49b9a9236bef9c4a0->enter($__internal_fcab2f922c1cbbead6d42a662f586ea452d555b8df3855b49b9a9236bef9c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionArbre.html.twig"));

        $__internal_603d0b9d1dc41f05f537fe3d0003652e2f136b90585cd833a5193497c59ebef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603d0b9d1dc41f05f537fe3d0003652e2f136b90585cd833a5193497c59ebef4->enter($__internal_603d0b9d1dc41f05f537fe3d0003652e2f136b90585cd833a5193497c59ebef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionArbre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcab2f922c1cbbead6d42a662f586ea452d555b8df3855b49b9a9236bef9c4a0->leave($__internal_fcab2f922c1cbbead6d42a662f586ea452d555b8df3855b49b9a9236bef9c4a0_prof);

        
        $__internal_603d0b9d1dc41f05f537fe3d0003652e2f136b90585cd833a5193497c59ebef4->leave($__internal_603d0b9d1dc41f05f537fe3d0003652e2f136b90585cd833a5193497c59ebef4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef109a3e70c14d668645a45e0f5b74fa9a74ca6d8cb23725b4f524ea1d7c0014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef109a3e70c14d668645a45e0f5b74fa9a74ca6d8cb23725b4f524ea1d7c0014->enter($__internal_ef109a3e70c14d668645a45e0f5b74fa9a74ca6d8cb23725b4f524ea1d7c0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_895331fe3c06962baad1f1257231f5dc725d558fe4600a0d75846a8e29c716e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895331fe3c06962baad1f1257231f5dc725d558fe4600a0d75846a8e29c716e3->enter($__internal_895331fe3c06962baad1f1257231f5dc725d558fe4600a0d75846a8e29c716e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion arbre
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion arbre</li>
                </ol>
            </section>
            <!-- Main row -->
            <section>
                <section class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Table des invitations </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class=\"box-body\">
                                    <table class=\"table table-bordered\">
                                        <tr>
                                            <th style=\"width: 10px\">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style=\"width: 40px\">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-red\">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-yellow\">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class=\"progress progress-xs progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-light-blue\">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class=\"progress progress-xs progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-green\">90%</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                                <div class=\"box-footer clearfix\">
                                    <ul class=\"pagination pagination-sm no-margin pull-right\">
                                        <li><a href=\"#\">&laquo;</a></li>
                                        <li><a href=\"#\">1</a></li>
                                        <li><a href=\"#\">2</a></li>
                                        <li><a href=\"#\">3</a></li>
                                        <li><a href=\"#\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-12\">
                                <div class=\"box box-default\">
                                    <div class=\"box-header with-border\">
                                        <i class=\"fa fa-bullhorn\"></i>

                                        <h3 class=\"box-title\">Etat</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class=\"box-body\">
                                        <div class=\"callout callout-info\">
                                            <h4><i class=\"icon fa fa-info\"></i> Nouvelle invitation</h4>

                                            <p>Follow the steps to continue to payment.</p>
                                        </div>
                                        <div class=\"callout callout-warning\">
                                            <h4><i class=\"icon fa fa-warning\"></i> Regroupement refuse</h4>

                                            <p>This is a yellow callout.</p>
                                        </div>
                                        <div class=\"callout callout-success\">
                                            <h4><i class=\"icon fa fa-check\"></i> Regroupement accepte</h4>

                                            <p>This is a green callout.</p>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                </section>
            </section>
            <!-- /.row -->
        ";
        
        $__internal_895331fe3c06962baad1f1257231f5dc725d558fe4600a0d75846a8e29c716e3->leave($__internal_895331fe3c06962baad1f1257231f5dc725d558fe4600a0d75846a8e29c716e3_prof);

        
        $__internal_ef109a3e70c14d668645a45e0f5b74fa9a74ca6d8cb23725b4f524ea1d7c0014->leave($__internal_ef109a3e70c14d668645a45e0f5b74fa9a74ca6d8cb23725b4f524ea1d7c0014_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionArbre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 2,);
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
{% extends '::baseAdmin.html.twig' %}
        {% block content %}
            <section class=\"content-header\">
                <h1>
                    Gestion arbre
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion arbre</li>
                </ol>
            </section>
            <!-- Main row -->
            <section>
                <section class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Table des invitations </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class=\"box-body\">
                                    <table class=\"table table-bordered\">
                                        <tr>
                                            <th style=\"width: 10px\">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style=\"width: 40px\">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-red\">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-yellow\">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class=\"progress progress-xs progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-light-blue\">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class=\"progress progress-xs progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                                                </div>
                                            </td>
                                            <td><span class=\"badge bg-green\">90%</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                                <div class=\"box-footer clearfix\">
                                    <ul class=\"pagination pagination-sm no-margin pull-right\">
                                        <li><a href=\"#\">&laquo;</a></li>
                                        <li><a href=\"#\">1</a></li>
                                        <li><a href=\"#\">2</a></li>
                                        <li><a href=\"#\">3</a></li>
                                        <li><a href=\"#\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-12\">
                                <div class=\"box box-default\">
                                    <div class=\"box-header with-border\">
                                        <i class=\"fa fa-bullhorn\"></i>

                                        <h3 class=\"box-title\">Etat</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class=\"box-body\">
                                        <div class=\"callout callout-info\">
                                            <h4><i class=\"icon fa fa-info\"></i> Nouvelle invitation</h4>

                                            <p>Follow the steps to continue to payment.</p>
                                        </div>
                                        <div class=\"callout callout-warning\">
                                            <h4><i class=\"icon fa fa-warning\"></i> Regroupement refuse</h4>

                                            <p>This is a yellow callout.</p>
                                        </div>
                                        <div class=\"callout callout-success\">
                                            <h4><i class=\"icon fa fa-check\"></i> Regroupement accepte</h4>

                                            <p>This is a green callout.</p>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                </section>
            </section>
            <!-- /.row -->
        {% endblock %}", "MyAppBundle:Default:gestionArbre.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionArbre.html.twig");
    }
}
