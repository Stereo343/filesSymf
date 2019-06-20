<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 19/06/2019
 * Time: 16:20
 */

declare(strict_types = 1);

namespace App\Controller;

use App\Entity\DailyQuote;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/daily-quote", methods={"GET"}, name="app_daily_quote_")
 */
class DailyQuoteController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response
    {
        $dailyQuotes = $this->getDoctrine()->getManager()->getRepository(DailyQuote::class)->findAll();
        return $this->render("daily_quote/index.html.twig",
            [
                "dailyQuotes" => $dailyQuotes
            ]
        );
    }

    /**
     * @Route("/{dailyQuote<\d+>}", methods={"GET"}, name="show")
     */
    public function show(DailyQuote $dailyQuote): Response
    {
        return $this->render("daily_quote/show.html.twig",
            [
                "dailyQuote" => $dailyQuote
            ]
        );
    }

    /**
     * @Route("/random", methods={"GET"}, name="random")
     */
    public function showRandom: Response
    {

    }
}