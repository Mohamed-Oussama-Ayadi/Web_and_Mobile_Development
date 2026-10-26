<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{ 
      /**
    * @Route("/student",name="student_index")
    */
    public function index(): Response
    {   $message="Bonjour mes etudiants";
        return $this->render('student/index.html.twig', [
            'message' => $message,
        ]);
    }
}
