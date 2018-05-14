<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{

    /*
    *  Adding personal methods /variables
    */
    public function __toString()
    {
        //return the User object with firstName and lastName.
        return $this->firstName.'-'.$this->lastName;
    }



    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Flight", mappedBy="pilot")
     */
    private $pilots;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Flight", mappedBy="reviewAuthor")
     */
    private $authors;



    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=32)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=32)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=32)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="isACertifiedPilot", type="boolean")
     */
    private $isACertifiedPilot;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set isACertifiedPilot
     *
     * @param boolean $isACertifiedPilot
     *
     * @return User
     */
    public function setIsACertifiedPilot($isACertifiedPilot)
    {
        $this->isACertifiedPilot = $isACertifiedPilot;

        return $this;
    }

    /**
     * Get isACertifiedPilot
     *
     * @return bool
     */
    public function getIsACertifiedPilot()
    {
        return $this->isACertifiedPilot;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pilot = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userRated = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviewAuthor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pilot
     *
     * @param \AppBundle\Entity\Flight $pilot
     *
     * @return User
     */
    public function addPilot($pilot)
    {
        $this->pilot[] = $pilot;

        return $this;
    }

    /**
     * Remove pilot
     *
     * @param \AppBundle\Entity\Flight $pilot
     */
    public function removePilot($pilot)
    {
        $this->pilot->removeElement($pilot);
    }

    /**
     * Get pilot
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Add userRated
     *
     * @param \AppBundle\Entity\Flight $userRated
     *
     * @return User
     */
    public function addUserRated($userRated)
    {
        $this->userRated[] = $userRated;

        return $this;
    }

    /**
     * Remove userRated
     *
     * @param \AppBundle\Entity\Flight $userRated
     */
    public function removeUserRated($userRated)
    {
        $this->userRated->removeElement($userRated);
    }

    /**
     * Get userRated
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserRated()
    {
        return $this->userRated;
    }

    /**
     * Add reviewAuthor
     *
     * @param \AppBundle\Entity\Flight $reviewAuthor
     *
     * @return User
     */
    public function addReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor[] = $reviewAuthor;

        return $this;
    }

    /**
     * Remove reviewAuthor
     *
     * @param \AppBundle\Entity\Flight $reviewAuthor
     */
    public function removeReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor->removeElement($reviewAuthor);
    }

    /**
     * Get reviewAuthor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }

    /**
     * Get pilots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPilots()
    {
        return $this->pilots;
    }

    /**
     * Add author
     *
     * @param \AppBundle\Entity\Flight $author
     *
     * @return User
     */
    public function addAuthor(\AppBundle\Entity\Flight $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param \AppBundle\Entity\Flight $author
     */
    public function removeAuthor(\AppBundle\Entity\Flight $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}
