<?php

/* MyAppBundle:Default:gestionCompte.html.twig */
class __TwigTemplate_361780d0aed51df1d61d598a2499e10a6cbd901506dfe43986bf3712daeb58f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseAdmin.html.twig", "MyAppBundle:Default:gestionCompte.html.twig", 2);
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
        $__internal_879e3f360783a03726f332bd463bd32bd5e1185bcdc92a91c1b22ad4da72b60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879e3f360783a03726f332bd463bd32bd5e1185bcdc92a91c1b22ad4da72b60e->enter($__internal_879e3f360783a03726f332bd463bd32bd5e1185bcdc92a91c1b22ad4da72b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionCompte.html.twig"));

        $__internal_7fa208aa8e7f84283974ff604adfb6d46a77ab09d01de09462c2a5a5dfd51890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa208aa8e7f84283974ff604adfb6d46a77ab09d01de09462c2a5a5dfd51890->enter($__internal_7fa208aa8e7f84283974ff604adfb6d46a77ab09d01de09462c2a5a5dfd51890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBundle:Default:gestionCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879e3f360783a03726f332bd463bd32bd5e1185bcdc92a91c1b22ad4da72b60e->leave($__internal_879e3f360783a03726f332bd463bd32bd5e1185bcdc92a91c1b22ad4da72b60e_prof);

        
        $__internal_7fa208aa8e7f84283974ff604adfb6d46a77ab09d01de09462c2a5a5dfd51890->leave($__internal_7fa208aa8e7f84283974ff604adfb6d46a77ab09d01de09462c2a5a5dfd51890_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0092a1eeff911d994477a247d1847ecad9c88a62e4363e1ef67acb39048abce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0092a1eeff911d994477a247d1847ecad9c88a62e4363e1ef67acb39048abce3->enter($__internal_0092a1eeff911d994477a247d1847ecad9c88a62e4363e1ef67acb39048abce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a8b52732fe20539f7e93dbdd5e56e322b547eb1638d97e83ee599600e164b857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b52732fe20539f7e93dbdd5e56e322b547eb1638d97e83ee599600e164b857->enter($__internal_a8b52732fe20539f7e93dbdd5e56e322b547eb1638d97e83ee599600e164b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "            <section class=\"content-header\">
                <h1>
                    Gestion compte
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
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-warning\"></i>

                                <h3 class=\"box-title\">Alertes</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable.
                                </div>
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                </div>
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable.
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class=\"col-md-6\">
                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-bullhorn\"></i>

                                <h3 class=\"box-title\">Invitations</h3>
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
                <!-- /.row -->
        ";
        
        $__internal_a8b52732fe20539f7e93dbdd5e56e322b547eb1638d97e83ee599600e164b857->leave($__internal_a8b52732fe20539f7e93dbdd5e56e322b547eb1638d97e83ee599600e164b857_prof);

        
        $__internal_0092a1eeff911d994477a247d1847ecad9c88a62e4363e1ef67acb39048abce3->leave($__internal_0092a1eeff911d994477a247d1847ecad9c88a62e4363e1ef67acb39048abce3_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBundle:Default:gestionCompte.html.twig";
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
                    Gestion compte
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
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-warning\"></i>

                                <h3 class=\"box-title\">Alertes</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable.
                                </div>
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                </div>
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                                    Danger alert preview. This alert is dismissable.
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class=\"col-md-6\">
                        <div class=\"box box-default\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-bullhorn\"></i>

                                <h3 class=\"box-title\">Invitations</h3>
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
                <!-- /.row -->
        {% endblock %}", "MyAppBundle:Default:gestionCompte.html.twig", "C:\\wamp\\www\\pidev\\src\\MyAppBundle/Resources/views/Default/gestionCompte.html.twig");
    }
}
