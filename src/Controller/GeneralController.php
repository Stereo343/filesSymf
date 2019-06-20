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

class GeneralController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="app_home")
     */
    public function showIndex(): Response
    {
        return $this->render("general/general.html.twig",
            [
                "lastname" => "machin",
                "firstname" => "jacques"
            ]
        );
    }
}