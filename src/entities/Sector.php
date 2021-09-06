<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sectors")
 */
class Sector extends Entity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $id;

    /**
     * @ORM\Column(type="string")
    */
    private $ville;

    /**
     * @ORM\Column(type="string")
    */
    private $commune;

    /**
     * @ORM\OneToMany(targetEntity="Drugstore", mappedBy="sectors")
    */
    private $drugstores;

    /**
     * @ORM\ManyToMany(targetEntity="DeliveryPeople", mappedBy="sectors")
    */
    private $deliveryPeople;
    /**
     * Constructor
     */
    public function __construct($data)
    {
        parent::__construct($data);
        $this->drugstores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->deliveryPeople = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Sector
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set commune.
     *
     * @param string $commune
     *
     * @return Sector
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune.
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Add drugstore.
     *
     * @param Drugstore $drugstore
     *
     * @return Sector
     */
    public function addDrugstore(Drugstore $drugstore)
    {
        $this->drugstores[] = $drugstore;

        return $this;
    }

    /**
     * Remove drugstore.
     *
     * @param Drugstore $drugstore
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDrugstore(Drugstore $drugstore)
    {
        return $this->drugstores->removeElement($drugstore);
    }

    /**
     * Get drugstores.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDrugstores()
    {
        return $this->drugstores;
    }

    /**
     * Add deliveryPerson.
     *
     * @param DeliveryPeople $deliveryPerson
     *
     * @return Sector
     */
    public function addDeliveryPerson(DeliveryPeople $deliveryPerson)
    {
        $this->deliveryPeople[] = $deliveryPerson;

        return $this;
    }

    /**
     * Remove deliveryPerson.
     *
     * @param DeliveryPeople $deliveryPerson
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDeliveryPerson(DeliveryPeople $deliveryPerson)
    {
        return $this->deliveryPeople->removeElement($deliveryPerson);
    }

    /**
     * Get deliveryPeople.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDeliveryPeople()
    {
        return $this->deliveryPeople;
    }
}
