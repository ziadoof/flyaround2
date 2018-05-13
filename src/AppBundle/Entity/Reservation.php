<?php

namespace AppBundle\Entity;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{

    /*
     *  Adding personal methods /variables
     */
    public function __toString()
    {
        //return the id of the Reservation.
        return (string)$this->id;
    }


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
     * @ORM\Column(name="passenger", type="integer")
     *
     *
     */
    private $passenger;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Flight", inversedBy="flight")
     * @ORM\JoinColumn(nullable=false)
     */
    private $flight;

    /**
     * @var int
     *
     * @ORM\Column(name="nbReservationSeats", type="smallint")
     */
    private $nbReservationSeats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetimetz")
     */
    private $publicationDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;


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
     * Set nbReservationSeats
     *
     * @param integer $nbReservationSeats
     *
     * @return Reservation
     */
    public function setNbReservationSeats($nbReservationSeats)
    {
        $this->nbReservationSeats = $nbReservationSeats;

        return $this;
    }

    /**
     * Get nbReservationSeats
     *
     * @return int
     */
    public function getNbReservationSeats()
    {
        return $this->nbReservationSeats;
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
     * @param integer $passenger
     *
     * @return Reservation
     */
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Get passenger
     *
     * @return integer
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
    public function setFlight($flight)
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
