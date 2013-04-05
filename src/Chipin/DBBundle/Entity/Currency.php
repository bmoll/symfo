<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Currency
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
     * @ORM\Column(name="displayName", type="string", length=255, nullable=false)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="decimalMark", type="string", length=1, nullable=false)
     */
    private $decimalmark;

    /**
     * @var string
     *
     * @ORM\Column(name="unitName", type="string", length=255, nullable=false)
     */
    private $unitname;

    /**
     * @var string
     *
     * @ORM\Column(name="centName", type="string", length=255, nullable=false)
     */
    private $centname;

    /**
     * @var string
     *
     * @ORM\Column(name="unitSymbol", type="string", length=255, nullable=false)
     */
    private $unitsymbol;

    /**
     * @var string
     *
     * @ORM\Column(name="centSymbol", type="string", length=255, nullable=false)
     */
    private $centsymbol;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=255, nullable=false)
     */
    private $symbol;

    /**
     * @var integer
     *
     * @ORM\Column(name="symbolPosition", type="integer", nullable=false)
     */
    private $symbolposition;

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
     * Set displayname
     *
     * @param string $displayname
     * @return Currency
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;
    
        return $this;
    }

    /**
     * Get displayname
     *
     * @return string 
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set decimalmark
     *
     * @param string $decimalmark
     * @return Currency
     */
    public function setDecimalmark($decimalmark)
    {
        $this->decimalmark = $decimalmark;
    
        return $this;
    }

    /**
     * Get decimalmark
     *
     * @return string 
     */
    public function getDecimalmark()
    {
        return $this->decimalmark;
    }

    /**
     * Set unitname
     *
     * @param string $unitname
     * @return Currency
     */
    public function setUnitname($unitname)
    {
        $this->unitname = $unitname;
    
        return $this;
    }

    /**
     * Get unitname
     *
     * @return string 
     */
    public function getUnitname()
    {
        return $this->unitname;
    }

    /**
     * Set centname
     *
     * @param string $centname
     * @return Currency
     */
    public function setCentname($centname)
    {
        $this->centname = $centname;
    
        return $this;
    }

    /**
     * Get centname
     *
     * @return string 
     */
    public function getCentname()
    {
        return $this->centname;
    }

    /**
     * Set unitsymbol
     *
     * @param string $unitsymbol
     * @return Currency
     */
    public function setUnitsymbol($unitsymbol)
    {
        $this->unitsymbol = $unitsymbol;
    
        return $this;
    }

    /**
     * Get unitsymbol
     *
     * @return string 
     */
    public function getUnitsymbol()
    {
        return $this->unitsymbol;
    }

    /**
     * Set centsymbol
     *
     * @param string $centsymbol
     * @return Currency
     */
    public function setCentsymbol($centsymbol)
    {
        $this->centsymbol = $centsymbol;
    
        return $this;
    }

    /**
     * Get centsymbol
     *
     * @return string 
     */
    public function getCentsymbol()
    {
        return $this->centsymbol;
    }

    /**
     * Set symbol
     *
     * @param string $symbol
     * @return Currency
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    
        return $this;
    }

    /**
     * Get symbol
     *
     * @return string 
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set symbolposition
     *
     * @param integer $symbolposition
     * @return Currency
     */
    public function setSymbolposition($symbolposition)
    {
        $this->symbolposition = $symbolposition;
    
        return $this;
    }

    /**
     * Get symbolposition
     *
     * @return integer 
     */
    public function getSymbolposition()
    {
        return $this->symbolposition;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Currency
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
     * @return Currency
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
     * @return Currency
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
}