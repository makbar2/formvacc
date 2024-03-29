<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TravelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('patientForm',PatientFormType::class,
                [
                    "attr" =>[
                        "class"  =>"patientForm",
                    ],
                    "label"=> false,
                ],
            )
            ->add("travelForm",TravelFormQuestionsType::class,
                [
                    "attr" => [
                        "class" => "travelForm",
                    ],
                    "required"=> false,
                    "label"=> false,
                ],
            )
            ->add("vaccineHistory", VaccineHistoryType::class,
            [
                "attr" => [
                    "class" => "vaccineHistory",
                ],
                "required"=> false,
                "label"=> false,
            ])
            ->add("womenQuestions", HiddenType::class,
                [
                    "required" => false,
                ]
            )
            ->add("submit",SubmitType::class,
                [
                    "attr" =>[
                        "class" => "btn btn-primary",
                    ]
                ]
            )
        ;
    }


}
