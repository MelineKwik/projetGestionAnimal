<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Ek_AnimalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('robe', TextareaType::class)->add('image', FileType::class, array('label' => 'image (JPEG file)', 'data_class' => null))
                ->add('poid',NumberType::class)->add('numeroPuce')->add('espece', EntityType::class, array(
                    'class' => 'AppBundle\Entity\Ek_Espece',
                    'choice_label' => 'libelle', 
                    'expanded' =>false, 
                    'multiple'=>false
                    
                    
                )) ->add('dateNaissance', DateType::class)->add('idUtilisateurPro', EntityType::class, array(
                    'class' => 'AppBundle\Entity\Ek_Personne',
                    'choice_label' => 'nom', 
                    'expanded' =>false, 
                    'multiple'=>false
                    
                    
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ek_Animal'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ek_animal';
    }


}
