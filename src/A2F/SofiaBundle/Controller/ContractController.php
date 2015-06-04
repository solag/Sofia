<?php

namespace A2F\SofiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;

Class ContractController extends Controller
    {
        public function listAction($id)
            {
                $contractRepo = $this->getDoctrine()
                                     ->getManager()
                                     ->getRepository("A2FSofiaBundle:CONTRACT");

                        $contracts = $contractRepo->findAllContractsByClient($id);
                       
                        return $this->render('A2FSofiaBundle:Contract:contractlist.html.twig', array("elements"=>$contracts));
            }
            
        public function viewAction($id)
            {
                return new Response("Profil du client " . $id);
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
