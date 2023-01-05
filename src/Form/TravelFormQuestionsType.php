<?php

namespace App\Form;


use App\Form\Type\InformationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class TravelFormQuestionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('feelingWell', InformationType::class,
            [

                "label" => "are you feeling well today"
            ])
            ->add('pastMedicalHistory', InformationType::class,
            [
                "label" => "have you had any recent or past medical history of note "
            ])
            ->add('currentMedicines', InformationType::class,
            [

                "label" => "do you take any current medicines or are you taking halofantrine"
            ])
            ->add('allergies', InformationType::class,
            [
                "label" => "do you have any allergies to any medicines, latex or gloves "
            ])
            ->add('hypersensitive', InformationType::class,
            [
                "label" => "do you know if you're hypersensitive to mefloquine or related compounds"
            ])
            ->add('epilepsy', InformationType::class,
            [
                "label" => "do you or any of your family suffer from epilepsy "
            ])
            ->add('blackWater', InformationType::class,
            [
                "label" => "do you have a history of black water fever"
            ])
            ->add('liverFunction', InformationType::class,
            [
                "label" => "do you have severe impairment of liver function"
            ])
            ->add('therapy', InformationType::class,
            [
                "label" => "have you undergone radiotherapy, chemotherapy, steroids treatment"
            ])
            ->add('history', InformationType::class,
            [
                "label" => "do you have a history of the following: anxiety, depression, heart, lung, spleen, liver. kidney, immunity, blood conditions, disorders, diabetes, hiv-adis"
            ])
            ->add("hadCancer", InformationType::class,
                [
                    "label" => "Do you have Cancer ?",
                ]
            )
            ->add("hivPositive", InformationType::class,
                [
                    "label" => "Are you HIV positive ?",
                ]
            )


        ;
    }

}
