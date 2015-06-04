<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\REQUESTER;



Class LoadREQUESTER extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $req1 = new REQUESTER();
            $req1->setFirstName("Jean")
                 ->setLastName("Dupont")
                 ->setEmail("jdupont@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("jdupont")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Chef de projet")
                 ->setClient($this->getReference("clt1"))
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.");                 
            $manager->persist($req1);
            $this->addReference("req1", $req1);
            
            $req2 = new REQUESTER();
            $req2->setFirstName("Georges")
                 ->setLastName("Dubois")
                 ->setEmail("gdubois@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("gdubois")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Responsable technique")
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.")
                 ->setClient($this->getReference("clt3"));                
            $manager->persist($req2);
            $this->addReference("req2", $req2);
            
            $req3 = new REQUESTER();
            $req3->setFirstName("Caroline")
                 ->setLastName("Garreau")
                 ->setEmail("cgarreau@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("cgarreau")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Responsable production")
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.")
                 ->setClient($this->getReference("clt4"));                 
            $manager->persist($req3);
            $this->addReference("req3", $req3);
            
            $req4 = new REQUESTER();
            $req4->setFirstName("François")
                 ->setLastName("Cohen")
                 ->setEmail("fcohen@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("fcohen")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("DBA")
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.")
                 ->setClient($this->getReference("clt3"));                 
            $manager->persist($req4);
            $this->addReference("req4", $req4);
            
            $req5 = new REQUESTER();
            $req5->setFirstName("Babette")
                 ->setLastName("Chatelain")
                 ->setEmail("bchatelain@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("bchatelain")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Administrateur système")
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.")
                 ->setClient($this->getReference("clt1"));                 
            $manager->persist($req5);
            $this->addReference("req5", $req5);
            
            $req6 = new REQUESTER();
            $req6->setFirstName("Christelle")
                 ->setLastName("Audibert")
                 ->setEmail("caudibert@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(true)
                 ->setUsername("caudibert")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Responsable infrastructure")
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.")
                 ->setClient($this->getReference("clt3"));                 
            $manager->persist($req6);
            $this->addReference("req6", $req6);
            
            $req7 = new REQUESTER();
            $req7->setFirstName("Marie")
                 ->setLastName("Dutreil")
                 ->setEmail("mdutreil@client.fr")
                 ->setLandLinePhoneNumber("0240404040")
                 ->setLive(false)
                 ->setUsername("mdutreil")
                 ->setMobilePhoneNumber("0610101010")
                 ->setPassword("password")
                 ->addRoles("ROLE_REQ")
                 ->setPosition("Chef de projet")
                 ->setClient($this->getReference("clt1"))
                 ->setNotes("Fusce ultricies augue id enim tincidunt, in bibendum orci rhoncus. Suspendisse posuere vestibulum dignissim. Etiam vehicula urna ante, ut tincidunt nunc vestibulum id.");                 
            $manager->persist($req7);
            $this->addReference("req7", $req7);
            
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 12;
        }
}