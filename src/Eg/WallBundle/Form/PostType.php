<?php

namespace Eg\WallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', null, array('label' => false, 'attr' => array('placeholder' => 'Votre Pseudo...')))
            ->add('content', null, array('label' => false, 'attr' => array('placeholder' => 'Entrer votre message ici, sans oublier de choisir les catégories !')))
            //->add('categories')
            ->add('categories', 'entity', array(
                'label'         => false,
                'class'         => 'Eg\WallBundle\Entity\Category',
                'expanded'      => true,
                'multiple'      => true,
                'required'      => true,
                'query_builder' => null,
                'by_reference'  => false,
                'constraints'   => array(
                    new Count(array(
                                  'min'        => 1,
                                  'minMessage' => 'Tu dois choisir au moins une catégorie.',
                              )),
                ),
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                   'data_class' => 'Eg\WallBundle\Entity\Post'
                               ));
    }
}
