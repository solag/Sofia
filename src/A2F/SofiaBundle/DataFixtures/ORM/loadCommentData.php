<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\COMMENT;



Class LoadCOMMENT extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $com1 = new COMMENT();
            $com1->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc1"))
                 ->setUser($this->getReference("dba1"));
            $manager->persist($com1);
           
            $com2 = new COMMENT();
            $com2->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc1"))
                 ->setUser($this->getReference("req1"));
            $manager->persist($com2);
            
            $com3 = new COMMENT();
            $com3->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc1"))
                 ->setUser($this->getReference("dba1"));
            $manager->persist($com3);
            
            $com4 = new COMMENT();
            $com4->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc3"))
                 ->setUser($this->getReference("dba2"));
            $manager->persist($com4);
            
            $com5 = new COMMENT();
            $com5->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc3"))
                 ->setUser($this->getReference("req3"));
            $manager->persist($com5);
            
            $com6 = new COMMENT();
            $com6->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc4"))
                 ->setUser($this->getReference("dba1"));
            $manager->persist($com6);
            
            $com7 = new COMMENT();
            $com7->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc4"))
                 ->setUser($this->getReference("req3"));
            $manager->persist($com6);
            
            $com8 = new COMMENT();
            $com8->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc4"))
                 ->setUser($this->getReference("dba1"));
            $manager->persist($com6);
            
            $com9 = new COMMENT();
            $com9->setContent("Sed sed fermentum nisi, a finibus tortor. Morbi id tortor ut tellus tincidunt facilisis at eu leo. Vestibulum vulputate pretium leo, sit amet ullamcorper dolor porttitor a. Integer ut accumsan ipsum, non dictum nulla.")
                 ->setIncident($this->getReference("inc4"))
                 ->setUser($this->getReference("req3"));
            $manager->persist($com9);
          
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 16;
        }
}