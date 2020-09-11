<?php

namespace App\Controller;

use App\Repository\AdvertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(AdvertRepository $advertRepository)
    {
        $adverts = $advertRepository->findAll();
        return $this->render('app/index.html.twig', [
                'adverts' => $adverts
            ]);
    }
}
