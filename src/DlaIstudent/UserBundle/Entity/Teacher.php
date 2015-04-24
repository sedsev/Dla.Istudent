<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\TeacherRepository")
 */
class Teacher
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
     * @ORM\Column(name="quality", type="string", length=30)
     */
    private $quality;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBegin", type="date")
     */
    private $dateOfBegin;
    
    /**
     * @ORM\OneToOne(targetEntity="DlaIstudent\UserBundle\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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
     * Set quality
     *
     * @param string $quality
     * @return Teacher
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set dateOfBegin
     *
     * @param \DateTime $dateOfBegin
     * @return Teacher
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
     * Set user
     *
     * @param \DlaIstudent\UserBundle\Entity\User $user
     * @return Teacher
     */
    public function setUser(\DlaIstudent\UserBundle\Entity\User $user)
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
    
    public function getName(){
        return $this->user->getName();
    }
    public function setName($name) {
        $this->user->setName($name);
    }
    
    public function setSurname($surname)
    {
        $this->user->setSurmame($surname);

    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->user->getSurname();
    }


    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->user->setEmail($email);
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->user->getEmail();
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->user->setDateOfBirth($dateOfBirth);
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->user->getDateOfBirth();
    }
}
