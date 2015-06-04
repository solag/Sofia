<?php

namespace A2F\SofiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;

Class ClientController extends Controller
    {
        public function navAction($id)
            {
                $contractRepo = $this->getDoctrine()
                             ->getManager()
                             ->getRepository("A2FSofiaBundle:CONTRACT");
                
                 $contracts = $contractRepo->findAllLiveContractsByClient($id);
                
                
                        return $this->render("A2FSofiaBundle:Nav:clientmenu.html.twig", array("elements"=>$contracts));
                    
                     
                 
            }
                
        public function listAction()
            {
                $clientRepo = $this->getDoctrine()->getManager()->getRepository("A2FSofiaBundle:CLIENT");
                
                $elements = $clientRepo->FindAllClients();
                return $this->render('A2FSofiaBundle:Client:clientlist.html.twig', array("elements"=>$elements));
            }
            
        public function detailAction($id, $type)
            {
                $clientRepo = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository("A2FSofiaBundle:CLIENT");
                
                $client = $clientRepo->findOneClientById($id);
                
                
                return $this->render("A2FSofiaBundle:Client:clientdetail.html.twig", array("element"=>$client, "type"=>$type));
            }
            
        public function updateAction($id)
            {
                return new Response("Mise à jour du client " . $id);
            }
        
        public function removeAction($id)
            {
                return new Response("Suppression du client " . $id);
            }
            
        public function addAction()
            {
                return new Response("Ajout d'un client");
            }
    }
