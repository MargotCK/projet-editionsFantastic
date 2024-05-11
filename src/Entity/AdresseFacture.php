<?php

namespace App\Entity;

use App\Repository\AdresseFactureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseFactureRepository::class)]
class AdresseFacture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $rueFacture = null;

    #[ORM\Column(length: 50)]
    private ?string $villeFacture = null;

    #[ORM\Column]
    private ?int $codePostaleFacture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRueFacture(): ?string
    {
        return $this->rueFacture;
    }

    public function setRueFacture(string $rueFacture): static
    {
        $this->rueFacture = $rueFacture;

        return $this;
    }

    public function getVilleFacture(): ?string
    {
        return $this->villeFacture;
    }

    public function setVilleFacture(string $villeFacture): static
    {
        $this->villeFacture = $villeFacture;

        return $this;
    }

    public function getCodePostaleFacture(): ?int
    {
        return $this->codePostaleFacture;
    }

    public function setCodePostaleFacture(int $codePostaleFacture): static
    {
        $this->codePostaleFacture = $codePostaleFacture;

        return $this;
    }
}
