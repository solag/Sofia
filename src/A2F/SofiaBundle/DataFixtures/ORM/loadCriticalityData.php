<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\CRITICALITY;



Class LoadCRITICALITY extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $crit1 = NEW CRITICALITY();
            $crit1->setLevel(1);                  
            $manager->persist($crit1);
            $this->addReference("crit1", $crit1);
           
            $crit2 = NEW CRITICALITY();
            $crit2->setLevel(2);
            $manager->persist($crit2);
            $this->addReference("crit2", $crit2);
            
            $crit3 = NEW CRITICALITY();
            $crit3->setLevel(3);
            $manager->persist($crit3);
            $this->addReference("crit3", $crit3);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 13;
        }
}