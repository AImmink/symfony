<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController
{
    /**
     * @Route("/")
     */
    
    public function number(): Response
    {
        $pizzas = [
            "PIZZA PEPPERONI DELUXE",
            "PIZZA PEPPERONI PARTY",
            "PIZZA VEGGI CHICKEN SUPREME",
            "PIZZA FRESH 'N TASTY",
            "PIZZA VEGERONI",
            "PIZZA MARGARITHA",
            "PIZZA HAM",
            "PIZZA FUNGHI"
        ];



        return new Response(
            '<html><body>Lucky pizza:'.$pizzas[array_rand($pizzas)].'</body></html>'
        );
    }
}