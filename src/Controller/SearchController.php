<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employee;
use App\Entity\Pack;
use App\Form\SearchType;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        $empleado = new Employee();
     //   $num = $empleado->setId(2);
     //   var_dump($num);
     //   die;
        $empleado->setName('Luis');
        $empleado->setLatitude(41.31000);
        $empleado->setLongitude(0.90000);

        return $this->render('search/index.html.twig', [
            'employe' => $empleado,
        ]);
    }

}
