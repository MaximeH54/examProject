<?php

	namespace App\Controller\UserController;

	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

	class UserController extends AbstractController
	{
		/**
		 * @Route("/")
		 * @Method({"GET", "HEAD"})
		 */
		public function getUser(AuthenticationUtils $authenticationUtils): Response
		{

		}
	}
