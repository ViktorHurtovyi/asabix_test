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
     */
    public function showProject($id)
    {
        $project = $this->getDoctrine()->getRepository(Project::class)->find($id);

        if (!$project) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }
        return new Response('Project name is: ' . $project->getName());
    }
}
