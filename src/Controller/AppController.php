<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/quizz", name="quizz")
     */
    public function getQuizz()
    {
				$quizz = $this->getDoctrine()
					->getRepository(Quiz::class)
					->findAll();

        return $this->render('app/quizz.html.twig', [
            'quizz' => $quizz,
        ]);
    }

		/**
     * @Route("/students", name="students")
     */
    public function listStudents()
    {
				$students = $this->getDoctrine()
					->getRepository(Student::class)
					->findAll();

        return $this->render('app/students.html.twig', [
            'students' => $students,
        ]);
    }
}
