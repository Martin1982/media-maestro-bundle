<?php declare(strict_types=1);

/**
 * media-maestro-bundle - All rights reserved
 */
namespace Martin1982\MediaMaestroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DetailController
 */
class DetailController extends AbstractController
{
    public function detail(): Response
    {
        return new Response('Detail');
    }
}
