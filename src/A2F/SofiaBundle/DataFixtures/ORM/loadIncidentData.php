<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\INCIDENT;



Class LoadINCIDENT extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
           $inc1 = new INCIDENT();
           $inc1->setDba($this->getReference("dba1"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req4"))
                ->setDatabase($this->getReference("db1"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(180);
           $manager->persist($inc1);
           $this->addReference("inc1", $inc1);
           
           $inc2 = new INCIDENT();
           $inc2->setDba($this->getReference("dba2"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req1"))
                ->setServer($this->getReference("serv1"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(120);
           $manager->persist($inc2);
           $this->addReference("inc2", $inc2);
           
           $inc3 = new INCIDENT();
           $inc3->setDba($this->getReference("dba4"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req5"))
                ->setDatabase($this->getReference("db2"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(210);
           $manager->persist($inc3);
           $this->addReference("inc3", $inc3);
           
           $inc4 = new INCIDENT();
           $inc4->setDba($this->getReference("dba2"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req6"))
                ->setDatabase($this->getReference("db5"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(240);
           $manager->persist($inc4);
           $this->addReference("inc4", $inc4);
           
           $inc5 = new INCIDENT();
           $inc5->setDba($this->getReference("dba5"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req2"))
                ->setServer($this->getReference("serv5"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(30);
           $manager->persist($inc5);
           $this->addReference("inc5", $inc5);
           
           $inc6 = new INCIDENT();
           $inc6->setDba($this->getReference("dba3"))
                ->setDescription("Suspendisse nisl ante, posuere sed lacinia sed, aliquet ac nulla. Praesent molestie pellentesque lacus a sodales. ")
                ->setIdentifiedIssue("Donec gravida posuere felis, et varius dui.")
                ->setNotes("Duis tincidunt at odio sit amet gravida. Vestibulum porta elit vel risus pharetra vulputate. Suspendisse potenti.")
                ->setRequester($this->getReference("req3"))
                ->setDatabase($this->getReference("db3"))
                ->setSolution("Duis ultrices diam non sagittis iaculis. Nunc nulla erat, auctor sed tortor non, tincidunt vulputate lectus.")
                ->setSpentCredit(90);
           $manager->persist($inc6);
           $this->addReference("inc6", $inc6);
                   
           $manager->flush();
            
          
        }
        
    public function getOrder() 
        {
            return 15;
        }
}