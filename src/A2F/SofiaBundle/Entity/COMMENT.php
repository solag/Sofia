<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COMMENT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\COMMENTRepository")
 */
class COMMENT
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="COM_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="COM_CONTENT", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="COM_CREATION_DATE", type="datetime")
     */
    private $creationdate;
    
    /**
     * @var INCIDENT
     * @ORM\ManyToOne(targetEntity="INCIDENT")
     * @ORM\JoinColumn(name="COM_INC_ID", referencedColumnName="INC_ID", nullable=false)
     */
    private $incident;
    
    /**
     * @var USER
     * @ORM\ManyToOne(targetEntity="USER")
     * @ORM\JoinColumn(name="COM_USER_ID", referencedColumnName="USER_ID", nullable=false)
     */
    private $user;

    
    
    
    public function __construct()
        {
            $this->creationdate = new \DateTime();
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
     * Set content
     *
     * @param string $content
     *
     * @return COMMENT
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return COMMENT
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set incident
     *
     * @param \A2F\SofiaBundle\Entity\INCIDENT $incident
     *
     * @return COMMENT
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
     * Set user
     *
     * @param \A2F\SofiaBundle\Entity\USER $user
     *
     * @return COMMENT
     */
    public function setUser(\A2F\SofiaBundle\Entity\USER $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \A2F\SofiaBundle\Entity\USER
     */
    public function getUser()
    {
        return $this->user;
    }
}
