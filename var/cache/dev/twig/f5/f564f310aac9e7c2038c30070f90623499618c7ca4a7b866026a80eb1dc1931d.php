<?php

/* accueilAdmin.html.twig */
class __TwigTemplate_e5fe3c5904b7a0a1f35883ec31260a126f8fb986c5e1e6c9d3ce2d7a9fb06bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueilAdmin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueilAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueilAdmin.html.twig"));

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
        echo "    
<div class=\"container-fluid\">
<div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
  <ul class=\"carousel-indicators\">
    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
  </ul>
    
  <div class=\"carousel-inner\">
     
    <div class=\"carousel-item active\">
      <img src=\"https://www.veterinairebellefeuille.ca/wp-content/uploads/background-vet-bellfeuille.jpg\" alt=\"Los Angeles\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
           <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
    <div class=\"carousel-item\">
      <img src=\"https://monhopitalveterinaire.com/wp/wp-content/uploads/2017/08/banner1920.jpg\" alt=\"Chicago\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
    <div class=\"carousel-item\">
      <img src=\"http://www.quinteanimalhospital.ca/wp-content/uploads/head-fi-1920-300-orphan-program.jpg\" alt=\"New York\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
       <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a>
</div>
</div>
        

<div class=\"container-fluid\" style=\"margin-top: 1px;\">       
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\">
        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Liste des intervenants</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" >Liste des animaux</a>
      </li>
    </ul>
    <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre"]) ? $context["filtre"] : $this->getContext($context, "filtre")), 'form_start');
        echo "
                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Filtrer par rôle</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["filtre"]) ? $context["filtre"] : $this->getContext($context, "filtre")), "roles", array()), 'widget');
        echo "
                     </div>
                  ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre"]) ? $context["filtre"] : $this->getContext($context, "filtre")), 'form_end');
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Code Postale</th>
                <th scope=\"col\">Role</th>
                
                </tr>
            </thead>
            <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 77
            echo "                <tr>
                    
                    
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "adresse", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "telephone", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "codePostale", array()), "html", null, true);
            echo "</td>
                  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </tr>
                  
               
            </tbody>
        </table>
            <button  class=\"btn btn-success\" ><a href=\"/register\" style='color: white;'>Ajouter un intervenant</a></button>
       
    </div>
    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
      <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
          <table class=\"table\">
            <thead>
              <tr>
              
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Robe</th>
                <th scope=\"col\">Poids</th>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Espèce</th>
                <th scope=\"col\">N°puce</th>
                <th scope=\"col\">Famille</th>
                <th scope=\"col\">Date de Naissance</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animaux"]) ? $context["animaux"] : $this->getContext($context, "animaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 114
            echo "               
                  <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "nom", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "robe", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "poid", array()), "html", null, true);
            echo " kg</td>
                  <td><img class=\"img-responsive img-thumbnail center-block\" src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["animal"], "image", array()))), "html", null, true);
            echo "\"  style='width:100px; height: 100px;'  /></td>
                  <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "libelle", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "numeroPuce", array()), "html", null, true);
            echo "</td>
         
                  <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["animal"], "dateNaissance", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                  <td><button class=\"btn btn-primary \" ><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierAnimaux", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" style='color: white;'>Modifier</a></button></td>
                  <td><button class=\"btn btn-primary \" ><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutEvenement", array("id" => $this->getAttribute($context["animal"], "id", array()))), "html", null, true);
            echo "\" style='color: white;'>Ajouter un évènement</a></button></td>
                  

                  <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "            </tbody>
        </table>
        <button class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#myModal\">
            Ajouter un animal
        </button>
            <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un animal</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                           
                                ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                <div class=\"form-row\">
                                  <div class=\"form-group col-md-6\">
                                    <label for=\"inputEmail4\">Nom</label>
                                     ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  <div class=\"form-group col-md-6\">
                                    <label for=\"inputPassword4\">Robe</label>
                                     ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "robe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  
                                </div>
                                <div class=\"form-group\">
                                  <label for=\"inputAddress\">Poid</label>
                                  ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                  <label for=\"inputAddress2\">Puce</label>
                                 ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPuce", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-row\">
                                  <div class=\"form-group col-md-6\">
                                    <label for=\"inputCity\">Photo</label>
                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  <div class=\"form-group col-md-4\">
                                    <label for=\"inputState\">Espèce</label>
                                   
                                       ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                   
                                  </div>
                                  <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de naissance</label>
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Famille</label>
                                    ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                </div>
                                 <button type=\"submit\" class=\"btn btn-primary \">Enregister</button>
                                ";
        // line 185
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                 
                
                               
                               
                                
                              
                        </div>
                    </div>
            </div>
        </div>
                                
                                
                        
                                
                                
       
    </div>
  </div>
 
