<?php declare(strict_types=1);

/**
 * media-maestro-bundle - All rights reserved
 */
namespace Martin1982\MediaMaestroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PublishController
 */
class PublishController extends AbstractController
{
    public function publish(): Response
    {
        return new Response('Publish');
    }
}
