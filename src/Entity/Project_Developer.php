<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project_Developer
{


    /**
     * @ORM\Id()
     * @ORM\Column(type="int")
     */

    private $project_id;

    /**
     * @ORM\Column(type="int")
     */

    private $developer_id;


    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getDeveloperId()
    {
        return $this->developer_id;
    }

    /**
     * @param mixed $developer_id
     */
    public function setDeveloperId($developer_id): void
    {
        $this->developer_id = $developer_id;
    }




}
