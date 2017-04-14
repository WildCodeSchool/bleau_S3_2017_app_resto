<?php

namespace AppRestoBundle\Entity;

/**
 * Week
 */
class Week
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start_week;

    /**
     * @var \DateTime
     */
    private $end_week;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $day;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->day = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set startWeek
     *
     * @param \DateTime $startWeek
     *
     * @return Week
     */
    public function setStartWeek($startWeek)
    {
        $this->start_week = $startWeek;

        return $this;
    }

    /**
     * Get startWeek
     *

    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Week
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add day
     *
     * @param \AppRestoBundle\Entity\Day $day
     *
     * @return Week
     */
    public function addDay(\AppRestoBundle\Entity\Day $day)
    {
        $this->day[] = $day;

        return $this;
    }

    /**
     * Remove day
     *
     * @param \AppRestoBundle\Entity\Day $day
     */
    public function removeDay(\AppRestoBundle\Entity\Day $day)
    {
        $this->day->removeElement($day);
    }

    /**
     * Get day
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Add day
     *
     * @param \AppRestoBundle\Entity\Day $day
     *
     * @return Week
     */
    public function addDay(\AppRestoBundle\Entity\Day $day)
    {
        $this->days[] = $day;

        return $this;
    }

    /**
     * Remove day
     *
     * @param \AppRestoBundle\Entity\Day $day
     */
    public function removeDay(\AppRestoBundle\Entity\Day $day)
    {
        $this->days->removeElement($day);
    }
}
