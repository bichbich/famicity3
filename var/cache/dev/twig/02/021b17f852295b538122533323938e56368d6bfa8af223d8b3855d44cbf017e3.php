<?php

/* MyAppBundle:Default:gestionActualite.html.twig */
class __TwigTemplate_98936cfdda9b30b81c6a2bdf1f27a26f2106aeb34eedc1b5ff3331ab6e83b141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionActualite.html.twig", 1);
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
        $__internal_5606f353c66df78130852a65a0c1de20bee3992d77d1651032298bc682c1313e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5606f353c66df78130852a65a0c1de20bee3992d77d1651032298bc682c1313e->enter($__internal_5606f353c66df78130852a65a0c1de20bee3992d77d1651032298bc682c1313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionActualite.html.twig"));

        $__internal_9b231e07ff3b3bfc279f584c048669184f75df5dab2624091fcd7c6e3992f3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b231e07ff3b3bfc279f584c048669184f75df5dab2624091fcd7c6e3992f3de->enter($__internal_9b231e07ff3b3bfc279f584c048669184f75df5dab2624091fcd7c6e3992f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionActualite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5606f353c66df78130852a65a0c1de20bee3992d77d1651032298bc682c1313e->leave($__internal_5606f353c66df78130852a65a0c1de20bee3992d77d1651032298bc682c1313e_prof);

        
        $__internal_9b231e07ff3b3bfc279f584c048669184f75df5dab2624091fcd7c6e3992f3de->leave($__internal_9b231e07ff3b3bfc279f584c048669184f75df5dab2624091fcd7c6e3992f3de_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8548b9ed0afb2796607f9c251f5f5f72057a726e63d78d27a4a04389be0f00a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8548b9ed0afb2796607f9c251f5f5f72057a726e63d78d27a4a04389be0f00a9->enter($__internal_8548b9ed0afb2796607f9c251f5f5f72057a726e63d78d27a4a04389be0f00a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4205b896058ea10b8bcf92448e5819f1b0a79b5a505f422c4b4b3181afc80b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4205b896058ea10b8bcf92448e5819f1b0a79b5a505f422c4b4b3181afc80b7->enter($__internal_f4205b896058ea10b8bcf92448e5819f1b0a79b5a505f422c4b4b3181afc80b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion actualite
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion actualite</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <section class=\"panel\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des plans</h3>

                                <div class=\"box-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class=\"table table-striped table-advance table-hover\">
                                <tbody>
                                <tr>
                                    <th><i class=\"icon_profile\"></i> Plan</th>
                                    <th><i class=\"icon_calendar\"></i> Date fin</th>
                                    <th><i class=\"icon_mail_alt\"></i> Description</th>
                                    <th><i class=\"icon_pin_alt\"></i> Lieux</th>
                                    <th><i class=\"icon_mobile\"></i> Mobile</th>
                                    <th><i class=\"icon_cogs\"></i> Action</th>
                                </tr>
                                <tr>
                                    <td>Angeline Mcclain</td>
                                    <td>2004-07-06</td>
                                    <td>dale@chief.info</td>
                                    <td>Rosser</td>
                                    <td>176-026-5992</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sung Carlson</td>
                                    <td>2011-01-10</td>
                                    <td>ione.gisela@high.org</td>
                                    <td>Robert Lee</td>
                                    <td>724-639-4784</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bryon Osborne</td>
                                    <td>2006-10-29</td>
                                    <td>sol.raleigh@language.edu</td>
                                    <td>York</td>
                                    <td>180-456-0056</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dalia Marquez</td>
                                    <td>2011-12-15</td>
                                    <td>angeline.frieda@thick.com</td>
                                    <td>Alton</td>
                                    <td>690-601-1922</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selina Fitzgerald</td>
                                    <td>2003-01-06</td>
                                    <td>moshe.mikel@parcelpart.info</td>
                                    <td>Waelder</td>
                                    <td>922-810-0915</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abraham Avery</td>
                                    <td>2006-07-14</td>
                                    <td>harvey.jared@pullpump.org</td>
                                    <td>Harker Heights</td>
                                    <td>511-175-7115</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Caren Mcdowell</td>
                                    <td>2002-03-29</td>
                                    <td>valeria@hookhope.org</td>
                                    <td>Blackwell</td>
                                    <td>970-147-5550</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Owen Bingham</td>
                                    <td>2013-04-06</td>
                                    <td>thomas.christopher@firstfish.info</td>
                                    <td>Rule</td>
                                    <td>934-118-6046</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ahmed Dean</td>
                                    <td>2008-03-19</td>
                                    <td>lakesha.geri.allene@recordred.com</td>
                                    <td>Darrouzett</td>
                                    <td>338-081-8817</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mario Norris</td>
                                    <td>2010-02-08</td>
                                    <td>mildred@hour.info</td>
                                    <td>Amarillo</td>
                                    <td>945-547-5302</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                   
                </div>
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-lg-12\">
                        <!-- general form elements -->
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Ajouter un nouveau plan</h3>
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
            </section>

            <!-- /.row -->
        ";
        
        $__internal_f4205b896058ea10b8bcf92448e5819f1b0a79b5a505f422c4b4b3181afc80b7->leave($__internal_f4205b896058ea10b8bcf92448e5819f1b0a79b5a505f422c4b4b3181afc80b7_prof);

        
        $__internal_8548b9ed0afb2796607f9c251f5f5f72057a726e63d78d27a4a04389be0f00a9->leave($__internal_8548b9ed0afb2796607f9c251f5f5f72057a726e63d78d27a4a04389be0f00a9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionActualite.html.twig";
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
                    Gestion actualite
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion actualite</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <section class=\"panel\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des plans</h3>

                                <div class=\"box-tools\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">

                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class=\"table table-striped table-advance table-hover\">
                                <tbody>
                                <tr>
                                    <th><i class=\"icon_profile\"></i> Plan</th>
                                    <th><i class=\"icon_calendar\"></i> Date fin</th>
                                    <th><i class=\"icon_mail_alt\"></i> Description</th>
                                    <th><i class=\"icon_pin_alt\"></i> Lieux</th>
                                    <th><i class=\"icon_mobile\"></i> Mobile</th>
                                    <th><i class=\"icon_cogs\"></i> Action</th>
                                </tr>
                                <tr>
                                    <td>Angeline Mcclain</td>
                                    <td>2004-07-06</td>
                                    <td>dale@chief.info</td>
                                    <td>Rosser</td>
                                    <td>176-026-5992</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sung Carlson</td>
                                    <td>2011-01-10</td>
                                    <td>ione.gisela@high.org</td>
                                    <td>Robert Lee</td>
                                    <td>724-639-4784</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bryon Osborne</td>
                                    <td>2006-10-29</td>
                                    <td>sol.raleigh@language.edu</td>
                                    <td>York</td>
                                    <td>180-456-0056</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dalia Marquez</td>
                                    <td>2011-12-15</td>
                                    <td>angeline.frieda@thick.com</td>
                                    <td>Alton</td>
                                    <td>690-601-1922</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selina Fitzgerald</td>
                                    <td>2003-01-06</td>
                                    <td>moshe.mikel@parcelpart.info</td>
                                    <td>Waelder</td>
                                    <td>922-810-0915</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abraham Avery</td>
                                    <td>2006-07-14</td>
                                    <td>harvey.jared@pullpump.org</td>
                                    <td>Harker Heights</td>
                                    <td>511-175-7115</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Caren Mcdowell</td>
                                    <td>2002-03-29</td>
                                    <td>valeria@hookhope.org</td>
                                    <td>Blackwell</td>
                                    <td>970-147-5550</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Owen Bingham</td>
                                    <td>2013-04-06</td>
                                    <td>thomas.christopher@firstfish.info</td>
                                    <td>Rule</td>
                                    <td>934-118-6046</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ahmed Dean</td>
                                    <td>2008-03-19</td>
                                    <td>lakesha.geri.allene@recordred.com</td>
                                    <td>Darrouzett</td>
                                    <td>338-081-8817</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mario Norris</td>
                                    <td>2010-02-08</td>
                                    <td>mildred@hour.info</td>
                                    <td>Amarillo</td>
                                    <td>945-547-5302</td>
                                    <td>
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon_plus_alt2\"></i></a>
                                            <a class=\"btn btn-danger\" href=\"#\"><i class=\"icon_close_alt2\"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                   
                </div>
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-lg-12\">
                        <!-- general form elements -->
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Ajouter un nouveau plan</h3>
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
            </section>

            <!-- /.row -->
        {% endblock %}




", "MyAppBundle:Default:gestionActualite.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionActualite.html.twig");
    }
}
