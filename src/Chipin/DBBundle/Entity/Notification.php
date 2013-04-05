<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Notification
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
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpires", type="datetime", nullable=false)
     */
    private $dateexpires;

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
     *   @ORM\JoinColumn(name="recipientID", referencedColumnName="id")
     * })
     */
    private $recipientid;

    /**
     * @ORM\PrePersist
     */
    public function setInitData() {

        $currentDate = new \DateTime();
        $this->setDatecreated($currentDate);
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
     * Set type
     *
     * @param integer $type
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Notification
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Notification
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
     * Set dateexpires
     *
     * @param \DateTime $dateexpires
     * @return Notification
     */
    public function setDateexpires($dateexpires)
    {
        $this->dateexpires = $dateexpires;
    
        return $this;
    }

    /**
     * Get dateexpires
     *
     * @return \DateTime 
     */
    public function getDateexpires()
    {
        return $this->dateexpires;
    }

    /**
     * Set datedeleted
     *
     * @param \DateTime $datedeleted
     * @return Notification
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
     * Set recipientid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $recipientid
     * @return Notification
     */
    public function setRecipientid(\Chipin\DBBundle\Entity\Frontuser $recipientid = null)
    {
        $this->recipientid = $recipientid;
    
        return $this;
    }

    /**
     * Get recipientid
     *
     * @return \Chipin\DBBundle\Entity\Frontuser 
     */
    public function getRecipientid()
    {
        return $this->recipientid;
    }
}