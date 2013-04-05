<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Participant
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
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role;

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
     * @var \Chip
     *
     * @ORM\ManyToOne(targetEntity="Chip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chipID", referencedColumnName="id")
     * })
     */
    private $chipid;

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
     * Set role
     *
     * @param integer $role
     * @return Participant
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Participant
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
     * @return Participant
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
     * @return Participant
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
     * Set chipid
     *
     * @param \Chipin\DBBundle\Entity\Chip $chipid
     * @return Participant
     */
    public function setChipid(\Chipin\DBBundle\Entity\Chip $chipid = null)
    {
        $this->chipid = $chipid;
    
        return $this;
    }

    /**
     * Get chipid
     *
     * @return \Chipin\DBBundle\Entity\Chip 
     */
    public function getChipid()
    {
        return $this->chipid;
    }

    /**
     * Set userid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $userid
     * @return Participant
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