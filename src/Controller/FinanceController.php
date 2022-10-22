<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FinanceController extends AbstractController
{
    #[Route('/finance/depences', name: 'app_finance_depences')]
    public function index(): Response
    {
        return $this->render('finance/depences.html.twig', [
            'controller_name' => 'FinanceController',
        ]);
    }

    #[Route('/finance/achats', name: 'app_finance_achats')]
    public function achats(): Response
    {
        return $this->render('finance/achats.html.twig', [
            'controller_name' => 'FinanceController',
        ]);
    }
}
