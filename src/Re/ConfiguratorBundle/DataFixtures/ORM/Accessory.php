<?php
namespace Re\Configurator\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Re\ConfiguratorBundle\Entity\Technology;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $setColor = new Technology();
        $akcesoria=array('nie','pilot','timer','częściowe oczyszczanie powietrza','eliminacja bakterii i innych patogenów','można dodać Ionic Silver Cube');
        foreach($akcesoria as $setColor => $linia)
        {
            $setColor->setName('pilot');
            $manager->persist($setColor);
        }


        $setColor1 = new Technology();
        $setColor1->setName('timer');
        $manager->persist($setColor1);

        $setColor2 = new Technology();
        $setColor2->setName('częściowe oczyszczanie powietrza');
        $manager->persist($setColor2);

        $setColor3 = new Technology();
        $setColor3->setName('eliminacja bakterii i innych patogenów');
        $manager->persist($setColor3);




        $manager->flush();
    }
}