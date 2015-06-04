<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NOTIFICATION
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\NOTIFICATIONRepository")
 */
class NOTIFICATION
{
    
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="NOT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_CONTENT", type="string", length=255)
     */
    private $content;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NOT_CREATION_DATE", type="datetime")
     */
    private $creationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOT_TYPE", type="smallint")
     */
    private $type;
    
    /**
     * @var CLIENT
     * @ORM\ManyToOne(targetEntity="CLIENT")
     * @ORM\JoinColumn(name="NOT_CLT_ID", referencedColumnName="CLT_ID", nullable=false)
     */
    private $client;


    public function __construct() 
        {
            $this->creationDate = new \DateTime();
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
     * @return NOTIFICATION
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return NOTIFICATION
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return NOTIFICATION
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set client
     *
     * @param \A2F\SofiaBundle\Entity\CLIENT $client
     *
     * @return NOTIFICATION
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
