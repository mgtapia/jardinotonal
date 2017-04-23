<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Users;
use innobisBundle\Form\UsersType;
use innobisBundle\Entity\Clientes;
use innobisBundle\Form\ClientesType;
use innobisBundle\Entity\Reclamos;
use innobisBundle\Form\ReclamosType;
use innobisBundle\Entity\Viviendas;
use innobisBundle\Entity\RecintoVivienda;
use innobisBundle\Form\SolutionType;
use innobisBundle\Form\EnterType;
use innobisBundle\Form\AsignarType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DefaultController extends Controller
{
    #Cliente
    public function indexAction()
    {
        return $this->render('innobisBundle:Default:index.html.twig', 
            array( 'form'=>$this->enterCreateForm(new Clientes())->createView() )
        );
    }
    public function enterAction(Request $request)
    {
        $rut = $this->enterCreateForm(new Clientes())->handleRequest($request)->get('rut')->getData();
        $check = $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findByRut($rut);
        if ($check) { $check = 'Si'; } else { $check = 'No'; }

        return $this->render('innobisBundle:Default:client.html.twig', array( 
            'id'=>$rut, 'check'=>$check, 'form'=>$this->observationCreateForm(new Reclamos())->createView(), 
            'clientes'=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll(), 
            'recintos'=>$this->getDoctrine()->getRepository("innobisBundle:RecintoVivienda")->findAll(), 
            'viviendas'=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll()
            )
        );
    }
    private function enterCreateForm(Clientes $entity) 
    {
        return $this->createForm(new EnterType(), $entity, 
            array( 'action' => $this->generateUrl('innobis_client_enter'), 'method' => 'POST' )
        );
    }

    public function observationAction(Request $request)
    {
        $reclamo = new Reclamos();
        $form = $this->observationCreateForm($reclamo);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $reclamo
                ->setFechaReclamo(new \DateTime('now'))->setFechaSolucion(NULL)
                ->setGravedad("")->setCategoria("")->setObservacion("");
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamo);
            $em->flush();

            $this->addFlash('mensaje','Su observación ha sido enviada');   
        }
        
        return $this->render('innobisBundle:Default:client.html.twig', array(
            'id'=>$form->get('rut')->getData(), 'form'=>$form->createView(), 'check'=>"Si", 
            'clientes'=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll(), 
            'viviendas'=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
            'recintos'=>$this->getDoctrine()->getRepository("innobisBundle:RecintoVivienda")->findAll()
            )
        );
    }
    private function observationCreateForm(Reclamos $entity) 
    {
        return $this->createForm(new ReclamosType(), $entity, 
            array( 'action' => $this->generateUrl('innobis_observation'), 'method' => 'POST' )
        );
    }
    public function clientAction($id)
    {
        return $this->render('innobisBundle:Default:client.html.twig', array('id'=>$id));
    }

    #Administrador
    public function adminAction()
    {
        $auth = $this->get('security.authentication_utils');
        return $this->render('innobisBundle:Default:admin.html.twig', 
            array( 'last_username'=>$auth->getLastUsername(), 'error'=>$auth->getLastAuthenticationError() )
        );
    }
    public function adminListAction()
    {
        return $this->render('innobisBundle:Default:admin_list.html.twig', 
            array( "users"=>$this->getDoctrine()->getRepository("innobisBundle:Users")->findAll() )
        );
    }  
    public function adminClientsAction()
    {
        return $this->render('innobisBundle:Default:admin_clients.html.twig', 
            array( "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll() )
        );
    }
    public function adminDeptosAction()
    {
        return $this->render('innobisBundle:Default:admin_deptos.html.twig', array(
            "deptos"=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
            "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll()
            )
        );
    }
    public function adminExcelAction()
    {
        return $this->render('innobisBundle:Default:admin_excel.html.twig', 
            array("reclamos"=>$this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll())
        );
    }
    public function adminNewClientAction()
    {
        return $this->render('innobisBundle:Default:admin_new_client.html.twig', array(
            'form'=>$this->newClientCreateForm(new Clientes())->createView(),
            'viviendas'=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll()
            )
        );
    }
    public function adminObservationAction($id)
    {      
        $update = $this->getDoctrine()->getRepository('innobisBundle:Reclamos')->find($id);
        $form = $this->createForm(new SolutionType(), $update);
        $form->handleRequest($this->getRequest());

        if ($form->isSubmitted() and $form->isValid())
        {
                $em = $this->getDoctrine()->getManager();
                $em->persist($update);
                $em->flush();

                $this->addFlash('mensaje','Los cambios han sido guardados');
                return $this->render('innobisBundle:Default:admin_observations.html.twig', 
                    array("reclamos"=>$this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll())
                );
        }

        return $this->render('innobisBundle:Default:admin_observation.html.twig', 
            array("id"=>$id, "form" => $form->createView(),
                "reclamos"=>$this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll(), 
                "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll() 
            )
        );
    }
    public function adminObservationsAction()
    {
        return $this->render('innobisBundle:Default:admin_observations.html.twig', 
            array("reclamos"=>$this->getDoctrine()->getRepository("innobisBundle:Reclamos")->findAll())
        );
    }
    public function adminSignupAction()
    {
        return $this->render('innobisBundle:Default:admin_signup.html.twig', 
            array('form'=>$this->createCreateForm(new Users())->createView())
        );
    }
    public function adminToAsignAction($id)
    {
        $update = $this->getDoctrine()->getRepository('innobisBundle:Viviendas')->find($id);
        $form = $this->createForm(new AsignarType(), $update);
        $form->handleRequest($this->getRequest());

        if ($form->isSubmitted()) 
        {
            $rut = $form->get('rutDueno')->getData();
            if ($form->isValid() and $this->getDoctrine()->getRepository("innobisBundle:Clientes")->findByRut($rut))
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($update);
                $em->flush();

                $this->addFlash('mensaje','Los cambios han sido guardados');
                return $this->render('innobisBundle:Default:admin_deptos.html.twig', array(
                    "deptos"=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
                    "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll())
                );
            }
        }
        return $this->render('innobisBundle:Default:admin_to_assign.html.twig', array("id"=>$id, 'form'=>$form->createView(), 
            "deptos"=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
            "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll()
            )
        );
    }

    private function createCreateForm(Users $entity) 
    {
        return $this->createForm(new UsersType(), $entity, 
            array( 'action' => $this->generateUrl('innobis_create'), 'method' => 'POST' )
        );
    }
    public function createAction(Request $request)
    {
        $user = new Users();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $password = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoder = $encoder->encodePassword($user, $password);
            $user->setPassword($encoder);

            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('mensaje','El usuario ha sido creado');   
            return $this->redirectToRoute('innobis_admin_list');
        }

       return $this->render('innobisBundle:Default:admin_signup.html.twig', array('form'=>$form->createView()));
    }

    private function newClientCreateForm(Clientes $entity) 
    {
        return $this->createForm(new ClientesType(), $entity, 
            array( 'action' => $this->generateUrl('innobis_new_client'), 'method' => 'POST' )
        );
    }
    public function newClientAction(Request $request)
    {
        $user = new Clientes();
        $form = $this->newClientCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $user->setNombre(strtoupper($form->get('nombre')->getData()));
            $user->setRut($form->get('rut')->getData());
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('mensaje','El cliente ha sido creado');
            return $this->render('innobisBundle:Default:admin_deptos.html.twig', array(
                "deptos"=>$this->getDoctrine()->getRepository("innobisBundle:Viviendas")->findAll(), 
                "clientes"=>$this->getDoctrine()->getRepository("innobisBundle:Clientes")->findAll()
                )
            );
        }
        return $this->render('innobisBundle:Default:admin_clients.html.twig', array('form'=>$form->createView()));
    }
}