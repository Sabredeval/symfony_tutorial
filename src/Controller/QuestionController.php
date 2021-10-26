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
        return new Response("I love you");
    }

    /**
     * @Route("/questions/{opal}")
     */

    public function show($opal) {

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace("-"," ", $opal))

        ]);

    }
}
