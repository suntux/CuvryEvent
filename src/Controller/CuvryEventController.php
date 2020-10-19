<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CuvryEventController extends AbstractController
{
    /**
     * @Route("/", name="cuvry_event")
     */
    public function index()
    {
        return $this->render('cuvry_event/index.html.twig', [
            'controller_name' => 'CuvryEventController',
        ]);
    }
}
