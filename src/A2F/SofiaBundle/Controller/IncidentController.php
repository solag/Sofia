<?php

namespace A2F\SofiaBundle\Controller;

use A2F\SofiaBundle\Entity\INCIDENT;
use A2F\SofiaBundle\Entity\NOTIFICATION;
use A2F\SofiaBundle\Form\INCIDENTType;
use DateTime;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;


Class IncidentController extends Controller
    {
        public function listAction($id=null, $limit=null)
            {
                
                 
                $incidentRepo = $this->getDoctrine()
                                     ->getManager()
                                     ->getRepository("A2FSofiaBundle:INCIDENT");
                             
                
                    if(isset ($id))
                    {
                        $elements5 = $incidentRepo->findAllIncidentsByClient($limit, $id);
                                              
                        $elements = $incidentRepo->findAllIncidentsByClient(null, $id);
                    }
                    
                    else
                    {
                        $elements5 = $incidentRepo->findAllIncidents($limit);
                                              
                        $elements = $incidentRepo->findAllIncidents(null);
                    }  
                        
                        
                if(isset($limit))
                    {
                        return $this->render("A2FSofiaBundle:Incident:incidentlist.html.twig", array("incidentsFive"=>$elements5, "incidents"=>$elements));
                    }
                else
                    {
                        return $this->render("A2FSofiaBundle:Incident:incidentfulllist.html.twig", array("incidentsFive"=>$elements5, "incidents"=>$elements));
                    }
                
            }
            
        public function viewAction($id)
            {
                return new Response("Profil de l'incident " . $id);
            }
            
        public function updateAction($id)
            {
                return new Response("Mise à jour de l'incident " . $id);
            }
        
        public function removeAction($id)
            {
                return new Response("Suppression de l'incident " . $id);
            }
            
        public function addAction(Request $request)
            {
                $incident = new INCIDENT();
                
                $user = $this->getUser()->getClient()->getId();
                
                $incident->setRequester($this->getUser());
                
                $form = $this->createForm(new INCIDENTType($user), $incident, array("action"=>$this->generateUrl("a2fSofia_incident_add", array("id"=>$user))));
                
                $form->handleRequest($request);
                
                if($form->isValid()) 
                    {
                
                        $em = $this->getDoctrine()->getManager(); 
                        if($incident->getId() === null) 
                            {
                                $em->persist($incident);
                            }
                        $em->flush();
                        
                        $response = $this->sendMailAction($user);
                        
                        $session = $request->getSession();
                        $session->getFlashBag()->add("info", $response);

                       return $this->redirect($this->generateUrl('a2fSofia_incident_full_list', array("id"=>$user)));
                    }
                else
                {
                     return $this->render('A2FSofiaBundle:Incident:addincident.html.twig', array(
                'incidentForm' => $form->createView(),
            ));  
                }
            }
            
        public function assignAction($incidentId, Request $request)
        {
            $incident = $this->getDoctrine()
                             ->getManager()
                             ->getRepository("A2FSofiaBundle:INCIDENT")
                             ->FindOneIncidentById($incidentId);
            
            $user = $this->getUser()->getId();
            
            $dba = $this->getDoctrine()
                        ->getManager()
                        ->getRepository("A2FSofiaBundle:DBA")
                        ->FindOneUserById($user);
               
             
            $em = $this->getDoctrine()
                       ->getManager();
            
                     
            $incident->setDba($dba);
            $incident->setAcknowledgeDate(new DateTime);
          
            
            $em->persist($incident);
            $em->flush();
            
            $notification = new NOTIFICATION();
            $content = "L'incident ".$incidentId." a été pris en charge par ".$dba->getFirstName()." ".strtoupper($dba->getLastName())." le ";
            
            $notification->setClient($incident->getRequester()->getClient())
                         ->setContent($content)
                         ->setType(1);
            
            $em->persist($notification);
            $em->flush();
            
            $session = $request->getSession();
            $session->getFlashBag()->add("info", "L'incident vous a bien été affecté.");
            
            return $this->redirect($this->generateUrl("a2fSofia_a2flandingpage"));
            
            
        }
        
        
        public function sendMailAction($id)
        {
             $user = $this->getDoctrine()
                         ->getRepository('A2FSofiaBundle:CLIENT')
                         ->findOneClientById($id);
       
             $mailRecipient = "slagacherie@a2fadvisor.com"; 
       
             $mailSender = "slagacherie@a2fadvisor.com";
        
        $title = "Un nouvel incident a été créé par ".$this->getUser()->getFirstName()." ".$this->getUser()->getLastName()." pour ". $user->getCompanyName();
        $content = "Bonjour, ".$this->getUser()->getFirstName()." ".$this->getUser()->getLastName()." a créé un incident pour ".$user->getCompanyName().".";
        //Création du mail
       
                    $message = Swift_Message::newInstance()
                        ->setSubject($title)
                        ->setFrom($mailSender)
                        ->setTo($mailRecipient)
                        ->setContentType("text/html") // Préciser qu'on envoie un message en HTML.
                        ->setBody($this->renderView('A2FSofiaBundle:Global:incidentaddemail.html.twig', array('content' => $content)), 'text/html') // AcmeBundle:Default:emailTicketConfirmation.html.twig à remplacer par le chemin jusqu'à ton template.
                        ->addPart($content, 'text/plaintext'); // On envoie également la version simple du message pour laisser le choix au destinataire.
                    $this->get('mailer')->send($message);
                    $reponse = "L'incident a bien été créé. Vous serez bientôt notifié par email de sa prise en charge.";

            Return $reponse;
        }
    }
