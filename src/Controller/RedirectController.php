<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function redirectRoute(): Response
    {
        return $this->redirectToRoute('app_home_index');
    }
}
