<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project/{id}", name="project")
     * @param $id
     * @return Response
     */
    public function showProject($id=0)
    {
        $id = preg_replace("/[^0-9]/", '', $id);
        $developer = $this->getDoctrine()
            ->getRepository(Project::class)
            ->findAllDeveloperById($id);

        $str = '';

        foreach ($developer as $dev){
            $str .= '<br> - '.$dev['name'];
        }

        return new Response('Projects name: ' . $str);
    }
}
