<?php

/* base.html.twig */
class __TwigTemplate_73b339b4d92c3ddd9bf4054b17f37ff9e355aa61aff0f7f65e3599c18a17b2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/material-dashboard.css?v=2.1.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script>window.jQuery || document.write(decodeURIComponent('%3Cscript src=\"js/jquery.min.js\"%3E%3C/script%3E'))</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn3.devexpress.com/jslib/18.1.6/css/dx.common.css\" />
    <link rel=\"dx-theme\" data-theme=\"generic.light\" href=\"https://cdn3.devexpress.com/jslib/18.1.6/css/dx.light.css\" />
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn3.devexpress.com/jslib/18.1.6/js/dx.all.js\"></script>
    <script>
        \$(function () {
            \$(\"#scheduler\").dxScheduler({
                dataSource: data,
                views: [\"timelineDay\", \"timelineWeek\", \"timelineWorkWeek\", \"timelineMonth\"],
                currentView: \"timelineMonth\",
                currentDate: new Date(2017, 4, 1),
                firstDayOfWeek: 0,
                startDayHour: 8,
                endDayHour: 20,
                cellDuration: 60,
                groups: [\"priority\"],
                resources: [{
                        fieldExpr: \"ownerId\",
                        allowMultiple: true,
                        dataSource: resourcesData,
                        label: \"Owner\",
                        useColorAsDefault: true
                    }, {
                        fieldExpr: \"priority\",
                        allowMultiple: false,
                        dataSource: priorityData,
                        label: \"Priority\"
                    }],
                height: 580
            });
        });
        var resourcesData = [
            {
                text: \"Samantha Bright\",
                id: 1,
                color: \"#cb6bb2\"
            }, {
                text: \"John Heart\",
                id: 2,
                color: \"#56ca85\"
            }, {
                text: \"Todd Hoffman\",
                id: 3,
                color: \"#1e90ff\"
            }, {
                text: \"Sandra Johnson\",
                id: 4,
                color: \"#ff9747\"
            }
        ];

        var priorityData = [
            {
                text: \"Low Priority\",
                id: 1,
                color: \"#1e90ff\"
            }, {
                text: \"High Priority\",
                id: 2,
                color: \"#ff9747\"
            }
        ];

        var data = [{
                \"Evenement\": \"Google AdWords Strategy\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 1, 9, 0),
                \"endDate\": new Date(2017, 4, 1, 10, 30),
                \"priority\": 1
            }, {
                \"text\": \"New Brochures\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 1, 11, 30),
                \"endDate\": new Date(2017, 4, 1, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Brochure Design Review\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 1, 13, 15),
                \"endDate\": new Date(2017, 4, 1, 16, 15),
                \"priority\": 1
            }, {
                \"text\": \"Website Re-Design Plan\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 1, 16, 45),
                \"endDate\": new Date(2017, 4, 2, 11, 15),
                \"priority\": 2
            }, {
                \"text\": \"Rollout of New Website and Marketing Brochures\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 2, 8, 15),
                \"endDate\": new Date(2017, 4, 2, 10, 45),
                \"priority\": 2
            }, {
                \"text\": \"Update Sales Strategy Documents\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 2, 12, 0),
                \"endDate\": new Date(2017, 4, 2, 13, 45),
                \"priority\": 1
            }, {
                \"text\": \"Non-Compete Agreements\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 3, 8, 15),
                \"endDate\": new Date(2017, 4, 3, 9, 0),
                \"priority\": 1
            }, {
                \"text\": \"Approve Hiring of John Jeffers\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 3, 10, 0),
                \"endDate\": new Date(2017, 4, 3, 11, 15),
                \"priority\": 2
            }, {
                \"text\": \"Update NDA Agreement\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 3, 11, 45),
                \"endDate\": new Date(2017, 4, 3, 13, 45),
                \"priority\": 2
            }, {
                \"text\": \"Update Employee Files with New NDA\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 3, 14, 0),
                \"endDate\": new Date(2017, 4, 3, 16, 45),
                \"priority\": 1
            }, {
                \"text\": \"Submit Questions Regarding New NDA\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 4, 8, 0),
                \"endDate\": new Date(2017, 4, 4, 9, 30),
                \"priority\": 1
            }, {
                \"text\": \"Submit Signed NDA\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 4, 12, 45),
                \"endDate\": new Date(2017, 4, 4, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Review Revenue Projections\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 4, 17, 15),
                \"endDate\": new Date(2017, 4, 4, 18, 0),
                \"priority\": 2
            }, {
                \"text\": \"Comment on Revenue Projections\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 5, 9, 15),
                \"endDate\": new Date(2017, 4, 5, 11, 15),
                \"priority\": 1
            }, {
                \"text\": \"Provide New Health Insurance Docs\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 5, 12, 45),
                \"endDate\": new Date(2017, 4, 5, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Review Changes to Health Insurance Coverage\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 5, 14, 15),
                \"endDate\": new Date(2017, 4, 5, 15, 30),
                \"priority\": 1
            }, {
                \"text\": \"Review Training Course for any Ommissions\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 8, 14, 0),
                \"endDate\": new Date(2017, 4, 9, 12, 0),
                \"priority\": 2
            }, {
                \"text\": \"Recall Rebate Form\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 8, 12, 45),
                \"endDate\": new Date(2017, 4, 8, 13, 15),
                \"priority\": 1
            }, {
                \"text\": \"Create Report on Customer Feedback\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 9, 15, 15),
                \"endDate\": new Date(2017, 4, 9, 17, 30),
                \"priority\": 2
            }, {
                \"text\": \"Review Customer Feedback Report\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 9, 16, 15),
                \"endDate\": new Date(2017, 4, 9, 18, 30),
                \"priority\": 1
            }, {
                \"text\": \"Customer Feedback Report Analysis\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 10, 9, 30),
                \"endDate\": new Date(2017, 4, 10, 10, 30),
                \"priority\": 1
            }, {
                \"text\": \"Prepare Shipping Cost Analysis Report\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 10, 12, 30),
                \"endDate\": new Date(2017, 4, 10, 13, 30),
                \"priority\": 1
            }, {
                \"text\": \"Provide Feedback on Shippers\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 10, 14, 15),
                \"endDate\": new Date(2017, 4, 10, 16, 0),
                \"priority\": 2
            }, {
                \"text\": \"Select Preferred Shipper\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 10, 17, 30),
                \"endDate\": new Date(2017, 4, 10, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Complete Shipper Selection Form\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 11, 8, 30),
                \"endDate\": new Date(2017, 4, 11, 10, 0),
                \"priority\": 2
            }, {
                \"text\": \"Upgrade Server Hardware\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 11, 12, 0),
                \"endDate\": new Date(2017, 4, 11, 14, 15),
                \"priority\": 1
            }, {
                \"text\": \"Upgrade Personal Computers\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 11, 14, 45),
                \"endDate\": new Date(2017, 4, 11, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"Upgrade Apps to Windows RT or stay with WinForms\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 12, 10, 30),
                \"endDate\": new Date(2017, 4, 12, 13, 0),
                \"priority\": 1
            }, {
                \"text\": \"Estimate Time Required to Touch-Enable Apps\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 12, 14, 45),
                \"endDate\": new Date(2017, 4, 12, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"Report on Tranistion to Touch-Based Apps\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 12, 18, 30),
                \"endDate\": new Date(2017, 4, 12, 19, 0),
                \"priority\": 1
            }, {
                \"text\": \"Submit New Website Design\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 15, 8, 0),
                \"endDate\": new Date(2017, 4, 15, 10, 0),
                \"priority\": 2
            }, {
                \"text\": \"Create Icons for Website\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 15, 11, 30),
                \"endDate\": new Date(2017, 4, 15, 13, 15),
                \"priority\": 1
            }, {
                \"text\": \"Create New Product Pages\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 16, 9, 45),
                \"endDate\": new Date(2017, 4, 16, 11, 45),
                \"priority\": 2
            }, {
                \"text\": \"Approve Website Launch\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 16, 12, 0),
                \"endDate\": new Date(2017, 4, 16, 15, 15),
                \"priority\": 1
            }, {
                \"text\": \"Update Customer Shipping Profiles\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 17, 9, 30),
                \"endDate\": new Date(2017, 4, 17, 11, 0),
                \"priority\": 1
            }, {
                \"text\": \"Create New Shipping Return Labels\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 17, 12, 45),
                \"endDate\": new Date(2017, 4, 17, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Get Design for Shipping Return Labels\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 17, 15, 0),
                \"endDate\": new Date(2017, 4, 17, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"PSD needed for Shipping Return Labels\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 18, 8, 30),
                \"endDate\": new Date(2017, 4, 18, 9, 15),
                \"priority\": 2
            }, {
                \"text\": \"Contact ISP and Discuss Payment Options\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 18, 11, 30),
                \"endDate\": new Date(2017, 4, 18, 16, 0),
                \"priority\": 2
            }, {
                \"text\": \"Prepare Year-End Support Summary Report\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 18, 17, 0),
                \"endDate\": new Date(2017, 4, 18, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Review New Training Material\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 19, 8, 0),
                \"endDate\": new Date(2017, 4, 19, 9, 15),
                \"priority\": 2
            }, {
                \"text\": \"Distribute Training Material to Support Staff\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 19, 12, 45),
                \"endDate\": new Date(2017, 4, 19, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Training Material Distribution Schedule\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 19, 14, 15),
                \"endDate\": new Date(2017, 4, 19, 16, 15),
                \"priority\": 1
            }, {
                \"text\": \"Approval on Converting to New HDMI Specification\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 22, 9, 30),
                \"endDate\": new Date(2017, 4, 22, 10, 15),
                \"priority\": 2
            }, {
                \"text\": \"Create New Spike for Automation Server\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 22, 10, 0),
                \"endDate\": new Date(2017, 4, 22, 12, 30),
                \"priority\": 2
            }, {
                \"text\": \"Code Review - New Automation Server\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 22, 13, 0),
                \"endDate\": new Date(2017, 4, 22, 15, 0),
                \"priority\": 1
            }, {
                \"text\": \"Confirm Availability for Sales Meeting\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 23, 10, 15),
                \"endDate\": new Date(2017, 4, 23, 15, 15),
                \"priority\": 2
            }, {
                \"text\": \"Reschedule Sales Team Meeting\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 23, 16, 15),
                \"endDate\": new Date(2017, 4, 23, 18, 0),
                \"priority\": 2
            }, {
                \"text\": \"Send 2 Remotes for Giveaways\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 24, 9, 30),
                \"endDate\": new Date(2017, 4, 24, 11, 45),
                \"priority\": 1
            }, {
                \"text\": \"Discuss Product Giveaways with Management\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 24, 12, 15),
                \"endDate\": new Date(2017, 4, 24, 16, 45),
                \"priority\": 2
            }, {
                \"text\": \"Replace Desktops on the 3rd Floor\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 25, 9, 30),
                \"endDate\": new Date(2017, 4, 25, 10, 45),
                \"priority\": 1
            }, {
                \"text\": \"Update Database with New Leads\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 25, 12, 0),
                \"endDate\": new Date(2017, 4, 25, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Mail New Leads for Follow Up\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 25, 14, 45),
                \"endDate\": new Date(2017, 4, 25, 15, 30),
                \"priority\": 2
            }, {
                \"text\": \"Send Territory Sales Breakdown\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 25, 18, 0),
                \"endDate\": new Date(2017, 4, 25, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Territory Sales Breakdown Report\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 26, 8, 45),
                \"endDate\": new Date(2017, 4, 26, 9, 45),
                \"priority\": 1
            }, {
                \"text\": \"Report on the State of Engineering Dept\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 26, 14, 45),
                \"endDate\": new Date(2017, 4, 26, 15, 30),
                \"priority\": 2
            }, {
                \"text\": \"Staff Productivity Report\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 26, 16, 15),
                \"endDate\": new Date(2017, 4, 26, 19, 30),
                \"priority\": 2
            }];
    </script>
    <style>

    </style>


