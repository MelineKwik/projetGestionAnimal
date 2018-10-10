<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Ek_VeterinaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('adresse')->add('telephone')->add('codePostale')->add('roles', ChoiceType::class, array(
          
            'multiple' => true,
            'expanded' => true, // render check-boxes
            'choices' => [
                'admin' => 'ROLE_ADMIN',
                'famille' => 'ROLE_FAMILLE',
                'veterinaire' => 'ROLE_VETERINAIRE',
                'transporteur' => 'ROLE_TRANSPORTEUR',
            ]
        ));
    }
/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ek_Veterinaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ek_veterinaire';
    }


}
