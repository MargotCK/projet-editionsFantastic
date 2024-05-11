<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
            ->add('isbn', IntegerType::class,  [
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
            ->add('prixUnitaire', MoneyType::class, [
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
            ->add('dateDePublication', DateType::class, [
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
            ->add('quantiteStockLivre', NumberType::class, [
                'label'=>'Quantité de livre en stock',
                'attr'=>[
                    'class'=> ' border border-primary'
                ]

            ])
            ->add('resumeLivre',TextareaType::class, [
                'label'=> 'Résumé du livre'  ,
                'attr'=>[
                    'class'=> ' border border-primary'
                ]
                
            ])
            ->add('format', IntegerType::class, [
                'attr'=>[
                    'placeholder'=> 'saisir le format en cm',
                    'class'=> ' border border-primary'
                ]
            ])
           
            ->add('nbPage', NumberType::class, [
                'label'=>'Nombre de page',
                'attr'=>[
                    'class'=> ' border border-primary'
                ]
            ])
        ;

        /**
         * L'objet builder permet de construire le formulaire chaque métode va correspondre a àun élément du formulaire. Chaque méthode add va correspondre à un élément du formulaire, en Symfonie on appelle les éléments  des childs. 
         * 
         * Il y a 3 arguments obligatoires dans les méthodes add :
         * le 1er le nom de la propriété dans l'entité si l'entité est lié à une entity (string)
         * 
         * le 2 ème argument est le nom de la class, Symfony lui en donne un par défaut en se basant sur l'entité mais on peut lui en donner une nous même soit
         *On trouve sur la  documentation " symfony type " donne la liste de toutes les class de tous les types

         Le 3 ème argument est le tableau des options, il est à l'intérieur des parenthèses de la méthode add comme ceci :
                    ->add('resumeLivre',TextareaType::class, [])
            il y a deux genres d'option:
            -


        /!\ un tableau à toujours une clé et une valeur k=> valeur


LES FORMULAIRES

on a généré un nouveau dossier le dossier form, une nouvelle type de class : form
DC'est dedans que nous allons trouver nos formulaires, nos formulaires dans le moule , le plan de la construction
   
la fonction buildForm c'est la creation formulaire elle a en dépendance un objet buider ($buider)

pour faire apparaitre le formulaire sur le navigateur
         */


    }

        



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
