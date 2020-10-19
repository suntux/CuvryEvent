<?php

namespace App\Entity;

use App\Repository\StructuresMembresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StructuresMembresRepository::class)
 */
class StructuresMembres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membres;

    /**
     * @ORM\OneToOne(targetEntity=Structures::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Structures;

    /**
     * @ORM\OneToOne(targetEntity=TypeMembres::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $TypeMembres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMembres(): ?Membres
    {
        return $this->Membres;
    }

    public function setMembres(Membres $Membres): self
    {
        $this->Membres = $Membres;

        return $this;
    }

    public function getStructures(): ?Structures
    {
        return $this->Structures;
    }

    public function setStructures(Structures $Structures): self
    {
        $this->Structures = $Structures;

        return $this;
    }

    public function getTypeMembres(): ?TypeMembres
    {
        return $this->TypeMembres;
    }

    public function setTypeMembres(TypeMembres $TypeMembres): self
    {
        $this->TypeMembres = $TypeMembres;

        return $this;
    }
}
