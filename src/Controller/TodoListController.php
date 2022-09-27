<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends AbstractController
{
    #[Route('/', name: 'acceuil_index')]

    public function index(): Response
    {
        $todosList = [' Grande Muraille de Chine', 'Boire du champagne dans une limousine', 'Sauter en parachute'];

        return $this->render('todo_list/index.html.twig', compact("todosList"));
    /*
        return $this->render('todo_list/index.html.twig', [
            'controller_name' => 'TodoListController',
        ]);
    */
    }
}
