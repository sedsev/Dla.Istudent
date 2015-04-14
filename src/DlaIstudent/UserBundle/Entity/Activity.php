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
}
