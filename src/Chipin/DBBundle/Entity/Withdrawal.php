<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Withdrawal
 *
 * @ORM\Table(name="withdrawal")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Withdrawal
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="destinationData", type="text", nullable=false)
     */
    private $destinationdata;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProcessed", type="datetime", nullable=true)
     */
    private $dateprocessed;

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
     * @var \Balance
     *
     * @ORM\ManyToOne(targetEntity="Balance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="balanceID", referencedColumnName="id")
     * })
     */
    private $balanceid;




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
     * @return Withdrawal
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
     * Set status
     *
     * @param integer $status
     * @return Withdrawal
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
     * Set destinationdata
     *
     * @param string $destinationdata
     * @return Withdrawal
     */
    public function setDestinationdata($destinationdata)
    {
        $this->destinationdata = $destinationdata;
    
        return $this;
    }

    /**
     * Get destinationdata
     *
     * @return string 
     */
    public function getDestinationdata()
    {
        return $this->destinationdata;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Withdrawal
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
     * Set dateprocessed
     *
     * @param \DateTime $dateprocessed
     * @return Withdrawal
     */
    public function setDateprocessed($dateprocessed)
    {
        $this->dateprocessed = $dateprocessed;
    
        return $this;
    }

    /**
     * Get dateprocessed
     *
     * @return \DateTime 
     */
    public function getDateprocessed()
    {
        return $this->dateprocessed;
    }

    /**
     * Set currencyid
     *
     * @param \Chipin\DBBundle\Entity\Currency $currencyid
     * @return Withdrawal
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
     * Set balanceid
     *
     * @param \Chipin\DBBundle\Entity\Balance $balanceid
     * @return Withdrawal
     */
    public function setBalanceid(\Chipin\DBBundle\Entity\Balance $balanceid = null)
    {
        $this->balanceid = $balanceid;
    
        return $this;
    }

    /**
     * Get balanceid
     *
     * @return \Chipin\DBBundle\Entity\Balance 
     */
    public function getBalanceid()
    {
        return $this->balanceid;
    }
}