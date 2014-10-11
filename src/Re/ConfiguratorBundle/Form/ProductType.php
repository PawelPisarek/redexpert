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
            ->add('inStock')
            ->add('hydrostat')
            ->add('ionization')
            ->add('warmMist')
            ->add('aromatherapy')
            ->add('autoStop')
            ->add('light')
            ->add('filter')
            ->add('filterType')
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
            ->add('imagesURL')
            ->add('videoURL')
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
