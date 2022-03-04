<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }

    /**
     * @Route ("/listStudent",name="liststudent")
     */
    public  function listStudent(){


        $studient=$this->getDoctrine()->getRepository(Student::class)->findAll();
        return $this->render("student/listStudent.html.twig",array('etudiants'=>$studient));
    }

    /**
     * @param $id
     * @Route ("/deleteListStudent/{id}",name="deleteListStudent")
     */
    public function deleteListStudent($id){
        $etudient = $this->getDoctrine()->getRepository(Student::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($etudient);
        $em->flush();
        return $this->redirectToRoute("liststudent");
    }

    /**
     * @Route ("/addStudent",name="addstudent")
     */
public function addStudent(Request $request){

    $student = new Student();
    $form = $this->createForm(StudentType::class,$student);
    $form->handleRequest($request);
    if ( $form->isSubmitted()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();
        return $this->redirectToRoute("liststudent");
    }
        return $this->render("student/add.html.twig", array("formStudent"=>$form->createView()));
}
    /**
     * @Route ("/updateStudent/{id}",name="updateStudent")
     */
    public function updateStudent(Request $request, $id){
        $student = $this->getDoctrine()->getRepository(Student::class)->find($id);
        $form = $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if ( $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("liststudent");
        }
        return $this->render("student/update.html.twig", array("formStudent"=>$form->createView()));
    }


}
