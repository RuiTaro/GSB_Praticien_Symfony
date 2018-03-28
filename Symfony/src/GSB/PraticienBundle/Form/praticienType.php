<?php

namespace GSB\PraticienBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GSB\PraticienBundle\Entity\type_praticien;

class praticienType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('typCode', EntityType::class, array(
            'class' => 'GSBPraticienBundle:type_praticien',
            'choice_label' => 'typLibelle',
            'multiple' => false,

        ))
        ->add('praNom', TextType::class)
        ->add('praAdresse', TextType::class)
        ->add('praCP', TextType::class)
        ->add('praVille', TextType::class)
        ->add('coefnotoriete', IntegerType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\PraticienBundle\Entity\praticien'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_praticienbundle_praticien';
    }


}
