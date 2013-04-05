<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersaccount
 *
 * @ORM\Table(name="usersAccount")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Usersaccount
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
     * @ORM\Column(name="bank", type="string", length=255, nullable=false)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=false)
     */
    private $number;

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
     * @var \Usersaddress
     *
     * @ORM\ManyToOne(targetEntity="Usersaddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addressID", referencedColumnName="id")
     * })
     */
    private $addressid;



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
     * @return Usersaccount
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
     * Set bank
     *
     * @param string $bank
     * @return Usersaccount
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    
        return $this;
    }

    /**
     * Get bank
     *
     * @return string 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Usersaccount
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Usersaccount
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
     * @return Usersaccount
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
     * @return Usersaccount
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
     * @return Usersaccount
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

    /**
     * Set addressid
     *
     * @param \Chipin\DBBundle\Entity\Usersaddress $addressid
     * @return Usersaccount
     */
    public function setAddressid(\Chipin\DBBundle\Entity\Usersaddress $addressid = null)
    {
        $this->addressid = $addressid;
    
        return $this;
    }

    /**
     * Get addressid
     *
     * @return \Chipin\DBBundle\Entity\Usersaddress 
     */
    public function getAddressid()
    {
        return $this->addressid;
    }
}