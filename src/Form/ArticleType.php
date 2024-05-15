<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Isbn;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'required'=> false,
                'attr'=>[
                'class'=> ' border border-primary'
                ],
                'constraints' => [
                    new NotBlank([
                        'message'=> 'Veuillez saisir le titre du produit'
                    ])                    
                ]
            ])

            ->add('couv1',FileType::class, [
                'label'=>'1ère de couverture',
                'required'=>false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ],
                'constraints'=> [
                    new Image([
                        'minWidth' => 200,
                        'maxWidth' => 400,
                        'minHeight' => 200,
                        'maxHeight' => 400,
                        'allowLandscape' => false,
                        'allowPortrait' => false,
                    ])
                ]
            ])

            ->add('couv4',FileType::class, [
                'label'=>'4ème de couverture',
                'required'=>false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ],
                'constraints'=> [
                    new Image([
                        'minWidth' => 200,
                        'maxWidth' => 400,
                        'minHeight' => 200,
                        'maxHeight' => 400,
                        'allowLandscape' => false,
                        'allowPortrait' => false,
                    ])
                ]
            ])

            ->add('isbn', TextType::class,  [
                'required'=> false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ],
                'constraints' =>[
                    new NotBlank([
                    ]),
                    new Length([
                        'min'=> 13,
                        'max'=> 13,
                        'minMessage'=>'Le numéro ISBN doit être au format EAN valide.',
                        'maxMessage'=>'Le numéro ISBN doit être au format EAN valide.'
                    ])
                ]
            ])

            ->add('prixUnitaire', MoneyType::class, [
                'label'=> 'Prix du livre',
                'required'=> false,
                'attr'=>[
                    'placeholder'=> 'saisir le prix du produit',
                    'class'=> ' border border-primary'
                ]
            ])
            ->add('dateDePublication', DateType::class, [
                'required'=> false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ]
            ])
            
            ->add('quantiteStockLivre', IntegerType::class, [
                'label'=>'Quantité de livre en stock',
                'required'=> false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ],
                'constraints'=> [
                    new PositiveOrZero([])
                ]
            ])

            ->add('resumeLivre',TextareaType::class, [
                'label'=> 'Résumé du livre',
                'required'=> false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ]
            ])

            ->add('format', TextType::class, [
                'required'=> false,
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
        
            ->add('nbPage', IntegerType::class, [
                'label'=>'Nombre de page',
                'required'=> false,
                'attr'=>[
                    'class'=> ' border border-primary'
                ]
            ]);
        


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
