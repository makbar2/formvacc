<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class CheckDateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("check",CheckboxType::class,
                [
                    "attr"=>
                        [
                            "onchange" => "checkBox(this,'date')",//pass id into function
                            "class"=> "form-check-input",
                        ],
                    "label" => " ",
                ])
            ->add("date",DateType::class,
            [
                "widget" => "single_text",
                //"input"=> "date_time",
                "attr" =>
                [
                    "disabled" => true,
                ],
                "label" => "",
            ])
        ;
    }


}
