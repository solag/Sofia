<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SERVER
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\SERVERRepository")
 */
class SERVER extends SCOPE
{
    /**
     * @var SERVERTYPE
     * @ORM\ManyToOne(targetEntity="SERVERTYPE")
     * @ORM\JoinColumn(name="SER_ST_ID", referencedColumnName="ST_ID", nullable=true)
     */
    private $serverType;
    
    /**
     * @var SERVEROS
     * @ORM\ManyToOne(targetEntity="SERVEROS")
     * @ORM\JoinColumn(name="SER_OS_ID", referencedColumnName="OS_ID", nullable=true)
     */
    private $os;
    
    /**
     *
     * @var array
     * @ORM\OneToMany(targetEntity="DATABASE", mappedBy="server")
     * @ORM\JoinColumn(name="SER_DB_ID", referencedColumnName="SC_ID", nullable=true)
     */
    private $dbs;
    

    

    /**
     * Set serverType
     *
     * @param \A2F\SofiaBundle\Entity\SERVERTYPE $serverType
     * @return SERVER
     */
    public function setServerType(\A2F\SofiaBundle\Entity\SERVERTYPE $serverType = null)
    {
        $this->serverType = $serverType;

        return $this;
    }

    /**
     * Get serverType
     *
     * @return \A2F\SofiaBundle\Entity\SERVERTYPE 
     */
    public function getServerType()
    {
        return $this->serverType;
    }

    /**
     * Set os
     *
     * @param \A2F\SofiaBundle\Entity\SERVEROS $os
     * @return SERVER
     */
    public function setOs(\A2F\SofiaBundle\Entity\SERVEROS $os = null)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return \A2F\SofiaBundle\Entity\SERVEROS 
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Constructor
     */
    public function __construct()
    {

    }

   


    /**
     * Add db
     *
     * @param \A2F\SofiaBundle\Entity\DATABASE $db
     *
     * @return SERVER
     */
    public function addDb(\A2F\SofiaBundle\Entity\DATABASE $db)
    {
        $this->dbs[] = $db;

        return $this;
    }

    /**
     * Remove db
     *
     * @param \A2F\SofiaBundle\Entity\DATABASE $db
     */
    public function removeDb(\A2F\SofiaBundle\Entity\DATABASE $db)
    {
        $this->dbs->removeElement($db);
    }

    /**
     * Get dbs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDbs()
    {
        return $this->dbs;
    }
}
