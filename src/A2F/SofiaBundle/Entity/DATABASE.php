<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DATABASE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\DATABASERepository")
 */
class DATABASE extends SCOPE
{
    

     /**
     * @var DBMS 
     * @ORM\ManyToOne(targetEntity="DBMS")
     * @ORM\JoinColumn(name="DB_DBMS_ID", referencedColumnName="DBMS_ID", nullable=false) 
     */
    private $dbms;
    
     /**
     * @var SERVER 
     * @ORM\ManyToOne(targetEntity="SERVER", inversedBy="dbs")
     * @ORM\JoinColumn(name="DB_SERVER_ID", referencedColumnName="SC_ID", nullable=false) 
     */
    private $server;
    
    function getUniqueName()
    {
        return sprintf('%s - %s', $this->name, $this->server->getName());
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
       
    }

    
    

    /**
     * Set dbms
     *
     * @param \A2F\SofiaBundle\Entity\DBMS $dbms
     *
     * @return DATABASE
     */
    public function setDbms(\A2F\SofiaBundle\Entity\DBMS $dbms)
    {
        $this->dbms = $dbms;

        return $this;
    }

    /**
     * Get dbms
     *
     * @return \A2F\SofiaBundle\Entity\DBMS
     */
    public function getDbms()
    {
        return $this->dbms;
    }

    /**
     * Set server
     *
     * @param \A2F\SofiaBundle\Entity\SERVER $server
     *
     * @return DATABASE
     */
    public function setServer(\A2F\SofiaBundle\Entity\SERVER $server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return \A2F\SofiaBundle\Entity\SERVER
     */
    public function getServer()
    {
        return $this->server;
    }
}
