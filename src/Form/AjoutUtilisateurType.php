<?php

namespace App\Form;

use App\Entity\UTILISATEUR;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AjoutUtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       

        $builder
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('email', TextType::class)
            ->add('Telephone', TextType::class)
            ->add('datenaissance', DateType::class, [
                'years' => range(date('Y')-1500, date('Y')),
            ])
            ->add('tYPEABONNEMENT', TextType::class)    
            ->add('tYPEPAIEMENT', TextType::class)    
            ->add('send', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UTILISATEUR::class,
        ]);
    }
}
