<?php

namespace App\Controller;

use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route ("deleteListStudent/{id}",name="deleteListStudent")
     */
    public function deleteListStudent($id){
        $etudient = $this->getDoctrine()->getRepository(Student::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($etudient);
        $em->flush();
        return $this->redirectToRoute("liststudent");
    }

}
