<?php

namespace A2F\SofiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;
use A2F\SofiaBundle\Entity\USER;
use A2F\SofiaBundle\Entity\REQUESTER;

Class UserController extends Controller
    {
        public function listAction($id=null)
            {
                if(isset($id))  
                    {
                        $requesterRepo = $this->getDoctrine()
                                                 ->getManager()
                                                 ->getRepository("A2FSofiaBundle:REQUESTER");

                        $requeters = $requesterRepo->findAllRequestersByClient($id);
                        $type = "REQUESTER";
                        return $this->render('A2FSofiaBundle:User:userlist.html.twig', array("elements"=>$requeters, "type"=>$type));
                    }
            }
            
        public function updateAction($id)
            {
                return new Response("Mise à jour de l'utilisateur " . $id);
            }
        
        public function removeAction($id)
            {
                return new Response("Suppression de l'utilisateur " . $id);
            }
            
        public function addAction()
            {
                return new Response("Ajout d'un utilisateur");
            }
        
        public function detailAction($id, $type)
            {
                $userRepo = $this->getDoctrine()
                            ->getManager()
                            ->getRepository("A2FSofiaBundle:".$type);
                            
                
                
                $user = $userRepo->findOneUserById($id);
                
                
                
                          
                return $this->render('A2FSofiaBundle:User:userdetail.html.twig', array("element"=>$user, "type"=>$type));
            }
    }
