<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Developer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeveloperController extends AbstractController
{
    /**
     * @Route("/projects/{id}", name="developer")
     */
    public function showProjects($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Developer::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        return new Response('Check out this great product: ' . $product->getName());
    }
}
