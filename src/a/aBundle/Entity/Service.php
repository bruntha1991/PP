<?php

namespace a\aBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 */
class Service
{
    /**
     * @var \DateTime
     */
    private $serviceDate;

    /**
     * @var string
     */
    private $serviceCharge;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \a\aBundle\Entity\Invoice
     */
    private $invoice;

    /**
     * @var \a\aBundle\Entity\Customer
     */
    private $cust;

    /**
     * @var \a\aBundle\Entity\Car
     */
    private $car;


    /**
     * Set serviceDate
     *
     * @param \DateTime $serviceDate
     * @return Service
     */
    public function setServiceDate($serviceDate)
    {
        $this->serviceDate = $serviceDate;

        return $this;
    }

    /**
     * Get serviceDate
     *
     * @return \DateTime 
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * Set serviceCharge
     *
     * @param string $serviceCharge
     * @return Service
     */
    public function setServiceCharge($serviceCharge)
    {
        $this->serviceCharge = $serviceCharge;

        return $this;
    }

    /**
     * Get serviceCharge
     *
     * @return string 
     */
    public function getServiceCharge()
    {
        return $this->serviceCharge;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Service
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
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
     * Set invoice
     *
     * @param \a\aBundle\Entity\Invoice $invoice
     * @return Service
     */
    public function setInvoice(\a\aBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \a\aBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set cust
     *
     * @param \a\aBundle\Entity\Customer $cust
     * @return Service
     */
    public function setCust(\a\aBundle\Entity\Customer $cust = null)
    {
        $this->cust = $cust;

        return $this;
    }

    /**
     * Get cust
     *
     * @return \a\aBundle\Entity\Customer 
     */
    public function getCust()
    {
        return $this->cust;
    }

    /**
     * Set car
     *
     * @param \a\aBundle\Entity\Car $car
     * @return Service
     */
    public function setCar(\a\aBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \a\aBundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }
}
