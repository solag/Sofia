<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\GTI;



Class LoadGTI extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $gti1 = new GTI();
            $gti1->setName("4 heures")
                 ->setCode("4h")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($gti1);
            $this->addReference("gti1", $gti1);
            
            $gti2 = new GTI();
            $gti2->setName("6 heures")
                 ->setCode("6h")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($gti2);
            $this->addReference("gti2", $gti2);
            
            $gti3 = new GTI();
            $gti3->setName("1 heure")
                 ->setCode("1h")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($gti3);
            $this->addReference("gti3", $gti3);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 1;
        }
}