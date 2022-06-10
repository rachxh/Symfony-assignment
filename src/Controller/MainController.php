<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        $berries = [
            'Blueberry' => 'WHERE TO FIND: everywhere',
            'Cloudberry' => 'WHERE TO FIND: bogs and mountainous wetlands in northern Scandinavia',
            'Cranberry' => 'WHERE TO FIND: along forest edges, clearings',
            'Crowberrys' => 'WHERE TO FIND: Everywhere',
            'Lingonberry' => 'WHERE TO FIND: Everywhere',
            'Raspberry' => 'WHERE TO FIND: dry, rocky places, whole Scandinavia'
        ]; 

        return $this->render('main/index.html.twig', [
            'berries' => $berries
        ]);
    }

    #[Route('/berries', name: 'app_berries')]
    public function about(): Response
    {
        return $this->render('main/berries.html.twig');
    }    
    
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }

}
