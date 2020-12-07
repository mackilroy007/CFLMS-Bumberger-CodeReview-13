<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Now we need some classes in our Controller because we need that in our form (for the inputs that we will create)
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Todo;


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
            ->add('type');
    }
    // alternative on how to style the form
    // ->add('name', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('date', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('time', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('info', TextareaType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    //         ->add('capacity', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('email', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('phoneNumber', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('street', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('zip', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('city', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('url', TextType::class, array ('attr' => array('class' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    //         ->add('type', ChoiceType::class, array ( 'choices' => array ( 'music' => 'music' , 'sport' => 'sport' , 'movie' => 'movie', 'art' => 'art', 'other' => 'other' ), 'attr'  => array ( 'class' => 'form-control' , 'style' => 'margin-botton:15px' )))

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
