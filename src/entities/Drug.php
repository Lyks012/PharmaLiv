<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\table(name="drugs")
 */
class Drug extends Entity
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
     * @ORM\Column(type="integer")
    */
    private $price;

    /**
     * @ORM\Column(type="string")
    */
    private $description;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
    */
    private $numberOfTimesOrdered;

    /**
     * @ORM\ManyToMany(targetEntity="Order", mappedBy="drugs")
    */
    private $orders;
    
    /**
     * Constructor
     */
    public function __construct($data)
    {
        parent::__construct($data);
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Drug
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
     * Set price.
     *
     * @param int $price
     *
     * @return Drug
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Drug
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set numberOfTimesOrdered.
     *
     * @param int $numberOfTimesOrdered
     *
     * @return Drug
     */
    public function setNumberOfTimesOrdered($numberOfTimesOrdered)
    {
        $this->numberOfTimesOrdered = $numberOfTimesOrdered;

        return $this;
    }

    /**
     * Get numberOfTimesOrdered.
     *
     * @return int
     */
    public function getNumberOfTimesOrdered()
    {
        return $this->numberOfTimesOrdered;
    }

    /**
     * Add order.
     *
     * @param Order $order
     *
     * @return Drug
     */
    public function addOrder(Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order.
     *
     * @param Order $order
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOrder(Order $order)
    {
        return $this->orders->removeElement($order);
    }

    /**
     * Get orders.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }
}
