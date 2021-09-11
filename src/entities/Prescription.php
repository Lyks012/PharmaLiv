<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\table(name="prescriptions")
 */
class Prescription extends Entity
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
    private $pathToPicture;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="prescriptions")
     * @ORM\JoinColumn(name="clientId", referencedColumnName="id")
    */
    private $client;

    /**
     * Constructor
     */
    public function __construct($data)
    {
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
     * Set pathToPicture.
     *
     * @param string $pathToPicture
     *
     * @return Prescription
     */
    public function setPathToPicture($pathToPicture)
    {
        $this->pathToPicture = $pathToPicture;

        return $this;
    }

    /**
     * Get pathToPicture.
     *
     * @return string
     */
    public function getPathToPicture()
    {
        return $this->pathToPicture;
    }

    /**
     * Set client.
     *
     * @param Client|null $client
     *
     * @return Prescription
     */
    public function setClient(Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return Client|null
     */
    public function getClient()
    {
        return $this->client;
    }
}
