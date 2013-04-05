<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userssession
 *
 * @ORM\Table(name="usersSession")
 * @ORM\Entity
 */
class Userssession
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
     * @var string
     *
     * @ORM\Column(name="sessionKey", type="string", length=255, nullable=false)
     */
    private $sessionkey;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionData", type="text", nullable=true)
     */
    private $sessiondata;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStarted", type="datetime", nullable=false)
     */
    private $datestarted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateActive", type="datetime", nullable=false)
     */
    private $dateactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnded", type="datetime", nullable=true)
     */
    private $dateended;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sessionkey
     *
     * @param string $sessionkey
     * @return Userssession
     */
    public function setSessionkey($sessionkey)
    {
        $this->sessionkey = $sessionkey;
    
        return $this;
    }

    /**
     * Get sessionkey
     *
     * @return string 
     */
    public function getSessionkey()
    {
        return $this->sessionkey;
    }

    /**
     * Set sessiondata
     *
     * @param string $sessiondata
     * @return Userssession
     */
    public function setSessiondata($sessiondata)
    {
        $this->sessiondata = $sessiondata;
    
        return $this;
    }

    /**
     * Get sessiondata
     *
     * @return string 
     */
    public function getSessiondata()
    {
        return $this->sessiondata;
    }

    /**
     * Set datestarted
     *
     * @param \DateTime $datestarted
     * @return Userssession
     */
    public function setDatestarted($datestarted)
    {
        $this->datestarted = $datestarted;
    
        return $this;
    }

    /**
     * Get datestarted
     *
     * @return \DateTime 
     */
    public function getDatestarted()
    {
        return $this->datestarted;
    }

    /**
     * Set dateactive
     *
     * @param \DateTime $dateactive
     * @return Userssession
     */
    public function setDateactive($dateactive)
    {
        $this->dateactive = $dateactive;
    
        return $this;
    }

    /**
     * Get dateactive
     *
     * @return \DateTime 
     */
    public function getDateactive()
    {
        return $this->dateactive;
    }

    /**
     * Set dateended
     *
     * @param \DateTime $dateended
     * @return Userssession
     */
    public function setDateended($dateended)
    {
        $this->dateended = $dateended;
    
        return $this;
    }

    /**
     * Get dateended
     *
     * @return \DateTime 
     */
    public function getDateended()
    {
        return $this->dateended;
    }

    /**
     * Set userid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $userid
     * @return Userssession
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