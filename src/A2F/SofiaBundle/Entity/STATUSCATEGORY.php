<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * STATUSCATEGORY
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\STATUSCATEGORYRepository")
 */
class STATUSCATEGORY
{
    /**
     * @var integer
     *
     * @ORM\Column(name="STC_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="STC_NAME", type="string", length=255)
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
     * @return STATUSCATEGORY
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
