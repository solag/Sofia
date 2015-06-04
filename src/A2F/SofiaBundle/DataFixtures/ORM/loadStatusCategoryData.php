<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\STATUSCATEGORY;



Class LoadSTATUSCATEGORY extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $stc1 = new STATUSCATEGORY();
            $stc1->setName("Nouveau");                
            $manager->persist($stc1);
            $this->addReference("stc1", $stc1);
            
            
            $stc2 = new STATUSCATEGORY();
            $stc2->setName("En cours");                
            $manager->persist($stc2);
            $this->addReference("stc2", $stc2);
            
            $stc3 = new STATUSCATEGORY();
            $stc3->setName("Clos");
            $manager->persist($stc3);
            $this->addReference("stc3", $stc3);
           
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 9;
        }
}