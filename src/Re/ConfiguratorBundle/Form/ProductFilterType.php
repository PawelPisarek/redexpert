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
        $builder
            ->add('id', 'filter_number_range')
            ->add('name', 'filter_text')
            ->add('description', 'filter_text')
            ->add('inStock', 'filter_choice')
            ->add('hydrostat', 'filter_choice')
            ->add('ionization', 'filter_choice')
            ->add('warmMist', 'filter_choice')
            ->add('aromatherapy', 'filter_choice')
            ->add('autoStop', 'filter_choice')
            ->add('light', 'filter_choice')
            ->add('filter', 'filter_choice')
            ->add('filterType', 'filter_text')
            ->add('area', 'filter_number_range')
            ->add('width', 'filter_number_range')
            ->add('height', 'filter_number_range')
            ->add('depth', 'filter_number_range')
            ->add('minPower', 'filter_number_range')
            ->add('maxPower', 'filter_number_range')
            ->add('maxWorkTime', 'filter_number_range')
            ->add('capacity', 'filter_number_range')
            ->add('humidityLevel', 'filter_text')
            ->add('performance', 'filter_number_range')
            ->add('volume', 'filter_text')
            ->add('utilizationTime', 'filter_text')
            ->add('warranty', 'filter_number_range')
            ->add('imagesURL', 'filter_text')
            ->add('videoURL', 'filter_text')
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if(is_array($data)) {
                    foreach ($data as $subData) {
                        if(!empty($subData)) return;
                    }
                }
                else {
                    if(!empty($data)) return;
                }
            }

            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_BIND, $listener);
    }

    public function getName()
    {
        return 're_configuratorbundle_productfiltertype';
    }
}
