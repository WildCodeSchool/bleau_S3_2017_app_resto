<?php

namespace AppRestoBundle\Entity;

/**
 * Resa
 */
class Resa
{

    const SNACK = 'snack';
    const NORMAL = 'normal';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->normal = 0;
        $this->snack = 0;
    }

    /**
     * Increment Snack
     *
     * @return Resa
     */
    public function increment($type)
    {
        if ($type == self::SNACK){
            $this->snack += 1;
        }
        elseif ($type == self::NORMAL){
            $this->normal += 1;
        }
    }


    //GENERATED CODE

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $snack;

    /**
     * @var int
     */
    private $normal;


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
     * Set snack
     *
     * @param integer $snack
     *
     * @return Resa
     */
    public function setSnack($snack)
    {
        $this->snack = $snack;

        return $this;
    }

    /**
     * Get snack
     *
     * @return int
     */
    public function getSnack()
    {
        return $this->snack;
    }

    /**
     * Set normal
     *
     * @param integer $normal
     *
     * @return Resa
     */
    public function setNormal($normal)
    {
        $this->normal = $normal;

        return $this;
    }

    /**
     * Get normal
     *
     * @return int
     */
    public function getNormal()
    {
        return $this->normal;
    }
}
