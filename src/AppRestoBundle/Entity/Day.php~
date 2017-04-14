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
    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
        $this->entrees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->desserts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->garnitures = new \Doctrine\Common\Collections\ArrayCollection();
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entrees;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plats;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $desserts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $garnitures;


    /**
     * Add entree
     *
     * @param \AppRestoBundle\Entity\Entree $entree
     *
     * @return Day
     */
    public function addEntree(\AppRestoBundle\Entity\Entree $entree)
    {
        $this->entrees[] = $entree;

        return $this;
    }

    /**
     * Remove entree
     *
     * @param \AppRestoBundle\Entity\Entree $entree
     */
    public function removeEntree(\AppRestoBundle\Entity\Entree $entree)
    {
        $this->entrees->removeElement($entree);
    }

    /**
     * Get entrees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntrees()
    {
        return $this->entrees;
    }

    /**
     * Add plat
     *
     * @param \AppRestoBundle\Entity\Plat $plat
     *
     * @return Day
     */
    public function addPlat(\AppRestoBundle\Entity\Plat $plat)
    {
        $this->plats[] = $plat;

        return $this;
    }

    /**
     * Remove plat
     *
     * @param \AppRestoBundle\Entity\Plat $plat
     */
    public function removePlat(\AppRestoBundle\Entity\Plat $plat)
    {
        $this->plats->removeElement($plat);
    }

    /**
     * Get plats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlats()
    {
        return $this->plats;
    }

    /**
     * Add dessert
     *
     * @param \AppRestoBundle\Entity\Dessert $dessert
     *
     * @return Day
     */
    public function addDessert(\AppRestoBundle\Entity\Dessert $dessert)
    {
        $this->desserts[] = $dessert;

        return $this;
    }

    /**
     * Remove dessert
     *
     * @param \AppRestoBundle\Entity\Dessert $dessert
     */
    public function removeDessert(\AppRestoBundle\Entity\Dessert $dessert)
    {
        $this->desserts->removeElement($dessert);
    }

    /**
     * Get desserts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDesserts()
    {
        return $this->desserts;
    }

    /**
     * Add garniture
     *
     * @param \AppRestoBundle\Entity\Garniture $garniture
     *
     * @return Day
     */
    public function addGarniture(\AppRestoBundle\Entity\Garniture $garniture)
    {
        $this->garnitures[] = $garniture;

        return $this;
    }

    /**
     * Remove garniture
     *
     * @param \AppRestoBundle\Entity\Garniture $garniture
     */
    public function removeGarniture(\AppRestoBundle\Entity\Garniture $garniture)
    {
        $this->garnitures->removeElement($garniture);
    }

    /**
     * Get garnitures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGarnitures()
    {
        return $this->garnitures;
    }
}
