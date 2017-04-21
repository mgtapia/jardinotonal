<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Users;
use innobisBundle\Form\UsersType;
use innobisBundle\Entity\Clientes;
use innobisBundle\Form\EnterType;
use innobisBundle\Entity\Viviendas;
use innobisBundle\Entity\RecintoVivienda;
use innobisBundle\Entity\Reclamos;
use innobisBundle\Form\ReclamosType;
use innobisBundle\Form\SolutionType;
use innobisBundle\Form\AsignarType;

class DefaultController extends Controller
{
	public function indexAction()
    {
        $user = new Clientes();
        $form = $this->enterCreateForm($user);
        return $this->render('innobisBundle:Default:index.html.twig', array('form'=>$form->createView()));
    }
 	public function usersAction()
    {
    	$users = $this->getDoctrine()->getRepository("innobisBundle:Users")->findAll();
    	return $this->render('innobisBundle:Default:users.html.twig', array("users"=>$users));
    }
    public function adminAction()
    {
        $auth = $this->get('security.authentication_utils');
        $error = $auth->getLastAuthenticationError();
        $lastUsername = $auth->getLastUsername();

        return $this->render('innobisBundle:Default:admin.html.twig', array('last_username'=>$lastUsername,'error'=>$error));
    }
 	public function signupAction()
    {
        $user = new Users();
        $form = $this->createCreateForm($user);
    	return $this->render('innobisBundle:Default:signup.html.twig', array('form'=>$form->createView()));
    }
    private function createCreateForm(Users $entity) 
    {
        $form = $this->createForm(new UsersType(), $entity, array(
                'action' => $this->generateUrl('innobis_create'),
                'method' => 'POST'
            ));
        return $form;
    }
    public function createAction(Request $request)
    {
        $user = new Users();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $password = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoder = $encoder->encodePassword($user, $password);

            $user->setPassword($encoder);

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('mensaje','El usuario ha sido creado');
        
            return $this->redirectToRoute('innobis_homepage');
        }

       return $this->render('innobisBundle:Default:signup.html.twig', array('form'=>$form->createView()));
    }
    public function clientAction($id)
    {
        return $this->render('innobisBundle:Default:client.html.twig', array('id'=>$id));
    }  
    private function enterCreateForm(Clientes $entity) 
    {
        $form = $this->createForm(new EnterType(), $entity, array(
                'action' => $this->generateUrl('innobis_enter'),
                'method' => 'POST'
            ));
        return $form;
    }
    public function enterAction(Request $request)
    {
        $user = new Clientes();
        $forma = $this->enterCreateForm($user);
        $forma->handleRequest($request);
        $rut = $forma->get('rut')->getData();

        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();
        $viviendas = $this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll();
        $recintos = $this->getDoctrine()->getRepository("innobisBundle:RecintoVivienda")->findAll();
        $check = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findByRut($rut);

        if ($check) { $check = 'Si'; } else { $check = 'No'; }

        $reclamos = new Reclamos();
        $form = $this->createReclamosForm($reclamos);
        
        return $this->render('innobisBundle:Default:client.html.twig',  array('id'=>$rut, 'form'=>$form->createView(), 
           'check'=>$check, 'clientes'=>$clientes, 'recintos'=>$recintos, 'viviendas'=>$viviendas));
    }
    private function createReclamosForm(Reclamos $entity) 
    {
        $form = $this->createForm(new ReclamosType(), $entity, array(
                'action' => $this->generateUrl('innobis_observation'),
                'method' => 'POST'
            ));
        return $form;
    }
    public function observationAction(Request $request)
    {
        $reclamo = new Reclamos();
        $form = $this->createReclamosForm($reclamo);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $reclamo->setFechaReclamo(new \DateTime('now'));
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamo);
            $em->flush();

            $this->addFlash('mensaje','Su observación ha sido enviada');   
        }

        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();
        $viviendas = $this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll();
        $recintos = $this->getDoctrine()->getRepository("innobisBundle:RecintoVivienda")->findAll();
        $check = 'Si';

        return $this->render('innobisBundle:Default:client.html.twig', 
            array('id'=>$form->get('rut')->getData(), 'form'=>$form->createView(), 
           'check'=>$check, 'clientes'=>$clientes, 'recintos'=>$recintos, 'viviendas'=>$viviendas));
    }
    public function clientlistAction()
    {
        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();
        return $this->render('innobisBundle:Default:clientlist.html.twig', array("clientes"=>$clientes));
    }
    public function observationlistAction()
    {
        $reclamos = $this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll();
        return $this->render('innobisBundle:Default:observations.html.twig', array("reclamos"=>$reclamos));
    }
    public function observationexcelAction()
    {
        $reclamos = $this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll();
        return $this->render('innobisBundle:Default:excel.html.twig', array("reclamos"=>$reclamos));
    }
    public function obsidAction($id)
    {      
        $update = $this->getDoctrine()->getRepository('innobisBundle:Reclamos')->find($id);
        $form = $this->createForm(new SolutionType(), $update);
        
        $request = $this->getRequest();
        $form->handleRequest($request);


        $reclamos = $this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll();

        if ($form->isSubmitted()) 
        {
            if ($form->isValid())
            {
                $update->setFechaSolucion(new \DateTime('now'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($update);
                $em->flush();

                $this->addFlash('mensaje','Los cambios han sido guardados');
                return $this->render('innobisBundle:Default:observations.html.twig', array("reclamos"=>$reclamos));
            }
        }

        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();

        return $this->render('innobisBundle:Default:observation.html.twig', 
            array("id"=>$id, "reclamos"=>$reclamos, "clientes"=>$clientes, "form" => $form->createView()));
    }
    public function deptosAction()
    {
        $viviendas = $this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll();
        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();
        return $this->render('innobisBundle:Default:deptos.html.twig', array("deptos"=>$viviendas, "clientes"=>$clientes));
    }
    public function asignarAction($id)
    {
        $update = $this->getDoctrine()->getRepository('innobisBundle:Viviendas')->find($id);
        $form = $this->createForm(new AsignarType(), $update);
        
        $request = $this->getRequest();
        $form->handleRequest($request);

        $viviendas = $this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll();
        $clientes = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll();

        if ($form->isSubmitted()) 
        {
            $rut = $form->get('rutDueno')->getData();
            if ($form->isValid() && $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findByRut($rut))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($update);
                $em->flush();

                $this->addFlash('mensaje','Los cambios han sido guardados');
                return $this->render('innobisBundle:Default:deptos.html.twig', array("deptos"=>$viviendas, "clientes"=>$clientes));
            }
        }
        return $this->render('innobisBundle:Default:asignar.html.twig', array("id"=>$id, 'form'=>$form->createView(), "deptos"=>$viviendas, "clientes"=>$clientes));
    }
}