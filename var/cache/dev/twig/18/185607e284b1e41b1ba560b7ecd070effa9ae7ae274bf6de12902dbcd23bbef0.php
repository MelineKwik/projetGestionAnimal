<?php

/* Ek_DashboardFamille.html.twig */
class __TwigTemplate_6b79a59474a27f6cd0d0ccaf994730fe8b5a843b8186612660161dc7e8b1efe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ek_DashboardFamille.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_DashboardFamille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_DashboardFamille.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-warning card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">group</i>
                  </div>
                  <p class=\"card-category\">Vétérinaire</p>
                  <h3 class=\"card-title\">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons text-danger\">warning</i>
                    <a href=\"#pablo\">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-success card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">store</i>
                  </div>
                  <p class=\"card-category\">Famille d'accueil</p>
                  <h3 class=\"card-title\">34,245</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-danger card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">local_shipping</i>
                  </div>
                  <p class=\"card-category\">Transporteur</p>
                  <h3 class=\"card-title\">75</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-info card-header-icon\">
                  <div class=\"card-icon\">
                       <i class=\"material-icons\">pets</i>
                   </div>
                  <p class=\"card-category\">Animaux</p>
                  <h3 class=\"card-title\">+245</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
         
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Ek_DashboardFamille.html.twig";
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
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"content\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-warning card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">group</i>
                  </div>
                  <p class=\"card-category\">Vétérinaire</p>
                  <h3 class=\"card-title\">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons text-danger\">warning</i>
                    <a href=\"#pablo\">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-success card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">store</i>
                  </div>
                  <p class=\"card-category\">Famille d'accueil</p>
                  <h3 class=\"card-title\">34,245</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-danger card-header-icon\">
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">local_shipping</i>
                  </div>
                  <p class=\"card-category\">Transporteur</p>
                  <h3 class=\"card-title\">75</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
              <div class=\"card card-stats\">
                <div class=\"card-header card-header-info card-header-icon\">
                  <div class=\"card-icon\">
                       <i class=\"material-icons\">pets</i>
                   </div>
                  <p class=\"card-category\">Animaux</p>
                  <h3 class=\"card-title\">+245</h3>
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    <i class=\"material-icons\">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
         
            
{% endblock %}
", "Ek_DashboardFamille.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\Ek_DashboardFamille.html.twig");
    }
}
