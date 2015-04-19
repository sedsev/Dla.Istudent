<?php

namespace DlaIstudent\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageActivity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DlaIstudent\UserBundle\Entity\ImageActivityRepository")
 */
class ImageActivity
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
     * @ORM\Column(name="dateOfModification", type="datetime")
     */
    private $dateOfModification;

    /**
     * @var string
     *
     * @ORM\Column(name="urlOfLastFile", type="string", length=120)
     */
    private $urlOfLastFile;
    
    /**
     * @ORM\ManyToOne(targetEntity="DlaIstudent\UserBundle\Entity\Image", inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="urlOfNewFile", type="string", length=120)
     */
    private $urlOfNewFile;


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
     * Set dateOfModification
     *
     * @param \DateTime $dateOfModification
     * @return ImageActivity
     */
    public function setDateOfModification($dateOfModification)
    {
        $this->dateOfModification = $dateOfModification;

        return $this;
    }

    /**
     * Get dateOfModification
     *
     * @return \DateTime 
     */
    public function getDateOfModification()
    {
        return $this->dateOfModification;
    }

    /**
     * Set urlOfLastFile
     *
     * @param string $urlOfLastFile
     * @return ImageActivity
     */
    public function setUrlOfLastFile($urlOfLastFile)
    {
        $this->urlOfLastFile = $urlOfLastFile;

        return $this;
    }

    /**
     * Get urlOfLastFile
     *
     * @return string 
     */
    public function getUrlOfLastFile()
    {
        return $this->urlOfLastFile;
    }

    /**
     * Set urlOfNewFile
     *
     * @param string $urlOfNewFile
     * @return ImageActivity
     */
    public function setUrlOfNewFile($urlOfNewFile)
    {
        $this->urlOfNewFile = $urlOfNewFile;

        return $this;
    }

    /**
     * Get urlOfNewFile
     *
     * @return string 
     */
    public function getUrlOfNewFile()
    {
        return $this->urlOfNewFile;
    }

    /**
     * Set image
     *
     * @param \DlaIstudent\UserBundle\Entity\Image $image
     * @return ImageActivity
     */
    public function setImage(\DlaIstudent\UserBundle\Entity\Image $image)
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
}
