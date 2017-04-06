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
     * @var \AppRestoBundle\Entity\Week
     */
    private $week;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $meal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->meal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set week
     *
     * @param \AppRestoBundle\Entity\Week $week
     *
     * @return Day
     */
    public function setWeek(\AppRestoBundle\Entity\Week $week = null)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return \AppRestoBundle\Entity\Week
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Add meal
     *
     * @param \AppRestoBundle\Entity\Meal $meal
     *
     * @return Day
     */
    public function addMeal(\AppRestoBundle\Entity\Meal $meal)
    {
        $this->meal[] = $meal;

        return $this;
    }

    /**
     * Remove meal
     *
     * @param \AppRestoBundle\Entity\Meal $meal
     */
    public function removeMeal(\AppRestoBundle\Entity\Meal $meal)
    {
        $this->meal->removeElement($meal);
    }

    /**
     * Get meal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMeal()
    {
        return $this->meal;
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
