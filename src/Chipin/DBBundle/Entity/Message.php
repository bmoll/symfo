<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="parentMsgID", type="string", length=255, nullable=true)
     */
    private $parentmsgid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=false)
     */
    private $subject;

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
     *   @ORM\JoinColumn(name="recipientID", referencedColumnName="id")
     * })
     */
    private $recipientid;

    /**
     * @var \Frontuser
     *
     * @ORM\ManyToOne(targetEntity="Frontuser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="senderID", referencedColumnName="id")
     * })
     */
    private $senderid;

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
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentmsgid
     *
     * @param string $parentmsgid
     * @return Message
     */
    public function setParentmsgid($parentmsgid)
    {
        $this->parentmsgid = $parentmsgid;
    
        return $this;
    }

    /**
     * Get parentmsgid
     *
     * @return string 
     */
    public function getParentmsgid()
    {
        return $this->parentmsgid;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Message
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
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * @return Message
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

    /**
     * Set senderid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $senderid
     * @return Message
     */
    public function setSenderid(\Chipin\DBBundle\Entity\Frontuser $senderid = null)
    {
        $this->senderid = $senderid;
    
        return $this;
    }

    /**
     * Get senderid
     *
     * @return \Chipin\DBBundle\Entity\Frontuser 
     */
    public function getSenderid()
    {
        return $this->senderid;
    }
}