</div>
    <button type=\"button\" class=\"btn btn-warning\" style=\"float: right;\"><a class=\"logout\" href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Se déconnecter</a></button>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueilAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 206,  340 => 185,  334 => 182,  327 => 178,  319 => 173,  311 => 168,  303 => 163,  296 => 159,  287 => 153,  280 => 149,  273 => 145,  256 => 130,  244 => 124,  240 => 123,  236 => 122,  231 => 120,  227 => 119,  223 => 118,  219 => 117,  215 => 116,  211 => 115,  208 => 114,  204 => 113,  176 => 87,  167 => 84,  163 => 83,  159 => 82,  155 => 81,  151 => 80,  146 => 77,  142 => 76,  125 => 62,  120 => 60,  114 => 57,  85 => 31,  75 => 24,  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
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
    
<div class=\"container-fluid\">
<div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
  <ul class=\"carousel-indicators\">
    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
  </ul>
    
  <div class=\"carousel-inner\">
     
    <div class=\"carousel-item active\">
      <img src=\"https://www.veterinairebellefeuille.ca/wp-content/uploads/background-vet-bellfeuille.jpg\" alt=\"Los Angeles\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
           <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
    <div class=\"carousel-item\">
      <img src=\"https://monhopitalveterinaire.com/wp/wp-content/uploads/2017/08/banner1920.jpg\" alt=\"Chicago\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
        <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
    <div class=\"carousel-item\">
      <img src=\"http://www.quinteanimalhospital.ca/wp-content/uploads/head-fi-1920-300-orphan-program.jpg\" alt=\"New York\" width=\"1920\" height=\"300\">
      <div class=\"carousel-caption\">
       <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"Italian Trulli\" style=\"border-radius: 20%; width: 150px; height: 150px; box-shadow: 5px 10px 8px rgba(64 , 164 , 151, 0.5);  margin-top: 10%;\">
        <p>Association Envol-toit</p>
      </div>   
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a>
</div>
</div>
        

<div class=\"container-fluid\" style=\"margin-top: 1px;\">       
    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\">
        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Liste des intervenants</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" >Liste des animaux</a>
      </li>
    </ul>
    <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            {{ form_start(filtre) }}
                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Filtrer par rôle</label>
                                    {{ form_widget(filtre.roles) }}
                     </div>
                  {{form_end(filtre)}}
        <table class=\"table\">
            <thead>
                <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Telephone</th>
                <th scope=\"col\">Code Postale</th>
                <th scope=\"col\">Role</th>
                
                </tr>
            </thead>
            <tbody>
                {% for personne in personnes%}
                <tr>
                    
                    
                    <td>{{personne.nom}}</td>
                    <td>{{personne.prenom}}</td>
                    <td>{{personne.adresse}}</td>
                    <td>{{personne.telephone}}</td>
                    <td>{{personne.codePostale}}</td>
                  
                  {% endfor %}
                </tr>
                  
               
            </tbody>
        </table>
            <button  class=\"btn btn-success\" ><a href=\"/register\" style='color: white;'>Ajouter un intervenant</a></button>
       
    </div>
    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
      <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
          <table class=\"table\">
            <thead>
              <tr>
              
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Robe</th>
                <th scope=\"col\">Poids</th>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Espèce</th>
                <th scope=\"col\">N°puce</th>
                <th scope=\"col\">Famille</th>
                <th scope=\"col\">Date de Naissance</th>
              </tr>
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
         
                  <td>{{animal.dateNaissance|date('d-m-Y H:i:s')}}</td>
                  <td><button class=\"btn btn-primary \" ><a href=\"{{ path('modifierAnimaux',{ id : animal.id }) }}\" style='color: white;'>Modifier</a></button></td>
                  <td><button class=\"btn btn-primary \" ><a href=\"{{ path('ajoutEvenement',{ id : animal.id }) }}\" style='color: white;'>Ajouter un évènement</a></button></td>
                  

                  <td><button type=\"submit\" class=\"btn btn-primary\">Fiche suivi</button></td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        <button class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#myModal\">
            Ajouter un animal
        </button>
            <!-- Modal -->
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
  </div>
 
</div>
    <button type=\"button\" class=\"btn btn-warning\" style=\"float: right;\"><a class=\"logout\" href=\"{{ path('logout') }}\">Se déconnecter</a></button>
</div>
{% endblock %}", "accueilAdmin.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\accueilAdmin.html.twig");
    }
}
