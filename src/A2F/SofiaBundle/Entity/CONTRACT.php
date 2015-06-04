<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CONTRACT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\CONTRACTRepository")
 */
class CONTRACT
{
    


    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONT_START_DATE", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONT_END_DATE", type="datetime")
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_INITIAL_CREDIT", type="integer")
     */
    private $initialCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONT_SPENT_CREDIT", type="integer")
     */
    private $spentCredit;

    /**
     * @var string
     *
     * @ORM\Column(name="CONT_NOTES", type="text")
     */
    private $notes;
    
    /**
     * @var CONTRACTTYPE
     * @ORM\ManyToOne(targetEntity="A2F\SofiaBundle\Entity\CONTRACTTYPE")
     * @ORM\JoinColumn(name="CONT_CT_ID", referencedColumnName="CT_ID", nullable=false)
     */
    private $contractType;
    
    /**
     * @var CLIENT
     * @ORM\ManyToOne(targetEntity="CLIENT")
     * @ORM\JoinColumn(name="CONT_CLT_ID", referencedColumnName="CLT_ID", nullable=false)
     */
    private $client;

    /**
     * @var GTI
     * @ORM\ManyToOne(targetEntity="GTI")
     * @ORM\JoinColumn(name="CONT_GTI_ID", referencedColumnName="GTI_ID", nullable=false)
     */
    private $gti;


    public function __construct() 
        {
            $this->startDate = new \DateTime();
            $this->endDate = new \DateTime();
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return CONTRACT
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return CONTRACT
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set initialCredit
     *
     * @param integer $initialCredit
     *
     * @return CONTRACT
     */
    public function setInitialCredit($initialCredit)
    {
        $this->initialCredit = $initialCredit;

        return $this;
    }

    /**
     * Get initialCredit
     *
     * @return integer
     */
    public function getInitialCredit()
    {
        return $this->initialCredit;
    }

    /**
     * Set spentCredit
     *
     * @param integer $spentCredit
     *
     * @return CONTRACT
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
     * Set notes
     *
     * @param string $notes
     *
     * @return CONTRACT
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
     * Set contractType
     *
     * @param \A2F\SofiaBundle\Entity\CONTRACTTYPE $contractType
     *
     * @return CONTRACT
     */
    public function setContractType(\A2F\SofiaBundle\Entity\CONTRACTTYPE $contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return \A2F\SofiaBundle\Entity\CONTRACTTYPE
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set client
     *
     * @param \A2F\SofiaBundle\Entity\CLIENT $client
     *
     * @return CONTRACT
     */
    public function setClient(\A2F\SofiaBundle\Entity\CLIENT $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \A2F\SofiaBundle\Entity\CLIENT
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set gti
     *
     * @param \A2F\SofiaBundle\Entity\GTI $gti
     *
     * @return CONTRACT
     */
    public function setGti(\A2F\SofiaBundle\Entity\GTI $gti)
    {
        $this->gti = $gti;

        return $this;
    }

    /**
     * Get gti
     *
     * @return \A2F\SofiaBundle\Entity\GTI
     */
    public function getGti()
    {
        return $this->gti;
    }
}
