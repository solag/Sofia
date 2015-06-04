<?php

namespace A2F\SofiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * 
 *
 * @ORM\MappedSuperClass
 * 
 */
abstract class USER implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USER_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_LAST_NAME", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_FIRSTNAME", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_LANDLINE_PHONE_NUMBER", type="string", length=255)
     */
    private $landLinePhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_MOBILE_PHONE_NUMBER", type="string", length=255)
     */
    private $mobilePhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_EMAIL", type="string", length=255)
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="USER_ROLES", type="array")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_SALT", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_USERNAME", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_PASSWORD", type="string", length=255)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="USER_LIVE", type="boolean")
     */
    private $live;
    
    public function __construct() 
        {
            $this->roles = array();
        }

    public function isEqualTo(UserInterface $user)
    {
        return $this->username === $user->getUsername();
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
     * Set lastName
     *
     * @param string $lastName
     * @return USER
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return USER
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set landLinePhoneNumber
     *
     * @param string $landLinePhoneNumber
     * @return USER
     */
    public function setLandLinePhoneNumber($landLinePhoneNumber)
    {
        $this->landLinePhoneNumber = $landLinePhoneNumber;

        return $this;
    }

    /**
     * Get landLinePhoneNumber
     *
     * @return string 
     */
    public function getLandLinePhoneNumber()
    {
        return $this->landLinePhoneNumber;
    }

    /**
     * Set mobilePhoneNumber
     *
     * @param string $mobilePhoneNumber
     * @return USER
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;

        return $this;
    }

    /**
     * Get mobilePhoneNumber
     *
     * @return string 
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return USER
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

  

    /**
     * Set salt
     *
     * @param string $salt
     * @return USER
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

  

    /**
     * Set password
     *
     * @param string $password
     * @return USER
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set live
     *
     * @param boolean $live
     * @return USER
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
     * Set username
     *
     * @param string $username
     *
     * @return USER
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    
     public function eraseCredentials()
    {
        
    }

    

 

    public function addRoles($roles) 
        {
            $this->roles[] = $roles;
            return $this;
        }
    public function getRoles() 
            {
                return $this->roles;
            }
}
