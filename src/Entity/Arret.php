<?php

namespace App\Entity;

use App\Repository\ArretRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArretRepository::class)]
class Arret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'time')]
    private $heureArrive;

    #[ORM\Column(type: 'time')]
    private $heureDep;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureArrive(): ?\DateTimeInterface
    {
        return $this->heureArrive;
    }

    public function setHeureArrive(\DateTimeInterface $heureArrive): self
    {
        $this->heureArrive = $heureArrive;

        return $this;
    }

    public function getHeureDep(): ?\DateTimeInterface
    {
        return $this->heureDep;
    }

    public function setHeureDep(\DateTimeInterface $heureDep): self
    {
        $this->heureDep = $heureDep;

        return $this;
    }
}
