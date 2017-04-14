<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Clientes;
use innobisBundle\Entity\Viviendas;
use innobisBundle\Form\ClientesType;

class SecurityController extends Controller
{
	public function checkAction() {
		
	}
    public function clientAction($id) {

        return $this->render('innobisBundle:Default:client.html.twig', array('id'=>$id));
    }
	public function clientsAction()
    {
        $user = new Clientes();
        $viviendas = $this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll();
        $form = $this->createCreateForm($user);
    	return $this->render('innobisBundle:Default:clients.html.twig', array('form'=>$form->createView(),'viviendas'=>$viviendas));
    }
    private function createCreateForm(Clientes $entity) 
    {
        $form = $this->createForm(new ClientesType(), $entity, array(
                'action' => $this->generateUrl('innobis_create_client'),
                'method' => 'POST'
            ));
        return $form;
    }
    public function createAction(Request $request)
    {
        $user = new Clientes();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid())
        {
        	$name = strtoupper($form->get('nombre')->getData());
        	$user->setNombre($name);
        	$user->setRut($form->get('rut')->getData());
            
           	$em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('mensaje','El cliente ha sido creado');
        
            return $this->redirectToRoute('innobis_homepage');
        }

        return $this->render('innobisBundle:Default:clients.html.twig', array('form'=>$form->createView()));
    }
}

