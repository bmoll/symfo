<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NICE16")
     */
    private $id;

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
     * @var \Chip
     *
     * @ORM\ManyToOne(targetEntity="Chip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentChipID", referencedColumnName="id")
     * })
     */
    private $parentchipid;

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
     * @var \Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentCommentID", referencedColumnName="id")
     * })
     */
    private $parentcommentid;


    /**
     * @ORM\PrePersist
     */

    public function setInitData() {

        $currentDate = new \DateTime();
        $this->setDatecreated($currentDate);
        $this->setDateedited($currentDate);
            
        // @ORM\HasLifecycleCallbacks()
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
     * Set body
     *
     * @param string $body
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * Set parentchipid
     *
     * @param \Chipin\DBBundle\Entity\Chip $parentchipid
     * @return Comment
     */
    public function setParentchipid(\Chipin\DBBundle\Entity\Chip $parentchipid = null)
    {
        $this->parentchipid = $parentchipid;
    
        return $this;
    }

    /**
     * Get parentchipid
     *
     * @return \Chipin\DBBundle\Entity\Chip 
     */
    public function getParentchipid()
    {
        return $this->parentchipid;
    }

    /**
     * Set senderid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $senderid
     * @return Comment
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

    /**
     * Set parentcommentid
     *
     * @param \Chipin\DBBundle\Entity\Comment $parentcommentid
     * @return Comment
     */
    public function setParentcommentid(\Chipin\DBBundle\Entity\Comment $parentcommentid = null)
    {
        $this->parentcommentid = $parentcommentid;
    
        return $this;
    }

    /**
     * Get parentcommentid
     *
     * @return \Chipin\DBBundle\Entity\Comment 
     */
    public function getParentcommentid()
    {
        return $this->parentcommentid;
    }
}