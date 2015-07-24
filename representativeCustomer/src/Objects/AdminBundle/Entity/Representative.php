<?php

namespace Objects\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Representative
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Objects\AdminBundle\Entity\RepresentativeRepository")
 */
class Representative
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
     * @ORM\OneToMany(targetEntity="\Objects\AdminBundle\Entity\Customer", mappedBy="type", cascade={"persist"})
     */
    private $customers;


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
     * @return Representative
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
     * Constructor
     */
    public function __construct()
    {
        $this->customers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add customers
     *
     * @param \Objects\AdminBundle\Entity\Customer $customers
     * @return Representative
     */
    public function addCustomer(\Objects\AdminBundle\Entity\Customer $customers)
    {
        $this->customers[] = $customers;

        return $this;
    }

    /**
     * Remove customers
     *
     * @param \Objects\AdminBundle\Entity\Customer $customers
     */
    public function removeCustomer(\Objects\AdminBundle\Entity\Customer $customers)
    {
        $this->customers->removeElement($customers);
    }

    /**
     * Get customers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomers()
    {
        return $this->customers;
    }
    
    public function __toString() {
        if($this->name)
            return $this->name;
        else    
            return "Representative";
    }
}
