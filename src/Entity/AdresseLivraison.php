<?php

namespace App\Entity;

use App\Repository\AdresseLivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseLivraisonRepository::class)]
class AdresseLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $rueLivraison = null;

    #[ORM\Column(length: 50)]
    private ?string $villeLivraison = null;

    #[ORM\Column]
    private ?int $codePostaleLivraison = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentairePourLaLivraison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRueLivraison(): ?string
    {
        return $this->rueLivraison;
    }

    public function setRueLivraison(string $rueLivraison): static
    {
        $this->rueLivraison = $rueLivraison;

        return $this;
    }

    public function getVilleLivraison(): ?string
    {
        return $this->villeLivraison;
    }

    public function setVilleLivraison(string $villeLivraison): static
    {
        $this->villeLivraison = $villeLivraison;

        return $this;
    }

    public function getCodePostaleLivraison(): ?int
    {
        return $this->codePostaleLivraison;
    }

    public function setCodePostaleLivraison(int $codePostaleLivraison): static
    {
        $this->codePostaleLivraison = $codePostaleLivraison;

        return $this;
    }

    public function getCommentairePourLaLivraison(): ?string
    {
        return $this->commentairePourLaLivraison;
    }

    public function setCommentairePourLaLivraison(?string $commentairePourLaLivraison): static
    {
        $this->commentairePourLaLivraison = $commentairePourLaLivraison;

        return $this;
    }
}
