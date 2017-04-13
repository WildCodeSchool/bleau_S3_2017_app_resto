<?php

namespace AppRestoBundle\Entity;

/**
 * Day
 */
class Day
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Day
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $meals;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->meals = new \Doctrine\Common\Collections\ArrayCollection();
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add meal
     *
     * @param \AppRestoBundle\Entity\Meal $meals
     *
     * @return Day
     */
    public function addMeals(\AppRestoBundle\Entity\Meal $meals)
    {
        $this->meals[] = $meals;

        return $this;
    }

    /**
     * Remove meal
     *
     * @param \AppRestoBundle\Entity\Meal $meals
     */
    public function removeMeals(\AppRestoBundle\Entity\Meal $meals)
    {
        $this->meals->removeElement($meals);
    }

    /**
     * Get meals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * Add type
     *
     * @param \AppRestoBundle\Entity\Type $type
     *
     * @return Day
     */
    public function addType(\AppRestoBundle\Entity\Type $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \AppRestoBundle\Entity\Type $type
     */
    public function removeType(\AppRestoBundle\Entity\Type $type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Get type
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getType()
    {
        return $this->type;
    }
}
