<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\SERVERTYPE;



Class LoadSERVERTYPE extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
        
            $st1 = new SERVERTYPE();
            $st1->setName("Virtuelle");
            $manager->persist($st1);
            $this->addReference("st1", $st1);
           
            $st2 = new SERVERTYPE();
            $st2->setName("Physique");            
            $manager->persist($st2);
            $this->addReference("st2", $st2);
            
                
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 6;
        }
}