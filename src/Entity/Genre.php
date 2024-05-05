<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieGenre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieGenre(): ?string
    {
        return $this->categorieGenre;
    }

    public function setCategorieGenre(string $categorieGenre): static
    {
        $this->categorieGenre = $categorieGenre;

        return $this;
    }
}