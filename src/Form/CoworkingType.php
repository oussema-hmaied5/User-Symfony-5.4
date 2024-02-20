<?php

namespace App\Form;

use App\Entity\Coworking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoworkingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idco')
            ->add('description')
            ->add('tarifs')
            ->add('dispo')
            ->add('horaireouvr')
            ->add('horairefer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coworking::class,
        ]);
    }
}
