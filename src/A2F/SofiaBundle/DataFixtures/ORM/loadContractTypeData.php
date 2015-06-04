<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\CONTRACTTYPE;



Class LoadCONTRACTTYPE extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $ct1 = new CONTRACTTYPE();
            $ct1->setCode("ETO")
                ->setName("Expertise Technique Oracle");
            $manager->persist($ct1);
            $this->addReference("ct1", $ct1);
            
            $ct2 = new CONTRACTTYPE();
            $ct2->setCode("TAA")
                ->setName("Télé-Assistance aux Administrateurs");
            $manager->persist($ct2);
            $this->addReference("ct2", $ct2);
            
            $ct3 = new CONTRACTTYPE();
            $ct3->setCode("SAD")
                ->setName("Supervision A Distance");
            $manager->persist($ct3);
            $this->addReference("ct3", $ct3);
           
            $ct4 = new CONTRACTTYPE();
            $ct4->setCode("CAA")
                ->setName("Contrat d'Assistance A2F");
            $manager->persist($ct4);
            $this->addReference("ct4", $ct4);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 2;
        }
}