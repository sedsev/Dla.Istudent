<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\ActivityRepository")
 */
class Activity
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfConnexion", type="date")
     */
    private $dateOfConnexion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfDeconnexion", type="date")
     */
    private $dateOfDeconnexion;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="DlaIstudent\UserBundle\Entity\User", inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private  $user;
    
     /**
     * 
     * @ORM\OneToMany(targetEntity="DlaIstudent\UserBundle\Entity\Operation", mappedBy="activity")
     */
    
    private  $operations;


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
     * Set dateOfConnexion
     *
     * @param \DateTime $dateOfConnexion
     * @return Activity
     */
    public function setDateOfConnexion($dateOfConnexion)
    {
        $this->dateOfConnexion = $dateOfConnexion;

        return $this;
    }

    /**
     * Get dateOfConnexion
     *
     * @return \DateTime 
     */
    public function getDateOfConnexion()
    {
        return $this->dateOfConnexion;
    }

    /**
     * Set dateOfDeconnexion
     *
     * @param \DateTime $dateOfDeconnexion
     * @return Activity
     */
    public function setDateOfDeconnexion($dateOfDeconnexion)
    {
        $this->dateOfDeconnexion = $dateOfDeconnexion;

        return $this;
    }

    /**
     * Get dateOfDeconnexion
     *
     * @return \DateTime 
     */
    public function getDateOfDeconnexion()
    {
        return $this->dateOfDeconnexion;
    }

    /**
     * Set user
     *
     * @param \DlaIstudent\UserBundle\Entity\User $user
     * @return Activity
     */
    public function setUser(\DlaIstudent\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DlaIstudent\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add operations
     *
     * @param \DlaIstudent\UserBundle\Entity\Operation $operations
     * @return Activity
     */
    public function addOperation(\DlaIstudent\UserBundle\Entity\Operation $operations)
    {
        $this->operations[] = $operations;

        return $this;
    }

    /**
     * Remove operations
     *
     * @param \DlaIstudent\UserBundle\Entity\Operation $operations
     */
    public function removeOperation(\DlaIstudent\UserBundle\Entity\Operation $operations)
    {
        $this->operations->removeElement($operations);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
