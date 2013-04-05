<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Payment
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
     * @ORM\Column(name="originData", type="text", nullable=false)
     */
    private $origindata;

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
     * @return Payment
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
     * @return Payment
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
     * Set origindata
     *
     * @param string $origindata
     * @return Payment
     */
    public function setOrigindata($origindata)
    {
        $this->origindata = $origindata;
    
        return $this;
    }

    /**
     * Get origindata
     *
     * @return string 
     */
    public function getOrigindata()
    {
        return $this->origindata;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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