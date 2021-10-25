<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response("I love you");
    }

    /**
     * @Route("/questions/{slug}")
     */

    public function show($slug) {
        return new Response(sprintf(
            "Funture starts gere '%s'!",
            ucwords(str_replace("-"," ", $slug))
        ));
    }
}