</head>
<body>
    <div class=\"wrapper \">
        <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
      
              Tip 2: you can also add an image using data-image tag
            -->
            <div class=\"logo\" >
                <a class=\"simple-text logo-normal\" >
                    <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" style=\" width: 150px; height: 150px; \">
                </a>
            </div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"nav-item active  \">
                        <a class=\"nav-link\" href=\"";
        // line 452
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    ";
        // line 457
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 458
            echo "                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
            // line 459
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeIntervenant");
            echo "\">
                                <i class=\"material-icons\">groups</i>
                                <p>Les Intervenants</p>
                            </a>
                        </li>
                    ";
        }
        // line 465
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 466
            echo "                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
            // line 467
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeAnimaux");
            echo "\" >
                                <i class=\"material-icons\">pets</i>
                                <p>Les Animaux</p>
                            </a>
                        </li>
                    ";
        }
        // line 473
        echo "                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false)) {
            // line 474
            echo "                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
            // line 475
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeAnimauxFamille");
            echo "\" >
                                <i class=\"material-icons\">pets</i>
                                <p>Les Animaux</p>
                            </a>
                        </li>
                    ";
        }
        // line 481
        echo "                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 482
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda");
        echo "\">
                            <i class=\"material-icons\">insert_invitation</i>
                            <p>Les rendrez-vous</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./icons.html\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./map.html\">
                            <i class=\"material-icons\">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./notifications.html\">
                            <i class=\"material-icons\">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class=\"nav-item active-pro \">
                          <a class=\"nav-link\" href=\"./upgrade.html\">
                              <i class=\"material-icons\">unarchive</i>
                              <p>Upgrade to PRO</p>
                          </a>
                      </li> -->
                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
                <div class=\"container-fluid\">
                    <div class=\"navbar-wrapper\">
                        <a class=\"navbar-brand\" href=\"#pablo\">Dashboard</a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\">
                        <form class=\"navbar-form\">
                            <div class=\"input-group no-border\">
                                <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                    <i class=\"material-icons\">search</i>
                                    <div class=\"ripple-container\"></div>
                                </button>
                            </div>
                        </form>
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#pablo\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"d-lg-none d-md-block\">
                                        Some Actions
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                                    <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                                    <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another One</a>
                                </div>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#pablo\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/logout\">
                                    <i class=\"material-icons\">arrow_forward</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        // line 583
        $this->displayBlock('body', $context, $blocks);
        // line 584
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 585
        echo "    <script>// <!&#91;CDATA&#91;
        \$('#myTab a').click(function (e) {
            e.preventDefault()
            \$(this).tab('show')
        });
        \$(function () {
            \$('#selectpicker').change(function () {
                this.form.submit();
            });
        });



    </script>



    </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 583
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 584
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 584,  730 => 583,  713 => 7,  695 => 6,  666 => 585,  663 => 584,  661 => 583,  557 => 482,  554 => 481,  545 => 475,  542 => 474,  539 => 473,  530 => 467,  527 => 466,  524 => 465,  515 => 459,  512 => 458,  510 => 457,  502 => 452,  493 => 446,  62 => 18,  57 => 16,  49 => 11,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
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
        <meta charset=\"UTF-8\" />

        <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link href=\"{{ asset('style/style.css') }}\" rel=\"stylesheet\" />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
    <!-- CSS Files -->
    <link href=\"{{ asset('style/material-dashboard.css?v=2.1.0') }}\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"{{ asset('style/demo.css') }}\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script>window.jQuery || document.write(decodeURIComponent('%3Cscript src=\"js/jquery.min.js\"%3E%3C/script%3E'))</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn3.devexpress.com/jslib/18.1.6/css/dx.common.css\" />
    <link rel=\"dx-theme\" data-theme=\"generic.light\" href=\"https://cdn3.devexpress.com/jslib/18.1.6/css/dx.light.css\" />
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn3.devexpress.com/jslib/18.1.6/js/dx.all.js\"></script>
    <script>
        \$(function () {
            \$(\"#scheduler\").dxScheduler({
                dataSource: data,
                views: [\"timelineDay\", \"timelineWeek\", \"timelineWorkWeek\", \"timelineMonth\"],
                currentView: \"timelineMonth\",
                currentDate: new Date(2017, 4, 1),
                firstDayOfWeek: 0,
                startDayHour: 8,
                endDayHour: 20,
                cellDuration: 60,
                groups: [\"priority\"],
                resources: [{
                        fieldExpr: \"ownerId\",
                        allowMultiple: true,
                        dataSource: resourcesData,
                        label: \"Owner\",
                        useColorAsDefault: true
                    }, {
                        fieldExpr: \"priority\",
                        allowMultiple: false,
                        dataSource: priorityData,
                        label: \"Priority\"
                    }],
                height: 580
            });
        });
        var resourcesData = [
            {
                text: \"Samantha Bright\",
                id: 1,
                color: \"#cb6bb2\"
            }, {
                text: \"John Heart\",
                id: 2,
                color: \"#56ca85\"
            }, {
                text: \"Todd Hoffman\",
                id: 3,
                color: \"#1e90ff\"
            }, {
                text: \"Sandra Johnson\",
                id: 4,
                color: \"#ff9747\"
            }
        ];

        var priorityData = [
            {
                text: \"Low Priority\",
                id: 1,
                color: \"#1e90ff\"
            }, {
                text: \"High Priority\",
                id: 2,
                color: \"#ff9747\"
            }
        ];

        var data = [{
                \"Evenement\": \"Google AdWords Strategy\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 1, 9, 0),
                \"endDate\": new Date(2017, 4, 1, 10, 30),
                \"priority\": 1
            }, {
                \"text\": \"New Brochures\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 1, 11, 30),
                \"endDate\": new Date(2017, 4, 1, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Brochure Design Review\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 1, 13, 15),
                \"endDate\": new Date(2017, 4, 1, 16, 15),
                \"priority\": 1
            }, {
                \"text\": \"Website Re-Design Plan\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 1, 16, 45),
                \"endDate\": new Date(2017, 4, 2, 11, 15),
                \"priority\": 2
            }, {
                \"text\": \"Rollout of New Website and Marketing Brochures\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 2, 8, 15),
                \"endDate\": new Date(2017, 4, 2, 10, 45),
                \"priority\": 2
            }, {
                \"text\": \"Update Sales Strategy Documents\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 2, 12, 0),
                \"endDate\": new Date(2017, 4, 2, 13, 45),
                \"priority\": 1
            }, {
                \"text\": \"Non-Compete Agreements\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 3, 8, 15),
                \"endDate\": new Date(2017, 4, 3, 9, 0),
                \"priority\": 1
            }, {
                \"text\": \"Approve Hiring of John Jeffers\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 3, 10, 0),
                \"endDate\": new Date(2017, 4, 3, 11, 15),
                \"priority\": 2
            }, {
                \"text\": \"Update NDA Agreement\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 3, 11, 45),
                \"endDate\": new Date(2017, 4, 3, 13, 45),
                \"priority\": 2
            }, {
                \"text\": \"Update Employee Files with New NDA\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 3, 14, 0),
                \"endDate\": new Date(2017, 4, 3, 16, 45),
                \"priority\": 1
            }, {
                \"text\": \"Submit Questions Regarding New NDA\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 4, 8, 0),
                \"endDate\": new Date(2017, 4, 4, 9, 30),
                \"priority\": 1
            }, {
                \"text\": \"Submit Signed NDA\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 4, 12, 45),
                \"endDate\": new Date(2017, 4, 4, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Review Revenue Projections\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 4, 17, 15),
                \"endDate\": new Date(2017, 4, 4, 18, 0),
                \"priority\": 2
            }, {
                \"text\": \"Comment on Revenue Projections\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 5, 9, 15),
                \"endDate\": new Date(2017, 4, 5, 11, 15),
                \"priority\": 1
            }, {
                \"text\": \"Provide New Health Insurance Docs\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 5, 12, 45),
                \"endDate\": new Date(2017, 4, 5, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Review Changes to Health Insurance Coverage\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 5, 14, 15),
                \"endDate\": new Date(2017, 4, 5, 15, 30),
                \"priority\": 1
            }, {
                \"text\": \"Review Training Course for any Ommissions\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 8, 14, 0),
                \"endDate\": new Date(2017, 4, 9, 12, 0),
                \"priority\": 2
            }, {
                \"text\": \"Recall Rebate Form\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 8, 12, 45),
                \"endDate\": new Date(2017, 4, 8, 13, 15),
                \"priority\": 1
            }, {
                \"text\": \"Create Report on Customer Feedback\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 9, 15, 15),
                \"endDate\": new Date(2017, 4, 9, 17, 30),
                \"priority\": 2
            }, {
                \"text\": \"Review Customer Feedback Report\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 9, 16, 15),
                \"endDate\": new Date(2017, 4, 9, 18, 30),
                \"priority\": 1
            }, {
                \"text\": \"Customer Feedback Report Analysis\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 10, 9, 30),
                \"endDate\": new Date(2017, 4, 10, 10, 30),
                \"priority\": 1
            }, {
                \"text\": \"Prepare Shipping Cost Analysis Report\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 10, 12, 30),
                \"endDate\": new Date(2017, 4, 10, 13, 30),
                \"priority\": 1
            }, {
                \"text\": \"Provide Feedback on Shippers\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 10, 14, 15),
                \"endDate\": new Date(2017, 4, 10, 16, 0),
                \"priority\": 2
            }, {
                \"text\": \"Select Preferred Shipper\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 10, 17, 30),
                \"endDate\": new Date(2017, 4, 10, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Complete Shipper Selection Form\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 11, 8, 30),
                \"endDate\": new Date(2017, 4, 11, 10, 0),
                \"priority\": 2
            }, {
                \"text\": \"Upgrade Server Hardware\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 11, 12, 0),
                \"endDate\": new Date(2017, 4, 11, 14, 15),
                \"priority\": 1
            }, {
                \"text\": \"Upgrade Personal Computers\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 11, 14, 45),
                \"endDate\": new Date(2017, 4, 11, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"Upgrade Apps to Windows RT or stay with WinForms\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 12, 10, 30),
                \"endDate\": new Date(2017, 4, 12, 13, 0),
                \"priority\": 1
            }, {
                \"text\": \"Estimate Time Required to Touch-Enable Apps\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 12, 14, 45),
                \"endDate\": new Date(2017, 4, 12, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"Report on Tranistion to Touch-Based Apps\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 12, 18, 30),
                \"endDate\": new Date(2017, 4, 12, 19, 0),
                \"priority\": 1
            }, {
                \"text\": \"Submit New Website Design\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 15, 8, 0),
                \"endDate\": new Date(2017, 4, 15, 10, 0),
                \"priority\": 2
            }, {
                \"text\": \"Create Icons for Website\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 15, 11, 30),
                \"endDate\": new Date(2017, 4, 15, 13, 15),
                \"priority\": 1
            }, {
                \"text\": \"Create New Product Pages\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 16, 9, 45),
                \"endDate\": new Date(2017, 4, 16, 11, 45),
                \"priority\": 2
            }, {
                \"text\": \"Approve Website Launch\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 16, 12, 0),
                \"endDate\": new Date(2017, 4, 16, 15, 15),
                \"priority\": 1
            }, {
                \"text\": \"Update Customer Shipping Profiles\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 17, 9, 30),
                \"endDate\": new Date(2017, 4, 17, 11, 0),
                \"priority\": 1
            }, {
                \"text\": \"Create New Shipping Return Labels\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 17, 12, 45),
                \"endDate\": new Date(2017, 4, 17, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Get Design for Shipping Return Labels\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 17, 15, 0),
                \"endDate\": new Date(2017, 4, 17, 16, 30),
                \"priority\": 1
            }, {
                \"text\": \"PSD needed for Shipping Return Labels\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 18, 8, 30),
                \"endDate\": new Date(2017, 4, 18, 9, 15),
                \"priority\": 2
            }, {
                \"text\": \"Contact ISP and Discuss Payment Options\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 18, 11, 30),
                \"endDate\": new Date(2017, 4, 18, 16, 0),
                \"priority\": 2
            }, {
                \"text\": \"Prepare Year-End Support Summary Report\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 18, 17, 0),
                \"endDate\": new Date(2017, 4, 18, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Review New Training Material\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 19, 8, 0),
                \"endDate\": new Date(2017, 4, 19, 9, 15),
                \"priority\": 2
            }, {
                \"text\": \"Distribute Training Material to Support Staff\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 19, 12, 45),
                \"endDate\": new Date(2017, 4, 19, 14, 0),
                \"priority\": 1
            }, {
                \"text\": \"Training Material Distribution Schedule\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 19, 14, 15),
                \"endDate\": new Date(2017, 4, 19, 16, 15),
                \"priority\": 1
            }, {
                \"text\": \"Approval on Converting to New HDMI Specification\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 22, 9, 30),
                \"endDate\": new Date(2017, 4, 22, 10, 15),
                \"priority\": 2
            }, {
                \"text\": \"Create New Spike for Automation Server\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 22, 10, 0),
                \"endDate\": new Date(2017, 4, 22, 12, 30),
                \"priority\": 2
            }, {
                \"text\": \"Code Review - New Automation Server\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 22, 13, 0),
                \"endDate\": new Date(2017, 4, 22, 15, 0),
                \"priority\": 1
            }, {
                \"text\": \"Confirm Availability for Sales Meeting\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 23, 10, 15),
                \"endDate\": new Date(2017, 4, 23, 15, 15),
                \"priority\": 2
            }, {
                \"text\": \"Reschedule Sales Team Meeting\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 23, 16, 15),
                \"endDate\": new Date(2017, 4, 23, 18, 0),
                \"priority\": 2
            }, {
                \"text\": \"Send 2 Remotes for Giveaways\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 24, 9, 30),
                \"endDate\": new Date(2017, 4, 24, 11, 45),
                \"priority\": 1
            }, {
                \"text\": \"Discuss Product Giveaways with Management\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 24, 12, 15),
                \"endDate\": new Date(2017, 4, 24, 16, 45),
                \"priority\": 2
            }, {
                \"text\": \"Replace Desktops on the 3rd Floor\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 25, 9, 30),
                \"endDate\": new Date(2017, 4, 25, 10, 45),
                \"priority\": 1
            }, {
                \"text\": \"Update Database with New Leads\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 25, 12, 0),
                \"endDate\": new Date(2017, 4, 25, 14, 15),
                \"priority\": 2
            }, {
                \"text\": \"Mail New Leads for Follow Up\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 25, 14, 45),
                \"endDate\": new Date(2017, 4, 25, 15, 30),
                \"priority\": 2
            }, {
                \"text\": \"Send Territory Sales Breakdown\",
                \"ownerId\": [2],
                \"startDate\": new Date(2017, 4, 25, 18, 0),
                \"endDate\": new Date(2017, 4, 25, 20, 0),
                \"priority\": 1
            }, {
                \"text\": \"Territory Sales Breakdown Report\",
                \"ownerId\": [1],
                \"startDate\": new Date(2017, 4, 26, 8, 45),
                \"endDate\": new Date(2017, 4, 26, 9, 45),
                \"priority\": 1
            }, {
                \"text\": \"Report on the State of Engineering Dept\",
                \"ownerId\": [3],
                \"startDate\": new Date(2017, 4, 26, 14, 45),
                \"endDate\": new Date(2017, 4, 26, 15, 30),
                \"priority\": 2
            }, {
                \"text\": \"Staff Productivity Report\",
                \"ownerId\": [4],
                \"startDate\": new Date(2017, 4, 26, 16, 15),
                \"endDate\": new Date(2017, 4, 26, 19, 30),
                \"priority\": 2
            }];
    </script>
    <style>

    </style>


