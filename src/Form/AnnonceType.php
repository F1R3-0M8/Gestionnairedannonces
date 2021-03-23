<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $day = date("d"); 
        $month = date("m");
        $year = date("Y");

        $builder
            ->add('title')
            ->add('annoucer')
            ->add('description')
            
            // >add('date', DateType::class, [
            //     'widget' => 'choice',
            //     'format' => 'dd &#xA0; MM &#xA0; yyyy',
            //     'placeholder' => [
            //         'year' => $year, 'month' => $month, 'day' => $day,
            //     ]
            // ])
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => false,
                'delete_label' => '',
                'download_label' => '',
                'download_uri' => false,
                // 'download_attr' =>['class'=>'btn btn-danger btn-block'],
                'image_uri' => true,
                'asset_helper' => false,
                // 'download_label' => array('label' => 'Mot de passe', 'attr'=>['class'=>'btn btn-danger btn-block'])
                // 'label'=>'Envoyer', 'attr'=>['class'=>'btn btn-success btn-block']
                // 'first_options' => array('label' => 'Mot de passe'),
            ])

            ->add('category', EntityType::class, [
            // looks for choices from this entity
            'class' => Category::class,
        
            // uses the User.username property as the visible option string
            'choice_label' => 'name',
        
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
