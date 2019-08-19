<?php declare(strict_types=1);

/**
 * media-maestro-bundle - All rights reserved
 */
namespace Martin1982\MediaMaestroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class EditController
 */
class EditController extends AbstractController
{
    public function edit(): Response
    {
        return new Response('Edit');
    }
}