</head>
<body>
    <div class=\"wrapper \">
        <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
      
              Tip 2: you can also add an image using data-image tag
            -->
            <div class=\"logo\" >
                <a class=\"simple-text logo-normal\" >
                    <img src=\"{{asset('images/logo.jpg')}}\" style=\" width: 150px; height: 150px; \">
                </a>
            </div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"nav-item active  \">
                        <a class=\"nav-link\" href=\"{{ path('dashboard')}}\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('listeIntervenant')}}\">
                                <i class=\"material-icons\">groups</i>
                                <p>Les Intervenants</p>
                            </a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('listeAnimaux')}}\" >
                                <i class=\"material-icons\">pets</i>
                                <p>Les Animaux</p>
                            </a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') == false %}
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('listeAnimauxFamille')}}\" >
                                <i class=\"material-icons\">pets</i>
                                <p>Les Animaux</p>
                            </a>
                        </li>
                    {% endif %}
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('agenda')}}\">
                            <i class=\"material-icons\">insert_invitation</i>
                            <p>Les rendrez-vous</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./icons.html\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./map.html\">
                            <i class=\"material-icons\">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"./notifications.html\">
                            <i class=\"material-icons\">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class=\"nav-item active-pro \">
                          <a class=\"nav-link\" href=\"./upgrade.html\">
                              <i class=\"material-icons\">unarchive</i>
                              <p>Upgrade to PRO</p>
                          </a>
                      </li> -->
                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
                <div class=\"container-fluid\">
                    <div class=\"navbar-wrapper\">
                        <a class=\"navbar-brand\" href=\"#pablo\">Dashboard</a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\">
                        <form class=\"navbar-form\">
                            <div class=\"input-group no-border\">
                                <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                    <i class=\"material-icons\">search</i>
                                    <div class=\"ripple-container\"></div>
                                </button>
                            </div>
                        </form>
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#pablo\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"d-lg-none d-md-block\">
                                        Some Actions
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                                    <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                                    <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another One</a>
                                </div>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#pablo\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/logout\">
                                    <i class=\"material-icons\">arrow_forward</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <script>// <!&#91;CDATA&#91;
        \$('#myTab a').click(function (e) {
            e.preventDefault()
            \$(this).tab('show')
        });
        \$(function () {
            \$('#selectpicker').change(function () {
                this.form.submit();
            });
        });



    </script>



    </body>
    </html>
", "base.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\base.html.twig");
    }
}
