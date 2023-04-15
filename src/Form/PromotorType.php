<?php

namespace App\Form;

use App\Entity\Promotor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;

class PromotorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('evento', TextType::class, [
                'label' => 'Evento',
                'data' => 'VILLA SANTA',
                'attr' => [
                'readonly' => true,
                ],
            ])
        
            ->add('nombre', TextType::class, [
                'label' => 'Nombre Completo',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Por favor ingrese su nombre',
                    ]),
                    
                    new Regex([
                        'pattern' => '/^[a-zA-Z\s]*$/',
                        'message' => 'Solo se permiten letras y espacios',
                    ]),
                ],
                'attr' => [
                    'onkeyup' => "this.value = this.value.replace(/[^a-zA-Z\s]/g, '')",
                    'title' => 'Solo se permiten letras',
                    'placeholder' => 'Ingresar Nombre',
                    'maxlength' => 40
                ],
            ])
            ->add('grupo', TextType::class, [
                'label' => 'Grupo',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Este campo no debe dejarse vacío.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z][0-9]*$/',
                        'message' => 'El numero de grupo debe comenzar con una letra',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'El grupo debe tener al menos 2 caracteres.',
                    ]),
                ],
                'attr' => [
                    'onkeyup' => "this.value = this.value.replace(/[^a-zA-Z\d_-]/g, '')",
                    'placeholder' => 'Ingresar Grupo',
                    'maxlength' => 7
                ],
            ])
            
            
            
            ->add('dni', null, [
                'label' => 'DNI',
                'attr' => [
                    'type' => 'number',
                    'min' => 10000000,
                    'max' => 99999999, // agregado
                    'oninput' => 'this.value = this.value.replace(/[^0-9]/g, \'\')',
                    'oninvalid' => "setCustomValidity('El DNI debe contener 8 números')",
                    'onchange' => "try{setCustomValidity('')}catch(e){}",
                    'title' => 'Solo se permiten números',
                    'placeholder' => 'Ingresar DNI'
                ],
                'constraints' => [
                    new Length([
                        'min' => 8,
                        'max' => 8,
                        'exactMessage' => 'El DNI debe contener exactamente 8 números',
                    ]),
                    new NotBlank([
                        'message' => 'El campo de DNI es requerido.',
                    ]),
                ],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotor::class,
        ]);
    }
}


