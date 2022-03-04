<?php

namespace App\Entity;

use App\Repository\ClassroomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClassroomRepository::class)
 */
class Classroom
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_classroom;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNomClassroom(): ?string
    {
        return $this->nom_classroom;
    }

    public function setNomClassroom(string $nom_classroom): self
    {
        $this->nom_classroom = $nom_classroom;

        return $this;
    }

}
