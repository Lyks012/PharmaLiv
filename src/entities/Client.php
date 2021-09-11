<?php

namespace App\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\table(name="clients")
*/
class Client extends Entity
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
    private $email;
    
    /**
     * @ORM\Column(type="string")
    */
    private $phoneNumber;
    
    /**
     * @ORM\Column(type="datetime")
    */
    private $birthDate;
    
    /**
     * @ORM\Column(type="string")
    */
    private $genre;
    
    /**
     * @ORM\Column(type="string")
    */
    private $address;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * 
    */
    private $ongoingTreatment = null;
    
    /**
     * @ORM\Column(type="string")
    */
    private $login;
    
    /**
     * @ORM\Column(type="string")
    */
    private $password;
    
    /**
     * @ORM\Column(type="string", nullable=true)
    */
    private $pathToHealthInsurance = null;

    /**
     * @ORM\OneToMany(targetEntity="Prescription", mappedBy="client")
    */
    private $prescriptions;
    /**
     * Constructor
     */
    public function __construct($data)
    {
        $this->prescriptions = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct($data);
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
     * @return Client
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
     * @return Client
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
     * Set email.
     *
     * @param string $email
     *
     * @return Client
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
     * Set phoneNumber.
     *
     * @param string $phoneNumber
     *
     * @return Client
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
     * Set birthDate.
     *
     * @param string $birthDate
     *
     * @return Client
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = new DateTime($birthDate);

        return $this;
    }

    /**
     * Get birthDate.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set genre.
     *
     * @param string $genre
     *
     * @return Client
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre.
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Client
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
     * Set ongoingTreatment.
     *
     * @param string|null $ongoingTreatment
     *
     * @return Client
     */
    public function setOngoingTreatment($ongoingTreatment = null)
    {
        $this->ongoingTreatment = $ongoingTreatment;

        return $this;
    }

    /**
     * Get ongoingTreatment.
     *
     * @return string|null
     */
    public function getOngoingTreatment()
    {
        return $this->ongoingTreatment;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return Client
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
     * @return Client
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
     * Set pathToHealthInsurance.
     *
     * @param string|null $pathToHealthInsurance
     *
     * @return Client
     */
    public function setPathToHealthInsurance($pathToHealthInsurance = null)
    {
        $this->pathToHealthInsurance = $pathToHealthInsurance;

        return $this;
    }

    /**
     * Get pathToHealthInsurance.
     *
     * @return string|null
     */
    public function getPathToHealthInsurance()
    {
        return $this->pathToHealthInsurance;
    }

    /**
     * Add prescription.
     *
     * @param Prescription $prescription
     *
     * @return Client
     */
    public function addPrescription(Prescription $prescription)
    {
        $this->prescriptions[] = $prescription;

        return $this;
    }

    /**
     * Remove prescription.
     *
     * @param Prescription $prescription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePrescription(Prescription $prescription)
    {
        return $this->prescriptions->removeElement($prescription);
    }

    /**
     * Get prescriptions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrescriptions()
    {
        return $this->prescriptions;
    }
}
