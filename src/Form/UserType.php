<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class UserType
 * @package App\Form
 */
class UserType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                "label" => false,
                'attr' => array(
                    'placeholder' => 'Email'
                )
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options' => [
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Password'
                    )
                ],
                'second_options' => [
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Password Confirmation'
                    )
                ],
                'invalid_message' => 'Confirmation is not the same as password.',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 8])
                ]
            ])
            ->add('pseudo', TextType::class, [
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Username'
                )
            ])
        ;
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", User::class);
    }
}