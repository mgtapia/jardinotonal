<?php

namespace innobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SolutionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('categoria', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UNA CATEGORÍA', 'choices' => array(       
                    'Pre Entrega'=>'Pre Entrega',
                    'Entrega'=>'Entrega',
                    'Post Venta'=>'Post Venta'
                )
            ))
            ->add('gravedad', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA LA GRAVEDAD', 'choices' => array(       
                    '1'=>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4'
                )
            ))
            ->add('fechaSolucion','date')
            ->add('observacion', TextareaType::class)
            ->add('save','submit', array('label'=>'Enviar'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'innobisBundle\Entity\Reclamos'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'reclamos';
    }
}