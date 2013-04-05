<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersaddress
 *
 * @ORM\Table(name="usersAddress")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Usersaddress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=255, nullable=false)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="houseNo", type="string", length=255, nullable=false)
     */
    private $houseno;

    /**
     * @var string
     *
     * @ORM\Column(name="apartmentNo", type="string", length=255, nullable=false)
     */
    private $apartmentno;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNo", type="string", length=255, nullable=false)
     */
    private $phoneno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdited", type="datetime", nullable=false)
     */
    private $dateedited;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=true)
     */
    private $datedeleted;

    /**
     * @var \Frontuser
     *
     * @ORM\ManyToOne(targetEntity="Frontuser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userID", referencedColumnName="id")
     * })
     */
    private $userid;


    /**
     * @ORM\PrePersist
     */

    public function setInitData() {

        $currentDate = new \DateTime();
        $this->setDatecreated($currentDate);
        $this->setDateedited($currentDate);
            
    }

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
     * Set status
     *
     * @param integer $status
     * @return Usersaddress
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Usersaddress
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Usersaddress
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return Usersaddress
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    
        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Usersaddress
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set houseno
     *
     * @param string $houseno
     * @return Usersaddress
     */
    public function setHouseno($houseno)
    {
        $this->houseno = $houseno;
    
        return $this;
    }

    /**
     * Get houseno
     *
     * @return string 
     */
    public function getHouseno()
    {
        return $this->houseno;
    }

    /**
     * Set apartmentno
     *
     * @param string $apartmentno
     * @return Usersaddress
     */
    public function setApartmentno($apartmentno)
    {
        $this->apartmentno = $apartmentno;
    
        return $this;
    }

    /**
     * Get apartmentno
     *
     * @return string 
     */
    public function getApartmentno()
    {
        return $this->apartmentno;
    }

    /**
     * Set phoneno
     *
     * @param string $phoneno
     * @return Usersaddress
     */
    public function setPhoneno($phoneno)
    {
        $this->phoneno = $phoneno;
    
        return $this;
    }

    /**
     * Get phoneno
     *
     * @return string 
     */
    public function getPhoneno()
    {
        return $this->phoneno;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Usersaddress
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;
    
        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime 
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set dateedited
     *
     * @param \DateTime $dateedited
     * @return Usersaddress
     */
    public function setDateedited($dateedited)
    {
        $this->dateedited = $dateedited;
    
        return $this;
    }

    /**
     * Get dateedited
     *
     * @return \DateTime 
     */
    public function getDateedited()
    {
        return $this->dateedited;
    }

    /**
     * Set datedeleted
     *
     * @param \DateTime $datedeleted
     * @return Usersaddress
     */
    public function setDatedeleted($datedeleted)
    {
        $this->datedeleted = $datedeleted;
    
        return $this;
    }

    /**
     * Get datedeleted
     *
     * @return \DateTime 
     */
    public function getDatedeleted()
    {
        return $this->datedeleted;
    }

    /**
     * Set userid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $userid
     * @return Usersaddress
     */
    public function setUserid(\Chipin\DBBundle\Entity\Frontuser $userid = null)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return \Chipin\DBBundle\Entity\Frontuser 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}