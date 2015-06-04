<?php

namespace A2F\SofiaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGE;



Class LoadINCIDENTSTATUSCHANGE extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
        {
            $isc1 = new INCIDENTSTATUSCHANGE();
            $isc1->setIncident($this->getReference("inc1"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is1"));
            $manager->persist($isc1);   
          
            $isc2 = new INCIDENTSTATUSCHANGE();
            $isc2->setIncident($this->getReference("inc3"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is2"));
            $manager->persist($isc2);
            
            $isc3 = new INCIDENTSTATUSCHANGE();
            $isc3->setIncident($this->getReference("inc2"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is1"));
            $manager->persist($isc3);
            
            $isc4 = new INCIDENTSTATUSCHANGE();
            $isc4->setIncident($this->getReference("inc4"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is3"));
            $manager->persist($isc4);
            
            $isc5 = new INCIDENTSTATUSCHANGE();
            $isc5->setIncident($this->getReference("inc5"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is1"));
            $manager->persist($isc5);
            
            $isc6 = new INCIDENTSTATUSCHANGE();
            $isc6->setIncident($this->getReference("inc6"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is1"));
            $manager->persist($isc6);
            
            $isc7 = new INCIDENTSTATUSCHANGE();
            $isc7->setIncident($this->getReference("inc2"))
                 ->setMessage("Phasellus dignissim sem quis tempor sollicitudin. Curabitur turpis ante, euismod at placerat sit amet, eleifend eu nibh. Donec dapibus nec dui vel fermentum.")
                 ->setStatus($this->getReference("is3"));
            $manager->persist($isc7);
           
                          
            $manager->flush();
        }
        
    public function getOrder() 
        {
            return 17;
        }
}