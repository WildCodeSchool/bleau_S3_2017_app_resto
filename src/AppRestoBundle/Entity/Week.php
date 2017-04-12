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
     * @var int
     */
    private $nbWeek;

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
     * Set nbWeek
     *
     * @param integer $nbWeek
     *
     * @return Week
     */
    public function setNbWeek($nbWeek)
    {
        $this->nbWeek = $nbWeek;

        return $this;
    }

    /**
     * Get nbWeek
     *
     * @return int
     */
    public function getNbWeek()
    {
        return $this->nbWeek;
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
    private $day;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->day = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var string
     */
    private $title;


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
}
