<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_b7d49b136d09f75bb26f68c404a5e65bab324f930ddd483c6bd51611851f9706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< Updated upstream
        $__internal_c8789c4ca3e99d208644eea95513155dea7641289d4a6603b550e04ff4ed02de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8789c4ca3e99d208644eea95513155dea7641289d4a6603b550e04ff4ed02de->enter($__internal_c8789c4ca3e99d208644eea95513155dea7641289d4a6603b550e04ff4ed02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_8238a585cfeab436e70457b3e2225421f54280fea94345ca593e72534d6e37ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238a585cfeab436e70457b3e2225421f54280fea94345ca593e72534d6e37ff->enter($__internal_8238a585cfeab436e70457b3e2225421f54280fea94345ca593e72534d6e37ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));
=======
        $__internal_64d6eb48c201388bbced534cfb038e5c6c6377b0f37314b6e62c6a15ecdf61b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d6eb48c201388bbced534cfb038e5c6c6377b0f37314b6e62c6a15ecdf61b8->enter($__internal_64d6eb48c201388bbced534cfb038e5c6c6377b0f37314b6e62c6a15ecdf61b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_21d9e11ba597176da061681e88fb5a6f401a56d2208dcd3d01db7e12eb86c790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d9e11ba597176da061681e88fb5a6f401a56d2208dcd3d01db7e12eb86c790->enter($__internal_21d9e11ba597176da061681e88fb5a6f401a56d2208dcd3d01db7e12eb86c790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));
>>>>>>> Stashed changes

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
<<<<<<< Updated upstream
        $__internal_c8789c4ca3e99d208644eea95513155dea7641289d4a6603b550e04ff4ed02de->leave($__internal_c8789c4ca3e99d208644eea95513155dea7641289d4a6603b550e04ff4ed02de_prof);

        
        $__internal_8238a585cfeab436e70457b3e2225421f54280fea94345ca593e72534d6e37ff->leave($__internal_8238a585cfeab436e70457b3e2225421f54280fea94345ca593e72534d6e37ff_prof);
=======
        $__internal_64d6eb48c201388bbced534cfb038e5c6c6377b0f37314b6e62c6a15ecdf61b8->leave($__internal_64d6eb48c201388bbced534cfb038e5c6c6377b0f37314b6e62c6a15ecdf61b8_prof);

        
        $__internal_21d9e11ba597176da061681e88fb5a6f401a56d2208dcd3d01db7e12eb86c790->leave($__internal_21d9e11ba597176da061681e88fb5a6f401a56d2208dcd3d01db7e12eb86c790_prof);
