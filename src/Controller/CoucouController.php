<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 18/06/2019
 * Time: 10:12
 */

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoucouController extends AbstractController
{
    /**
     * @Route("/coucou-1", methods={"GET"}, name="app_coucou_1")
     */
    public function coucou1(): Response
    {
        return new Response("<html><body>Fus Roh Da le CESi</body></html>");
    }

    /**
     * @Route("/coucou-2", methods={"GET"}, name="app_coucou_2")
     */
    public function coucou2(): Response
    {
        return $this->render("coucou/coucou.html.twig",
            [
                "name" => "machine",
                "surname" => "jacques"
            ]
        );
    }
    /**
     * @Route("/coucou-3", methods={"GET"}, name="app_coucou_3")
     */
    public function coucou3(): Response
    {
        $test = [
            'test', 'tast'
        ];

        dd($test);

        return $this->render("coucou/coucou.html.twig",
            [
                "name" => "machine",
                "surname" => "jacques"
            ]
        );
    }
}