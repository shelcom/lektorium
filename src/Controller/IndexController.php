<?php

namespace App\Controller;

use App\Services\IndexService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends Controller
{
    /**
     * @Route("/")
     */


        public function index(IndexService $indexService)
    {
        
        $carbon = $indexService->carbon();

        
        return new Response(
            "<html><body>$carbon</body></html>"
        );
    }




}