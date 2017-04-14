<?php

namespace AppRestoBundle\Entity;

/**
 * Meal
 */
class Meal
{

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Meal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \AppRestoBundle\Entity\Type
     */
    private $type;


    /**
     * Set type
     *
     * @param \AppRestoBundle\Entity\Type $type
     *
     * @return Meal
     */
    public function setType(\AppRestoBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppRestoBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }
}
