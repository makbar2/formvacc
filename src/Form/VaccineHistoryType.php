<?php

namespace App\Form;

use App\Form\Type\CheckDateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VaccineHistoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("DTP", CheckDateType::class,
                [

                ]
            )
            ->add("hep_b", CheckDateType::class,
                [

                ]
            )
            ->add("Rabies", CheckDateType::class,
                [

                ]
            )
            ->add("shingles", CheckDateType::class,
                [

                ]
            )
            ->add("Typhoid", CheckDateType::class,
                [

                ]
            )
            ->add("Meningitis", CheckDateType::class,
                [

                ]
            )
            ->add("Meningitis", CheckDateType::class,
                [

                ]
            )
            ->add("yellowFever", CheckDateType::class,
                [

                ]
            )

            ->add("DTP", CheckDateType::class,
                [

                ]
            )
            ->add("hep_b", CheckDateType::class,
                [

                ]
            )
            ->add("Rabies", CheckDateType::class,
                [

                ]
            )
            ->add("Typhoid", CheckDateType::class,
                [

                ]
            )
            ->add("JapBEncephalitis", CheckDateType::class,
                [

                ]
            )
            ->add("Meningitis", CheckDateType::class,
                [

                ]
            )
            ->add("chickenPox", CheckDateType::class,
                [

                ]
            )
            ->add("hepA", CheckDateType::class,
                [

                ]
            )
            ->add("Influenza", CheckDateType::class,
                [

                ]
            )
            ->add("tickBornEncephalitis", CheckDateType::class,
                [

                ]
            )
            ->add("MeningitisB", CheckDateType::class,
                [

                ]
            )
        ;
    }


}
