<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\CLIENT;



Class LoadCLIENT extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $clt1 = new CLIENT();
            $clt1->setCompanyName("SAMU22")
                 ->setAddress("22 rue des Roses")
                 ->setPostCode("44000")
                 ->setTown("Nantes")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240444444")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt1);
            $this->addReference("clt1", $clt1);
            
            $clt2 = new CLIENT();
            $clt2->setCompanyName("SAMU29")
                 ->setAddress("22 rue des Pâquerettes")
                 ->setPostCode("35000")
                 ->setTown("Rennes")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240353535")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt2);
            $this->addReference("clt2", $clt2);
            
            $clt3 = new CLIENT();
            $clt3->setCompanyName("System U")
                 ->setAddress("22 rue des Tulipes")
                 ->setPostCode("29000")
                 ->setTown("Quimper")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240292929")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt3);
            $this->addReference("clt3", $clt3);
            
            $clt4 = new CLIENT();
            $clt4->setCompanyName("Harmonie Mutuelle")
                 ->setAddress("22 rue des Lilas")
                 ->setPostCode("22000")
                 ->setTown("Saint-Brieuc")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240222222")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt4);
            $this->addReference("clt4", $clt4);
            
            $clt5 = new CLIENT();
            $clt5->setCompanyName("IMA")
                 ->setAddress("22 rue des Hortensias")
                 ->setPostCode("49000")
                 ->setTown("Angers")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240494949")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt5);
            $this->addReference("clt5", $clt5);
            
            $clt6 = new CLIENT();
            $clt6->setCompanyName("Darva")
                 ->setAddress("22 rue des Lys")
                 ->setPostCode("56000")
                 ->setTown("Vannes")
                 ->setLive(true)
                 ->setLogo("")
                 ->setPhoneNumber("0240565656")
                 ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
            $manager->persist($clt6);
            $this->addReference("clt6", $clt6);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 3;
        }
}