<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @Route("/classroom", name="classroom")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    /**
     * @Route ("/addclassroom",name="addclassroom")
     */

    public function addclassroom(Request $request)
    {
        $classroom = new Classroom();
        $form = $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request);
        if ( $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute("listclassroom");
        }
        return $this->render('classroom/add.html.twig', array("formclassroom"=>$form->createView()));
    }

    /**
     * @Route ("/listclassroom",name="listclassroom")
     */
    public  function listclassroom(){


        $classroom=$this->getDoctrine()->getRepository(Classroom::class)->findAll();
        return $this->render("classroom/listclassroom.html.twig",array('classrooms'=>$classroom));
    }
}
