<?php

namespace App\Entity;

use App\Repository\MembresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MembresRepository::class)
 */
class Membres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Is_majeur;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Mail;

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     */
    private $Tuteur_1;

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     */
    private $Tuteur_2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getIsMajeur(): ?bool
    {
        return $this->Is_majeur;
    }

    public function setIsMajeur(bool $Is_majeur): self
    {
        $this->Is_majeur = $Is_majeur;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(?string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(?string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getTuteur1(): ?self
    {
        return $this->Tuteur_1;
    }

    public function setTuteur1(?self $Tuteur_1): self
    {
        $this->Tuteur_1 = $Tuteur_1;

        return $this;
    }

    public function getTuteur2(): ?self
    {
        return $this->Tuteur_2;
    }

    public function setTuteur2(?self $Tuteur_2): self
    {
        $this->Tuteur_2 = $Tuteur_2;

        return $this;
    }

}
