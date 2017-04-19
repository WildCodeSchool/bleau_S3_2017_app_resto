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
    private $days;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->days = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return \DateTime
     */
    public function getStartWeek()
    {
        return $this->start_week;
    }

    /**
     * Set endWeek
     *
     * @param \DateTime $endWeek
     *
     * @return Week
     */
    public function setEndWeek($endWeek)
    {
        $this->end_week = $endWeek;

        return $this;
    }

    /**
     * Get endWeek
     *
     * @return \DateTime
     */
    public function getEndWeek()
    {
        return $this->end_week;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Week
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
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

    /**
     * Get days
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDays()
    {
        return $this->days;
    }
}

