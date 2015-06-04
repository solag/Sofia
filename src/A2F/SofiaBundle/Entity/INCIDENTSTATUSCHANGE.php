<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * INCIDENTSTATUSCHANGE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGERepository")
 */
class INCIDENTSTATUSCHANGE
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ISCH_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ISCH_MESSAGE", type="text")
     */
    private $message;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ISCH_DATE", type="datetime")
     */
    private $changeDate;
    
    /**
     *
     * @var INCIDENT
     * @ORM\ManyToOne(targetEntity="INCIDENT", inversedBy="statusT")
     * @ORM\JoinColumn(name="ISCH_INC_ID", referencedColumnName="INC_ID", nullable=false)
     */
    private $incident;
    
    /**
     *
     * @var STATUS
     * @ORM\ManyToOne(targetEntity="STATUS", inversedBy="statusIncident")
     * @ORM\JoinColumn(name="ISCH_IS_ID", referencedColumnName="IS_ID", nullable=false)
     */
    private $status;

    public function __construct() 
    {
        $this->changeDate = new \DateTime();
    }

   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return INCIDENTSTATUSCHANGE
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set changeDate
     *
     * @param \DateTime $changeDate
     *
     * @return INCIDENTSTATUSCHANGE
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    /**
     * Get changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Set incident
     *
     * @param \A2F\SofiaBundle\Entity\INCIDENT $incident
     *
     * @return INCIDENTSTATUSCHANGE
     */
    public function setIncident(\A2F\SofiaBundle\Entity\INCIDENT $incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return \A2F\SofiaBundle\Entity\INCIDENT
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set status
     *
     * @param \A2F\SofiaBundle\Entity\STATUS $status
     *
     * @return INCIDENTSTATUSCHANGE
     */
    public function setStatus(\A2F\SofiaBundle\Entity\STATUS $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \A2F\SofiaBundle\Entity\STATUS
     */
    public function getStatus()
    {
        return $this->status;
    }
}
