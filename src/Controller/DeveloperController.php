<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Developer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeveloperController extends AbstractController
{
    /**
     * @Route("/developer/{id}", name="developer")
     * @param $id
     * @return Response
     */
    public function showDeveloper($id)
    {
        $developer = $this->getDoctrine()
            ->getRepository(Developer::class)
            ->find($id);

        if (!$developer) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        return new Response('Check out this great product: ' . $developer->getName());
    }
}
