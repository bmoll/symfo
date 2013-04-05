<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Balance
 *
 * @ORM\Table(name="balance")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Balance
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
     * @var float
     *
     * @ORM\Column(name="sum", type="decimal", nullable=false)
     */
    private $sum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdated", type="datetime", nullable=true)
     */
    private $dateupdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=true)
     */
    private $datedeleted;

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
     * @var \Frontuser
     *
     * @ORM\ManyToOne(targetEntity="Frontuser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerUserID", referencedColumnName="id")
     * })
     */
    private $owneruserid;

    /**
     * @var \Chip
     *
     * @ORM\ManyToOne(targetEntity="Chip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerChipID", referencedColumnName="id")
     * })
     */
    private $ownerchipid;



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
     * Set sum
     *
     * @param float $sum
     * @return Balance
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    
        return $this;
    }

    /**
     * Get sum
     *
     * @return float 
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Balance
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
     * Set dateupdated
     *
     * @param \DateTime $dateupdated
     * @return Balance
     */
    public function setDateupdated($dateupdated)
    {
        $this->dateupdated = $dateupdated;
    
        return $this;
    }

    /**
     * Get dateupdated
     *
     * @return \DateTime 
     */
    public function getDateupdated()
    {
        return $this->dateupdated;
    }

    /**
     * Set datedeleted
     *
     * @param \DateTime $datedeleted
     * @return Balance
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
     * Set currencyid
     *
     * @param \Chipin\DBBundle\Entity\Currency $currencyid
     * @return Balance
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

    /**
     * Set owneruserid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $owneruserid
     * @return Balance
     */
    public function setOwneruserid(\Chipin\DBBundle\Entity\Frontuser $owneruserid = null)
    {
        $this->owneruserid = $owneruserid;
    
        return $this;
    }

    /**
     * Get owneruserid
     *
     * @return \Chipin\DBBundle\Entity\Frontuser 
     */
    public function getOwneruserid()
    {
        return $this->owneruserid;
    }

    /**
     * Set ownerchipid
     *
     * @param \Chipin\DBBundle\Entity\Chip $ownerchipid
     * @return Balance
     */
    public function setOwnerchipid(\Chipin\DBBundle\Entity\Chip $ownerchipid = null)
    {
        $this->ownerchipid = $ownerchipid;
    
        return $this;
    }

    /**
     * Get ownerchipid
     *
     * @return \Chipin\DBBundle\Entity\Chip 
     */
    public function getOwnerchipid()
    {
        return $this->ownerchipid;
    }
}