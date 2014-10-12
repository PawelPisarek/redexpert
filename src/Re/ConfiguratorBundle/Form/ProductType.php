<?php

namespace Re\ConfiguratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('inStock', 'checkbox', array('required'=>false))
            ->add('hydrostat', 'checkbox', array('required'=>false))
            ->add('ionization', 'checkbox', array('required'=>false))
            ->add('warmMist', 'checkbox', array('required'=>false))
            ->add('aromatherapy', 'checkbox', array('required'=>false))
            ->add('autoStop', 'checkbox', array('required'=>false))
            ->add('light', 'checkbox', array('required'=>false))
            ->add('filter', 'checkbox', array('required'=>false))
            ->add('filterType', 'text', array('required'=>false))
            ->add('area')
            ->add('width')
            ->add('height')
            ->add('depth')
            ->add('minPower')
            ->add('maxPower')
            ->add('maxWorkTime')
            ->add('capacity')
            ->add('humidityLevel')
            ->add('performance')
            ->add('volume')
            ->add('utilizationTime')
            ->add('warranty')
            ->add('imagesURL', 'text', array('required'=>false))
            ->add('videoURL', 'text', array('required'=>false))
            ->add('technology')
            ->add('colors')
            ->add('includedAccessories')
            ->add('additionalAccessories')
        ;
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

    /**
     * @return string
     */
    public function getName()
    {
        return 're_configuratorbundle_product';
    }
}
