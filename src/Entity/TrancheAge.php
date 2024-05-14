<?php

namespace App\Entity;

use App\Entity\TrancheAge;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TrancheAgeRepository;

#[ORM\Entity(repositoryClass: TrancheAgeRepository::class)]
class TrancheAge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $categorieTrancheAge = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieTrancheAge(): ?int
    {
        return $this->categorieTrancheAge;
    }

    public function setCategorieTrancheAge(int $categorieTrancheAge): static
    {
        $this->categorieTrancheAge = $categorieTrancheAge;

        return $this;
    }
}
