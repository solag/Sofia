<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\DBMS;



Class LoadDBMS extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $dbms1 = new DBMS();
            $dbms1->setName("SQL Server 2008 SP4");
            $manager->persist($dbms1);
            $this->addReference("dbms1", $dbms1);
            
            $dbms2 = new DBMS();
            $dbms2->setName("SQL Server 2008 R2 SP3");
            $manager->persist($dbms2);
            $this->addReference("dbms2", $dbms2);
            
            $dbms3 = new DBMS();
            $dbms3->setName("Oracle Standard 10.2");            
            $manager->persist($dbms3);
            $this->addReference("dbms3", $dbms3);
            
                          
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 5;
        }
}