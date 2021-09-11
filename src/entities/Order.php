<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\table(name="orders")
 */
class Order extends Entity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $id;

    /**
     * @ORM\Column(type="integer")
    */
    private $bill;

    /**
     * @ORM\Column(type="datetime")
    */
    private $date;

    /**
     * @ORM\Column(type="string")
    */
    private $paymentMethod;

    /**
     * @ORM\ManyToOne(targetEntity="Drug", inversedBy="orders")
     * @ORM\JoinColumn(name="drugstoreId", referencedColumnName="id")
    */
    private $drugstore;

    /**
     * @ORM\ManyToOne(targetEntity="DeliveryPeople", inversedBy="orders")
     * @ORM\JoinColumn(name="deliveryPeopleId", referencedColumnName="id")
    */
    private $deliveryPeople;

    /**
     * @ORM\ManyToMany(targetEntity="Drug", inversedBy="orders")
     * @ORM\JoinTable(name="order_drugs")
    */
    private $drugs;
    /**
     * Constructor
     */
    public function __construct($data)
    {
        parent::__construct($data);
        $this->drugs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set bill.
     *
     * @param int $bill
     *
     * @return Order
     */
    public function setBill($bill)
    {
        $this->bill = $bill;

        return $this;
    }

    /**
     * Get bill.
     *
     * @return int
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set paymentMethod.
     *
     * @param string $paymentMethod
     *
     * @return Order
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set drugstore.
     *
     * @param Drug|null $drugstore
     *
     * @return Order
     */
    public function setDrugstore(Drug $drugstore = null)
    {
        $this->drugstore = $drugstore;

        return $this;
    }

    /**
     * Get drugstore.
     *
     * @return Drug|null
     */
    public function getDrugstore()
    {
        return $this->drugstore;
    }

    /**
     * Set deliveryPeople.
     *
     * @param DeliveryPeople|null $deliveryPeople
     *
     * @return Order
     */
    public function setDeliveryPeople(DeliveryPeople $deliveryPeople = null)
    {
        $this->deliveryPeople = $deliveryPeople;

        return $this;
    }

    /**
     * Get deliveryPeople.
     *
     * @return DeliveryPeople|null
     */
    public function getDeliveryPeople()
    {
        return $this->deliveryPeople;
    }

    /**
     * Add drug.
     *
     * @param Drug $drug
     *
     * @return Order
     */
    public function addDrug(Drug $drug)
    {
        $this->drugs[] = $drug;

        return $this;
    }

    /**
     * Remove drug.
     *
     * @param Drug $drug
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDrug(Drug $drug)
    {
        return $this->drugs->removeElement($drug);
    }

    /**
     * Get drugs.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDrugs()
    {
        return $this->drugs;
    }
}
