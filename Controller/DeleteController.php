<?php declare(strict_types=1);

/**
 * media-maestro-bundle - All rights reserved
 */
namespace Martin1982\MediaMaestroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DeleteController
 */
class DeleteController extends AbstractController
{
    public function delete(): Response
    {
        return new Response('Delete');
    }
}
