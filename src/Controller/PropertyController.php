<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController{

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index() : Response {
        return $this->render('property/index.html.twig', ['current_menu' => 'properties']);
    }

    /**
     * @Route("/view", name="property.view")
     * @return Response
     */
    public function view() : Response {
        return $this->render('property/view.html.twig', ['current_menu' => 'properties']);
    }
}



