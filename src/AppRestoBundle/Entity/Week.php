<?php

namespace AppRestoBundle\Entity;

/**
 * Week
 */
class Week
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $message;

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
     * Add day
     *
     * @param \AppRestoBundle\Entity\Day $days
     *
     * @return Week
     */
    public function addDays(\AppRestoBundle\Entity\Day $days)
    {
        $this->days[] = $days;

        return $this;
    }



    /**
     * Get day
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * @var \DateTime
     */
    private $start_week;

    /**
     * @var \DateTime
     */
    private $end_week;


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
