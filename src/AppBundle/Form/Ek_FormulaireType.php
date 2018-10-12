<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of Ek_FormulaireType
 *
 * @author ekichenin.cdi
 */
class Ek_FormulaireType extends AbstractType{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('my_checkbox', ChoiceType::class, array(
          
            'multiple' => true,
            'expanded' => true, // render check-boxes
            'choices' => [
                'Vaccination' => 'Vaccination',
                'Traitement' => 'Traitement',
                'Visite' => 'Visite',
                
            ]
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
      
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ek_formulaire';
    }
}
