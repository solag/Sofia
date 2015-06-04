<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * STATUS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\STATUSRepository")
 */
class STATUS
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IS_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_NAME", type="string", length=255)
     */
    private $name;

    /**
     *
     * @var INCIDENT_STATUS_CHANGE
     * @ORM\OneToMany(targetEntity="INCIDENTSTATUSCHANGE", mappedBy="status")
     * @ORM\JoinColumn(name="IS_ISCH_ID", referencedColumnName="IS_ID", nullable=false)
     */
    private $statusIncident;
    
    /**
     *
     * @var STATUSCATEGORY
     * @ORM\ManyToOne(targetEntity="STATUSCATEGORY")
     * @ORM\JoinColumn(name="IS_STC_ID", referencedColumnName="STC_ID", nullable=false)
     */
    
    private $category;
    

   
    public function __construct()
    {
        $this->statusIncident = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return STATUS
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add statusIncident
     *
     * @param \A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGE $statusIncident
     *
     * @return STATUS
     */
    public function addStatusIncident(\A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGE $statusIncident)
    {
        $this->statusIncident[] = $statusIncident;

        return $this;
    }

    /**
     * Remove statusIncident
     *
     * @param \A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGE $statusIncident
     */
    public function removeStatusIncident(\A2F\SofiaBundle\Entity\INCIDENTSTATUSCHANGE $statusIncident)
    {
        $this->statusIncident->removeElement($statusIncident);
    }

    /**
     * Get statusIncident
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatusIncident()
    {
        return $this->statusIncident;
    }

    /**
     * Set category
     *
     * @param \A2F\SofiaBundle\Entity\STATUSCATEGORY $category
     *
     * @return STATUS
     */
    public function setCategory(\A2F\SofiaBundle\Entity\STATUSCATEGORY $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \A2F\SofiaBundle\Entity\STATUSCATEGORY
     */
    public function getCategory()
    {
        return $this->category;
    }
}
