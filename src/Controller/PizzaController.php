<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PizzaController extends AbstractController
{
    /**
     * @Route("/pizza")
     */

    public function random(): Response
    {
        $pizzas = [
            "Kip",
            "Vis",
            "Vega"
        ];

        $pizzatexten =[
            "Kip",
            "Vis",
            "Vega"
            ];

        $pizzaimage = [
            "https://images.newyorkpizza.nl/Products/Original/Hete_Kip_pizza-7485.png",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZPGb1sJ5W9C21cKz7llspurW5x_lb0f7Fhw&usqp=CAU",
            "https://i.redd.it/t7jlrf6snev41.jpg"
        ];

        return $this->render('pizza/pizza.html.twig',[
            'pizzas' => $pizzas,
            'pizzatexten' => $pizzatexten,
            'pizzaimage' => $pizzaimage

        ]);
    }
}