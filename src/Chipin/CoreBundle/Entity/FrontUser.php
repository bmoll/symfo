<?php

namespace Chipin\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="frontUser")
*/

class FrontUser
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	protected $email;

	/**
	* @ORM\Column(type="integer")
	*/
	protected $usersStatusID;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	protected $forename;
	/**
	* @ORM\Column(type="string", length=255)
	*/
	protected $surname;
	/**
	* @ORM\Column(type="string", length=255)
	*/
	protected $nickname;

	/**
	* @ORM\Column(type="string", length=32)
	*/
	protected $password;

	/**
	* @ORM\Column(type="datetime")
	*/
	//protected $dateCreated;
	/**
	* @ORM\Column(type="datetime")
	*/
	//protected $dateEdited;
	/**
	* @ORM\Column(type="datetime")
	*/
	//protected $dateRegistered;
	/**
	* @ORM\Column(type="datetime")
	*/
	//protected $dateActivate;
	/**
	* @ORM\Column(type="datetime")
	*/
	//protected $dateDeleted;



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
     * Set email
     *
     * @param string $email
     * @return FrontUser
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set usersStatusID
     *
     * @param integer $usersStatusID
     * @return FrontUser
     */
    public function setUsersStatusID($usersStatusID)
    {
        $this->usersStatusID = $usersStatusID;
    
        return $this;
    }

    /**
     * Get usersStatusID
     *
     * @return integer 
     */
    public function getUsersStatusID()
    {
        return $this->usersStatusID;
    }

    /**
     * Set forename
     *
     * @param string $forename
     * @return FrontUser
     */
    public function setForename($forename)
    {
        $this->forename = $forename;
    
        return $this;
    }

    /**
     * Get forename
     *
     * @return string 
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return FrontUser
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return FrontUser
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    
        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return FrontUser
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return FrontUser
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateEdited
     *
     * @param \DateTime $dateEdited
     * @return FrontUser
     */
    public function setDateEdited($dateEdited)
    {
        $this->dateEdited = $dateEdited;
    
        return $this;
    }

    /**
     * Get dateEdited
     *
     * @return \DateTime 
     */
    public function getDateEdited()
    {
        return $this->dateEdited;
    }

    /**
     * Set dateRegistered
     *
     * @param \DateTime $dateRegistered
     * @return FrontUser
     */
    public function setDateRegistered($dateRegistered)
    {
        $this->dateRegistered = $dateRegistered;
    
        return $this;
    }

    /**
     * Get dateRegistered
     *
     * @return \DateTime 
     */
    public function getDateRegistered()
    {
        return $this->dateRegistered;
    }

    /**
     * Set dateActivate
     *
     * @param \DateTime $dateActivate
     * @return FrontUser
     */
    public function setDateActivate($dateActivate)
    {
        $this->dateActivate = $dateActivate;
    
        return $this;
    }

    /**
     * Get dateActivate
     *
     * @return \DateTime 
     */
    public function getDateActivate()
    {
        return $this->dateActivate;
    }

    /**
     * Set dateDeleted
     *
     * @param \DateTime $dateDeleted
     * @return FrontUser
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;
    
        return $this;
    }

    /**
     * Get dateDeleted
     *
     * @return \DateTime 
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }
}