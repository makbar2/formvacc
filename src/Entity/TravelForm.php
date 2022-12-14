<?php

namespace App\Entity;

use App\Repository\MedicalHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicalHistoryRepository::class)]
class TravelForm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $feelingWell = null;

    #[ORM\Column(length: 300)]
    private ?string $pastMedicalHistory = null;

    #[ORM\Column(length: 300)]
    private ?string $currentMedicines = null;

    #[ORM\Column(length: 200)]
    private ?string $allergies = null;

    #[ORM\Column(length: 100)]
    private ?string $hypersensitive = null;

    #[ORM\Column(length: 200)]
    private ?string $epilepsy = null;

    #[ORM\Column(length: 255)]
    private ?string $blackWater = null;

    #[ORM\Column(length: 200)]
    private ?string $liverFunction = null;

    #[ORM\Column(length: 200)]
    private ?string $therapy = null;

    #[ORM\Column(length: 255)]
    private ?string $history = null;

    #[ORM\OneToOne(inversedBy: 'travelForm', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isFeelingWell(): ?bool
    {
        return $this->feelingWell;
    }

    public function setFeelingWell(bool $feelingWell): self
    {
        $this->feelingWell = $feelingWell;

        return $this;
    }

    public function getPastMedicalHistory(): ?string
    {
        return $this->pastMedicalHistory;
    }

    public function setPastMedicalHistory(string $pastMedicalHistory): self
    {
        $this->pastMedicalHistory = $pastMedicalHistory;

        return $this;
    }

    public function getCurrentMedicines(): ?string
    {
        return $this->currentMedicines;
    }

    public function setCurrentMedicines(string $currentMedicines): self
    {
        $this->currentMedicines = $currentMedicines;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(string $allergies): self
    {
        $this->allergies = $allergies;

        return $this;
    }

    public function getHypersensitive(): ?string
    {
        return $this->hypersensitive;
    }

    public function setHypersensitive(string $hypersensitive): self
    {
        $this->hypersensitive = $hypersensitive;

        return $this;
    }

    public function getEpilepsy(): ?string
    {
        return $this->epilepsy;
    }

    public function setEpilepsy(string $epilepsy): self
    {
        $this->epilepsy = $epilepsy;

        return $this;
    }

    public function getBlackWater(): ?string
    {
        return $this->blackWater;
    }

    public function setBlackWater(string $blackWater): self
    {
        $this->blackWater = $blackWater;

        return $this;
    }

    public function getLiverFunction(): ?string
    {
        return $this->liverFunction;
    }

    public function setLiverFunction(string $liverFunction): self
    {
        $this->liverFunction = $liverFunction;

        return $this;
    }

    public function getTherapy(): ?string
    {
        return $this->therapy;
    }

    public function setTherapy(string $therapy): self
    {
        $this->therapy = $therapy;

        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(string $history): self
    {
        $this->history = $history;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
