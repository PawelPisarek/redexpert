<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Technology;

class LoadTechnologyData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $technologies = array('Ultradżwiękowy', 'Ewaporacyjny', 'Parowy');

        foreach($technologies as $technology) {
            $entity = new Technology;
            $entity->setName($technology);

            $manager->persist($entity);
        }

        $manager->flush();
    }
}