<?php

namespace App\Entity;

use App\Repository\VaccinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VaccinesRepository::class)]
class Vaccines
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $batchNumber = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $expirery = null;

    #[ORM\Column(length: 100)]
    private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }

    public function setBatchNumber(string $batchNumber): self
    {
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getExpirery(): ?\DateTimeInterface
    {
        return $this->expirery;
    }

    public function setExpirery(\DateTimeInterface $expirery): self
    {
        $this->expirery = $expirery;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