>>>>>>> Stashed changes

    }

    // line 17
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< Updated upstream
        $__internal_bfad7592d6de8b1b5e460023e569fc1bb18b7e523cbdb1a643cbc68a3db7fa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfad7592d6de8b1b5e460023e569fc1bb18b7e523cbdb1a643cbc68a3db7fa44->enter($__internal_bfad7592d6de8b1b5e460023e569fc1bb18b7e523cbdb1a643cbc68a3db7fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0d6d0e30f212739f0474ad17511bdf85d3a8b4b26c3d497507071948d784af36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6d0e30f212739f0474ad17511bdf85d3a8b4b26c3d497507071948d784af36->enter($__internal_0d6d0e30f212739f0474ad17511bdf85d3a8b4b26c3d497507071948d784af36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_2d283a854475708bb3cdbb9ad34a8a5dd54a60e4053ccd3e0ed235ac394aeae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d283a854475708bb3cdbb9ad34a8a5dd54a60e4053ccd3e0ed235ac394aeae8->enter($__internal_2d283a854475708bb3cdbb9ad34a8a5dd54a60e4053ccd3e0ed235ac394aeae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5d455de7b038c81ab622dc961b440c44112e49f4eebb7bfe2b74ec8314c66ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d455de7b038c81ab622dc961b440c44112e49f4eebb7bfe2b74ec8314c66ea->enter($__internal_d5d455de7b038c81ab622dc961b440c44112e49f4eebb7bfe2b74ec8314c66ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> Stashed changes

        // line 18
        echo "    ";
        $context["total_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 19
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime", array()))) : ("n/a"));
        // line 20
        echo "    ";
        $context["status_color"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array())) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 21
        echo "
    ";
        // line 22
        ob_start();
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : $this->getContext($context, "total_time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start();
        // line 29
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : $this->getContext($context, "total_time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["initialization_time"]) ? $context["initialization_time"] : $this->getContext($context, "initialization_time")), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
<<<<<<< Updated upstream
        $__internal_0d6d0e30f212739f0474ad17511bdf85d3a8b4b26c3d497507071948d784af36->leave($__internal_0d6d0e30f212739f0474ad17511bdf85d3a8b4b26c3d497507071948d784af36_prof);

        
        $__internal_bfad7592d6de8b1b5e460023e569fc1bb18b7e523cbdb1a643cbc68a3db7fa44->leave($__internal_bfad7592d6de8b1b5e460023e569fc1bb18b7e523cbdb1a643cbc68a3db7fa44_prof);
=======
        $__internal_d5d455de7b038c81ab622dc961b440c44112e49f4eebb7bfe2b74ec8314c66ea->leave($__internal_d5d455de7b038c81ab622dc961b440c44112e49f4eebb7bfe2b74ec8314c66ea_prof);

        
        $__internal_2d283a854475708bb3cdbb9ad34a8a5dd54a60e4053ccd3e0ed235ac394aeae8->leave($__internal_2d283a854475708bb3cdbb9ad34a8a5dd54a60e4053ccd3e0ed235ac394aeae8_prof);
>>>>>>> Stashed changes

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< Updated upstream
        $__internal_c077a9d3bea9ac777e6efa515ea6c2b0c42ec84c8418c1ddcfeaa07264400e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c077a9d3bea9ac777e6efa515ea6c2b0c42ec84c8418c1ddcfeaa07264400e2f->enter($__internal_c077a9d3bea9ac777e6efa515ea6c2b0c42ec84c8418c1ddcfeaa07264400e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23deeee962cecc1c93d35f52c49c3c4a9ef6aaa5b7c8b124cf1e1fb8bf350fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23deeee962cecc1c93d35f52c49c3c4a9ef6aaa5b7c8b124cf1e1fb8bf350fc6->enter($__internal_23deeee962cecc1c93d35f52c49c3c4a9ef6aaa5b7c8b124cf1e1fb8bf350fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_834dc24eefdd39e7fef2905c33761f4d97b5e1729942f53f4c91454c065b7b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834dc24eefdd39e7fef2905c33761f4d97b5e1729942f53f4c91454c065b7b61->enter($__internal_834dc24eefdd39e7fef2905c33761f4d97b5e1729942f53f4c91454c065b7b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e10a31d146f1e4b95d158c9c57ec5c581de9d96e9fc7d472b114ae9c8e3475a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e10a31d146f1e4b95d158c9c57ec5c581de9d96e9fc7d472b114ae9c8e3475a->enter($__internal_7e10a31d146f1e4b95d158c9c57ec5c581de9d96e9fc7d472b114ae9c8e3475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> Stashed changes

        // line 43
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 44
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
<<<<<<< Updated upstream
        $__internal_23deeee962cecc1c93d35f52c49c3c4a9ef6aaa5b7c8b124cf1e1fb8bf350fc6->leave($__internal_23deeee962cecc1c93d35f52c49c3c4a9ef6aaa5b7c8b124cf1e1fb8bf350fc6_prof);

        
        $__internal_c077a9d3bea9ac777e6efa515ea6c2b0c42ec84c8418c1ddcfeaa07264400e2f->leave($__internal_c077a9d3bea9ac777e6efa515ea6c2b0c42ec84c8418c1ddcfeaa07264400e2f_prof);
=======
        $__internal_7e10a31d146f1e4b95d158c9c57ec5c581de9d96e9fc7d472b114ae9c8e3475a->leave($__internal_7e10a31d146f1e4b95d158c9c57ec5c581de9d96e9fc7d472b114ae9c8e3475a_prof);

        
        $__internal_834dc24eefdd39e7fef2905c33761f4d97b5e1729942f53f4c91454c065b7b61->leave($__internal_834dc24eefdd39e7fef2905c33761f4d97b5e1729942f53f4c91454c065b7b61_prof);
>>>>>>> Stashed changes

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< Updated upstream
        $__internal_7979d88f627ca6397ab0ee24d673553f397079bcc335c7357b0f763470251159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7979d88f627ca6397ab0ee24d673553f397079bcc335c7357b0f763470251159->enter($__internal_7979d88f627ca6397ab0ee24d673553f397079bcc335c7357b0f763470251159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83561fe6099daec7cb750469285c18c021ec7f2daba19d8927de29ae3b40d14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83561fe6099daec7cb750469285c18c021ec7f2daba19d8927de29ae3b40d14e->enter($__internal_83561fe6099daec7cb750469285c18c021ec7f2daba19d8927de29ae3b40d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_6d705acf799ea33cfc2c9edf1969813cb00fa66c29c84f04b055c29163f8323b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d705acf799ea33cfc2c9edf1969813cb00fa66c29c84f04b055c29163f8323b->enter($__internal_6d705acf799ea33cfc2c9edf1969813cb00fa66c29c84f04b055c29163f8323b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc31aec051256ffe79041c95b14d24fa7cc29123f355ce000250eacf111910cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc31aec051256ffe79041c95b14d24fa7cc29123f355ce000250eacf111910cc->enter($__internal_fc31aec051256ffe79041c95b14d24fa7cc29123f355ce000250eacf111910cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> Stashed changes

        // line 50
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array()), "memory", array())) {
            // line 64
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 71
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 75
            echo (((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 78
            $context["subrequests_time"] = 0;
            // line 79
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "                ";
                $context["subrequests_time"] = ((isset($context["subrequests_time"]) ? $context["subrequests_time"] : $this->getContext($context, "subrequests_time")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["subrequests_time"]) ? $context["subrequests_time"] : $this->getContext($context, "subrequests_time")), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 85
            echo (((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 88
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 92
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) {
            // line 93
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 97
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
<<<<<<< Updated upstream
        $__internal_83561fe6099daec7cb750469285c18c021ec7f2daba19d8927de29ae3b40d14e->leave($__internal_83561fe6099daec7cb750469285c18c021ec7f2daba19d8927de29ae3b40d14e_prof);

        
        $__internal_7979d88f627ca6397ab0ee24d673553f397079bcc335c7357b0f763470251159->leave($__internal_7979d88f627ca6397ab0ee24d673553f397079bcc335c7357b0f763470251159_prof);
=======
        $__internal_fc31aec051256ffe79041c95b14d24fa7cc29123f355ce000250eacf111910cc->leave($__internal_fc31aec051256ffe79041c95b14d24fa7cc29123f355ce000250eacf111910cc_prof);

        
        $__internal_6d705acf799ea33cfc2c9edf1969813cb00fa66c29c84f04b055c29163f8323b->leave($__internal_6d705acf799ea33cfc2c9edf1969813cb00fa66c29c84f04b055c29163f8323b_prof);
>>>>>>> Stashed changes

    }

    // line 101
    public function block_panelContent($context, array $blocks = array())
    {
<<<<<<< Updated upstream
        $__internal_050406459c7b60a885b70738d0a193392e0ea35f81f8aff648abc27c42c459c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050406459c7b60a885b70738d0a193392e0ea35f81f8aff648abc27c42c459c3->enter($__internal_050406459c7b60a885b70738d0a193392e0ea35f81f8aff648abc27c42c459c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_beeeedb1fecea03f3e541bd19580083d3a95d644ce2a764b98a1458df4d86d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeeedb1fecea03f3e541bd19580083d3a95d644ce2a764b98a1458df4d86d7e->enter($__internal_beeeedb1fecea03f3e541bd19580083d3a95d644ce2a764b98a1458df4d86d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));
=======
        $__internal_01e14683c69c17f4a972643da7d6288b6ead0604a07935c76fd5b5541136db8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e14683c69c17f4a972643da7d6288b6ead0604a07935c76fd5b5541136db8b->enter($__internal_01e14683c69c17f4a972643da7d6288b6ead0604a07935c76fd5b5541136db8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_cc7cc81a3f517860aa27294dc459637e7837fb8069261b6ce59abeb26536c133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7cc81a3f517860aa27294dc459637e7837fb8069261b6ce59abeb26536c133->enter($__internal_cc7cc81a3f517860aa27294dc459637e7837fb8069261b6ce59abeb26536c133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));
>>>>>>> Stashed changes

        // line 102
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 109
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) {
            // line 110
            echo "        <h3>
            Sub-Request ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
            echo "
            <small>
                ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 117
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 118
            echo "        <h3>
            Main Request <small>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        echo $context["helper"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 125
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 126
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 128
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 131
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 132
                echo "            <h4>
                <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 137
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    <script>";
        // line 141
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 183
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 456
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 458
        echo $context["helper"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 460
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 461
            echo "                ,
";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 463
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 466
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 498
        echo "</script>
";
        
<<<<<<< Updated upstream
        $__internal_beeeedb1fecea03f3e541bd19580083d3a95d644ce2a764b98a1458df4d86d7e->leave($__internal_beeeedb1fecea03f3e541bd19580083d3a95d644ce2a764b98a1458df4d86d7e_prof);

        
        $__internal_050406459c7b60a885b70738d0a193392e0ea35f81f8aff648abc27c42c459c3->leave($__internal_050406459c7b60a885b70738d0a193392e0ea35f81f8aff648abc27c42c459c3_prof);
=======
        $__internal_cc7cc81a3f517860aa27294dc459637e7837fb8069261b6ce59abeb26536c133->leave($__internal_cc7cc81a3f517860aa27294dc459637e7837fb8069261b6ce59abeb26536c133_prof);

        
        $__internal_01e14683c69c17f4a972643da7d6288b6ead0604a07935c76fd5b5541136db8b->leave($__internal_01e14683c69c17f4a972643da7d6288b6ead0604a07935c76fd5b5541136db8b_prof);
>>>>>>> Stashed changes

    }

    // line 501
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< Updated upstream
            $__internal_17230e99faeacd592c99397aa60b2e16a9b81d0e84620011329ddbf3a9007be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_17230e99faeacd592c99397aa60b2e16a9b81d0e84620011329ddbf3a9007be1->enter($__internal_17230e99faeacd592c99397aa60b2e16a9b81d0e84620011329ddbf3a9007be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_8a66e9b551c66dd680c548dab1ae74e91f272259e653902583f5236fc0c21ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8a66e9b551c66dd680c548dab1ae74e91f272259e653902583f5236fc0c21ffb->enter($__internal_8a66e9b551c66dd680c548dab1ae74e91f272259e653902583f5236fc0c21ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 503
            $context["__internal_01b383caa3bbc43b044c47aaa9a978c0cabb758ba86966e291fa181bb9cb591f"] = $this;
=======
            $__internal_b0aefeb465f51d1490b8daf4a3ce1cf7263351a680e17ae96101983788c1d92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b0aefeb465f51d1490b8daf4a3ce1cf7263351a680e17ae96101983788c1d92a->enter($__internal_b0aefeb465f51d1490b8daf4a3ce1cf7263351a680e17ae96101983788c1d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_f0a22b2053f3de1c145c45f45a0a709f7a8202839481c8d86f8cf4c1adaa9425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f0a22b2053f3de1c145c45f45a0a709f7a8202839481c8d86f8cf4c1adaa9425->enter($__internal_f0a22b2053f3de1c145c45f45a0a709f7a8202839481c8d86f8cf4c1adaa9425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 503
            $context["__internal_5b604edeea74b29eaea648273570fc9ae42038203a4d4c2777e07403094380d3"] = $this;
>>>>>>> Stashed changes
            // line 504
            echo "                {
                    \"id\": \"";
            // line 505
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 506
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "origin", array()) - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 508
<<<<<<< Updated upstream
            echo $context["__internal_01b383caa3bbc43b044c47aaa9a978c0cabb758ba86966e291fa181bb9cb591f"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
=======
            echo $context["__internal_5b604edeea74b29eaea648273570fc9ae42038203a4d4c2777e07403094380d3"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
>>>>>>> Stashed changes
            echo "
                    ]
                }
";
            
<<<<<<< Updated upstream
            $__internal_8a66e9b551c66dd680c548dab1ae74e91f272259e653902583f5236fc0c21ffb->leave($__internal_8a66e9b551c66dd680c548dab1ae74e91f272259e653902583f5236fc0c21ffb_prof);

            
            $__internal_17230e99faeacd592c99397aa60b2e16a9b81d0e84620011329ddbf3a9007be1->leave($__internal_17230e99faeacd592c99397aa60b2e16a9b81d0e84620011329ddbf3a9007be1_prof);
=======
            $__internal_f0a22b2053f3de1c145c45f45a0a709f7a8202839481c8d86f8cf4c1adaa9425->leave($__internal_f0a22b2053f3de1c145c45f45a0a709f7a8202839481c8d86f8cf4c1adaa9425_prof);

            
            $__internal_b0aefeb465f51d1490b8daf4a3ce1cf7263351a680e17ae96101983788c1d92a->leave($__internal_b0aefeb465f51d1490b8daf4a3ce1cf7263351a680e17ae96101983788c1d92a_prof);
>>>>>>> Stashed changes

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 514
    public function getdump_events($__events__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< Updated upstream
            $__internal_8baae78a8ed73de2e6cdb697afd9e7c2c9e0051473255c84f6cb8dcd37dde025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8baae78a8ed73de2e6cdb697afd9e7c2c9e0051473255c84f6cb8dcd37dde025->enter($__internal_8baae78a8ed73de2e6cdb697afd9e7c2c9e0051473255c84f6cb8dcd37dde025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_730d2c6200f62422fb175c17090577866de685119533978bcbc1766f9a5265d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_730d2c6200f62422fb175c17090577866de685119533978bcbc1766f9a5265d0->enter($__internal_730d2c6200f62422fb175c17090577866de685119533978bcbc1766f9a5265d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));
=======
            $__internal_3c90669edcd236c69f5443ad9aaedd6599a137541ef3698925ddb01a09fc61bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3c90669edcd236c69f5443ad9aaedd6599a137541ef3698925ddb01a09fc61bd->enter($__internal_3c90669edcd236c69f5443ad9aaedd6599a137541ef3698925ddb01a09fc61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_4f8a305cac750a98cda5ec07b6755b08ffded921939d82b30e26cca566779ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4f8a305cac750a98cda5ec07b6755b08ffded921939d82b30e26cca566779ccc->enter($__internal_4f8a305cac750a98cda5ec07b6755b08ffded921939d82b30e26cca566779ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));
>>>>>>> Stashed changes

            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 517
                if (("__section__" != $context["name"])) {
                    // line 518
                    echo "                        {
                            \"name\": \"";
                    // line 519
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 520
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 521
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 522
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 523
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 524
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 525
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 527
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 528
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 530
                    echo "]
                        }";
                    // line 531
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
<<<<<<< Updated upstream
            $__internal_730d2c6200f62422fb175c17090577866de685119533978bcbc1766f9a5265d0->leave($__internal_730d2c6200f62422fb175c17090577866de685119533978bcbc1766f9a5265d0_prof);

            
            $__internal_8baae78a8ed73de2e6cdb697afd9e7c2c9e0051473255c84f6cb8dcd37dde025->leave($__internal_8baae78a8ed73de2e6cdb697afd9e7c2c9e0051473255c84f6cb8dcd37dde025_prof);
=======
            $__internal_4f8a305cac750a98cda5ec07b6755b08ffded921939d82b30e26cca566779ccc->leave($__internal_4f8a305cac750a98cda5ec07b6755b08ffded921939d82b30e26cca566779ccc_prof);

            
            $__internal_3c90669edcd236c69f5443ad9aaedd6599a137541ef3698925ddb01a09fc61bd->leave($__internal_3c90669edcd236c69f5443ad9aaedd6599a137541ef3698925ddb01a09fc61bd_prof);
>>>>>>> Stashed changes

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 537
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< Updated upstream
            $__internal_31183a4fb3e45b6f6dd0ac0cbab8fa5fa0fbf33933b6e85357d445a63cda1780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_31183a4fb3e45b6f6dd0ac0cbab8fa5fa0fbf33933b6e85357d445a63cda1780->enter($__internal_31183a4fb3e45b6f6dd0ac0cbab8fa5fa0fbf33933b6e85357d445a63cda1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_485cacf5a95705f5e59a52b7efe1afa5eefaff8d8bef5dabbc34ce10db52597b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_485cacf5a95705f5e59a52b7efe1afa5eefaff8d8bef5dabbc34ce10db52597b->enter($__internal_485cacf5a95705f5e59a52b7efe1afa5eefaff8d8bef5dabbc34ce10db52597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));
=======
            $__internal_d045bd79967c03e1fc6006a5626896dc07b6766038be6d5b34e251f06111dd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d045bd79967c03e1fc6006a5626896dc07b6766038be6d5b34e251f06111dd98->enter($__internal_d045bd79967c03e1fc6006a5626896dc07b6766038be6d5b34e251f06111dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_1fb930afc5a05803fabe33bb39b6ed5172c5d7e94bade86640ea7bf6ab5c2c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1fb930afc5a05803fabe33bb39b6ed5172c5d7e94bade86640ea7bf6ab5c2c84->enter($__internal_1fb930afc5a05803fabe33bb39b6ed5172c5d7e94bade86640ea7bf6ab5c2c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));
>>>>>>> Stashed changes

            // line 538
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 541
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 544
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
<<<<<<< Updated upstream
            $__internal_485cacf5a95705f5e59a52b7efe1afa5eefaff8d8bef5dabbc34ce10db52597b->leave($__internal_485cacf5a95705f5e59a52b7efe1afa5eefaff8d8bef5dabbc34ce10db52597b_prof);

            
            $__internal_31183a4fb3e45b6f6dd0ac0cbab8fa5fa0fbf33933b6e85357d445a63cda1780->leave($__internal_31183a4fb3e45b6f6dd0ac0cbab8fa5fa0fbf33933b6e85357d445a63cda1780_prof);
=======
            $__internal_1fb930afc5a05803fabe33bb39b6ed5172c5d7e94bade86640ea7bf6ab5c2c84->leave($__internal_1fb930afc5a05803fabe33bb39b6ed5172c5d7e94bade86640ea7bf6ab5c2c84_prof);

            
            $__internal_d045bd79967c03e1fc6006a5626896dc07b6766038be6d5b34e251f06111dd98->leave($__internal_d045bd79967c03e1fc6006a5626896dc07b6766038be6d5b34e251f06111dd98_prof);
>>>>>>> Stashed changes

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1032 => 544,  1029 => 543,  1018 => 541,  1014 => 540,  1010 => 538,  990 => 537,  954 => 531,  951 => 530,  932 => 528,  915 => 527,  911 => 525,  907 => 524,  903 => 523,  899 => 522,  895 => 521,  891 => 520,  887 => 519,  884 => 518,  882 => 517,  865 => 516,  847 => 514,  822 => 508,  817 => 506,  813 => 505,  810 => 504,  808 => 503,  787 => 501,  776 => 498,  742 => 466,  724 => 463,  707 => 462,  704 => 461,  702 => 460,  697 => 458,  692 => 456,  416 => 183,  372 => 141,  369 => 140,  366 => 139,  358 => 137,  352 => 134,  346 => 133,  343 => 132,  340 => 131,  336 => 130,  331 => 128,  327 => 126,  325 => 125,  320 => 123,  317 => 122,  311 => 119,  308 => 118,  306 => 117,  300 => 114,  296 => 113,  291 => 111,  288 => 110,  286 => 109,  277 => 102,  268 => 101,  254 => 97,  248 => 93,  246 => 92,  240 => 88,  234 => 85,  230 => 84,  226 => 82,  220 => 81,  217 => 80,  212 => 79,  210 => 78,  204 => 75,  200 => 74,  195 => 71,  193 => 70,  190 => 69,  183 => 65,  180 => 64,  178 => 63,  171 => 59,  163 => 54,  157 => 50,  148 => 49,  134 => 44,  131 => 43,  122 => 42,  110 => 39,  107 => 38,  101 => 35,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  79 => 24,  74 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  51 => 17,  41 => 1,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% if colors is not defined %}
    {% set colors = {
        'default':                '#999',
        'section':                '#444',
        'event_listener':         '#00B8F5',
        'event_listener_loading': '#00B8F5',
        'template':               '#66CC00',
        'doctrine':               '#FF6633',
        'propel':                 '#FF6633',
    } %}
{% endif %}

{% block toolbar %}
    {% set total_time = collector.events|length ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = collector.events|length and collector.duration > 1000 ? 'yellow' : '' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% set subrequests_time = 0 %}
            {% for child in profile.children %}
                {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
            {% endfor %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3>
            Sub-Request {{ profile.getcollector('request').requestattributes.get('_controller') }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}
        {% endfor %}
    {% endif %}

    <script>{% autoescape 'js' %}//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = {{ colors|json_encode|raw }},
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": {{ \"%F\"|format(collector.events.__section__.endtime) }},
            \"requests\": [
{{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}

{% if profile.children|length %}
                ,
{% for child in profile.children %}
{{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}
{% endfor %}
{% endif %}
            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>{% endautoescape %}</script>
{% endblock %}

{% macro dump_request_data(token, profile, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
                {
                    \"id\": \"{{ token }}\",
                    \"left\": {{ \"%F\"|format(events.__section__.origin - origin) }},
                    \"events\": [
{{ dump_events(events) }}
                    ]
                }
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
                        {
                            \"name\": \"{{ name }}\",
                            \"category\": \"{{ event.category }}\",
                            \"origin\": {{ \"%F\"|format(event.origin) }},
                            \"starttime\": {{ \"%F\"|format(event.starttime) }},
                            \"endtime\": {{ \"%F\"|format(event.endtime) }},
                            \"duration\": {{ \"%F\"|format(event.duration) }},
                            \"memory\": {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
                            \"periods\": [
                                {%- for period in event.periods -%}
                                    {\"start\": {{ \"%F\"|format(period.starttime) }}, \"end\": {{ \"%F\"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}
                                {%- endfor -%}
                            ]
                        }{{ loop.last ? '' : ',' }}
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(id, events, colors) %}
    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            {% for category, color in colors %}
                <span data-color=\"{{ color }}\">{{ category }}</span>
            {% endfor %}
        </div>
        <canvas width=\"680\" height=\"\" id=\"{{ id }}\" class=\"timeline\"></canvas>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "C:\\wamp\\www\\famicity3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\time.html.twig");
    }
}
