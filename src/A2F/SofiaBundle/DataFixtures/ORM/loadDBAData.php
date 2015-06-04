<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\DBA;



Class LoadDBA extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $dba1 = new DBA();
            $dba1->setFirstName("Sebastien")
                 ->setLastName("Lebel")
                 ->setEmail("slebel@a2fadvisor.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("slebel")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_DBA")
                 ->setTrigraph("SLE");                 
            $manager->persist($dba1);
            $this->addReference("dba1", $dba1);
            
            $dba2 = new DBA();
            $dba2->setFirstName("Matthieu")
                 ->setLastName("Atkinson")
                 ->setEmail("matkinson@a2fadvisor.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("matkinson")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_ADMIN")
                 ->setTrigraph("MAT");                 
            $manager->persist($dba2);
            $this->addReference("dba2", $dba2);
            
            $dba3 = new DBA();
            $dba3->setFirstName("Vivien")
                 ->setLastName("Bahurel")
                 ->setEmail("slebel@a2fadvisor.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("vbahurel")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_DBA")
                 ->setTrigraph("VBA");                 
            $manager->persist($dba3);
            $this->addReference("dba3", $dba3);
            
            $dba4 = new DBA();
            $dba4->setFirstName("Xavier-Franck")
                 ->setLastName("Godard")
                 ->setEmail("slebel@a2fadvisor.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("xfgodard")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_DBA")
                 ->setTrigraph("XFG");
            $manager->persist($dba4);
            $this->addReference("dba4", $dba4);
            
            $dba5 = new DBA();
            $dba5->setFirstName("Gaëtan")
                 ->setLastName("Evain")
                 ->setEmail("slebel@a2fadvisor.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("gevain")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_DBA")
                 ->setTrigraph("GAE");
            $manager->persist($dba5);
            $this->addReference("dba5", $dba5);
           
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 11;
        }
}