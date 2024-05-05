<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?int $isbn = null;

    #[ORM\Column]
    private ?float $prixUnitaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDePublication = null;

    #[ORM\Column(nullable: true)]
    private ?float $quantiteStockLivre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resumeLivre = null;

    #[ORM\Column(nullable: true)]
    private ?int $format = null;

    #[ORM\Column]
    private ?int $nbPage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getIsbn(): ?int
    {
        return $this->isbn;
    }

    public function setIsbn(int $isbn): static
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(float $prixUnitaire): static
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    public function getDateDePublication(): ?\DateTimeInterface
    {
        return $this->dateDePublication;
    }

    public function setDateDePublication(\DateTimeInterface $dateDePublication): static
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }

    public function getQuantiteStockLivre(): ?float
    {
        return $this->quantiteStockLivre;
    }

    public function setQuantiteStockLivre(?float $quantiteStockLivre): static
    {
        $this->quantiteStockLivre = $quantiteStockLivre;

        return $this;
    }

    public function getResumeLivre(): ?string
    {
        return $this->resumeLivre;
    }

    public function setResumeLivre(?string $resumeLivre): static
    {
        $this->resumeLivre = $resumeLivre;

        return $this;
    }

    public function getFormat(): ?int
    {
        return $this->format;
    }

    public function setFormat(?int $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getNbPage(): ?int
    {
        return $this->nbPage;
    }

    public function setNbPage(int $nbPage): static
    {
        $this->nbPage = $nbPage;

        return $this;
    }
}
