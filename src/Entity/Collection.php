<?php

namespace App\Entity;

use App\Entity\Collection;
use Doctrine\Common\Collections\ArrayCollection;
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

    #[ORM\OneToMany(mappedBy: 'Collection', targetEntity: Livre::class)]
    private \Doctrine\Common\Collections\Collection $livres;

    public function __construct()
    {
        $this->livres = new ArrayCollection();
    }

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

    /**
     * @return \Doctrine\Common\Collections\Collection<int, Livre>
     */
    public function getLivres(): \Doctrine\Common\Collections\Collection
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): static
    {
        if (!$this->livres->contains($livre)) {
            $this->livres->add($livre);
            $livre->setCollection($this);
        }

        return $this;
    }

    public function removeLivre(Livre $livre): static
    {
        if ($this->livres->removeElement($livre)) {
            // set the owning side to null (unless already changed)
            if ($livre->getCollection() === $this) {
                $livre->setCollection(null);
            }
        }

        return $this;
    }
}
