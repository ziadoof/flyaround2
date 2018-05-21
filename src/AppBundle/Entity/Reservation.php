<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="nbReservedSeats", type="smallint")
     */
    private $nbReservedSeats;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;
    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="passengers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $passenger;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Flight", inversedBy="flights")
     */
    private $flight;
    public function __toString()
    {
        return (string)$this->id;
    }
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
     * Set nbReservedSeats
     *
     * @param integer $nbReservedSeats
     *
     * @return Reservation
     */
    public function setNbReservedSeats($nbReservedSeats)
    {
        $this->nbReservedSeats = $nbReservedSeats;
        return $this;
    }
    /**
     * Get nbReservedSeats
     *
     * @return int
     */
    public function getNbReservedSeats()
    {
        return $this->nbReservedSeats;
    }
    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Reservation
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }
    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }
    /**
     * Set wasDone
     *
     * @param boolean $wasDone
     *
     * @return Reservation
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;
        return $this;
    }
    /**
     * Get wasDone
     *
     * @return bool
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }
    /**
     * Set passenger
     *
     * @param \AppBundle\Entity\User $passenger
     *
     * @return Reservation
     */
    public function setPassenger(\AppBundle\Entity\User $passenger)
    {
        $this->passenger = $passenger;
        return $this;
    }
    /**
     * Get passenger
     *
     * @return \AppBundle\Entity\User
     */
    public function getPassenger()
    {
        return $this->passenger;
    }
    /**
     * Set flight
     *
     * @param \AppBundle\Entity\Flight $flight
     *
     * @return Reservation
     */
    public function setFlight(\AppBundle\Entity\Flight $flight = null)
    {
        $this->flight = $flight;
        return $this;
    }
    /**
     * Get flight
     *
     * @return \AppBundle\Entity\Flight
     */
    public function getFlight()
    {
        return $this->flight;
    }
}