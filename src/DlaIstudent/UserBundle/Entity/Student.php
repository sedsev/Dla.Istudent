<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * student
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\studentRepository")
 */
class Student
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
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="cycle", type="string", length=30)
     */
    private $cycle;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=120)
     */
    private $speciality;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=12, unique=true)
     */
    private $matricule;
    
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
     * Set level
     *
     * @param integer $level
     * @return student
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

    /**
     * Set cycle
     *
     * @param string $cycle
     * @return student
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return string 
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     * @return student
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string 
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return student
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set user
     *
     * @param \DlaIstudent\UserBundle\Entity\User $user
     * @return Student
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
