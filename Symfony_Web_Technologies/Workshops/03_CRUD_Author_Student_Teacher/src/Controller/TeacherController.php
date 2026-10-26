<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher/{name}", name="teacher_show")
     */
    public function showTeacher($name): Response
    {
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/teacher/goToIndex", name="teacher_go_to_index")
     */
    public function goToIndex(): RedirectResponse
    {
        return $this->redirectToRoute('student_index');
    }
}