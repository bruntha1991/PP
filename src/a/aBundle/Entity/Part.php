<?php

namespace a\aBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 */
class Part
{
    /**
     * @var string
     */
    private $partName;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \a\aBundle\Entity\Vendor
     */
    private $vendor;

    /**
     * @var \a\aBundle\Entity\Service
     */
    private $service;

    /**
     * @var \a\aBundle\Entity\Category
     */
    private $category;


    /**
     * Set partName
     *
     * @param string $partName
     * @return Part
     */
    public function setPartName($partName)
    {
        $this->partName = $partName;

        return $this;
    }

    /**
     * Get partName
     *
     * @return string 
     */
    public function getPartName()
    {
        return $this->partName;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Part
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
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
     * Set vendor
     *
     * @param \a\aBundle\Entity\Vendor $vendor
     * @return Part
     */
    public function setVendor(\a\aBundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \a\aBundle\Entity\Vendor 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set service
     *
     * @param \a\aBundle\Entity\Service $service
     * @return Part
     */
    public function setService(\a\aBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \a\aBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set category
     *
     * @param \a\aBundle\Entity\Category $category
     * @return Part
     */
    public function setCategory(\a\aBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \a\aBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
