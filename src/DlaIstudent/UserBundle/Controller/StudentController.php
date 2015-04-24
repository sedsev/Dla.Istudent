<?php

namespace DlaIstudent\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlaIstudent\UserBundle\Entity\Student;
use DlaIstudent\UserBundle\Form\StudentType;

class StudentController extends Controller
{
    public function registerStudentAction()
    {
        $student = new Student();
        $form = $this->createForm(new StudentType(), $student);
        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($student);
                $em->flush();
                return $this->render('DlaIstudentUserBundle:Student:viewStudent.html.twig', array('student' => $student));
            }
        }
        return $this->render('DlaIstudentUserBundle:Student:registerStudent.html.twig', array('form' => $form->createView()));
    }
}
