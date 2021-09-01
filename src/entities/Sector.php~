<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sectors")
 */
class Sector
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Drugstore", mappedBy="drugstore")
    */
    private $drugstores;

    /**
     * @ORM\ManyToMany(targetEntity="DeliveryPeople", mappedBy="sectors")
     */
    private $deliveryPeople;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->drugstores = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name.
     *
     * @param string $name
     *
     * @return Sector
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add drugstore.
     *
     * @param \Drugstore $drugstore
     *
     * @return Sector
     */
    public function addDrugstore(\Drugstore $drugstore)
    {
        $this->drugstores[] = $drugstore;

        return $this;
    }

    /**
     * Remove drugstore.
     *
     * @param \Drugstore $drugstore
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDrugstore(\Drugstore $drugstore)
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
     * @param \DeliveryPeople $deliveryPerson
     *
     * @return Sector
     */
    public function addDeliveryPerson(\DeliveryPeople $deliveryPerson)
    {
        $this->deliveryPeople[] = $deliveryPerson;

        return $this;
    }

    /**
     * Remove deliveryPerson.
     *
     * @param \DeliveryPeople $deliveryPerson
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDeliveryPerson(\DeliveryPeople $deliveryPerson)
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
