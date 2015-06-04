<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;
        
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\DATABASE;

Class LoadDATABASE extends AbstractFixture implements OrderedFixtureInterface
    {
        public function load(ObjectManager $manager) 
            {
                $db1 = new DATABASE();
                $db1->setLive(true)
                    ->setName("MaBase1")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv1"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit1"))
                    ->setDbms($this->getReference("dbms1"));
                $manager->persist($db1);
                $this->addReference("db1", $db1);
                
                $db2 = new DATABASE();
                $db2->setLive(true)
                    ->setName("MaBase2")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv2"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt2"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setDbms($this->getReference("dbms1"));
                $manager->persist($db2);
                $this->addReference("db2", $db2);
                
                $db3 = new DATABASE();
                $db3->setLive(false)
                    ->setName("MaBase3")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv1"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt3"))
                    ->setCriticality($this->getReference("crit1"))
                    ->setDbms($this->getReference("dbms2"));
                $manager->persist($db3);
                $this->addReference("db3", $db3);
                
                $db4 = new DATABASE();
                $db4->setLive(true)
                    ->setName("MaBase4")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv4"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setDbms($this->getReference("dbms2"));
                $manager->persist($db4);
                $this->addReference("db4", $db4);
                
                $db5 = new DATABASE();
                $db5->setLive(true)
                    ->setName("MaBase5")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv4"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt5"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setDbms($this->getReference("dbms3"));
                $manager->persist($db5);
                $this->addReference("db5", $db5);
                
                $db6 = new DATABASE();
                $db6->setLive(true)
                    ->setName("MaBase6")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv1"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt6"))
                    ->setCriticality($this->getReference("crit2"))
                    ->setDbms($this->getReference("dbms3"));                    
                $manager->persist($db6);
                $this->addReference("db6", $db6);
                
                $db7 = new DATABASE();
                $db7->setLive(true)
                    ->setName("MaBase7")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv4"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setDbms($this->getReference("dbms2"));
                $manager->persist($db7);
                $this->addReference("db7", $db7);
                
                $db8 = new DATABASE();
                $db8->setLive(true)
                    ->setName("MaBase8")
                    ->setSize("32Go")
                    ->setServer($this->getReference("serv4"))
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setDbms($this->getReference("dbms2"));
                $manager->persist($db8);
                $this->addReference("db8", $db8);
                
                $manager->flush();
            }
            
            
        
        public function getOrder()
            {
                return 14;
            }
    }
    