<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehicleRepository::class)
 */
class Vehicle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $caract;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $statutLocation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pictureUri;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getCaract(): ?string
    {
        return $this->caract;
    }

    public function setCaract(?string $caract): self
    {
        $this->caract = $caract;

        return $this;
    }

    public function getStatutLocation(): ?string
    {
        return $this->statutLocation;
    }

    public function setStatutLocation(string $statutLocation): self
    {
        $this->statutLocation = $statutLocation;

        return $this;
    }

    public function getPictureUri(): ?string
    {
        return $this->pictureUri;
    }

    public function setPictureUri(string $pictureUri): self
    {
        $this->pictureUri = $pictureUri;

        return $this;
    }
}
