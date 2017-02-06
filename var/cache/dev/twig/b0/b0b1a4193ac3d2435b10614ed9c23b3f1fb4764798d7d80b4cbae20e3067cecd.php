<?php

/* MyAppBundle:Default:gestionReservation.html.twig */
class __TwigTemplate_b9313045d7f4c35a7679ec59d7159a3af00bd8a0d54304a38f36f3178258b731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionReservation.html.twig", 1);
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
        $__internal_a37b8e2727a1f7e97a65cfe1a0e93002b97b815cc138ffda4efeb3088fb4dadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37b8e2727a1f7e97a65cfe1a0e93002b97b815cc138ffda4efeb3088fb4dadc->enter($__internal_a37b8e2727a1f7e97a65cfe1a0e93002b97b815cc138ffda4efeb3088fb4dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionReservation.html.twig"));

        $__internal_72c98736c22126a7582d8570fd9e09a2fa5eb840c25a8ce136b2421755c20296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c98736c22126a7582d8570fd9e09a2fa5eb840c25a8ce136b2421755c20296->enter($__internal_72c98736c22126a7582d8570fd9e09a2fa5eb840c25a8ce136b2421755c20296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionReservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37b8e2727a1f7e97a65cfe1a0e93002b97b815cc138ffda4efeb3088fb4dadc->leave($__internal_a37b8e2727a1f7e97a65cfe1a0e93002b97b815cc138ffda4efeb3088fb4dadc_prof);

        
        $__internal_72c98736c22126a7582d8570fd9e09a2fa5eb840c25a8ce136b2421755c20296->leave($__internal_72c98736c22126a7582d8570fd9e09a2fa5eb840c25a8ce136b2421755c20296_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ff1554acb62ed1c0d7885e4b8905ad507f18de6106f22e9b2573024e1217551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff1554acb62ed1c0d7885e4b8905ad507f18de6106f22e9b2573024e1217551->enter($__internal_4ff1554acb62ed1c0d7885e4b8905ad507f18de6106f22e9b2573024e1217551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fca3ddf5858dd42e7d097f62eced14a71b6dcc5e3bb19733c13afa1424b8342b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca3ddf5858dd42e7d097f62eced14a71b6dcc5e3bb19733c13afa1424b8342b->enter($__internal_fca3ddf5858dd42e7d097f62eced14a71b6dcc5e3bb19733c13afa1424b8342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion reservation
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion reservation</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <section class=\"panel\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des reservations</h3>

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
                            <div class=\"row\">
                            </div>
                        </section>
                        <!-- /.row -->
        ";
        
        $__internal_fca3ddf5858dd42e7d097f62eced14a71b6dcc5e3bb19733c13afa1424b8342b->leave($__internal_fca3ddf5858dd42e7d097f62eced14a71b6dcc5e3bb19733c13afa1424b8342b_prof);

        
        $__internal_4ff1554acb62ed1c0d7885e4b8905ad507f18de6106f22e9b2573024e1217551->leave($__internal_4ff1554acb62ed1c0d7885e4b8905ad507f18de6106f22e9b2573024e1217551_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionReservation.html.twig";
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
                    Gestion reservation
                    <small>Preview sample</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li><a href=\"#\">Gestion</a></li>
                    <li class=\"active\">Gestion reservation</li>
                </ol>
            </section>
            <!-- Main row -->
            <section class=\"content\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <section class=\"panel\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Table des reservations</h3>

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
                            <div class=\"row\">
                            </div>
                        </section>
                        <!-- /.row -->
        {% endblock %}", "MyAppBundle:Default:gestionReservation.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionReservation.html.twig");
    }
}
