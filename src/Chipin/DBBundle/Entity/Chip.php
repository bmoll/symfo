<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chip
 *
 * @ORM\Table(name="chip")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Chip
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NICE6")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=false)
     */
    private $subject;

    /**
     * @var float
     *
     * @ORM\Column(name="nuclearSum", type="decimal", nullable=false)
     */
    private $nuclearsum;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibility", type="integer", nullable=false)
     */
    private $visibility;

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
     * @ORM\Column(name="dateStarts", type="datetime", nullable=true)
     */
    private $datestarts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnds", type="datetime", nullable=true)
     */
    private $dateends;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateActivated", type="datetime", nullable=true)
     */
    private $dateactivated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=true)
     */
    private $datedeleted;

    /**
     * @var \Chipsstatus
     *
     * @ORM\ManyToOne(targetEntity="Chipsstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chipsStatusID", referencedColumnName="id")
     * })
     */
    private $chipsstatusid;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currencyID", referencedColumnName="id")
     * })
     */
    private $currencyid;



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
     * Set subject
     *
     * @param string $subject
     * @return Chip
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
     * Set nuclearsum
     *
     * @param float $nuclearsum
     * @return Chip
     */
    public function setNuclearsum($nuclearsum)
    {
        $this->nuclearsum = $nuclearsum;
    
        return $this;
    }

    /**
     * Get nuclearsum
     *
     * @return float 
     */
    public function getNuclearsum()
    {
        return $this->nuclearsum;
    }

    /**
     * Set visibility
     *
     * @param integer $visibility
     * @return Chip
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    
        return $this;
    }

    /**
     * Get visibility
     *
     * @return integer 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Chip
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
     * @return Chip
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
     * Set datestarts
     *
     * @param \DateTime $datestarts
     * @return Chip
     */
    public function setDatestarts($datestarts)
    {
        $this->datestarts = $datestarts;
    
        return $this;
    }

    /**
     * Get datestarts
     *
     * @return \DateTime 
     */
    public function getDatestarts()
    {
        return $this->datestarts;
    }

    /**
     * Set dateends
     *
     * @param \DateTime $dateends
     * @return Chip
     */
    public function setDateends($dateends)
    {
        $this->dateends = $dateends;
    
        return $this;
    }

    /**
     * Get dateends
     *
     * @return \DateTime 
     */
    public function getDateends()
    {
        return $this->dateends;
    }

    /**
     * Set dateactivated
     *
     * @param \DateTime $dateactivated
     * @return Chip
     */
    public function setDateactivated($dateactivated)
    {
        $this->dateactivated = $dateactivated;
    
        return $this;
    }

    /**
     * Get dateactivated
     *
     * @return \DateTime 
     */
    public function getDateactivated()
    {
        return $this->dateactivated;
    }

    /**
     * Set datedeleted
     *
     * @param \DateTime $datedeleted
     * @return Chip
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
     * Set chipsstatusid
     *
     * @param \Chipin\DBBundle\Entity\Chipsstatus $chipsstatusid
     * @return Chip
     */
    public function setChipsstatusid(\Chipin\DBBundle\Entity\Chipsstatus $chipsstatusid = null)
    {
        $this->chipsstatusid = $chipsstatusid;
    
        return $this;
    }

    /**
     * Get chipsstatusid
     *
     * @return \Chipin\DBBundle\Entity\Chipsstatus 
     */
    public function getChipsstatusid()
    {
        return $this->chipsstatusid;
    }

    /**
     * Set currencyid
     *
     * @param \Chipin\DBBundle\Entity\Currency $currencyid
     * @return Chip
     */
    public function setCurrencyid(\Chipin\DBBundle\Entity\Currency $currencyid = null)
    {
        $this->currencyid = $currencyid;
    
        return $this;
    }

    /**
     * Get currencyid
     *
     * @return \Chipin\DBBundle\Entity\Currency 
     */
    public function getCurrencyid()
    {
        return $this->currencyid;
    }
}