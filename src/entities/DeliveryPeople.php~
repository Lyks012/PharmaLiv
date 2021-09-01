<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="deliveryPeople")
*/
class DeliveryPeople
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
    private $firstName;

    /**
     * @ORM\Column(type="string")
    */
    private $lastName;

    /**
     * @ORM\Column(type="string")
    */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string")
    */
    private $email;

    /**
     * @ORM\Column(type="string")
    */
    private $login;

    /**
     * @ORM\Column(type="string")
    */
    private $password;

    /**
     * @ORM\Column(type="string")
    */
    private $pathToProfilePicture;

    /**
     * @ORM\ManyToMany(targetEntity="Sector", inversedBy="deliveryPeople")
     * @ORM\JoinTable(name="deliveryPeople_sectors")
    */
    private $sectors;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sectors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return DeliveryPeople
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return DeliveryPeople
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber.
     *
     * @param string $phoneNumber
     *
     * @return DeliveryPeople
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
     * Set email.
     *
     * @param string $email
     *
     * @return DeliveryPeople
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
     * Set login.
     *
     * @param string $login
     *
     * @return DeliveryPeople
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
     * @return DeliveryPeople
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
     * Set pathToProfilePicture.
     *
     * @param string $pathToProfilePicture
     *
     * @return DeliveryPeople
     */
    public function setPathToProfilePicture($pathToProfilePicture)
    {
        $this->pathToProfilePicture = $pathToProfilePicture;

        return $this;
    }

    /**
     * Get pathToProfilePicture.
     *
     * @return string
     */
    public function getPathToProfilePicture()
    {
        return $this->pathToProfilePicture;
    }

    /**
     * Add sector.
     *
     * @param \Sector $sector
     *
     * @return DeliveryPeople
     */
    public function addSector(\Sector $sector)
    {
        $this->sectors[] = $sector;

        return $this;
    }

    /**
     * Remove sector.
     *
     * @param \Sector $sector
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSector(\Sector $sector)
    {
        return $this->sectors->removeElement($sector);
    }

    /**
     * Get sectors.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectors()
    {
        return $this->sectors;
    }
}
