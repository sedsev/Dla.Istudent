<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="url", type="string", length=120)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=60)
     */
    private $alt;
    
    /**
     * @ORM\OneToMany(targetEntity="DlaIstudent\UserBundle\Entity\ImageActivity", mappedBy="image")
     */
    
    private $activities;
    
    /**
     * @ var FileUpload
     */
    private $fileUpload;


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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activities
     *
     * @param \DlaIstudent\UserBundle\Entity\ImageActivity $activities
     * @return Image
     */
    public function addActivity(\DlaIstudent\UserBundle\Entity\ImageActivity $activities)
    {
        $this->activities[] = $activities;

        return $this;
    }

    /**
     * Remove activities
     *
     * @param \DlaIstudent\UserBundle\Entity\ImageActivity $activities
     */
    public function removeActivity(\DlaIstudent\UserBundle\Entity\ImageActivity $activities)
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
}
