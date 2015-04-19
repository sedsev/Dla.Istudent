<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\OperationRepository")
 */
class Operation
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
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBegin", type="datetime")
     */
    private $dateOfBegin;
    
    /**
     * @ORM\ManyToOne(targetEntity="DlaIstudent\UserBundle\Entity\Activity", inversedBy="operations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfEnd", type="datetime")
     */
    private $dateOfEnd;


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
     * Set type
     *
     * @param string $type
     * @return Operation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Operation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateOfBegin
     *
     * @param \DateTime $dateOfBegin
     * @return Operation
     */
    public function setDateOfBegin($dateOfBegin)
    {
        $this->dateOfBegin = $dateOfBegin;

        return $this;
    }

    /**
     * Get dateOfBegin
     *
     * @return \DateTime 
     */
    public function getDateOfBegin()
    {
        return $this->dateOfBegin;
    }

    /**
     * Set dateOfEnd
     *
     * @param \DateTime $dateOfEnd
     * @return Operation
     */
    public function setDateOfEnd($dateOfEnd)
    {
        $this->dateOfEnd = $dateOfEnd;

        return $this;
    }

    /**
     * Get dateOfEnd
     *
     * @return \DateTime 
     */
    public function getDateOfEnd()
    {
        return $this->dateOfEnd;
    }

    /**
     * Set activity
     *
     * @param \DlaIstudent\UserBundle\Entity\Activity $activity
     * @return Operation
     */
    public function setActivity(\DlaIstudent\UserBundle\Entity\Activity $activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \DlaIstudent\UserBundle\Entity\Activity 
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
