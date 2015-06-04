<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRITICALITY
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\CRITICALITYRepository")
 */
class CRITICALITY
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CRIT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="CRIT_LEVEL", type="smallint")
     */
    private $level;


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
     * Set level
     *
     * @param integer $level
     * @return CRITICALITY
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }
}
