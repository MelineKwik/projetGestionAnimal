<?php

/* Ek_addTransporteur.html.twig */
class __TwigTemplate_6d54ed4206aaffb5b1ca3ef94a54269a3cdd56bc9f90d134cbfd8dc853dd551e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Ek_addTransporteur.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_addTransporteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ek_addTransporteur.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                 <div>
                                     <h2>Ajouter une Famille d'accueil</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Nom :</label>
                                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Prénom :</label>
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Adresse :</label>
                                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Code Postale</label>
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostale", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Téléphone :</label>
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Rôle :</label>
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "
                                </div> 
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de départ :</label>
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'widget');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Spécification :</label>
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specificiter", array()), 'widget');
        echo "
                                </div>
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Ek_addTransporteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  106 => 36,  99 => 32,  92 => 28,  85 => 24,  78 => 20,  71 => 16,  64 => 12,  57 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
{{ form_start(form) }}
                                 <div>
                                     <h2>Ajouter une Famille d'accueil</h2>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Nom :</label>
                                    {{ form_widget(form.nom) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Prénom :</label>
                                    {{ form_widget(form.prenom) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Adresse :</label>
                                    {{ form_widget(form.adresse) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Code Postale</label>
                                    {{ form_widget(form.codePostale) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Téléphone :</label>
                                    {{ form_widget(form.telephone) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Rôle :</label>
                                    {{ form_widget(form.roles) }}
                                </div> 
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Date de départ :</label>
                                    {{ form_widget(form.dateDepart) }}
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputAddress2\">Spécification :</label>
                                    {{ form_widget(form.specificiter) }}
                                </div>
                                 <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
                                 </div>
                                 {{form_end(form)}}
                                </div>{# empty Twig template #}
{% endblock %}", "Ek_addTransporteur.html.twig", "C:\\Users\\ekichenin.cdi\\Documents\\NetBeansProjects\\GestionAnimal\\app\\Resources\\views\\Ek_addTransporteur.html.twig");
    }
}
