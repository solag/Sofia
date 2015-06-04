<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Parameter;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * INCIDENTRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class INCIDENTRepository extends EntityRepository
    {
    public function FindOneIncidentById($id)
        {
            return $this->createQueryBuilder("i")
                        ->addSelect("req")
                        ->addSelect("dba")
                        ->leftJoin("i.requester", "req")
                        ->leftJoin("i.dba", "dba")
                        ->where("i.id =:id")
                        ->setParameter("id", $id)
                        ->getQuery()
                        ->getOneOrNullResult();
        }
    public function findAllIncidents($limit = null)
        {
            return $this->createQueryBuilder("i")
                        ->addSelect("dba")
                        ->addSelect("req")
                        ->addSelect("db")
                        ->addSelect("ser")
                        ->addSelect("stc")
                        ->addSelect("st")
                        ->addSelect("cat")
                        ->leftJoin("i.dba", "dba")
                        ->leftJoin("i.requester", "req")
                        ->leftJoin("i.database", "db")
                        ->leftJoin("i.server", "ser")
                        ->leftJoin("i.statusT", "stc")
                        ->leftJoin("stc.status", "st")
                        ->leftJoin("st.category", "cat")
                        ->addOrderBy("i.logDate", "DESC")
                        ->groupBy("i.id")
                        //->having("stc.changeDate = MAX(stc.changeDate)")
                        ->setMaxResults($limit)
                        ->getQuery()
                        ->getResult();
            
           
        }
       
        public function findAllIncidentsByClient($limit, $id)
        {
            
            return $this->createQueryBuilder("i")
                        ->addSelect("dba")
                        ->addSelect("req")
                        ->addSelect("db")
                        ->addSelect("ser")
                        ->addSelect("stc")
                        ->addSelect("st")
                        ->addSelect("cat")
                        ->addSelect("clt")
                        ->leftJoin("i.dba", "dba")
                        ->leftJoin("i.requester", "req")
                        ->leftJoin("i.database", "db")
                        ->leftJoin("i.server", "ser")
                        ->leftJoin("req.client", "clt")
                        ->leftJoin("i.statusT", "stc")
                        ->leftJoin("stc.status", "st")
                        ->leftJoin("st.category", "cat")
                        ->where("clt.id = :id")
                        ->addOrderBy("i.logDate", "DESC")
                        ->setParameter("id", $id)
                        ->setMaxResults($limit)
                        ->getQuery()
                        ->getResult();
        }
        
        public function findAllIncidentsByClientAndByStatus($id, $status)
        {
            return $this->createQueryBuilder("i")
                        ->addSelect("req")
                        ->addSelect("stc")
                        ->addSelect("st")
                        ->addSelect("cat")
                        ->addSelect("clt")
                        ->leftJoin("i.requester", "req")
                        ->leftJoin("req.client", "clt")
                        ->leftJoin("i.statusT", "stc")
                        ->leftJoin("stc.status", "st")
                        ->leftJoin("st.category", "cat")
                        ->Where("clt.id = :id")
                        ->setParameter("id", $id)
                        ->andWhere("cat.name = :status")
                        ->setParameter("status", $status)
                        ->addOrderBy("i.logDate", "DESC")
                        ->groupBy("i.id")
                        //->having("stc.changeDate = MAX(stc.changeDate)")
                        ->getQuery()
                        ->getResult();
                        
                        
                        
        }
        
         
                        
                        
                        
        }
              
    