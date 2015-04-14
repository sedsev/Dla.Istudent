<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\UserRepository")
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
     * @ORM\Column(name="phoneNumeber", type="string", length=20)
     */
    private $phoneNumeber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60)
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
     * Set phoneNumeber
     *
     * @param string $phoneNumeber
     * @return User
     */
    public function setPhoneNumeber($phoneNumeber)
    {
        $this->phoneNumeber = $phoneNumeber;

        return $this;
    }

    /**
     * Get phoneNumeber
     *
     * @return string 
     */
    public function getPhoneNumeber()
    {
        return $this->phoneNumeber;
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
}
