<?php

namespace Dunglas\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Renting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dunglas\Bundle\CarRentalBundle\Entity\RentingRepository")
 */
class Renting
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="rentals")
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="rentals")
     */
    private $vehicle;

    /**
     * @var date $exited
     *
     * @ORM\Column(name="exited", type="datetime")
     */
    private $exited;

    /**
     * @var date $scheduledReturn
     *
     * @ORM\Column(name="scheduledReturn", type="datetime")
     */
    private $scheduledReturn;

    /**
     * @var date $returned
     *
     * @ORM\Column(name="returned", type="datetime")
     */
    private $returned;

    /**
     * @var text $notes
     *
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;
    
    /**
     * @ORM\OneToMany(targetEntity="Payment", mappedBy="renting")
     */
    private $payments;
    
    /**
     * @ORM\Column(name="created", type="datetime")
     * @Gedmo:Timestampable(on="create")
     */
    private $created;
    
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo:Timestampable(on="update")
     */
    private $updated;
    
    public function __construct() {
        $this->payments = new ArrayCollection();
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
     * Set notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set customer
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Customer $customer
     */
    public function setCustomer(\Dunglas\Bundle\CarRentalBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set vehicle
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicle
     */
    public function setVehicle(\Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Get vehicle
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Vehicle 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Add payments
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Payment $payments
     */
    public function addPayments(\Dunglas\Bundle\CarRentalBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;
    }

    /**
     * Get payments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Set exited
     *
     * @param datetime $exited
     */
    public function setExited($exited)
    {
        $this->exited = $exited;
    }

    /**
     * Get exited
     *
     * @return datetime 
     */
    public function getExited()
    {
        return $this->exited;
    }

    /**
     * Set scheduledReturn
     *
     * @param datetime $scheduledReturn
     */
    public function setScheduledReturn($scheduledReturn)
    {
        $this->scheduledReturn = $scheduledReturn;
    }

    /**
     * Get scheduledReturn
     *
     * @return datetime 
     */
    public function getScheduledReturn()
    {
        return $this->scheduledReturn;
    }

    /**
     * Set returned
     *
     * @param datetime $returned
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;
    }

    /**
     * Get returned
     *
     * @return datetime 
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}