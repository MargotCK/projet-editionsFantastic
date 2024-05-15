<?php

namespace App\Entity;

use App\Repository\AgeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgeRepository::class)]
class Age
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $tranche = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTranche(): ?string
    {
        return $this->tranche;
    }

    public function setTranche(string $tranche): static
    {
        $this->tranche = $tranche;

        return $this;
    }
}
