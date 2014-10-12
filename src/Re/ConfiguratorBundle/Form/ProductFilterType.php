<?php

namespace Re\ConfiguratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class ProductFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array(
            'choices' => array(
                1 => 'filter.yes',
                0 => 'filter.no',
            ),
            'required'=>false,
            'translation_domain'=>'ReConfiguratorBundle',
        );

        $builder
            ->add('technology')
            ->add('ionization', 'choice', $choices)
            ->add('aromatherapy', 'choice', $choices)
            ->add('warmMist', 'choice', $choices)
            ->add('hydrostat', 'choice', $choices);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Re\ConfiguratorBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 're_configuratorbundle_productfiltertype';
    }
}
