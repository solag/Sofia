<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SERVEROS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\SERVEROSRepository")
 */
class SERVEROS
{
    /**
     * @var integer
     *
     * @ORM\Column(name="OS_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="OS_NAME", type="string", length=255)
     */
    private $name;

    
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
     * @return SERVEROS
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
}
