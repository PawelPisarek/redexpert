<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Accessory;

class LoadAccessoryData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $accessories = array(
            'Pilot', 'Timer', 'Częściowe oczyszczanie powietrza',
            'Elimincacja bakterii i innych patogenów', 'Można dodać Ionic Silver Cube',
        );

        foreach($accessories as $accessory) {
            $entity = new Accessory;
            $entity->setName($accessory);

            $manager->persist($entity);
        }

        $manager->flush();
    }
}