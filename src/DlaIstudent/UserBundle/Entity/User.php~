<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\UserRepository")
 * @ORM\HasLifecycleCallbacks
 */
class User
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
     * @ORM\Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=60)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=20)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="date")
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    public $verifyPassword;
    
    /**
     * @ORM\ManyToMany(targetEntity="DlaIstudent\UserBundle\Entity\Rigth", cascade={"persist", "remove"})
     */
    private $rigths;
    
    /**
     * @ORM\OneToMany(targetEntity="DlaIstudent\UserBundle\Entity\Activity", mappedBy="user")
     */
    private $activities;
    
    /**
     * @ORM\OneToOne(targetEntity="DlaIstudent\UserBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="connexionState", type="boolean")
     */
    private $connexionState;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accountState", type="boolean")
     */
    private $accountState;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=8)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=60)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="placeOfBorn", type="string", length=60)
     */
    private $placeOfBorn;


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
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * @ORM\PrePersist()
     */
    public function updateUserBeforeSaved() {
        $this->accountState = FALSE;
        $this->connexionState = FALSE;
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
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
     * Set connexionState
     *
     * @param boolean $connexionState
     * @return User
     */
    public function setConnexionState($connexionState)
    {
        $this->connexionState = $connexionState;

        return $this;
    }

    /**
     * Get connexionState
     *
     * @return boolean 
     */
    public function getConnexionState()
    {
        return $this->connexionState;
    }

    /**
     * Set accountState
     *
     * @param boolean $accountState
     * @return User
     */
    public function setAccountState($accountState)
    {
        $this->accountState = $accountState;

        return $this;
    }

    /**
     * Get accountState
     *
     * @return boolean 
     */
    public function getAccountState()
    {
        return $this->accountState;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set placeOfBorn
     *
     * @param string $placeOfBorn
     * @return User
     */
    public function setPlaceOfBorn($placeOfBorn)
    {
        $this->placeOfBorn = $placeOfBorn;

        return $this;
    }

    /**
     * Get placeOfBorn
     *
     * @return string 
     */
    public function getPlaceOfBorn()
    {
        return $this->placeOfBorn;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rigths = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rigths
     *
     * @param \DlaIstudent\UserBundle\Entity\Rigth $rigths
     * @return User
     */
    public function addRigth(\DlaIstudent\UserBundle\Entity\Rigth $rigths)
    {
        $this->rigths[] = $rigths;

        return $this;
    }

    /**
     * Remove rigths
     *
     * @param \DlaIstudent\UserBundle\Entity\Rigth $rigths
     */
    public function removeRigth(\DlaIstudent\UserBundle\Entity\Rigth $rigths)
    {
        $this->rigths->removeElement($rigths);
    }

    /**
     * Get rigths
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRigths()
    {
        return $this->rigths;
    }

    /**
     * Add activities
     *
     * @param \DlaIstudent\UserBundle\Entity\Activity $activities
     * @return User
     */
    public function addActivity(\DlaIstudent\UserBundle\Entity\Activity $activities)
    {
        $this->activities[] = $activities;

        return $this;
    }

    /**
     * Remove activities
     *
     * @param \DlaIstudent\UserBundle\Entity\Activity $activities
     */
    public function removeActivity(\DlaIstudent\UserBundle\Entity\Activity $activities)
    {
        $this->activities->removeElement($activities);
    }

    /**
     * Get activities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Set image
     *
     * @param \DlaIstudent\UserBundle\Entity\Image $image
     * @return User
     */
    public function setImage(\DlaIstudent\UserBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \DlaIstudent\UserBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
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
}
