<?php

namespace App\Entity;

use App\Entity\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CollectionRepository;

#[ORM\Entity(repositoryClass: CollectionRepository::class)]
class Collection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $categorieCollection = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieCollection(): ?string
    {
        return $this->categorieCollection;
    }

    public function setCategorieCollection(?string $categorieCollection): static
    {
        $this->categorieCollection = $categorieCollection;

        return $this;
    }
}
