<?php

namespace A2F\SofiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;
use A2F\SofiaBundle\Entity\INCIDENT;
use A2F\SofiaBundle\Entity\USER;
use A2F\SofiaBundle\Entity\CLIENT;
use Symfony\Component\Security\Core\SecurityContext;

Class DefaultController extends Controller
    {
    
    public function dispatchAction()
        {
            if($this->get("security.context")->isGranted("ROLE_DBA"))
            {
                return $this->redirect($this->generateUrl("a2fSofia_a2flandingpage"));
            }
            elseif ($this->get("security.context")->isGranted("ROLE_REQ"))
            {
                $user = $this->getUser();
                $client = $user->getClient()->getId();
                
                
                
                return $this->redirect($this->generateUrl("a2fSofia_clientlandingpage", array("id"=>$client)));
            }
            
            
        }

    public function indexA2fAction()
            {
                //fixer la limite du noùbre de resultats pour l'accordéon
                $limit = 5;
                
                //Récupérer les données des CONTRATS via le repo
                $contractRepo = $this->getDoctrine()
                             ->getManager()
                             ->getRepository("A2FSofiaBundle:CONTRACT");
                
                //Chercher les 5 contrats qui s'afficheront, classés par GTI et par date d'expiration la plus proche                 
                $contracts = $contractRepo->findAllContracts($limit);
                
                //On fait la même chose pour les incidents
                $incidentRepo = $this->getDoctrine()
                                    ->getManager()
                                    ->getRepository("A2FSofiaBundle:INCIDENT");
                
                $incidents5 = $incidentRepo->findAllIncidents($limit);
                $incidents = $incidentRepo->findAllIncidents(null);
                
                return $this->render("A2FSofiaBundle:Global:a2flandingpage.html.twig", array("contracts"=>$contracts, "incidentsFive"=>$incidents5, "incidents"=>$incidents));
            }
        public function indexClientAction($id)
            {
            $incidentRepo = $this->getDoctrine()
                                    ->getManager()
                                    ->getRepository("A2FSofiaBundle:INCIDENT");
            
            //liste des 5 derniers incidents d'un client
                $limit=5;
                $statuses= array("Nouveau", "Attribué", "En attente", "Clos");
                $statusCount=array();
                
                foreach($statuses as $status)
                {
                    $statusCount = count($incidentRepo->findAllIncidentsByClientAndByStatus($id, $status)); 
                }
                
                
               
                
            
              
                $notificationRepo = $this->getDoctrine()
                                         ->getManager()
                                         ->getRepository("A2FSofiaBundle:NOTIFICATION");
                
                $notifications = $notificationRepo->findAllNotificationsByClient($limit, $id);
                
                return $this->render("A2FSofiaBundle:Global:clientlandingpage.html.twig", array("statuses"=>$statusCount, "notifications"=>$notifications));
            }
    }