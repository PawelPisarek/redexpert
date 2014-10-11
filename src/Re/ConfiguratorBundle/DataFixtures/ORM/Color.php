<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Color;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $setColor = new Color();
        $setColor->setName('biały');
        $manager->persist($setColor);

        $setColor1 = new Color();
        $setColor1->setName('czarny');
        $manager->persist($setColor1);

        $setColor2 = new Color();
        $setColor2->setName('malinowy');
        $manager->persist($setColor2);

        $setColor3 = new Color();
        $setColor3->setName('biało-czarny');
        $manager->persist($setColor3);




        $manager->flush();
    }
}