<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CLIENT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="A2F\SofiaBundle\Entity\CLIENTRepository")
 */
class CLIENT
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CLT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CLT_COMPANY_NAME", type="string", length=255)
     */
    private $companyName;

    /**
     * @var image
     *
     * @ORM\Column(name="CLT_LOGO", type="blob")
     */
    private $logo;
    /**
     * @var string
     *
     * @ORM\Column(name="CLT_ADDRESS", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="CLT_POSTCODE", type="string", length=255)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="CLT_TOWN", type="string", length=255)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="CLT_PHONE_NUMBER", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CLT_LIVE", type="boolean")
     */
    private $live;

    /**
     * @var string
     *
     * @ORM\Column(name="CLT_NOTES", type="text")
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
     * Set companyName
     *
     * @param string $companyName
     * @return CLIENT
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return CLIENT
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return CLIENT
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return CLIENT
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return CLIENT
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return CLIENT
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set live
     *
     * @param boolean $live
     * @return CLIENT
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
     * Set notes
     *
     * @param string $notes
     * @return CLIENT
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
