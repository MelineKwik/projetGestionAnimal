<?php

/* formulaireEvenement.html.twig */
class __TwigTemplate_029b18878eb23b4c5705f2c0628d5096ae0ca78f48904c17ff67037a46398c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulaireEvenement.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaireEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formulaireEvenement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "     <script>
           \$(document).on('click', 'input[name=\"visite\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#visiteValue').toggle('slow');
           });
            \$(document).on('click', 'input[name=\"vaccination\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#vaccinationValue').toggle();
           });
            \$(document).on('click', 'input[name=\"traitement\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#traitementValue').toggle();
           });
       
      </script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "     <div class=\"content\">
        <div class=\"container-fluid\">
          <div>
              <form>
              <table  class=\"table table-dark\">
                <thead>
                  <tr>
                    <th scope=\"col\"><label for=\"visite\" class=\"form-check-label\">Visite</label></th>
                    <th scope=\"col\"> <label for=\"vaccination\" class=\"form-check-label\">Vaccination</label></th>
                    <th scope=\"col\"><label for=\"traitement\" class=\"form-check-label\">Traitement</label></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type=\"checkbox\" id=\"visite\" name=\"visite\" value=\"visite\"  ></td>
                    <td><input type=\"checkbox\" id=\"vaccination\" name=\"vaccination\" value=\"vaccination\"></td>
                    <td><input type=\"checkbox\" id=\"traitement\" name=\"traitement\" value=\"traitement\"></td>
                  </tr>
                </tbody>
              </table>
              </form>
          </div>
              <div id=\"visiteValue\" style=\"display:none\">
                  ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
        echo "
                                 <div>
                                     <h2>Visite</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de la visite</label>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "date", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Prochaine date de visite</label>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "dateSuivante", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant de la visite</label>
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "montant", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Bilan de la visite</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "bilan", array()), 'widget');
        echo "
                                </div>
                              
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end');
        echo "
              </div>
              <div id=\"vaccinationValue\" style=\"display:none\">
                  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
                                 <div>
                                     <h2>Vaccination</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Produit utilisé</label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "produit", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de début de traitement</label>
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "date", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de Fin de traitement</label>
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "dateSuivante", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant du traitement</label>
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "montant", array()), 'widget');
        echo "
                                </div>
                                
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "
              </div>
              <div id=\"traitementValue\" style=\"display:none\">  
              ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start');
        echo "
                                 <div>
                                     <h2>Traitement</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Symptôme détecté</label>
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "symptome", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Maladie</label>
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "maladie", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Type de traitement</label>
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "traitement", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de début de traitement</label>
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "date", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de Fin de traitement</label>
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "dateSuivante", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant du traitement</label>
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "montant", array()), 'widget');
        echo "
                                </div>
                                
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
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
        return "formulaireEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 123,  238 => 118,  231 => 114,  224 => 110,  217 => 106,  210 => 102,  203 => 98,  195 => 93,  189 => 90,  181 => 85,  174 => 81,  167 => 77,  160 => 73,  152 => 68,  146 => 65,  138 => 60,  131 => 56,  124 => 52,  117 => 48,  109 => 43,  84 => 20,  75 => 19,  50 => 3,  41 => 2,  11 => 1,);
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
 {% block javascripts %}
     <script>
           \$(document).on('click', 'input[name=\"visite\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#visiteValue').toggle('slow');
           });
            \$(document).on('click', 'input[name=\"vaccination\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#vaccinationValue').toggle();
           });
            \$(document).on('click', 'input[name=\"traitement\"]:checkbox', function(){
               /*alert('clicked');*/
               \$('#traitementValue').toggle();
           });
       
      </script>
 {% endblock %}
{% block body %}
     <div class=\"content\">
        <div class=\"container-fluid\">
          <div>
              <form>
              <table  class=\"table table-dark\">
                <thead>
                  <tr>
                    <th scope=\"col\"><label for=\"visite\" class=\"form-check-label\">Visite</label></th>
                    <th scope=\"col\"> <label for=\"vaccination\" class=\"form-check-label\">Vaccination</label></th>
                    <th scope=\"col\"><label for=\"traitement\" class=\"form-check-label\">Traitement</label></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type=\"checkbox\" id=\"visite\" name=\"visite\" value=\"visite\"  ></td>
                    <td><input type=\"checkbox\" id=\"vaccination\" name=\"vaccination\" value=\"vaccination\"></td>
                    <td><input type=\"checkbox\" id=\"traitement\" name=\"traitement\" value=\"traitement\"></td>
                  </tr>
                </tbody>
              </table>
              </form>
          </div>
              <div id=\"visiteValue\" style=\"display:none\">
                  {{ form_start(form1) }}
                                 <div>
                                     <h2>Visite</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de la visite</label>
                                    {{ form_widget(form1.date) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Prochaine date de visite</label>
                                    {{ form_widget(form1.dateSuivante) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant de la visite</label>
                                    {{ form_widget(form1.montant) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Bilan de la visite</label>
                                    {{ form_widget(form1.bilan) }}
                                </div>
                              
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 {{form_end(form1)}}
              </div>
              <div id=\"vaccinationValue\" style=\"display:none\">
                  {{ form_start(form3) }}
                                 <div>
                                     <h2>Vaccination</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Produit utilisé</label>
                                    {{ form_widget(form3.produit) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de début de traitement</label>
                                    {{ form_widget(form3.date) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de Fin de traitement</label>
                                    {{ form_widget(form3.dateSuivante) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant du traitement</label>
                                    {{ form_widget(form3.montant) }}
                                </div>
                                
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 {{form_end(form3)}}
              </div>
              <div id=\"traitementValue\" style=\"display:none\">  
              {{ form_start(form2) }}
                                 <div>
                                     <h2>Traitement</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Symptôme détecté</label>
                                    {{ form_widget(form2.symptome) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Maladie</label>
                                    {{ form_widget(form2.maladie) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Type de traitement</label>
                                    {{ form_widget(form2.traitement) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de début de traitement</label>
                                    {{ form_widget(form2.date) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de Fin de traitement</label>
                                    {{ form_widget(form2.dateSuivante) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Montant du traitement</label>
                                    {{ form_widget(form2.montant) }}
                                </div>
                                
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 {{form_end(form2)}}
            </div>
          </div>
        </div>
     </div>
        
    
              
              
            
              
              

         
{% endblock %}
", "formulaireEvenement.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\formulaireEvenement.html.twig");
    }
}
