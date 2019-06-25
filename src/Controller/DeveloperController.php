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
    public function showDeveloper($id = 0)
    {
        $id = preg_replace("/[^0-9]/", '', $id);
        $developer = $this->getDoctrine()
            ->getRepository(Developer::class)
            ->findAllProjectById($id);

        $str = '';
        foreach ($developer as $dev) {
            $str .= '<br> - ' . $dev['name'];
        }

        return new Response('Developers name: ' . $str);
    }
}
