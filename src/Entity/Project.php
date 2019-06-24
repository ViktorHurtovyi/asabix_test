<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{

    /**
     * @ORM\ManyToMany(targetEntity="Developer", inversedBy="projects")
     */
    private $developers;

    /**
     * @return mixed
     */
    public function getDevelopers()
    {
        return $this->developers;
    }

    /**
     * @param mixed $developers
     */
    public function setDevelopers($developers): void
    {
        $this->developers = $developers;
    }


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
