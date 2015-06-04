<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\STATUS;



Class LoadSTATUS extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $is1 = new STATUS();
            $is1->setName("Nouveau")
                ->setCategory($this->getReference("stc1"));
            $manager->persist($is1);
            $this->addReference("is1", $is1);
            
            $is2 = new STATUS();
            $is2->setName("Attribué")
                ->setCategory($this->getReference("stc2"));
            $manager->persist($is2);
            $this->addReference("is2", $is2);
            
            $is3 = new STATUS();
            $is3->setName("En attente")
                ->setCategory($this->getReference("stc2"));
            $manager->persist($is3);
            $this->addReference("is3", $is3);
            
            $is4 = new STATUS();
            $is4->setName("Clos")
                ->setCategory($this->getReference("stc3"));
            $manager->persist($is4);
            $this->addReference("is4", $is4);
                          
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 10;
        }
}