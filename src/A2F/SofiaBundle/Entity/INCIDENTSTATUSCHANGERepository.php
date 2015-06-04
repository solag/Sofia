<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * INCIDENTSTATUSCHANGERepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class INCIDENTSTATUSCHANGERepository extends EntityRepository
{
    
    public function findAllIncidentsByClientAndByStatus($id, $status)
        {
            return $this->createQueryBuilder("isch")
                        ->add
                        ->leftJoin("isch.incident", "i")
                        ->leftJoin("isch.status", "s")
                        ->leftJoin("i.requester", "req");
        }
}