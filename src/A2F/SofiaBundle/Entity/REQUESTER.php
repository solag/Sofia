<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * REQUESTER
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\REQUESTERRepository")
 */
class REQUESTER extends USER
{
 
    /**
     * @var string
     *
     * @ORM\Column(name="REQ_POSITION", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_NOTES", type="text")
     */
    private $notes;

    /**
     * @var CLIENT
     * @ORM\ManyToOne(targetEntity="CLIENT")
     * @ORM\JoinColumn(name="REQ_CLT_ID", referencedColumnName="CLT_ID", nullable=false)
     */
    private $client;

    

    /**
     * Set position
     *
     * @param string $position
     *
     * @return REQUESTER
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return REQUESTER
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
     * Set client
     *
     * @param \A2F\SofiaBundle\Entity\CLIENT $client
     *
     * @return REQUESTER
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
