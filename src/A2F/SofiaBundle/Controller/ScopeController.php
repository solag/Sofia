<?php

namespace A2F\SofiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;

Class ScopeController extends Controller
    {
        public function listAction($id=null, $limit=null)
            {
                             
                $dbRepo = $this->getDoctrine()
                                ->getManager()
                                ->getRepository("A2FSofiaBundle:DATABASE");
                
                $dbs = $dbRepo->findAllDataBasesByClient($limit, $id);
                
                $serverRepo = $this->getDoctrine()
                                ->getManager()
                                ->getRepository("A2FSofiaBundle:SERVER");
                
                $servers = $serverRepo->findAllServersByClient($limit, $id);
                
              /*  $dbServer = $servers->findAllDataBasesByServer();
                
                foreach ($servers as $server)
                {
                    
                }*/
                
                                
                return $this->render('A2FSofiaBundle:Scope:scopelist.html.twig', array("dbs"=>$dbs, "servers"=>$servers));
            }
            
        public function viewAction($id)
          {
              return new Response("Détail du serveur/de la base " . $id);
          }
        
        public function updateAction($id)
            {
                return new Response("Mise à jour du périmètre " . $id);
            }
        
        public function removeAction($id)
            {
                return new Response("Suppression du périmètre " . $id);
            }
            
        public function addAction()
            {
                return new Response("Ajout d'un élément de périmètre");
            }
    }
