<?php

/* Ek_Dashboard.html.twig */
class __TwigTemplate_2cfbe38ea5608bc12b72b483729b7cad0b10ec7d38576c28626a7ac2319e89b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ek_Dashboard.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_Dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_Dashboard.html.twig"));

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
                     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombreVeterinaire"]) ? $context["nombreVeterinaire"] : $this->getContext($context, "nombreVeterinaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbVeterinaire"]) {
            // line 10
            echo "                  <div class=\"card-icon\">
                    <i class=\"material-icons\">group</i>
                  </div>
                  <p class=\"card-category\">Vétérinaire</p>
                  <h3 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVeterinaire"], "nbV", array()), "html", null, true);
            echo "
                 
                  </h3>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbVeterinaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                
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
                   ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombreFamille"]) ? $context["nombreFamille"] : $this->getContext($context, "nombreFamille")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbFamille"]) {
            // line 33
            echo "                  <p class=\"card-category\">Famille d'accueil</p>
                  <h3 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbFamille"], "nbF", array()), "html", null, true);
            echo "</h3>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbFamille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                   
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
                     ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombreTransporteur"]) ? $context["nombreTransporteur"] : $this->getContext($context, "nombreTransporteur")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbTransporteur"]) {
            // line 51
            echo "                  <p class=\"card-category\">Transporteur</p>
                  <h3 class=\"card-title\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbTransporteur"], "nbT", array()), "html", null, true);
            echo "</h3>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbTransporteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                   
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
                  ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombreAnimaux"]) ? $context["nombreAnimaux"] : $this->getContext($context, "nombreAnimaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbAnimaux"]) {
            // line 70
            echo "                  <h3 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbAnimaux"], "nbA", array()), "html", null, true);
            echo "</h3>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbAnimaux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    
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
        return "Ek_Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  160 => 70,  156 => 69,  139 => 54,  131 => 52,  128 => 51,  124 => 50,  108 => 36,  100 => 34,  97 => 33,  93 => 32,  77 => 18,  67 => 14,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                     {% for nbVeterinaire in nombreVeterinaire%}
                  <div class=\"card-icon\">
                    <i class=\"material-icons\">group</i>
                  </div>
                  <p class=\"card-category\">Vétérinaire</p>
                  <h3 class=\"card-title\">{{nbVeterinaire.nbV}}
                 
                  </h3>
                  {% endfor %}
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                
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
                   {% for nbFamille in nombreFamille%}
                  <p class=\"card-category\">Famille d'accueil</p>
                  <h3 class=\"card-title\">{{nbFamille.nbF}}</h3>
                  {% endfor %}
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                   
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
                     {% for nbTransporteur in nombreTransporteur%}
                  <p class=\"card-category\">Transporteur</p>
                  <h3 class=\"card-title\">{{nbTransporteur.nbT}}</h3>
                     {% endfor %}
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                   
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
                  {% for nbAnimaux in nombreAnimaux%}
                  <h3 class=\"card-title\">{{nbAnimaux.nbA}}</h3>
                  {% endfor %}
                </div>
                <div class=\"card-footer\">
                  <div class=\"stats\">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
         
            
{% endblock %}
", "Ek_Dashboard.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\Ek_Dashboard.html.twig");
    }
}
