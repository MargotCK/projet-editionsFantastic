<?php

namespace App\Entity;

use App\Entity\Commande;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeRepository;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idApiPaiement = null;

    #[ORM\Column]
    private ?int $numeroCommande = null;

    #[ORM\Column(length: 20)]
    private ?string $modePaiement = null;

    #[ORM\Column]
    private ?float $tauxTVA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDeCommande = null;

    #[ORM\Column]
    private ?float $montantTTC = null;

    #[ORM\Column(length: 20)]
    private ?string $statutDeLaCommande = null;

    #[ORM\ManyToMany(targetEntity: Livre::class, mappedBy: 'Commande')]
    private Collection $livres;

    public function __construct()
    {
        $this->livres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdApiPaiement(): ?int
    {
        return $this->idApiPaiement;
    }

    public function setIdApiPaiement(int $idApiPaiement): static
    {
        $this->idApiPaiement = $idApiPaiement;

        return $this;
    }

    public function getNumeroCommande(): ?int
    {
        return $this->numeroCommande;
    }

    public function setNumeroCommande(int $numeroCommande): static
    {
        $this->numeroCommande = $numeroCommande;

        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->modePaiement;
    }

    public function setModePaiement(string $modePaiement): static
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    public function getTauxTVA(): ?float
    {
        return $this->tauxTVA;
    }

    public function setTauxTVA(float $tauxTVA): static
    {
        $this->tauxTVA = $tauxTVA;

        return $this;
    }

    public function getDateDeCommande(): ?\DateTimeInterface
    {
        return $this->dateDeCommande;
    }

    public function setDateDeCommande(\DateTimeInterface $dateDeCommande): static
    {
        $this->dateDeCommande = $dateDeCommande;

        return $this;
    }

    public function getMontantTTC(): ?float
    {
        return $this->montantTTC;
    }

    public function setMontantTTC(float $montantTTC): static
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    public function getStatutDeLaCommande(): ?string
    {
        return $this->statutDeLaCommande;
    }

    public function setStatutDeLaCommande(string $statutDeLaCommande): static
    {
        $this->statutDeLaCommande = $statutDeLaCommande;

        return $this;
    }

    /**
     * @return Collection<int, Livre>
     */
    public function getLivres(): Collection
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): static
    {
        if (!$this->livres->contains($livre)) {
            $this->livres->add($livre);
            $livre->addCommande($this);
        }

        return $this;
    }

    public function removeLivre(Livre $livre): static
    {
        if ($this->livres->removeElement($livre)) {
            $livre->removeCommande($this);
        }

        return $this;
    }
}
