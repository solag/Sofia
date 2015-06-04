<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CONTRACTTYPE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\CONTRACTTYPERepository")
 */
class CONTRACTTYPE
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CT_CODE", type="string", length=10)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_NAME", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CT_NOTES", type="text", nullable=true)
     */
    private $notes;


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
     * Set code
     *
     * @param string $code
     * @return CONTRACTTYPE
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CONTRACTTYPE
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
     * Set notes
     *
     * @param string $notes
     *
     * @return CONTRACTTYPE
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
}
