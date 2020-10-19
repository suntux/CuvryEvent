<?php

namespace App\Entity;

use App\Repository\SectionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SectionsRepository::class)
 */
class Sections
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
     * @ORM\Column(type="string", length=10)
     */
    private $Code;

    /**
     * @ORM\ManyToOne(targetEntity=Structures::class, inversedBy="sections")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Structures;

    /**
     * @ORM\OneToMany(targetEntity=Seances::class, mappedBy="Sections", orphanRemoval=true)
     */
    private $seances;

    public function __construct()
    {
        $this->seances = new ArrayCollection();
    }

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

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(string $Code): self
    {
        $this->Code = $Code;

        return $this;
    }

    public function getStructures(): ?Structures
    {
        return $this->Structures;
    }

    public function setStructures(?Structures $Structures): self
    {
        $this->Structures = $Structures;

        return $this;
    }

    /**
     * @return Collection|Seances[]
     */
    public function getSeances(): Collection
    {
        return $this->seances;
    }

    public function addSeance(Seances $seance): self
    {
        if (!$this->seances->contains($seance)) {
            $this->seances[] = $seance;
            $seance->setSections($this);
        }

        return $this;
    }

    public function removeSeance(Seances $seance): self
    {
        if ($this->seances->contains($seance)) {
            $this->seances->removeElement($seance);
            // set the owning side to null (unless already changed)
            if ($seance->getSections() === $this) {
                $seance->setSections(null);
            }
        }

        return $this;
    }
}
