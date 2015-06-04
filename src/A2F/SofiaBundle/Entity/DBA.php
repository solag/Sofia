<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBA
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\DBARepository")
 */
class DBA extends USER
{
    

    /**
     * @var string
     *
     * @ORM\Column(name="DBA_TRIGRAPH", type="string", length=3)
     */
    private $trigraph;



    

    /**
     * Set trigraph
     *
     * @param string $trigraph
     * @return DBA
     */
    public function setTrigraph($trigraph)
    {
        $this->trigraph = $trigraph;

        return $this;
    }

    /**
     * Get trigraph
     *
     * @return string 
     */
    public function getTrigraph()
    {
        return $this->trigraph;
    }
}
