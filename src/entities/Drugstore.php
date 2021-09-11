<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="drugstores")
 */
class Drugstore extends Entity
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
     * @ORM\Column(type="string")
    */
    private $email;

    /**
     * @ORM\Column(type="string")
    */
    private $address;

    /**
     * @ORM\Column(type="string")
    */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string")
    */
    private $ownerName;

    /**
     * @ORM\Column(type="string")
    */
    private $openingHours;

    /**
     * @ORM\Column(type="string")
    */
    private $login;

    /**
     * @ORM\Column(type="string")
    */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity="Sector", inversedBy="drugstores")
     * @ORM\JoinColumn(name="sector_id", referencedColumnName="id")
     */
    private $sector;

    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="drugstore")
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
     * @return Drugstore
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
     * Set email.
     *
     * @param string $email
     *
     * @return Drugstore
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Drugstore
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phoneNumber.
     *
     * @param string $phoneNumber
     *
     * @return Drugstore
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set ownerName.
     *
     * @param string $ownerName
     *
     * @return Drugstore
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Get ownerName.
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Set openingHours.
     *
     * @param string $openingHours
     *
     * @return Drugstore
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    /**
     * Get openingHours.
     *
     * @return string
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return Drugstore
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Drugstore
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set sector.
     *
     * @param Sector|null $sector
     *
     * @return Drugstore
     */
    public function setSector(Sector $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector.
     *
     * @return Sector|null
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Add order.
     *
     * @param Order $order
     *
     * @return Drugstore
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
