<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Technology;

class LoadTechnologydata implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $setColor = new Technology();
        $setColor->setName('ultradżwiękowy');
        $manager->persist($setColor);

        $setColor1 = new Technology();
        $setColor1->setName('ewaporacyjny');
        $manager->persist($setColor1);

        $setColor2 = new Technology();
        $setColor2->setName('parowy');
        $manager->persist($setColor2);






        $manager->flush();

    }
}