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
}

