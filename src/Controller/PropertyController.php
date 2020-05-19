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
        return $this->render('property/index.html.twig', 
        ['current_menu' => 'properties']);
    }

    /**
     * @Route("/view", name="property.location")
     * @return Response
     */
    public function location() : Response {
        return $this->render('property/location.html.twig', 
        ['current_menu' => 'locations']);
    }
}



