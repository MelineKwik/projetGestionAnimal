<?php

/* Ek_VueIntervenant.html.twig */
class __TwigTemplate_f96d4b4e69c05eda0ec820ad2ef4d1b58c904859e3af38114803bb14e76f4abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ek_VueIntervenant.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_VueIntervenant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_VueIntervenant.html.twig"));

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
        echo "<div class=\"content\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"card-header card-header-primary\">
                  <h4 class=\"card-title \">Table des intervenants</h4>
                  
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead class=\" text-primary\">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Code Postale</th>
                     
                      </thead>
                      <tbody>
                     ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 25
            echo "                     <tr>
                    
                    
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "adresse", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "codePostale", array()), "html", null, true);
            echo "</td>
         
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerUtilisateur", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"material-icons\">delete</i></a> <a><i class=\"material-icons\">edit</i></a></td>
                      
                  
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tr>
                      </tbody>
                    </table>
                  </div>
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
                                        <a class=\"nav-link active\" id=\"admin-tab\" data-toggle=\"tab\" href=\"#admin\" role=\"tab\" aria-controls=\"admin\" aria-selected=\"true\">Ajouter un administrateur</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"famille-tab\" data-toggle=\"tab\" href=\"#famille\" role=\"tab\" aria-controls=\"famille\" aria-selected=\"false\" >Ajouter une famille</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"veto-tab\" data-toggle=\"tab\" href=\"#veto\" role=\"tab\" aria-controls=\"veto\" aria-selected=\"false\" >Ajouter un vétérinaire</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"transport-tab\" data-toggle=\"tab\" href=\"#transport\" role=\"tab\" aria-controls=\"transport\" aria-selected=\"false\" >Ajouter un transporteur</a>
                                    </li>
                                </ul>
                            </div>
                        
                    
            
                            <div class=\"tab-content\" id=\"myTabContent\">
                                <div class=\"tab-pane fade show active\" id=\"admin\" role=\"tabpanel\" aria-labelledby=\"admin-tab\">
                               
                                    <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                        <h2 style=\" margin-bottom: 2%; \">Ajouter un Administrateur</h2>
                                        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Nom :</label>
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Prénom :</label>
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Téléphone :</label>
                                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Email :</label>
                                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Login :</label>
                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Rôle :</label>
                                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">

                                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                           
                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                                        </div>
                                         <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                     ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                    </div>
                                
                               
                                </div>
                                
                                
                                <div class=\"tab-pane fade\" id=\"famille\" role=\"tabpanel\" aria-labelledby=\"famille-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"famille\" role=\"tabpanel\" aria-labelledby=\"famille-tab\">
                                       
                                            <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                <h2 style=\" margin-bottom: 2%; \">Ajouter une Famille d'accueil</h2>
                                           ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
        echo "
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Nom :</label>
                                               ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "nom", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Prénom :</label>
                                               ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "prenom", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Adresse :</label>
                                               ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "adresse", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Code Postale</label>
                                               ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "codePostale", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Téléphone :</label>
                                               ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "telephone", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Email :</label>
                                               ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "email", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Login :</label>
                                               ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "username", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Rôle :</label>
                                               ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "roles", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                              
                                               ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "plainPassword", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                            
                                               ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "plainPassword", array()), 'widget');
        echo "
                                           </div>
                                            <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                            </div>
                                            ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end');
        echo "
                                           </div>

                                    </div>
                             
                                    
                                    
                                <div class=\"tab-pane fade\" id=\"veto\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"veto\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                        ";
        // line 175
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start');
        echo "
                                            <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                <h2 style=\" margin-bottom: 2%; \">Ajouter un Vétérinaire</h2>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Nom :</label>
                                               ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "nom", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Prénom :</label>
                                               ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "prenom", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Adresse :</label>
                                               ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "adresse", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Code Postale</label>
                                               ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "codePostale", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Téléphone :</label>
                                               ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "telephone", array()), 'widget');
        echo "
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Rôle :</label>
                                               ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "roles", array()), 'widget');
        echo "
                                           </div>  
                                            <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                            </div>
                                            ";
        // line 204
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
                                           
                                    </div>
                                </div>    
                                    
                                <div class=\"tab-pane fade\" id=\"transport\" role=\"tabpanel\" aria-labelledby=\"transport-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"transport\" role=\"tabpanel\" aria-labelledby=\"transport-tab\">
                                        ";
        // line 211
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
                                                <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                    <h2 style=\" margin-bottom: 2%; \">Ajouter un Transporteur</h2>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Nom :</label>
                                                   ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "nom", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Prénom :</label>
                                                   ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "prenom", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Adresse :</label>
                                                   ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "adresse", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Code Postale</label>
                                                   ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "codePostale", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Téléphone :</label>
                                                   ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "telephone", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Rôle :</label>
                                                   ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "roles", array()), 'widget');
        echo "
                                               </div> 
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Date de départ :</label>
                                                   ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "dateDepart", array()), 'widget');
        echo "
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Spécification :</label>
                                                   ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "specificiter", array()), 'widget');
        echo "
                                               </div>
                                                <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                                </div>
                                        ";
        // line 248
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "
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
        return "Ek_VueIntervenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 248,  434 => 244,  427 => 240,  420 => 236,  413 => 232,  406 => 228,  399 => 224,  392 => 220,  385 => 216,  377 => 211,  367 => 204,  360 => 200,  353 => 196,  346 => 192,  339 => 188,  332 => 184,  325 => 180,  317 => 175,  305 => 166,  298 => 162,  291 => 158,  284 => 154,  277 => 150,  270 => 146,  263 => 142,  256 => 138,  249 => 134,  242 => 130,  235 => 126,  229 => 123,  214 => 111,  208 => 108,  201 => 104,  194 => 100,  187 => 96,  180 => 92,  173 => 88,  166 => 84,  159 => 80,  153 => 77,  112 => 38,  102 => 34,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  76 => 25,  72 => 24,  49 => 3,  40 => 2,  11 => 1,);
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
                  <h4 class=\"card-title \">Table des intervenants</h4>
                  
                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead class=\" text-primary\">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Code Postale</th>
                     
                      </thead>
                      <tbody>
                     {% for personne in personnes%}
                     <tr>
                    
                    
                        <td>{{personne.nom}}</td>
                        <td>{{personne.prenom}}</td>
                        <td>{{personne.adresse}}</td>
                        <td>{{personne.telephone}}</td>
                        <td>{{personne.codePostale}}</td>
         
                        <td><a href=\"{{ path('supprimerUtilisateur',{ id : personne.id }) }}\" ><i class=\"material-icons\">delete</i></a> <a><i class=\"material-icons\">edit</i></a></td>
                      
                  
                    {% endfor %}
                    </tr>
                      </tbody>
                    </table>
                  </div>
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
                                        <a class=\"nav-link active\" id=\"admin-tab\" data-toggle=\"tab\" href=\"#admin\" role=\"tab\" aria-controls=\"admin\" aria-selected=\"true\">Ajouter un administrateur</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"famille-tab\" data-toggle=\"tab\" href=\"#famille\" role=\"tab\" aria-controls=\"famille\" aria-selected=\"false\" >Ajouter une famille</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"veto-tab\" data-toggle=\"tab\" href=\"#veto\" role=\"tab\" aria-controls=\"veto\" aria-selected=\"false\" >Ajouter un vétérinaire</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" id=\"transport-tab\" data-toggle=\"tab\" href=\"#transport\" role=\"tab\" aria-controls=\"transport\" aria-selected=\"false\" >Ajouter un transporteur</a>
                                    </li>
                                </ul>
                            </div>
                        
                    
            
                            <div class=\"tab-content\" id=\"myTabContent\">
                                <div class=\"tab-pane fade show active\" id=\"admin\" role=\"tabpanel\" aria-labelledby=\"admin-tab\">
                               
                                    <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                        <h2 style=\" margin-bottom: 2%; \">Ajouter un Administrateur</h2>
                                        {{ form_start(form) }}
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Nom :</label>
                                            {{ form_widget(form.nom) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Prénom :</label>
                                            {{ form_widget(form.prenom) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Téléphone :</label>
                                            {{ form_widget(form.telephone) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Email :</label>
                                            {{ form_widget(form.email) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Login :</label>
                                            {{ form_widget(form.username) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputAddress2\">Rôle :</label>
                                            {{ form_widget(form.roles) }}
                                        </div>
                                        <div class=\"form-group\">

                                            {{ form_widget(form.plainPassword) }}
                                        </div>
                                        <div class=\"form-group\">
                                           
                                            {{ form_widget(form.plainPassword) }}
                                        </div>
                                         <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                     {{form_end(form)}}
                                    </div>
                                
                               
                                </div>
                                
                                
                                <div class=\"tab-pane fade\" id=\"famille\" role=\"tabpanel\" aria-labelledby=\"famille-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"famille\" role=\"tabpanel\" aria-labelledby=\"famille-tab\">
                                       
                                            <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                <h2 style=\" margin-bottom: 2%; \">Ajouter une Famille d'accueil</h2>
                                           {{ form_start(form1) }}
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Nom :</label>
                                               {{ form_widget(form1.nom) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Prénom :</label>
                                               {{ form_widget(form1.prenom) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Adresse :</label>
                                               {{ form_widget(form1.adresse) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Code Postale</label>
                                               {{ form_widget(form1.codePostale) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Téléphone :</label>
                                               {{ form_widget(form1.telephone) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Email :</label>
                                               {{ form_widget(form1.email) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Login :</label>
                                               {{ form_widget(form1.username) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Rôle :</label>
                                               {{ form_widget(form1.roles) }}
                                           </div>
                                           <div class=\"form-group\">
                                              
                                               {{ form_widget(form1.plainPassword) }}
                                           </div>
                                           <div class=\"form-group\">
                                            
                                               {{ form_widget(form1.plainPassword) }}
                                           </div>
                                            <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                            </div>
                                            {{form_end(form1)}}
                                           </div>

                                    </div>
                             
                                    
                                    
                                <div class=\"tab-pane fade\" id=\"veto\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"veto\" role=\"tabpanel\" aria-labelledby=\"veto-tab\">
                                        {{ form_start(form2) }}
                                            <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                <h2 style=\" margin-bottom: 2%; \">Ajouter un Vétérinaire</h2>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Nom :</label>
                                               {{ form_widget(form2.nom) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Prénom :</label>
                                               {{ form_widget(form2.prenom) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Adresse :</label>
                                               {{ form_widget(form2.adresse) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Code Postale</label>
                                               {{ form_widget(form2.codePostale) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Téléphone :</label>
                                               {{ form_widget(form2.telephone) }}
                                           </div>
                                           <div class=\"form-group\">
                                               <label for=\"inputAddress2\">Rôle :</label>
                                               {{ form_widget(form2.roles) }}
                                           </div>  
                                            <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                            </div>
                                            {{form_end(form2)}}
                                           
                                    </div>
                                </div>    
                                    
                                <div class=\"tab-pane fade\" id=\"transport\" role=\"tabpanel\" aria-labelledby=\"transport-tab\">
                                    <div class=\"tab-pane fade show active\" id=\"transport\" role=\"tabpanel\" aria-labelledby=\"transport-tab\">
                                        {{ form_start(form3) }}
                                                <div  class=\"container-fluid\" style=\"margin-top: 2%; margin-bottom: 2%; \">
                                                    <h2 style=\" margin-bottom: 2%; \">Ajouter un Transporteur</h2>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Nom :</label>
                                                   {{ form_widget(form3.nom) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Prénom :</label>
                                                   {{ form_widget(form3.prenom) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Adresse :</label>
                                                   {{ form_widget(form3.adresse) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Code Postale</label>
                                                   {{ form_widget(form3.codePostale) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Téléphone :</label>
                                                   {{ form_widget(form3.telephone) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Rôle :</label>
                                                   {{ form_widget(form3.roles) }}
                                               </div> 
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Date de départ :</label>
                                                   {{ form_widget(form3.dateDepart) }}
                                               </div>
                                               <div class=\"form-group\">
                                                   <label for=\"inputAddress2\">Spécification :</label>
                                                   {{ form_widget(form3.specificiter) }}
                                               </div>
                                                <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                                </div>
                                        {{form_end(form3)}}
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
", "Ek_VueIntervenant.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\Ek_VueIntervenant.html.twig");
    }
}
