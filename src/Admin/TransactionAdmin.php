<?php

namespace App\Admin;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use function Sodium\add;

class TransactionAdmin extends AbstractAdmin
{
    public function configureFormFields(FormMapper $form): void
    {
        parent::configureFormFields($form); // TODO: Change the autogenerated stub
        $form
            ->add('percentage', ChoiceType::class, [
                'label' => 'Pourcentage',
                'choices' => [
                    '30' => 30,
                    '70' => 70,
                    '100' => 100
                ],
                'attr' => [
                    'placeholder' => 'Pourcentage'
                ]
            ])
            ->add('firstRequirement', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control ',
                ],
                'label' => 'Raison pour 30%',
            ])
            ->add('secondRequirement', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control ',
                ],
                'label' => 'Raison pour 70%',
            ])
            ->add('thirdRequirement', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control ',
                ],
                'label' => 'Raison pour 100%',
            ])
            ->add('senderBank', TextType::class, [
                'attr' => [
                    'class' => 'form-control ',

                ],
                'label' => 'Bank expéditeur'
            ])
            ->add('senderCountry', TextType::class, [
                'attr' => [
                    'class' => 'form-control ',

                ],
                'label' => 'Pays Expéditeur',

            ])
            ->add('sender', TextType::class, [
                'attr' => [
                    'class' => 'form-control ',
                ],
                'label' => 'Nom d\'expéditeur'
            ])
        ;
    }

    public function configureDatagridFilters(DatagridMapper $filter): void
    {
        parent::configureDatagridFilters($filter); // TODO: Change the autogenerated stub

        $filter
            ->add('percentage', null, ['label' => 'Pourcentage'])
            ->add('sender', null, ['label' => 'Nom expediteur'])
            ->add('senderBank', null, ['label' => 'Banque'])
        ;
    }

    public function configureListFields(ListMapper $list): void
    {
        parent::configureListFields($list); // TODO: Change the autogenerated stub

        $list
            ->addIdentifier('sender', null, ['label' => 'Expéditeur'])
            ->add('percentage', null, ['label' => 'Pourcentaqe'])
            ->add('senderBank', null, ['label' => 'Banque'])
            ->add('user')
        ;
    }

    public function configureShowFields(ShowMapper $show): void
    {
        parent::configureShowFields($show); // TODO: Change the autogenerated stub

        $show
            ->add('percentage', null, ['label' => 'Pourcentage'])
            ->add('sender', null, ['label' => 'Expediteur'])
            ->add('senderBank', null, ['label' => 'Banque'])
        ;
    }
}