<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DeveloperRepository")
 */
class Developer
{

    /**
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="developers")
     */
    private $projects;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * @param mixed $projects
     */
    public function setProjects($projects): void
    {
        $this->projects = $projects;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param mixed string
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}
