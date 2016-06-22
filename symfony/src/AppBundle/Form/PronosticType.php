<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PronosticType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
//            ->add('utilisateur')
            ->add('date', 'date')
            ->add('scoreA')
            ->add('scoreB')
            ->add('nbCafe')
            ->add('rencontre')
        ;
        if ($options['utilisateur_editable']) {
          $builder->add('utilisateur');
        }

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pronostic',
            'utilisateur_editable' => false,
        ));
    }
}
