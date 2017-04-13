<?php

namespace innobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReclamosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut')
            ->add('departamento')
            ->add('torre')
            ->add('recinto', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA '=>'LOGGIA ',
                    'TERRAZA 1'=>'TERRAZA 1',
                    'TERRAZA 2'=>'TERRAZA 2',
                    'TERRAZA 3'=>'TERRAZA 3',
                    'W.CL'=>'W.CL'
                )
            ))
            ->add('fechaReclamo','date')
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