<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Now we need some classes in our Controller because we need that in our form (for the inputs that we will create)
use Symfony\Component\Form \Extension\Core\Type\TextType ;
use Symfony\Component\Form \Extension\Core\Type\TextareaType ;
use Symfony\Component\ Form\Extension\Core\Type \DateTimeType;
use Symfony\ Component\Form\Extension\Core \Type\ChoiceType;
use Symfony\Component\Form\Extension \Core\Type\SubmitType;
use App\Entity\Todo ;


class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date')
            ->add('time')
            ->add('info')
            ->add('capacity')
            ->add('email')
            ->add('phoneNumber')
            ->add('street')
            ->add('zip')
            ->add('city')
            ->add('url')
            ->add('type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
