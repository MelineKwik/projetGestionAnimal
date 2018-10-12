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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
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
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" style=\" width: 150px; height: 150px; \">
        </a>
      </div>
      <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
          <li class=\"nav-item active  \">
            <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
              <i class=\"material-icons\">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeIntervenant");
        echo "\">
              <i class=\"material-icons\">groups</i>
              <p>Les Intervenants</p>
            </a>
          </li>
          <li class=\"nav-item \">
              <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeAnimaux");
        echo "\" >
              <i class=\"material-icons\">pets</i>
              <p>Les Animaux</p>
            </a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"./typography.html\">
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
            </ul>
          </div>
        </div>
      </nav>
        ";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "        <script>// <!&#91;CDATA&#91;
            \$('#myTab a').click(function (e) {
              e.preventDefault()
              \$(this).tab('show')
            }); 
            \$(function() {
              \$('#selectpicker').change(function() {
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

    // line 155
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
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
        return array (  300 => 156,  283 => 155,  266 => 7,  248 => 6,  219 => 157,  216 => 156,  214 => 155,  113 => 57,  104 => 51,  95 => 45,  86 => 39,  62 => 18,  57 => 16,  49 => 11,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
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
        
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
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
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"{{ path('listeIntervenant')}}\">
              <i class=\"material-icons\">groups</i>
              <p>Les Intervenants</p>
            </a>
          </li>
          <li class=\"nav-item \">
              <a class=\"nav-link\" href=\"{{ path('listeAnimaux')}}\" >
              <i class=\"material-icons\">pets</i>
              <p>Les Animaux</p>
            </a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"./typography.html\">
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
            \$(function() {
              \$('#selectpicker').change(function() {
                  this.form.submit();
              });
          });
          
          

          </script>
        
        
    
    </body>
</html>
", "base.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\base.html.twig");
    }
}
