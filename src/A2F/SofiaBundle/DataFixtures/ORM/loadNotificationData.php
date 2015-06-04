<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\NOTIFICATION;



Class LoadNOTIFICATION extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $not1 = new NOTIFICATION();
            $not1->setContent("L'incident 1 a été pris en charge par blabla")
                 ->setType(1)
                 ->setClient($this->getReference("clt1"));
                 
            $manager->persist($not1);
            
            $not2 = new NOTIFICATION();
            $not2->setContent("Le contrat 2014-2015  arrive à terme le 25/06/2015")
                 ->setType(2)
                 ->setClient($this->getReference("clt1"));
                 
            $manager->persist($not2);
            
            
            $not3 = new NOTIFICATION();
            $not3->setContent("L'incident 2  a été clos par blabla le 05/05/2015")
                 ->setType(1)
                 ->setClient($this->getReference("clt1"));
                 
            $manager->persist($not3);
            
            $not4 = new NOTIFICATION();
            $not4->setContent("Il reste 15 heures sur le contrat 2014-2015")
                 ->setType(2)
                 ->setClient($this->getReference("clt1"));
                 
            $manager->persist($not4);
            
            $not5 = new NOTIFICATION();
            $not5->setContent("L'incident 3 a été supprimé par truc le 25/04/2015")
                 ->setType(1)
                 ->setClient($this->getReference("clt1"));
                 
            $manager->persist($not5);
            
                        
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 8;
        }
}