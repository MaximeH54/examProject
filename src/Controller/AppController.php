<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\Student;
use App\Entity\QuizzId;
use App\Entity\StudentId;
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
     * @Route("/quizz/{quizId}/students", name="students")
     */
		 public function listStudents($quizId)
     {
 				$quiz = $this->getDoctrine()
 					->getRepository(Quiz::class)
 					->find($quizId);

 				$students = $this->getDoctrine()
 					->getRepository(Student::class)
 					->findAll();

         return $this->render('app/students.html.twig', [
 						'quiz' => $quiz,
             'students' => $students,
         ]);
     }

		 /**
      * @Route("/quizz/{quizId}/students/{$studentById}", name="criterias")
      */
 		 public function getStudentsId($quizId, $studentById)
      {
					$quiz = $this->getDoctrine()
							->getRepository(Quiz::class)
							->find($quizId);

  				$studentsId = $this->getDoctrine()
  					->getRepository(StudentId::class)
  					->find($studentById);

          return $this->render('app/criterias.html.twig', [
              'studentsId' => $studentsId,
          ]);
      }
	}
