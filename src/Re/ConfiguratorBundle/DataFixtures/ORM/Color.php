<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Color;

class LoadColorData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $colors = array('Biały', 'Czarny', 'Malinowy', 'Biało-czarny');

        foreach($colors as $color) {
            $entity = new Color;
            $entity->setName($color);

            $manager->persist($entity);
        }

        $manager->flush();
    }
}