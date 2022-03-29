<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends BaseController
{
	/**
	 * @Route("/", name="home")
	 * @return Response
	 */
	public function indexAction(){

		return $this->render('home/index.html.twig');
	}
	/**
	 * @Route("/book", name="book")
	 * @return Response
	 */
	public function bookAction(){

		return $this->render('home/book.html.twig');
	}

}