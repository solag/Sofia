<?php

namespace A2F\SofiaBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * INCIDENT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="INCIDENTRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class INCIDENT
{
    


    /**
     * @var integer
     *
     * @ORM\Column(name="INC_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="INC_LOG_DATE", type="datetime")
     */
    private $logDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="INC_ACKNOWLEDGE_DATE", type="datetime",nullable=true)
     */
    private $acknowledgeDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="INC_CLOSE_DATE", type="datetime", nullable=true)
     */
    private $closeDate;
    
    /**
     *
     * @var integer
     * @ORM\Column(name="INC_SPENT_CREDIT", type="integer", nullable=true)
     */
    private $spentCredit;
    
     /**
     * @var string
     *
     * @ORM\Column(name="INC_DESCRIPTION", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="INC_IDENTIFIED_ISSUE", type="text", nullable=true)
     */
    private $identifiedIssue;

    /**
     * @var string
     *
     * @ORM\Column(name="INC_SOLUTION", type="text", nullable=true)
     */
    private $solution;

    /**
     * @var string
     *
     * @ORM\Column(name="INC_NOTES", type="text", nullable=true)
     */
    private $notes;
    
    /**
     * @var DATABASE
     * @ORM\ManyToOne(targetEntity="DATABASE")
     * @ORM\JoinColumn(name="INC_DB_ID", referencedColumnName="SC_ID")
     */
    private $database;
    
    /**
     * @var SERVER
     * @ORM\ManyToOne(targetEntity="SERVER")
     * @ORM\JoinColumn(name="INC_SER_ID", referencedColumnName="SC_ID", nullable=true)
     */
    private $server;


    /**
     * @var DBA
     * @ORM\ManyToOne(targetEntity="DBA")
     * @ORM\JoinColumn(name="INC_DBA_ID", referencedColumnName="USER_ID", nullable=true)
     */
    private $dba;
    
    
    /**
     * @var REQUESTER
     * @ORM\ManyToOne(targetEntity="REQUESTER")
     * @ORM\JoinColumn(name="INC_REQ_ID", referencedColumnName="USER_ID", nullable=false)
     */
    private $requester;
    /**
     *
     * @var INCIDENTSTATUSCHANGE
     * @ORM\OneToMany(targetEntity="INCIDENTSTATUSCHANGE", mappedBy="incident")
     * @ORM\JoinColumn(name="INC_ISCH_ID", referencedColumnName="INC_ID", nullable=false)
     */
    private $statusT;




    public function __construct() 
    {
        $this->logDate = new DateTime();
        $this->statusT = new ArrayCollection();
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
     * Set logDate
     *
     * @param DateTime $logDate
     *
     * @return INCIDENT
     */
    public function setLogDate($logDate)
    {
        $this->logDate = $logDate;

        return $this;
    }

    /**
     * Get logDate
     *
     * @return DateTime
     */
    public function getLogDate()
    {
        return $this->logDate;
    }

    /**
     * Set acknowledgeDate
     *
     * @param DateTime $acknowledgeDate
     *
     * @return INCIDENT
     */
    public function setAcknowledgeDate($acknowledgeDate)
    {
        $this->acknowledgeDate = $acknowledgeDate;

        return $this;
    }

    /**
     * Get acknowledgeDate
     *
     * @return DateTime
     */
    public function getAcknowledgeDate()
    {
        return $this->acknowledgeDate;
    }

    /**
     * Set closeDate
     *
     * @param DateTime $closeDate
     *
     * @return INCIDENT
     */
    public function setCloseDate($closeDate)
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * Get closeDate
     *
     * @return DateTime
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * Set spentCredit
     *
     * @param integer $spentCredit
     *
     * @return INCIDENT
     */
    public function setSpentCredit($spentCredit)
    {
        $this->spentCredit = $spentCredit;

        return $this;
    }

    /**
     * Get spentCredit
     *
     * @return integer
     */
    public function getSpentCredit()
    {
        return $this->spentCredit;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return INCIDENT
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set identifiedIssue
     *
     * @param string $identifiedIssue
     *
     * @return INCIDENT
     */
    public function setIdentifiedIssue($identifiedIssue)
    {
        $this->identifiedIssue = $identifiedIssue;

        return $this;
    }

    /**
     * Get identifiedIssue
     *
     * @return string
     */
    public function getIdentifiedIssue()
    {
        return $this->identifiedIssue;
    }

    /**
     * Set solution
     *
     * @param string $solution
     *
     * @return INCIDENT
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return INCIDENT
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set database
     *
     * @param DATABASE $database
     *
     * @return INCIDENT
     */
    public function setDatabase(DATABASE $database = null)
    {
        $this->database = $database;

        return $this;
    }

    /**
     * Get database
     *
     * @return DATABASE
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set server
     *
     * @param SERVER $server
     *
     * @return INCIDENT
     */
    public function setServer(SERVER $server = null)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return SERVER
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set dba
     *
     * @param DBA $dba
     *
     * @return INCIDENT
     */
    public function setDba(DBA $dba)
    {
        $this->dba = $dba;

        return $this;
    }

    /**
     * Get dba
     *
     * @return DBA
     */
    public function getDba()
    {
        return $this->dba;
    }

    /**
     * Set requester
     *
     * @param REQUESTER $requester
     *
     * @return INCIDENT
     */
    public function setRequester(REQUESTER $requester)
    {
        $this->requester = $requester;

        return $this;
    }

    /**
     * Get requester
     *
     * @return REQUESTER
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Add statusT
     *
     * @param INCIDENTSTATUSCHANGE $statusT
     *
     * @return INCIDENT
     */
    public function addStatusT(INCIDENTSTATUSCHANGE $statusT)
    {
        $this->statusT[] = $statusT;

        return $this;
    }

    /**
     * Remove statusT
     *
     * @param INCIDENTSTATUSCHANGE $statusT
     */
    public function removeStatusT(INCIDENTSTATUSCHANGE $statusT)
    {
        $this->statusT->removeElement($statusT);
    }

    /**
     * Get statusT
     *
     * @return Collection
     */
    public function getStatusT()
    {
        return $this->statusT;
    }
}
