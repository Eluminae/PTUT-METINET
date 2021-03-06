<?php

namespace AppBundle\Forms;

use AppBundle\Dtos\CampaignCreation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignCreationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('publicResults', ChoiceType::class, [
                'choices' => array(
                    'Oui' => true,
                    'Non' => false,
                ),
            ])
            ->add('endDate', DateType::class)
            ->add('beginningDate', DateType::class)
            ->add('description', TextareaType::class)
            ->add('notation', NotationType::class)
            ->add('image', FileType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => CampaignCreation::class,
        ));
    }
}
