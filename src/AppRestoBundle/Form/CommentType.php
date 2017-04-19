<?php

namespace AppRestoBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', TextType::class, array(
                'attr' => array('class' => 'input-field col m4 s7',
                    'placeholder' => 'Votre Pseudonyme'),
                'label' => false
            ))
            ->add('content', TextareaType::class, array(
                'attr' => array(
                    'class' => 'input-field col s12 materialize-textarea',
                    'placeholder' => 'Donnez-nous votre avis!'
                ),
                'label' => false
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppRestoBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'apprestobundle_comment';
    }


}
