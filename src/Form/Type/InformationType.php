<?php

// src/Form/Type/InformationType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class InformationType extends AbstractType
{


    function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //this relies on javascript to work, symfony poopoo when it comes to dynamic crap
        $builder
            ->add("check",CheckboxType::class,
            [
                "attr"=>
                    [
                        "onchange" => "checkBox(this)"//pass id into function
                    ],
                "label" => " ",
            ])
            ->add("textField",TextareaType::class,
            [
                "label" => " ",
                "attr"=>
                [
                    "class" => "form-control",
                    "rows" => 2,
                    "disabled" => true,
                ],
            ])
            ;
    }

}