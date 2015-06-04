<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 *
 * @ORM\MappedSuperClass
 */
class SCOPE
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SC_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SC_NAME", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="SC_SIZE", type="string", length=255)
     */
    protected $size;

    /**
     * @var string
     *
     * @ORM\Column(name="SC_NOTES", type="text")
     */
    protected $notes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SC_LIVE", type="boolean")
     */
    protected $live;

    /**
     * @var CRITICALITY
     * @ORM\ManyToOne(targetEntity="CRITICALITY")
     * @ORM\JoinColumn(name="CRIT_ID", referencedColumnName="CRIT_ID", nullable=false)
     */
    protected $criticality;
    
    /**
     *
     * @var CLIENT
     * @ORM\ManyToOne(targetEntity="CLIENT")
     * @ORM\JoinColumn(name="SC_CLT_ID", referencedColumnName="CLT_ID", nullable=false)
     */
    protected $client;

    

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
     * @return SCOPE
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
     * Set size
     *
     * @param string $size
     *
     * @return SCOPE
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return SCOPE
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
     * Set live
     *
     * @param boolean $live
     *
     * @return SCOPE
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * Get live
     *
     * @return boolean
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * Set criticality
     *
     * @param \A2F\SofiaBundle\Entity\CRITICALITY $criticality
     *
     * @return SCOPE
     */
    public function setCriticality(\A2F\SofiaBundle\Entity\CRITICALITY $criticality)
    {
        $this->criticality = $criticality;

        return $this;
    }

    /**
     * Get criticality
     *
     * @return \A2F\SofiaBundle\Entity\CRITICALITY
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Set client
     *
     * @param \A2F\SofiaBundle\Entity\CLIENT $client
     *
     * @return SCOPE
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
}
