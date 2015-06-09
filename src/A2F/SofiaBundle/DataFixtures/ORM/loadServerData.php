<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;
        
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\SERVER;

Class LoadSERVER extends AbstractFixture implements OrderedFixtureInterface
    {
        public function load(ObjectManager $manager) 
            {
                $serv1 = new SERVER();
                $serv1->setLive(true)
                    ->setName("MonServeur1")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit1"))
                    ->setServerType($this->getReference("st1"))
                    ->setOs($this->getReference("os1"));                    
                $manager->persist($serv1);
                $this->addReference("serv1", $serv1);
                
                $serv2 = new SERVER();
                $serv2->setLive(true)
                    ->setName("MonServeur2")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st1"))
                    ->setOs($this->getReference("os2"));
                $manager->persist($serv2);
                $this->addReference("serv2", $serv2);
                
                $serv3 = new SERVER();
                $serv3->setLive(false)
                    ->setName("MonServeur3")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit2"))
                    ->setServerType($this->getReference("st1"))
                    ->setOs($this->getReference("os3"));
                $manager->persist($serv3);
                $this->addReference("serv3", $serv3);
                
                $serv4 = new SERVER();
                $serv4->setLive(true)
                    ->setName("MonServeur4")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit1"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os1"));                    
                $manager->persist($serv4);
                $this->addReference("serv4", $serv4);
                
                $serv5 = new SERVER();
                $serv5->setLive(true)
                    ->setName("MonServeur5")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt1"))
                    ->setCriticality($this->getReference("crit2"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os2"));                    
                $manager->persist($serv5);
                $this->addReference("serv5", $serv5);
                
                $serv6 = new SERVER();
                $serv6->setLive(true)
                    ->setName("MonServeur6")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt6"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv6);
                $this->addReference("serv6", $serv6);
                
                $serv7 = new SERVER();
                $serv7->setLive(true)
                    ->setName("MonServeur7")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv7);
                $this->addReference("serv7", $serv7);
                
                $serv8 = new SERVER();
                $serv8->setLive(true)
                    ->setName("MonServeur8")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv8);
                $this->addReference("serv8", $serv8);
                
                $serv9 = new SERVER();
                $serv9->setLive(true)
                    ->setName("MonServeur9")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv9);
                $this->addReference("serv9", $serv9);
                
                $serv10 = new SERVER();
                $serv10->setLive(true)
                    ->setName("MonServeur10")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv10);
                $this->addReference("serv10", $serv10);
                
                $serv11 = new SERVER();
                $serv11->setLive(true)
                    ->setName("MonServeur11")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv11);
                $this->addReference("serv11", $serv11);
                
                $serv12 = new SERVER();
                $serv12->setLive(true)
                    ->setName("MonServeur12")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv12);
                $this->addReference("serv12", $serv12);
                
                $serv13 = new SERVER();
                $serv13->setLive(true)
                    ->setName("MonServeur13")
                    ->setSize("32Go")
                    ->setNotes("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit iaculis risus tempus, in vulputate sem bibendum. Donec vestibulum dolor eu imperdiet venenatis. ")
                    ->setClient($this->getReference("clt4"))
                    ->setCriticality($this->getReference("crit3"))
                    ->setServerType($this->getReference("st2"))
                    ->setOs($this->getReference("os3"));                    
                $manager->persist($serv13);
                $this->addReference("serv13", $serv13);
                
                $manager->flush();
            }
        
        public function getOrder()
            {
                return 14;
            }
    }
    