<?php

namespace AppRestoBundle\Form;

use AppRestoBundle\Entity\Day;
use AppRestoBundle\Entity\Meal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DayType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('entrees', CollectionType::class, array(
            'entry_type'=> MealType::class,
        ))
        ->add('plats', CollectionType::class, array(
            'entry_type'=> MealType::class,
        ))
        ->add('garniture', CollectionType::class, array(
            'entry_type'=> MealType::class,
        ))
        ->add('entrees', CollectionType::class, array(
            'entry_type'=> MealType::class,
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Day::class,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'apprestobundle_day';
    }


}
