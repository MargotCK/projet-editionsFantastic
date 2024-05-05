<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomUser = null;

    #[ORM\Column(length: 255)]
    private ?string $nomUser = null;

    #[ORM\Column(length: 8)]
    private ?string $passwordUser = null;

    #[ORM\Column]
    private ?int $telephoneUser = null;

    #[ORM\Column(length: 255)]
    private ?string $emailUser = null;

    #[ORM\Column(length: 255)]
    private ?string $roleUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): static
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): static
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): static
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getTelephoneUser(): ?int
    {
        return $this->telephoneUser;
    }

    public function setTelephoneUser(int $telephoneUser): static
    {
        $this->telephoneUser = $telephoneUser;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): static
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->roleUser;
    }

    public function setRoleUser(string $roleUser): static
    {
        $this->roleUser = $roleUser;

        return $this;
    }
}
