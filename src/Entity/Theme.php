<?php

namespace App\Entity;

use App\Repository\ThemeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ThemeRepository::class)]
class Theme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $categorieTheme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieTheme(): ?string
    {
        return $this->categorieTheme;
    }

    public function setCategorieTheme(string $categorieTheme): static
    {
        $this->categorieTheme = $categorieTheme;

        return $this;
    }
}
