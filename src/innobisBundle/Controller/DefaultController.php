<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Users;
use innobisBundle\Form\UsersType;

class DefaultController extends Controller
{
	public function indexAction()
    {
        $auth = $this->get('security.authentication_utils');
        $error = $auth->getLastAuthenticationError();
        $lastUsername = $auth->getLastUsername();

        return $this->render('innobisBundle:Default:index.html.twig', array('last_username'=>$lastUsername,'error'=>$error));
    }
 	public function usersAction()
    {
    	$users = $this->getDoctrine()->getRepository("innobisBundle:Users")->findAll();
    	return $this->render('innobisBundle:Default:users.html.twig', array("users"=>$users));
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
}