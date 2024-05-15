<?php

namespace App\Entity;

use App\Entity\Livre;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivreRepository;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $titre = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $couv1 = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $couv4 = null;

    #[ORM\Column(length:13, unique:true)]
    private ?string $isbn = null;

    #[ORM\Column]
    private ?float $prixUnitaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDePublication = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteStockLivre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resumeLivre = null;

    #[ORM\Column(length:15, nullable: true)]
    private ?string $format = null;

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

    
    public function getCouv1Livre(): ?string
    {
        return $this->couv1Livre;
    }

    public function setCouv1Livre(?string $couv1Livre): static
    {
        $this->couv1Livre = $couv1Livre;

        return $this;
    }

    public function getCouv4Livre(): ?string
    {
        return $this->couv4Livre;
    }

    public function getCouv1(): ?string
    {
        return $this->couv1;
    }

    public function setCouv1(?string $couv1): static
    {
        $this->couv1 = $couv1;

        return $this;
    }

    public function getCouv4(): ?string
    {
        return $this->couv4;
    }

    public function setCouv4(?string $couv4): static
    {
        $this->couv4 = $couv4;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): static
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

    public function getQuantiteStockLivre(): ?int
    {
        return $this->quantiteStockLivre;
    }

    public function setQuantiteStockLivre(?int $quantiteStockLivre): static
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

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): static
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
