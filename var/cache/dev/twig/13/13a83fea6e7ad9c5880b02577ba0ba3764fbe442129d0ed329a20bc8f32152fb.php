<?php

/* ek_admin/new.html.twig */
class __TwigTemplate_a0fdd7e9ce910ffb4f6dec80683f21c38c06147794ddc70ff058b43889fab7d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ek_admin/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ek_admin/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ek_admin/new.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"page-wrapper bg-gra-03 p-t-45 p-b-50\">
        <div class=\"wrapper wrapper--w790\">
            <div class=\"card card-5\">
                <div class=\"card-heading\">
                    <h2 class=\"title\">Event Registration Form</h2>
                </div>
                <div class=\"card-body\">
                    <form method=\"POST\">
                        <div class=\"form-row m-b-55\">
                            <div class=\"name\">Name</div>
                            <div class=\"value\">
                                <div class=\"row row-space\">
                                    <div class=\"col-2\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"first_name\">
                                            <label class=\"label--desc\">first name</label>
                                        </div>
                                    </div>
                                    <div class=\"col-2\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"last_name\">
                                            <label class=\"label--desc\">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Company</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <input class=\"input--style-5\" type=\"text\" name=\"company\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Email</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <input class=\"input--style-5\" type=\"email\" name=\"email\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row m-b-55\">
                            <div class=\"name\">Phone</div>
                            <div class=\"value\">
                                <div class=\"row row-refine\">
                                    <div class=\"col-3\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"area_code\">
                                            <label class=\"label--desc\">Area Code</label>
                                        </div>
                                    </div>
                                    <div class=\"col-9\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"phone\">
                                            <label class=\"label--desc\">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Subject</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <div class=\"rs-select2 js-select-simple select--no-search\">
                                        <select name=\"subject\">
                                            <option disabled=\"disabled\" selected=\"selected\">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class=\"select-dropdown\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row p-t-20\">
                            <label class=\"label label--block\">Are you an existing customer?</label>
                            <div class=\"p-t-15\">
                                <label class=\"radio-container m-r-55\">Yes
                                    <input type=\"radio\" checked=\"checked\" name=\"exist\">
                                    <span class=\"checkmark\"></span>
                                </label>
                                <label class=\"radio-container\">No
                                    <input type=\"radio\" name=\"exist\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class=\"btn btn--radius-2 btn--red\" type=\"submit\">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    
   <h1>Ek_admin creation</h1>

    ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-row\">
                                  <div class=\"form-group col-md-6\">
                                    <label for=\"inputEmail4\">Nom</label>
                                     ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  </div>
                                  
                                  
                                </div>
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ek_admin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ek_admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 124,  175 => 120,  166 => 114,  159 => 110,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <div class=\"page-wrapper bg-gra-03 p-t-45 p-b-50\">
        <div class=\"wrapper wrapper--w790\">
            <div class=\"card card-5\">
                <div class=\"card-heading\">
                    <h2 class=\"title\">Event Registration Form</h2>
                </div>
                <div class=\"card-body\">
                    <form method=\"POST\">
                        <div class=\"form-row m-b-55\">
                            <div class=\"name\">Name</div>
                            <div class=\"value\">
                                <div class=\"row row-space\">
                                    <div class=\"col-2\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"first_name\">
                                            <label class=\"label--desc\">first name</label>
                                        </div>
                                    </div>
                                    <div class=\"col-2\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"last_name\">
                                            <label class=\"label--desc\">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Company</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <input class=\"input--style-5\" type=\"text\" name=\"company\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Email</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <input class=\"input--style-5\" type=\"email\" name=\"email\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row m-b-55\">
                            <div class=\"name\">Phone</div>
                            <div class=\"value\">
                                <div class=\"row row-refine\">
                                    <div class=\"col-3\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"area_code\">
                                            <label class=\"label--desc\">Area Code</label>
                                        </div>
                                    </div>
                                    <div class=\"col-9\">
                                        <div class=\"input-group-desc\">
                                            <input class=\"input--style-5\" type=\"text\" name=\"phone\">
                                            <label class=\"label--desc\">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Subject</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    <div class=\"rs-select2 js-select-simple select--no-search\">
                                        <select name=\"subject\">
                                            <option disabled=\"disabled\" selected=\"selected\">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class=\"select-dropdown\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row p-t-20\">
                            <label class=\"label label--block\">Are you an existing customer?</label>
                            <div class=\"p-t-15\">
                                <label class=\"radio-container m-r-55\">Yes
                                    <input type=\"radio\" checked=\"checked\" name=\"exist\">
                                    <span class=\"checkmark\"></span>
                                </label>
                                <label class=\"radio-container\">No
                                    <input type=\"radio\" name=\"exist\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class=\"btn btn--radius-2 btn--red\" type=\"submit\">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    
   <h1>Ek_admin creation</h1>

    {{ form_start(form) }}
          <div class=\"form-row\">
                                  <div class=\"form-group col-md-6\">
                                    <label for=\"inputEmail4\">Nom</label>
                                     {{ form_widget(form, {'attr':{'class':'form-control'}}) }}
                                  </div>
                                  
                                  
                                </div>
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ek_admin_index') }}\">Back to the list</a>
        </li>
    </ul>

{% endblock %}

", "ek_admin/new.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\ek_admin\\new.html.twig");
    }
}
