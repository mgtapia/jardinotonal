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
            ->add('identificador')
            ->add('recinto', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                )
            ))
            ->add('fechaReclamo','date')
            ->add('detalle', TextareaType::class)
            ->add('recinto2', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle2', TextareaType::class, array('required' => false))
->add('recinto3', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle3', TextareaType::class, array('required' => false))
->add('recinto4', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle4', TextareaType::class, array('required' => false))
->add('recinto5', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle5', TextareaType::class, array('required' => false))
->add('recinto6', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle6', TextareaType::class, array('required' => false))
->add('recinto7', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle7', TextareaType::class, array('required' => false))
->add('recinto8', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle8', TextareaType::class, array('required' => false))
->add('recinto9', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle9', TextareaType::class, array('required' => false))
->add('recinto10', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle10', TextareaType::class, array('required' => false))
->add('recinto11', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle11', TextareaType::class, array('required' => false))
->add('recinto12', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle12', TextareaType::class, array('required' => false))
->add('recinto13', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle13', TextareaType::class, array('required' => false))
->add('recinto14', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle14', TextareaType::class, array('required' => false))
->add('recinto15', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle15', TextareaType::class, array('required' => false))
->add('recinto16', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle16', TextareaType::class, array('required' => false))
->add('recinto17', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle17', TextareaType::class, array('required' => false))
->add('recinto18', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle18', TextareaType::class, array('required' => false))
->add('recinto19', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle19', TextareaType::class, array('required' => false))
->add('recinto20', ChoiceType::class, array(
                'placeholder' => 'SELECCIONA UN RECINTO', 'choices' => array(       
                    'BAÑO 1 PPAL'=>'BAÑO 1 PPAL',
                    'BAÑO 2'=>'BAÑO 2',
                    'BAÑO SERV'=>'BAÑO SERV',
                    'BAÑO VISITA'=>'BAÑO VISITA',
                    'COCINA'=>'COCINA',
                    'COMEDOR'=>'LIVING COMEDOR',
                    'DORM 1 PPAL'=>'DORM 1 PPAL',
                    'DORM 2'=>'DORM 2',
                    'DORM 3'=>'DORM 3',
                    'DORM SERV'=>'DORM SERV',
                    'ESTAR'=>'ESTAR',
                    'HALL ACCESO'=>'HALL ACCESO',
                    'HOME OFFICE'=>'HOME OFFICE',
                    'LOGGIA'=>'LOGGIA',
                    'PASILLO'=>'PASILLO',
                    'TERRAZA 1'=>'TERRAZA LIVING COMEDOR',
                    'TERRAZA 2'=>'TERRAZA DORM. PPAL',
                    'TERRAZA 3'=>'TERRAZA',
                    'W.CL'=>'WALKING CLOSET'
                ), 'required' => false
            ))
                
            ->add('detalle20', TextareaType::class, array('required' => false))

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