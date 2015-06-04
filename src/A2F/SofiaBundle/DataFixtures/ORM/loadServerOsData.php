<?php


namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\SERVEROS;



Class LoadSERVEROS extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
        
            $os1=new SERVEROS;
            $os1->setName("Windows Server");                       
            $manager->persist($os1);
            $this->addReference("os1", $os1);
            
            $os2=new SERVEROS;
            $os2->setName("Unix");            
            $manager->persist($os2);
            $this->addReference("os2", $os2);
            
            $os3=new SERVEROS;
            $os3->setName("AX");
            $manager->persist($os3);
            $this->addReference("os3", $os3);
            
                       
                            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 7;
        }
}