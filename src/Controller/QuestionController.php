<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}")
     */

    public function show($slug) {

        $slug = 'opal is the greatest jewel';

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace("-"," ", $slug))

        ]);

    }
}
