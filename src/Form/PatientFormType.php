<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PatientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class,
                [
                    "attr" => ["class" => "form-control"]
                ]
            )
            ->add('surname', TextType::class,
                [
                    "attr" => ["class" => "form-control"]
                ]
            )
            ->add('email',EmailType::class,
                [
                    "attr" => ["class" => "form-control"]
                ]
            )
            ->add('dob', DateType::class,
                [
                    "widget" => "single_text",
                    "label" => "Date of birth"
                ]
            )
            ->add('gender', ChoiceType::class,
                [
                    "choices" =>[
                        "male" => 0,
                        "female" => 1
                    ],
                    "attr" => ["class" => "form-select"]
                ]
            )
            ->add('address', TextType::class,
                [
                    "attr" => ["class" => "form-control"]
                ]
            )
            ->add('GPName', TextType::class,
                [
                    "attr" => ["class" => "form-control"],
                    "label" => "GP Name"
                ]
            )
            ->add('GPAddress', TextType::class,
                [
                    "attr" => ["class" => "form-control"],
                    "label" => "GP Address"
                ]
            )
            ->add('notify', CheckboxType::class,
                [
                    "attr" => ["class" => "form-check-input"]
                ]
            )
        ;
    }


}
