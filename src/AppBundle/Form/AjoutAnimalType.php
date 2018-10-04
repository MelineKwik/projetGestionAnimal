<?php
namespace AppBundle\Form;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Description of AjoutAnimalType
 *
 * @author ekichenin.cdi
 */
class AjoutAnimalType extends AbstractType {
    //put your code here
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('robe', TextareaType::class)->add('image', FileType::class, array('label' => 'image (JPEG file)', 'data_class' => null))
                ->add('poid',NumberType::class)->add('numeroPuce')
                ->add('espece', EntityType::class, array(
                    'class' => 'AppBundle\Entity\Espece',
                    'choice_label' => 'libelle', 
                    'expanded' =>false, 
                    'multiple'=>false
                    
                ))->add('dateNaissance', DateType::class);
         
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Animal'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_animal';
    }
}
