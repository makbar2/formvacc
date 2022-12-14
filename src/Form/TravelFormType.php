<?php

namespace App\Form;

use App\Entity\TravelForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TravelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('feelingWell', TextareaType::class,
            [
               "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "are you feeling well today"
            ])
            ->add('pastMedicalHistory', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "have you had any recent or past medical history of note "
            ])
            ->add('currentMedicines', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you take any current medicines or are you taking halofantrine"
            ])
            ->add('allergies', TextareaType::class,
            [
               "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you have any allergies to any medicines, latex or gloves "
            ])
            ->add('hypersensitive', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you know if you're hypersensitive to mefloquine or related compounds"
            ])
            ->add('epilepsy', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you or any of your family suffer from epilepsy "
            ])
            ->add('blackWater', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you have a history of black water fever"
            ])
            ->add('liverFunction', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you have severe impairment of liver function"
            ])
            ->add('therapy', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "have you undergone radiotherapy, chemotherapy, steroids treatment"
            ])
            ->add('history', TextareaType::class,
            [
                "attr" => ["class" => "form-control", "rows" => 4],
                "label" => "do you have a history of the following: anxiety, depression, heart, lung, spleen, liver. kidney, immunity, blood conditions, disorders, diabetes, hiv-adis"
            ])
            ->add("hadCancer")
            ->add("yellowReaction")
            ->add("hibPositive")
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TravelForm::class,
        ]);
    }
}
