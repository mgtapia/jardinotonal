<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Clientes;
use innobisBundle\Entity\Viviendas;
use innobisBundle\Entity\Reclamos;

class SecurityController extends Controller
{
	public function checkAction() { }

    public function importAction($id)
    {
    	$form = $this->createFormBuilder()->add('rutDueno')->add('departamento')->add('torre')
        ->add('submitFile','file',array('label'=>'Importar CSV'))->getForm();

        return $this->render('innobisBundle:Default:client_import.html.twig',array('id'=>$id, 'form'=>$form->createView(),
            'viviendas'=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
            'clientes'=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll()
            )
        );
    }
    public function loadCSVAction(Request $request)
    {
        $form = $this->createFormBuilder()->add('rutDueno')->add('departamento')->add('torre')
        ->add('submitFile','file',array('label'=>'Importar CSV'))->getForm();

        $data = array();

        if ($request->getMethod('post') == 'POST') 
        {
            $form->handleRequest($request);
            if ($form->isValid()) 
            {
                $file = $form->get('submitFile');
                $file = $file->getData();
                $ext = explode(".", $file->getClientOriginalName());
                $type = end($ext);

                if ($type == "csv")
                {
                    $handle = fopen($file,'r');
                    $count = 0; 
                    $handle = fopen("$file", "r"); 

                    while (($row = fgetcsv($handle, 1000, ";")) !== FALSE)
                    {
                        $data[$count] = $row;
                        $count = $count + 1;
                    }

                    $em=$this->getDoctrine()->getManager();

                    for ($i = 1; $i < $count; $i = $i + 1)
                    {
                        if ($data[$i][0] != "" && $data[$i][1] != "") 
                        {
                            $reclamo = new Reclamos();
                            $reclamo
                                ->setFechaReclamo(new \DateTime('now'))->setRut($form->get('rutDueno')->getData())
                                ->setDepartamento($form->get('departamento')->getData())->setTorre($form->get('torre')->getData())
                                ->setRecinto($data[$i][0])->setDetalle($data[$i][1])->setFechaSolucion(NULL)
                                ->setGravedad("")->setCategoria("")->setObservacion("");
                            $em->persist($reclamo);
                            $em->flush();
                        }
                    }
                    $this->addFlash('mensaje','Sus observacines han sido enviadas');
                } 
                else
                {
                    $this->addFlash('error',"Intentelo nuevamente, el archivo seleccionado tiene un formato inválido");
                }              
            }
         }

        return $this->render('innobisBundle:Default:client_import.html.twig',array(
            'id'=>$form->get('rutDueno')->getData(), 'form'=>$form->createView(),
            'viviendas'=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
            'clientes'=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll()
            )
        );     
    }
}

