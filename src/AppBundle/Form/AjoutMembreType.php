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
 * Description of AjoutMembreType
 *
 * @author ekichenin.cdi
 */
class AjoutMembreType  extends AbstractType {
    //put your code here
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('roles', ChoiceType::class, array(
          
            'multiple' => true,
            'expanded' => true, // render check-boxes
            'choices' => [
                'admin' => 'ROLE_ADMIN',
                'famille' => 'ROLE_FAMILLE',
                'veterinaire' => 'ROLE_VETERINAIRE',
                'transporteur' => 'ROLE_TRANSPORTEUR',
            ]
        )) ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ek_Personne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_membre';
    }
}
