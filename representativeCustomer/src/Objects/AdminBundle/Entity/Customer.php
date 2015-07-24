<?php

namespace Objects\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Objects\AdminBundle\Entity\CustomerRepository")
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="nationalID", type="integer")
     */
    private $nationalID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="mobile", type="string", length=15)
     */
    private $mobile;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Objects\AdminBundle\Entity\Representative",inversedBy="customers")
     * @ORM\JoinColumn(name="representative_id", referencedColumnName="id", nullable=true)
     */
    private $representative;


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
     * @return Customer
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
     * Set nationalID
     *
     * @param integer $nationalID
     * @return Customer
     */
    public function setNationalID($nationalID)
    {
        $this->nationalID = $nationalID;

        return $this;
    }

    /**
     * Get nationalID
     *
     * @return integer 
     */
    public function getNationalID()
    {
        return $this->nationalID;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Customer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Customer
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set representative
     *
     * @param \Objects\AdminBundle\Entity\Representative $representative
     * @return Customer
     */
    public function setRepresentative(\Objects\AdminBundle\Entity\Representative $representative = null)
    {
        $this->representative = $representative;

        return $this;
    }

    /**
     * Get representative
     *
     * @return \Objects\AdminBundle\Entity\Representative 
     */
    public function getRepresentative()
    {
        return $this->representative;
    }
    
    public function __construct() {
        $this->createdAt = new \DateTime();
    }
    
    public function __toString() {
        if($this->name)
            return $this->name;
        else    
            return "Customer";
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
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
     * Set city
     *
     * @param string $city
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
