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

    #[ORM\Column(length: 300, nullable: true)]
    private ?string $feelingWell = null;

    #[ORM\Column(length: 300, nullable: true)]
    private ?string $pastMedicalHistory = null;

    #[ORM\Column(length: 300, nullable: true)]
    private ?string $currentMedicines = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $allergies = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $hypersensitive = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $epilepsy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $blackWater = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $liverFunction = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $therapy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $history = null;

    #[ORM\OneToOne(inversedBy: 'travelForm', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $hadCancer = null;
    //vaccine history
    #[ORM\Column(length: 150, nullable: true)]
    private ?string $hivPositive = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $DTP = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $hep_b = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Rabies = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Shingles = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Typhoid = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Meningitis = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $JapBEncephalitis = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $MeningitisB = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Chickenpox = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $hep_a = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $yellow_fever = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $influenza = null;

    #[ORM\Column(length: 30, nullable:true)]
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

    public function setFeelingWell(?string $feelingWell): self
    {
        $this->feelingWell = $feelingWell;
        return $this;
    }

    public function getPastMedicalHistory(): ?string
    {
        return $this->pastMedicalHistory;
    }

    public function setPastMedicalHistory(?string $pastMedicalHistory): self
    {
        $this->pastMedicalHistory = $pastMedicalHistory;

        return $this;
    }

    public function getCurrentMedicines(): ?string
    {
        return $this->currentMedicines;
    }

    public function setCurrentMedicines(?string $currentMedicines): self
    {
        $this->currentMedicines = $currentMedicines;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(?string $allergies): self
    {
        $this->allergies = $allergies;

        return $this;
    }

    public function getHypersensitive(): ?string
    {
        return $this->hypersensitive;
    }

    public function setHypersensitive(?string $hypersensitive): self
    {
        $this->hypersensitive = $hypersensitive;

        return $this;
    }

    public function getEpilepsy(): ?string
    {
        return $this->epilepsy;
    }

    public function setEpilepsy(?string $epilepsy): self
    {
        $this->epilepsy = $epilepsy;

        return $this;
    }

    public function getBlackWater(): ?string
    {
        return $this->blackWater;
    }

    public function setBlackWater(?string $blackWater): self
    {
        $this->blackWater = $blackWater;

        return $this;
    }

    public function getLiverFunction(): ?string
    {
        return $this->liverFunction;
    }

    public function setLiverFunction(?string $liverFunction): self
    {
        $this->liverFunction = $liverFunction;

        return $this;
    }

    public function getTherapy(): ?string
    {
        return $this->therapy;
    }

    public function setTherapy(?string $therapy): self
    {
        $this->therapy = $therapy;

        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(?string $history): self
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



    public function getHadCancer(): ?string
    {
        return $this->hadCancer;
    }

    public function setHadCancer(?string $hadCancer): self
    {
        $this->hadCancer = $hadCancer;

        return $this;
    }

    public function getHivPositive(): ?string
    {
        return $this->hivPositive;
    }

    public function setHivPositive(?string $hivPositive): self
    {
        $this->hivPositive = $hivPositive;

        return $this;
    }

    public function getDTP(): ?string
    {
        return $this->DTP;
    }

    public function setDTP(?string $DTP): self
    {
        $this->DTP = $DTP;

        return $this;
    }

    public function getHepB(): ?string
    {
        return $this->hep_b;
    }

    public function setHepB(?string $hepB): self
    {
        $this->hep_b = $hepB;

        return $this;
    }

    public function getRabies(): ?string
    {
        return $this->Rabies;
    }

    public function setRabies(?string $Rabies): self
    {
        $this->Rabies = $Rabies;

        return $this;
    }

    public function getShingles(): ?string
    {
        return $this->Shingles;
    }

    public function setShingles(?string $Shingles): self
    {
        $this->Shingles = $Shingles;

        return $this;
    }

    public function getTyphoid(): ?string
    {
        return $this->Typhoid;
    }

    public function setTyphoid(?string $Typhoid): self
    {
        $this->Typhoid = $Typhoid;

        return $this;
    }

    public function getMeningitis(): ?string
    {
        return $this->Meningitis;
    }

    public function setMeningitis(?string $Meningitis): self
    {
        $this->Meningitis = $Meningitis;

        return $this;
    }

    public function getJapBEncephalitis(): ?string
    {
        return $this->JapBEncephalitis;
    }

    public function setJapBEncephalitis(?string $JapBEncephalitis): self
    {
        $this->JapBEncephalitis = $JapBEncephalitis;

        return $this;
    }

    public function getMeningitisB(): ?string
    {
        return $this->MeningitisB;
    }

    public function setMeningitisB(?string $MeningitisB): self
    {
        $this->MeningitisB = $MeningitisB;

        return $this;
    }

    public function getChickenpox(): ?string
    {
        return $this->Chickenpox;
    }

    public function setChickenpox(?string $Chickenpox): self
    {
        $this->Chickenpox = $Chickenpox;

        return $this;
    }

    public function getHepA(): ?string
    {
        return $this->hep_a;
    }

    public function setHepA(?string $hepA): self
    {
        $this->hep_a = $hepA;

        return $this;
    }

    public function getYellowFever(): ?string
    {
        return $this->yellow_fever;
    }

    public function setYellowFever(?string $yellow_fever): self
    {
        $this->yellow_fever = $yellow_fever;

        return $this;
    }

    public function getInfluenza(): ?string
    {
        return $this->influenza;
    }

    public function setInfluenza(?string $influenza): self
    {
        $this->influenza = $influenza;

        return $this;
    }

    public function getTickBornEncephalitis(): ?string
    {
        return $this->tick_born_encephalitis;
    }

    public function setTickBornEncephalitis(?string $tick_born_encephalitis): self
    {
        $this->tick_born_encephalitis = $tick_born_encephalitis;

        return $this;
    }



    public function setData($form)
    {
        /**
         * form is an 2d keyvalue array, each key responds to a question on the form
         * the inner arrays for questions have two values check and textField, textField is if the user has ticked the box,
         * textfield is what the user might have entered
         * for vaccine history, check is used again and then the date they have entered
         */
        //dump($form);
        foreach ($form as $i => $value)
        {
            //dump($i,$value);
            switch($i)
            {
                default:
                    throw new \Exception("Invalid array in travelForm");
                    break;
                case "feelingWell":
                    $this->setFeelingWell($this->formatAnswer($value,false));
                    break;
                case "pastMedicalHistory":
                    $this->setPastMedicalHistory($this->formatAnswer($value,false));
                    break;
                case "currentMedicines":
                    $this->setCurrentMedicines($this->formatAnswer($value,false));
                    break;
                case "allergies":
                    $this->setAllergies($this->formatAnswer($value,false));
                    break;
                case "hypersensitive":
                    $this->setHypersensitive($this->formatAnswer($value,false));
                    break;
                case "epilepsy":
                    $this->setEpilepsy($this->formatAnswer($value,false));
                    break;
                case "blackWater":
                    $this->setBlackWater($this->formatAnswer($value,false));
                    break;
                case "liverFunction":
                    $this->setLiverFunction($this->formatAnswer($value,false));
                    break;
                case "therapy":
                    $this->setTherapy($this->formatAnswer($value,false),true);
                    break;
                case "history":
                    $this->setHistory($this->formatAnswer($value,false));
                    break;
                case "hadCancer":
                    $this->setHadCancer($this->formatAnswer($value,false));
                    break;
                case "yellowFever":
                    $this->setYellowFever($this->formatAnswer($value,true));
                    break;
                case "hivPositive":
                    $this->setHivPositive($this->formatAnswer($value,true));
                    break;
                case "DTP":
                    $this->setDTP($this->formatAnswer($value,true));
                    break;
                case "hep_b":
                    $this->setHepB($this->formatAnswer($value,true));
                    break;
                case "Rabies":
                    $this->setRabies($this->formatAnswer($value,true));
                    break;
                case "shingles":
                    $this->setShingles($this->formatAnswer($value,true));
                    break;
                case "Typhoid":
                    $this->setTyphoid($this->formatAnswer($value,true));
                    break;
                case "Meningitis":
                    $this->setMeningitis($this->formatAnswer($value,true));
                    break;
                case "chickenPox":
                    $this->setChickenpox($this->formatAnswer($value,true));
                    break;
                case "hepA":
                    $this->setHepA($this->formatAnswer($value,true));
                    break;
                case "Influenza":
                    $this->setInfluenza($this->formatAnswer($value,true));
                    break;
                case "tickBornEncephalitis":
                    $this->setTickBornEncephalitis($this->formatAnswer($value,true));
                    break;
                case "JapBEncephalitis":
                    $this->setJapBEncephalitis($this->formatAnswer($value,true));
                    break;
                case "MeningitisB":
                    $this->setMeningitisB($this->formatAnswer($value,true));
                    break;
            }
        }
    }



    public function setWomenQuestions(?string $data)
    {
        if($data)
        {
            $data = explode(",",$data);
            $this->planPregnancy = $data[0];
            $this->breastFeeding = $data[1];
        }
    }


    private function formatAnswer(array $answer,bool $date): ?string
    {
        /**
         * string will be returned if the user has entered any
         */
        if($answer["check"])
        {
            if($date)
            {
                return $answer["check"].",".$answer["date"]->format("Y-m-d");
            }else{
                if($answer["textField"] == null)
                {
                    return "";
                }else
                {
                    return $answer["textField"];
                }
            }
        }else{

            return null;
        }
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

    public function getResults(): array
    {
        /**
         * returns two arrays, one filled with the data from the qeustions that were asked to the user
         * the other array is filled with their vaccine history, containting wheather they've had it and the date
         */
        $attr = get_object_vars($this);
        $historyArray = [];
        $questionArray = [];
        $check="";
        $comment="";
        //dump($attr);
        $invalidAttributes = ["id","patient"];
        foreach($attr as $i => $value)
        {
            if(!in_array($i,$invalidAttributes))
            {
                dump($i,$value);
                switch($i)
                {
                    case "feelingWell":
                        $questionArray[$i] = ["are you feeling well today",$value];
                        break;
                    case "pastMedicalHistory":
                        $questionArray[$i] = ["have you had any recent or past medical history of note ",$value];
                        break;
                    case "currentMedicines":
                        $questionArray[$i] = ["do you take any current medicines or are you taking halofantrine",$value];
                        break;
                    case "allergies":
                        $questionArray[$i] = ["do you have any allergies to any medicines, latex or gloves ",$value];
                        break;
                    case "hypersensitive":
                        $questionArray[$i] = ["do you know if you're hypersensitive to mefloquine or related compounds",$value];
                        break;
                    case "epilepsy":
                        $questionArray[$i] = ["do you or any of your family suffer from epilepsy ",$value];
                        break;
                    case "blackWater":
                        $questionArray[$i] = ["do you have a history of black water fever",$value];
                        break;
                    case "liverFunction":
                        $questionArray[$i] = ["do you have severe impairment of liver function",$value];
                        break;
                    case "therapy":
                        $questionArray[$i] = ["have you undergone radiotherapy, chemotherapy, steroids treatment",$value];
                        break;
                    case "history":
                        $questionArray[$i] = ["do you have a history of the following: anxiety, depression, heart, lung, spleen, liver. kidney, immunity, blood conditions, disorders, diabetes, hiv-adis",$value];
                        break;
                    case "hadCancer":
                        $questionArray[$i] = ["Do you have Cancer ?",$value];
                        break;
                    case "hivPositive":
                        $questionArray[$i] = ["Are you HIV positive ?",$value];
                        break;
                    //vaccine history lol, there are other values in the array that arn't being used
                    case "DTP":
                    case "hep_b":
                    case "Rabies":
                    case "shingles":
                    case "Typhoid":
                    case "Meningitis":
                    case "chickenPox":
                    case "hepA":
                    case "Influenza":
                    case "tickBornEncephalitis":
                    case "JapBEncephalitis":
                    case "MeningitisB":
                        if(str_contains(",",$value))
                        {
                            $historyArray[$i] = [$check,$value];
                        }
                        break;
                    default: break;
                }
            }
        }
        return [$questionArray,$historyArray];
    }


}
