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
                               ";
            // line 39
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                               <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierAnimaux", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/edit.png"), "html", null, true);
                echo "\" ></a></td>
                               ";
            }
            // line 42
            echo "
                               <td><button type=\"submit\" class=\"btn btn-primary\"><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formulaire", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" style=\"color: white; text-decoration: none;\" >Evènement</a></button></td>
                               <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                           </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                      </tbody>
                    </table>
                      ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "                       <a class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#myModal\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/animal-prints.png"), "html", null, true);
            echo "\"  > Ajouter un animal</a>
                       <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un animal</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    </div>
                                    <div class=\"modal-body\">

                                            ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                                            <div class=\"form-row\">
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputEmail4\">Nom</label>
                                                 ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                              </div>
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputPassword4\">Robe</label>
                                                 ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "robe", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                              </div>

                                            </div>
                                            <div class=\"form-group\">
                                              <label for=\"inputAddress\">Poid</label>
                                              ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                            </div>
                                            <div class=\"form-group\">
                                              <label for=\"inputAddress2\">Puce</label>
                                             ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPuce", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                            </div>
                                            <div class=\"form-row\">
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputCity\">Photo</label>
                                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                              </div>
                                              <div class=\"form-group col-md-4\">
                                                <label for=\"inputState\">Espèce</label>

                                                   ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "

                                              </div>
                                              <div class=\"form-group\">
                                                <label for=\"inputAddress2\">Date de naissance</label>
                                                ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget');
            echo "
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputAddress2\">Famille</label>
                                                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
            echo "
                                            </div>
                                             <button type=\"submit\" class=\"btn btn-primary \">Enregister</button>
                                            ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                                        </div>
                                    </div>
                             </div>
                        </div>
                     </div>
                    ";
        }
        // line 107
        echo "                  </div>
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
        return array (  236 => 107,  226 => 100,  220 => 97,  213 => 93,  205 => 88,  197 => 83,  189 => 78,  182 => 74,  173 => 68,  166 => 64,  159 => 60,  145 => 50,  143 => 49,  139 => 47,  129 => 43,  126 => 42,  118 => 40,  116 => 39,  112 => 38,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  80 => 29,  76 => 28,  49 => 3,  40 => 2,  11 => 1,);
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
                               {% if is_granted('ROLE_ADMIN') %}
                               <td><a href=\"{{ path('modifierAnimaux',{ id : animal.id }) }}\" ><img src=\"{{ asset('/images/edit.png') }}\" ></a></td>
                               {% endif %}

                               <td><button type=\"submit\" class=\"btn btn-primary\"><a href=\"{{ path('formulaire',{ id : animal.id })}}\" style=\"color: white; text-decoration: none;\" >Evènement</a></button></td>
                               <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                           </tr>
                            {% endfor %}
                      </tbody>
                    </table>
                      {% if is_granted('ROLE_ADMIN') %}
                       <a class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#myModal\"><img src=\"{{ asset('/images/animal-prints.png') }}\"  > Ajouter un animal</a>
                       <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un animal</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    </div>
                                    <div class=\"modal-body\">

                                            {{ form_start(form) }}
                                            <div class=\"form-row\">
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputEmail4\">Nom</label>
                                                 {{ form_widget(form.nom, {'attr':{'class':'form-control'}}) }}
                                              </div>
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputPassword4\">Robe</label>
                                                 {{ form_widget(form.robe, {'attr':{'class':'form-control'}}) }}
                                              </div>

                                            </div>
                                            <div class=\"form-group\">
                                              <label for=\"inputAddress\">Poid</label>
                                              {{ form_widget(form.poid, {'attr':{'class':'form-control'}}) }}
                                            </div>
                                            <div class=\"form-group\">
                                              <label for=\"inputAddress2\">Puce</label>
                                             {{ form_widget(form.numeroPuce, {'attr':{'class':'form-control'}}) }}
                                            </div>
                                            <div class=\"form-row\">
                                              <div class=\"form-group col-md-6\">
                                                <label for=\"inputCity\">Photo</label>
                                                {{ form_widget(form.image, {'attr':{'class':'form-control'}}) }}
                                              </div>
                                              <div class=\"form-group col-md-4\">
                                                <label for=\"inputState\">Espèce</label>

                                                   {{ form_widget(form.espece, {'attr':{'class':'form-control'}}) }}

                                              </div>
                                              <div class=\"form-group\">
                                                <label for=\"inputAddress2\">Date de naissance</label>
                                                {{ form_widget(form.dateNaissance) }}
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"inputAddress2\">Famille</label>
                                                {{ form_widget(form.nom) }}
                                            </div>
                                             <button type=\"submit\" class=\"btn btn-primary \">Enregister</button>
                                            {{form_end(form)}}
                                        </div>
                                    </div>
                             </div>
                        </div>
                     </div>
                    {% endif %}
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
