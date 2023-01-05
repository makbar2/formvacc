<?php

namespace App\Entity;

use App\Repository\MedicalHistoryRepository;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\Mapping as ORM;
use MongoDB\Driver\Exception\ExecutionTimeoutException;

#[ORM\Entity(repositoryClass: MedicalHistoryRepository::class)]
class TravelForm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $feelingWell = null;

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

    #[ORM\Column(length: 150)]
    private ?string $yellowReaction = null;

    #[ORM\Column(length: 150)]
    private ?string $hadCancer = null;

    #[ORM\Column(length: 150)]
    private ?string $hivPositive = null;

    #[ORM\Column(length: 30)]
    private ?string $DTP = null;

    #[ORM\Column(length: 30)]
    private ?string $hep_b = null;

    #[ORM\Column(length: 30)]
    private ?string $Rabies = null;

    #[ORM\Column(length: 30)]
    private ?string $Shingles = null;

    #[ORM\Column(length: 30)]
    private ?string $Typhoid = null;

    #[ORM\Column(length: 30)]
    private ?string $Meningitis = null;

    #[ORM\Column(length: 30)]
    private ?string $JapBEncephalitis = null;

    #[ORM\Column(length: 30)]
    private ?string $MeningitisB = null;

    #[ORM\Column(length: 30)]
    private ?string $Chickenpox = null;

    #[ORM\Column(length: 30)]
    private ?string $hep_a = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $yellow_fever = null;

    #[ORM\Column(length: 30)]
    private ?string $influenza = null;

    #[ORM\Column(length: 30)]
    private ?string $tick_born_encephalitis = null;

    #[ORM\Column(nullable: true)]
    private ?bool $planPregnancy = null;

    #[ORM\Column(nullable: true)]
    private ?bool $breastFeeding = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isFeelingWell(): ?string
    {
        return $this->feelingWell;
    }

    public function setFeelingWell(string $feelingWell): self
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

    public function getYellowReaction(): ?string
    {
        return $this->yellowReaction;
    }

    public function setYellowReaction(string $yellowReaction): self
    {
        $this->yellowReaction = $yellowReaction;

        return $this;
    }

    public function getHadCancer(): ?string
    {
        return $this->hadCancer;
    }

    public function setHadCancer(string $hadCancer): self
    {
        $this->hadCancer = $hadCancer;

        return $this;
    }

    public function getHivPositive(): ?string
    {
        return $this->hivPositive;
    }

    public function setHivPositive(string $hivPositive): self
    {
        $this->hivPositive = $hivPositive;

        return $this;
    }

    public function getDTP(): ?string
    {
        return $this->DTP;
    }

    public function setDTP(string $DTP): self
    {
        $this->DTP = $DTP;

        return $this;
    }

    public function getHepB(): ?string
    {
        return $this->hep_b;
    }

    public function setHepB(string $hepB): self
    {
        $this->hep_b = $hepB;

        return $this;
    }

    public function getRabies(): ?string
    {
        return $this->Rabies;
    }

    public function setRabies(string $Rabies): self
    {
        $this->Rabies = $Rabies;

        return $this;
    }

    public function getShingles(): ?string
    {
        return $this->Shingles;
    }

    public function setShingles(string $Shingles): self
    {
        $this->Shingles = $Shingles;

        return $this;
    }

    public function getTyphoid(): ?string
    {
        return $this->Typhoid;
    }

    public function setTyphoid(string $Typhoid): self
    {
        $this->Typhoid = $Typhoid;

        return $this;
    }

    public function getMeningitis(): ?string
    {
        return $this->Meningitis;
    }

    public function setMeningitis(string $Meningitis): self
    {
        $this->Meningitis = $Meningitis;

        return $this;
    }

    public function getJapBEncephalitis(): ?string
    {
        return $this->JapBEncephalitis;
    }

    public function setJapBEncephalitis(string $JapBEncephalitis): self
    {
        $this->JapBEncephalitis = $JapBEncephalitis;

        return $this;
    }

    public function getMeningitisB(): ?string
    {
        return $this->MeningitisB;
    }

    public function setMeningitisB(string $MeningitisB): self
    {
        $this->MeningitisB = $MeningitisB;

        return $this;
    }

    public function getChickenpox(): ?string
    {
        return $this->Chickenpox;
    }

    public function setChickenpox(string $Chickenpox): self
    {
        $this->Chickenpox = $Chickenpox;

        return $this;
    }

    public function getHepA(): ?string
    {
        return $this->hep_a;
    }

    public function setHepA(string $hepA): self
    {
        $this->hep_a = $hepA;

        return $this;
    }

    public function getYellowFever(): ?string
    {
        return $this->yellow_fever;
    }

    public function setYellowFever(string $yellow_fever): self
    {
        $this->yellow_fever = $yellow_fever;

        return $this;
    }

    public function getInfluenza(): ?string
    {
        return $this->influenza;
    }

    public function setInfluenza(string $influenza): self
    {
        $this->influenza = $influenza;

        return $this;
    }

    public function getTickBornEncephalitis(): ?string
    {
        return $this->tick_born_encephalitis;
    }

    public function setTickBornEncephalitis(string $tick_born_encephalitis): self
    {
        $this->tick_born_encephalitis = $tick_born_encephalitis;

        return $this;
    }


    /**
     * @param $form
     * @param $field "textField" or "date"
     * @return void
     * @throws \Exception
     */
    public function setData($form,$field)
    {
        foreach ($form as $i => $value)
        {
            switch($i)
            {
                default:
                    throw new \Exception("Invalid array in travelForm");
                    break;
                case "feelingWell":
                    $this->setFeelingWell($this->formatAnswer($value,$field));
                    break;
                case "pastMedicalHistory":
                    $this->setPastMedicalHistory($this->formatAnswer($value,$field));
                    break;
                case "currentMedicines":
                    $this->setCurrentMedicines($this->formatAnswer($value,$field));
                    break;
                case "allergies":
                    $this->setAllergies($this->formatAnswer($value,$field));
                    break;
                case "hypersensitive":
                    $this->setHypersensitive($this->formatAnswer($value,$field));
                    break;
                case "epilepsy":
                    $this->setEpilepsy($this->formatAnswer($value,$field));
                    break;
                case "blackWater":
                    $this->setBlackWater($this->formatAnswer($value,$field));
                    break;
                case "liverFunction":
                    $this->setLiverFunction($this->formatAnswer($value,$field));
                    break;
                case "therapy":
                    $this->setTherapy($this->formatAnswer($value,$field));
                    break;
                case "history":
                    $this->setHistory($this->formatAnswer($value,$field));
                    break;
                case "hadCancer":
                    $this->setHadCancer($this->formatAnswer($value,$field));
                    break;
                case "yellowReaction":
                    $this->setYellowReaction($this->formatAnswer($value,$field));
                    break;
                case "hivPositive":
                    $this->setHivPositive($this->formatAnswer($value,$field));
                    break;
                case "DTP":
                    $this->setDTP($this->formatAnswer($value,$field));
                    break;
                case "hep_b":
                    $this->setHepB($this->formatAnswer($value,$field));
                    break;
                case "Rabies":
                    $this->setRabies($this->formatAnswer($value,$field));
                    break;
                case "shingles":
                    $this->setShingles($this->formatAnswer($value,$field));
                    break;
                case "Typhoid":
                    $this->setTyphoid($this->formatAnswer($value,$field));
                    break;
                case "Meningitis":
                    $this->setMeningitis($this->formatAnswer($value,$field));
                    break;
                case "chickenPox":
                    $this->setChickenpox($this->formatAnswer($value,$field));
                    break;
                case "hepA":
                    $this->setHepA($this->formatAnswer($value,$field));
                    break;
                case "Influenza":
                    $this->setInfluenza($this->formatAnswer($value,$field));
                    break;
                case "tickBornEncephalitis":
                    $this->setTickBornEncephalitis($this->formatAnswer($value,$field));
                    break;
                case "JapBEncephalitis":
                    $this->setJapBEncephalitis($this->formatAnswer($value,$field));
                    break;
                case "MeningitisB":
                    $this->setMeningitisB($this->formatAnswer($value,$field));
                    break;
            }
        }
    }


    public function setWomenQuestions(string $data)
    {
        $data = explode(",",$data);
        $this->planPregnancy = $data[0];
        $this->breastFeeding = $data[1];
    }

    private function formatAnswer($answer,$field): string
    {

        if($answer["check"])
        {
            if($field == "date")
            {

                $answer[$field] = $answer[$field]->format("Y-m-d");
            }
            return $answer["check"].",".$answer[$field];
        }
        return "";
    }

    public function getPlanPregnancy(): ?bool
    {
        return $this->planPregnancy;
    }

    public function setPlanPregnancy(?bool $planPregnancy): self
    {
        $this->planPregnancy = $planPregnancy;

        return $this;
    }

    public function getBreastFeeding(): ?bool
    {
        return $this->breastFeeding;
    }

    public function setBreastFeeding(?bool $breastFeeding): self
    {
        $this->breastFeeding = $breastFeeding;

        return $this;
    }
}
