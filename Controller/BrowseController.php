<?php declare(strict_types=1);

/**
 * media-maestro-bundle - All rights reserved
 */
namespace Martin1982\MediaMaestroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BrowseController
 */
class BrowseController extends AbstractController
{
    public function browse(): Response
    {
        return new Response('Browse');
    }
}
