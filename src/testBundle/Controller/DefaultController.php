<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request


use testBundle\Entity\Donataire;
use testBundle\Form\DonataireType;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('@test/Default/index.html.twig',array('nom'=>$name));
    }
    public function addAction(Request $req)
    {
        $d = new donataire();
        $form = $this->createForm(DonataireType::class,$d);
        if($form->handleRequest($req)->isValid()){

            $em= $this->getDoctrine()->getManager();
            $em->persist($d);
            $em->flush();
            return $this->redirectToRoote('index');
        }
        /* $d ->setNom('fouzia');
        $d ->setEmail('test@gmail.com');
        $d ->setTel('+212618935227');
        $em= $this->getDoctrine()->getManager();
        $em->persist($d);
        $em->flush();*/
        return $this->render('@test/Default/form.html.twig', array('f'=>$form->createView()));
    }
    public function viewDonataireAction()
    {
        $em= $this->getDoctrine()->getManager();
        $rep=$em->getRepository('testBundle:Donataire');
        $donataires= $rep->findAll();
        return $this->render('@test/Default/home.html.twig',array('donataires'=>$donataires));
    }
    public function updateAction()
    {
        $em= $this->getDoctrine()->getManager();
        $rep=$em->getRepository('testBundle:Donataire');
        $donataire= $rep->find(2);
        $donataire->setNom('test');
        $em->flush();   
exit;
        return $this->render('@test/Default/home.html.twig',array('donataires'=>$donataire));
    }
}
