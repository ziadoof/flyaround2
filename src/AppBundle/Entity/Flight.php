<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FlightRepository")
 */
class Flight
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="departures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departure;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="arrivals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arrival;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlaneModel", inversedBy="planes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $plane;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="pilots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pilot;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reservation", mappedBy="flight")
     */
    private $flights;
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
     * @ORM\Column(name="nbFreeSeats", type="smallint")
     */
    private $nbFreeSeats;
    /**
     * @var float
     *
     * @ORM\Column(name="seatPrice", type="float")
     */
    private $seatPrice;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeOffTime", type="datetime")
     */
    private $takeOffTime;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->departure . ' ' . $this->arrival;
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
     * Set nbFreeSeats
     *
     * @param integer $nbFreeSeats
     *
     * @return Flight
     */
    public function setNbFreeSeats($nbFreeSeats)
    {
        $this->nbFreeSeats = $nbFreeSeats;
        return $this;
    }
    /**
     * Get nbFreeSeats
     *
     * @return int
     */
    public function getNbFreeSeats()
    {
        return $this->nbFreeSeats;
    }
    /**
     * Set seatPrice
     *
     * @param float $seatPrice
     *
     * @return Flight
     */
    public function setSeatPrice($seatPrice)
    {
        $this->seatPrice = $seatPrice;
        return $this;
    }
    /**
     * Get seatPrice
     *
     * @return float
     */
    public function getSeatPrice()
    {
        return $this->seatPrice;
    }
    /**
     * Set takeOffTime
     *
     * @param \DateTime $takeOffTime
     *
     * @return Flight
     */
    public function setTakeOffTime($takeOffTime)
    {
        $this->takeOffTime = $takeOffTime;
        return $this;
    }
    /**
     * Get takeOffTime
     *
     * @return \DateTime
     */
    public function getTakeOffTime()
    {
        return $this->takeOffTime;
    }
    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Flight
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
     * Set description
     *
     * @param string $description
     *
     * @return Flight
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set wasDone
     *
     * @param boolean $wasDone
     *
     * @return Flight
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
     * Set departure
     *
     * @param \AppBundle\Entity\Site $departure
     *
     * @return Flight
     */
    public function setDeparture(\AppBundle\Entity\Site $departure)
    {
        $this->departure = $departure;
        return $this;
    }
    /**
     * Get departure
     *
     * @return \AppBundle\Entity\Site
     */
    public function getDeparture()
    {
        return $this->departure;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flights = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Set arrival
     *
     * @param \AppBundle\Entity\Site $arrival
     *
     * @return Flight
     */
    public function setArrival(\AppBundle\Entity\Site $arrival)
    {
        $this->arrival = $arrival;
        return $this;
    }
    /**
     * Get arrival
     *
     * @return \AppBundle\Entity\Site
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * Set plane
     *
     * @param \AppBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\AppBundle\Entity\PlaneModel $plane)
    {
        $this->plane = $plane;
        return $this;
    }
    /**
     * Get plane
     *
     * @return \AppBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }
    /**
     * Set pilot
     *
     * @param \AppBundle\Entity\User $pilot
     *
     * @return Flight
     */
    public function setPilot(\AppBundle\Entity\User $pilot)
    {
        $this->pilot = $pilot;
        return $this;
    }
    /**
     * Get pilot
     *
     * @return \AppBundle\Entity\User
     */
    public function getPilot()
    {
        return $this->pilot;
    }
    /**
     * Add flight
     *
     * @param \AppBundle\Entity\Reservation $flight
     *
     * @return Flight
     */
    public function addFlight(\AppBundle\Entity\Reservation $flight)
    {
        $this->flights[] = $flight;
        return $this;
    }
    /**
     * Remove flight
     *
     * @param \AppBundle\Entity\Reservation $flight
     */
    public function removeFlight(\AppBundle\Entity\Reservation $flight)
    {
        $this->flights->removeElement($flight);
    }
    /**
     * Get flights
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlights()
    {
        return $this->flights;
    }
}