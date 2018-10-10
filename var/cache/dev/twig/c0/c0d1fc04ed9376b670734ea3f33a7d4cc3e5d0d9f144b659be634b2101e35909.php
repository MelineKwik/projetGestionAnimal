<?php

/* Ek_VueAnimaux.html.twig */
class __TwigTemplate_6e6be28e72d1c70f2c4bbb7219ff2a354bec3d5e78339d762a31caf54145e406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ek_VueAnimaux.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_VueAnimaux.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_VueAnimaux.html.twig"));

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
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"card-header card-header-primary\">
                  <h4 class=\"card-title \">Table des animaux</h4>
                  
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead class=\" text-primary\">
                        <th>Nom</th>
                        <th>Robe</th>
                        <th>Poids</th>
                        <th>Photo</th>
                        <th>Espèce</th>
                        <th>N°puce</th>
                        <th>Famille</th>
                        <th>Date de Naissance</th>
                     
                      </thead>
                      <tbody>
                            <tr>
                               ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animaux"]) ? $context["animaux"] : $this->getContext($context, "animaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 29
            echo "
                               <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "nom", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "robe", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "poid", array()), "html", null, true);
            echo " kg</td>
                               <td><img class=\"img-responsive img-thumbnail center-block\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["animal"], "image", array()))), "html", null, true);
            echo "\"  style='width:100px; height: 100px;'  /></td>
                               <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "libelle", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "numeroPuce", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "nom", array()), "html", null, true);
            echo "</td>

                               <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["animal"], "dateNaissance", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                               <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierAnimaux", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/edit.png"), "html", null, true);
            echo "\" ></a></td>
                               <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutVisite", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/building.png"), "html", null, true);
            echo "\" ></a></td>
                               <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutTraitement", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/spray.png"), "html", null, true);
            echo "\" ></a></button></td>
                               <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutVaccination", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/syringe.png"), "html", null, true);
            echo "\" ></a></td>


                               <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                           </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"content\" >
             <div class=\"container-fluid\">
                 <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                               <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" id=\"visite-tab\" data-toggle=\"tab\" href=\"#visite\" role=\"tab\" aria-controls=\"visite\" aria-selected=\"true\">Visite</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"traitement-tab\" data-toggle=\"tab\" href=\"#traitement\" role=\"tab\" aria-controls=\"traitement\" aria-selected=\"false\" >Traitement</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"vaccin-tab\" data-toggle=\"tab\" href=\"#vaccin\" role=\"tab\" aria-controls=\"vaccin\" aria-selected=\"false\" >Vaccination</a>
                                    </li>
                                </ul>
                            </div>
                        
                    
            
                            <div class=\"tab-content\" id=\"myTabContent\">
                                <div class=\"tab-pane fade show active\" id=\"visite\" role=\"tabpanel\" aria-labelledby=\"visite-tab\">
                                    <h2>test1</h2>
                                </div>   
                            
                                
                                
                                <div class=\"tab-pane fade\" id=\"traitement\" role=\"tabpanel\" aria-labelledby=\"traitement-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"traitement\" role=\"tabpanel\" aria-labelledby=\"traitement-tab\">
                                       <h2>test2</h2>
                                    </div>
                                </div>
                             
                                    
                                    
                                <div class=\"tab-pane fade\" id=\"vaccin\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"vaccin\" role=\"tabpanel\" aria-labelledby=\"vaccin-tab\">
                                        <h2>test3</h2>
                                    </div>    
                                </div>
                                
                                
                                
                            </div>    
                                    
                                    
                             </div>
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
        return "Ek_VueAnimaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  134 => 42,  128 => 41,  122 => 40,  116 => 39,  112 => 38,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  80 => 29,  76 => 28,  49 => 3,  40 => 2,  11 => 1,);
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
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"card-header card-header-primary\">
                  <h4 class=\"card-title \">Table des animaux</h4>
                  
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead class=\" text-primary\">
                        <th>Nom</th>
                        <th>Robe</th>
                        <th>Poids</th>
                        <th>Photo</th>
                        <th>Espèce</th>
                        <th>N°puce</th>
                        <th>Famille</th>
                        <th>Date de Naissance</th>
                     
                      </thead>
                      <tbody>
                            <tr>
                               {% for animal in animaux%}

                               <td>{{animal.nom}}</td>
                               <td>{{animal.robe}}</td>
                               <td>{{animal.poid}} kg</td>
                               <td><img class=\"img-responsive img-thumbnail center-block\" src=\"{{ asset('uploads/images/' ~ animal.image) }}\"  style='width:100px; height: 100px;'  /></td>
                               <td>{{animal.libelle}}</td>
                               <td>{{animal.numeroPuce}}</td>
                               <td>{{animal.nom}}</td>

                               <td>{{animal.dateNaissance|date('d-m-Y H:i:s')}}</td>
                               <td><a href=\"{{ path('modifierAnimaux',{ id : animal.id }) }}\" ><img src=\"{{ asset('/images/edit.png') }}\" ></a></td>
                               <td><a href=\"{{ path('ajoutVisite',{ id : animal.id }) }}\" ><img src=\"{{ asset('/images/building.png') }}\" ></a></td>
                               <td><a href=\"{{ path('ajoutTraitement',{ id : animal.id }) }}\" ><img src=\"{{ asset('/images/spray.png') }}\" ></a></button></td>
                               <td><a href=\"{{ path('ajoutVaccination',{ id : animal.id }) }}\" ><img src=\"{{ asset('/images/syringe.png') }}\" ></a></td>


                               <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                           </tr>
                            {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"content\" >
             <div class=\"container-fluid\">
                 <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                               <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" id=\"visite-tab\" data-toggle=\"tab\" href=\"#visite\" role=\"tab\" aria-controls=\"visite\" aria-selected=\"true\">Visite</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"traitement-tab\" data-toggle=\"tab\" href=\"#traitement\" role=\"tab\" aria-controls=\"traitement\" aria-selected=\"false\" >Traitement</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"vaccin-tab\" data-toggle=\"tab\" href=\"#vaccin\" role=\"tab\" aria-controls=\"vaccin\" aria-selected=\"false\" >Vaccination</a>
                                    </li>
                                </ul>
                            </div>
                        
                    
            
                            <div class=\"tab-content\" id=\"myTabContent\">
                                <div class=\"tab-pane fade show active\" id=\"visite\" role=\"tabpanel\" aria-labelledby=\"visite-tab\">
                                    <h2>test1</h2>
                                </div>   
                            
                                
                                
                                <div class=\"tab-pane fade\" id=\"traitement\" role=\"tabpanel\" aria-labelledby=\"traitement-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"traitement\" role=\"tabpanel\" aria-labelledby=\"traitement-tab\">
                                       <h2>test2</h2>
                                    </div>
                                </div>
                             
                                    
                                    
                                <div class=\"tab-pane fade\" id=\"vaccin\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"vaccin\" role=\"tabpanel\" aria-labelledby=\"vaccin-tab\">
                                        <h2>test3</h2>
                                    </div>    
                                </div>
                                
                                
                                
                            </div>    
                                    
                                    
                             </div>
                            </div>
                            
                             
                    </div>
                        
                 </div>
                     
             </div>
        </div>
    </div>
{% endblock %}
", "Ek_VueAnimaux.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\Ek_VueAnimaux.html.twig");
    }
}
