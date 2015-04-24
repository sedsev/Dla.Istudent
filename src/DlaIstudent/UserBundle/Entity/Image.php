<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
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
     * this is the file extension
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
    public $photo;
    
    /**
     *
     * @var type 
     */
    private $lastFileExtension;


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
    
    public function setPhoto(\Symfony\Component\HttpFoundation\File\UploadedFile $photo = null)
    {
        $this->photo = $photo;
        if(null !== $this->url){
            $this ->registerSuppressFileName();
            $this -> url = null;
            $this -> alt = null;
        }
    }
    
    /**
     * 
     * @return type
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function loadImage() {
        if(null == $this->photo){
            return;
        }
        $this -> url = $this -> photo -> guessExtension(); 
        $this -> alt = $this -> photo -> getClientOriginalName();
    }
    
    /**
     * 
     * @return type
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function saveFile() {
        if(null === $this->photo){
            return;
        }
        if(null !== $this->lastFileExtension){
            $this->suppressImage();
        }
        $this->photo->move($this->getUploadsRootDir(), $this->id.'.'.$this->url);
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function registerSuppressFileName() {
        $this -> lastFileExtensionileExtension = $this->url;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function suppressImage() {
        $suppressFileName = $this->getUploadsRootDir().'/'.  $this->id.'.'.$this->lastFileExtension;
            if(file_exists($suppressFileName)){
                unlink($suppressFileName);
            }
    }
    
    public function getUploadsRootDir() {
        return __DIR__.'..\..\..\web'.$this->getUploadsDir();
    }
    
    public function getUploadsDir() {
        return 'uploads\image';
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
