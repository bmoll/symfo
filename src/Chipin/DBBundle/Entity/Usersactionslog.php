<?php

namespace Chipin\DBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersactionslog
 *
 * @ORM\Table(name="usersActionsLog")
 * @ORM\Entity
 */
class Usersactionslog
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
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

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
     * Set action
     *
     * @param string $action
     * @return Usersactionslog
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Usersactionslog
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set userid
     *
     * @param \Chipin\DBBundle\Entity\Frontuser $userid
     * @return Usersactionslog
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