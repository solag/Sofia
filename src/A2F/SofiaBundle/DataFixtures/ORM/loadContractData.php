<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\CONTRACT;




Class LoadCONTRACT extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $interval = 360;           
            
            $cont1 = new CONTRACT();
            $cont1->setStartDate(new \DateTime("02/04/2015"))
                  ->setEndDate(new \DateTime("02/04/2016"))
                  ->setInitialCredit(30)
                  ->setSpentCredit(5)
                  ->setGti($this->getReference("gti3"))
                  ->setContractType($this->getReference("ct1"))
                  ->setClient($this->getReference("clt1"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont1);
            
           
            $cont2 = new CONTRACT();
            $cont2->setStartDate(new \DateTime("05/03/2015"))
                  ->setEndDate(new \DateTime("05/03/2016"))
                  ->setInitialCredit(20)
                  ->setSpentCredit(8)
                  ->setGti($this->getReference("gti2"))
                  ->setContractType($this->getReference("ct2"))
                  ->setClient($this->getReference("clt2"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont2);
            
            $cont3 = new CONTRACT();
            $cont3->setStartDate(new \DateTime("02/01/2015"))
                  ->setEndDate(new \DateTime("02/01/2016"))
                  ->setInitialCredit(35)
                  ->setSpentCredit(5)
                  ->setGti($this->getReference("gti3"))
                  ->setContractType($this->getReference("ct3"))
                  ->setClient($this->getReference("clt3"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont1);
            
            $cont4 = new CONTRACT();
            $cont4->setStartDate(new \DateTime("02/06/2014"))
                  ->setEndDate(new \DateTime("02/06/2015"))
                  ->setInitialCredit(60)
                  ->setSpentCredit(12)
                  ->setGti($this->getReference("gti1"))
                  ->setContractType($this->getReference("ct2"))
                  ->setClient($this->getReference("clt4"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont4);
            
            $cont5 = new CONTRACT();
            $cont5->setStartDate(new \DateTime("02/04/2012"))
                  ->setEndDate(new \DateTime("02/04/2013"))
                  ->setInitialCredit(25)
                  ->setSpentCredit(5)
                  ->setGti($this->getReference("gti2"))
                  ->setContractType($this->getReference("ct1"))
                  ->setClient($this->getReference("clt5"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont5);
            
            $cont6 = new CONTRACT();
            $cont6->setStartDate(new \DateTime("02/04/2011"))
                  ->setEndDate(new \DateTime("02/04/2012"))
                  ->setInitialCredit(30)
                  ->setSpentCredit(5)
                  ->setGti($this->getReference("gti3"))
                  ->setContractType($this->getReference("ct4"))
                  ->setClient($this->getReference("clt6"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont6);
            
            $cont7 = new CONTRACT();
            $cont7->setStartDate(new \DateTime("02/06/2014"))
                  ->setEndDate(new \DateTime("02/06/2015"))
                  ->setInitialCredit(60)
                  ->setSpentCredit(55)
                  ->setGti($this->getReference("gti1"))
                  ->setContractType($this->getReference("ct1"))
                  ->setClient($this->getReference("clt4"))
                  ->setNotes("Curabitur non varius augue, et congue elit. Morbi aliquet nisi convallis pulvinar dignissim. Nullam blandit rhoncus porttitor. Phasellus venenatis bibendum nibh vitae accumsan. Nulla porta enim elit, sit amet lobortis est euismod eget. Suspendisse et iaculis justo. Aenean vehicula sollicitudin tortor, vitae faucibus lorem feugiat nec.");
                  
            $manager->persist($cont7);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 4;
        }
}